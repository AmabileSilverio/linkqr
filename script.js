const formulario = document.getElementById('linkForm');
const resultado = document.getElementById('resultado');

formulario.addEventListener('submit', async (event) => {
    event.preventDefault();

    const campoLink = document.getElementById('link');
    let linkOriginal = campoLink.value.trim();
    const botao = formulario.querySelector('button[type="submit"]');
    const textoOriginal = botao.innerHTML;

    if (!linkOriginal) {
        return;
    }

    if (!/^https?:\/\//i.test(linkOriginal)) {
        linkOriginal = 'https://' + linkOriginal;
    }

    botao.disabled = true;
    botao.textContent = 'Gerando...';
    resultado.innerHTML = '';

    try {
        const resposta = await fetch('https://spoo.me/api/v1/shorten', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                long_url: linkOriginal
            })
        });

        const dados = await resposta.json();

        if (!resposta.ok || !dados.short_url) {
            const mensagem = dados.detail || dados.message || dados.error || 'Não foi possível encurtar o link.';
            throw new Error(typeof mensagem === 'string' ? mensagem : 'Não foi possível encurtar o link.');
        }

        const linkCurto = dados.short_url;

        resultado.innerHTML = `
            <div class="resultado-card">
                <div class="resultado-link">
                    <span>Link encurtado</span>
                    <div class="resultado-campo">
                        <a href="${linkCurto}" target="_blank" rel="noopener noreferrer">${linkCurto}</a>
                        <button type="button" class="copiar-link">Copiar</button>
                    </div>
                </div>

                <div class="resultado-qr">
                    <div id="qrcode"></div>
                    <button type="button" class="baixar-qr">Baixar QR Code</button>
                </div>
            </div>
        `;

        const areaQr = document.getElementById('qrcode');

        new QRCode(areaQr, {
            text: linkCurto,
            width: 220,
            height: 220,
            correctLevel: QRCode.CorrectLevel.H
        });

        const copiar = resultado.querySelector('.copiar-link');
        copiar.addEventListener('click', async () => {
            try {
                await navigator.clipboard.writeText(linkCurto);
                copiar.textContent = 'Copiado!';
                setTimeout(() => copiar.textContent = 'Copiar', 1500);
            } catch {
                const campoTemporario = document.createElement('textarea');
                campoTemporario.value = linkCurto;
                document.body.appendChild(campoTemporario);
                campoTemporario.select();
                document.execCommand('copy');
                campoTemporario.remove();
                copiar.textContent = 'Copiado!';
                setTimeout(() => copiar.textContent = 'Copiar', 1500);
            }
        });

        const baixar = resultado.querySelector('.baixar-qr');
        baixar.addEventListener('click', () => {
            const canvas = areaQr.querySelector('canvas');
            const imagem = areaQr.querySelector('img');
            const enderecoImagem = canvas ? canvas.toDataURL('image/png') : imagem?.src;

            if (!enderecoImagem) {
                return;
            }

            const download = document.createElement('a');
            download.href = enderecoImagem;
            download.download = 'qrcode.png';
            document.body.appendChild(download);
            download.click();
            download.remove();
        });
    } catch (erro) {
        resultado.innerHTML = `
            <p class="resultado-erro">
                Não foi possível gerar o link pela Spoo.me. Verifique sua conexão com a internet e tente novamente.
            </p>
        `;
        console.error(erro);
    } finally {
        botao.disabled = false;
        botao.innerHTML = textoOriginal;
    }
});
