<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>LinkQR</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <header class="header">

        <div class="container nav">

            <!-- LOGO -->
            <a href="#inicio" class="brand" aria-label="LinkQR - Início">

                <span class="brand-icon" aria-hidden="true">
                    ↗
                </span>

                <span>
                    Link<span>QR</span>
                </span>

            </a>


            <!-- MENU -->
            <nav class="menu" aria-label="Navegação principal">

                <a href="#inicio" class="active">
                    Início
                </a>

                <a href="#como-funciona">
                    Como funciona
                </a>

                <a href="#recursos">
                    Recursos
                </a>

                <a href="#sobre">
                    Sobre
                </a>

            </nav>


            <!-- GITHUB -->
            <a
                href="#"
                class="github-btn"
                aria-label="GitHub do projeto"
            >
                GitHub
            </a>

        </div>

    </header>


    <main>


        <!-- HERO -->
        <section class="hero" id="inicio">

            <div class="container hero-content">


                <!-- TEXTO -->
                <div class="hero-text">

                    <p class="eyebrow">
                        LINK + QR CODE EM UM SÓ LUGAR
                    </p>


                    <h1>
                        Encurte seus links
                        <span>e gere QR Codes</span>
                    </h1>


                    <p class="description">
                        Transforme links longos em links curtos e fáceis
                        de compartilhar. Gere o QR Code instantaneamente
                        e compartilhe onde quiser!
                    </p>


                    <!-- BENEFÍCIOS -->
                    <div class="features">

                        <div class="feature">

                            <span aria-hidden="true">
                                ↗
                            </span>

                            <strong>
                                Links curtos
                            </strong>

                        </div>


                        <div class="feature">

                            <span aria-hidden="true">
                                ▦
                            </span>

                            <strong>
                                QR Codes
                            </strong>

                        </div>


                        <div class="feature">

                            <span aria-hidden="true">
                                ϟ
                            </span>

                            <strong>
                                Rápido e fácil
                            </strong>

                        </div>

                    </div>

                </div>


                <!-- ILUSTRAÇÃO -->
                <div
                    class="hero-image"
                    aria-hidden="true"
                >

                    <div class="browser-card">

                        <div class="browser-top">

                            <span></span>
                            <span></span>
                            <span></span>

                        </div>


                        <div class="qr-code">

                            <!-- QR CODE ILUSTRATIVO -->
                            <div class="fake-qr"></div>

                        </div>

                    </div>


                    <div class="floating-icon">
                        ↗
                    </div>

                </div>

            </div>

        </section>



        <!-- GERADOR DE LINK -->
        <section
            class="generator"
            id="como-funciona"
        >

            <div class="container">

                <div class="generator-card">


                    <!-- TÍTULO -->
                    <div class="generator-title">

                        <div
                            class="generator-icon"
                            aria-hidden="true"
                        >
                            ↗
                        </div>


                        <div>

                            <h2>
                                Encurte um link e gere o QR Code
                            </h2>

                            <p>
                                Cole o link que deseja encurtar no campo abaixo.
                            </p>

                        </div>

                    </div>



                    <!-- FORMULÁRIO -->
                    <form
                        class="link-form"
                        action="processar.php"
                        method="POST"
                    >


                        <label for="link">
                            Seu link
                        </label>


                        <div class="input-container">

                            <input
                                type="url"
                                id="link"
                                name="link"
                                placeholder="Ex: https://www.exemplo.com/pagina/muito/grande"
                                autocomplete="url"
                                required
                            >

                            <span
                                class="input-icon"
                                aria-hidden="true"
                            >
                                ↗
                            </span>

                        </div>


                        <!-- BOTÃO -->
                        <button type="submit">

                            <span aria-hidden="true">
                                ↗
                            </span>

                            Encurtar e gerar QR Code

                        </button>


                        <p class="security">

                            <span aria-hidden="true">
                                ♢
                            </span>

                            Seus links são seguros e prontos para serem compartilhados!

                        </p>

                    </form>



                    <!--
                        ÁREA RESERVADA PARA O RESULTADO

                        O back-end poderá preencher esta área
                        com o link encurtado e o QR Code.
                    -->
                    <div
                        id="resultado"
                        class="resultado"
                        aria-live="polite"
                    ></div>


                </div>

            </div>

        </section>



        <!-- RECURSOS -->
        <section
            class="resources"
            id="recursos"
        >

            <div class="container resources-container">


                <!-- RECURSO 1 -->
                <div class="resource">

                    <div
                        class="resource-icon"
                        aria-hidden="true"
                    >
                        ↗
                    </div>


                    <div>

                        <h3>
                            Links curtos
                        </h3>

                        <p>
                            Transforme links longos e complexos
                            em links curtos e amigáveis.
                        </p>

                    </div>

                </div>



                <!-- RECURSO 2 -->
                <div class="resource">

                    <div
                        class="resource-icon"
                        aria-hidden="true"
                    >
                        ▦
                    </div>


                    <div>

                        <h3>
                            QR Code instantâneo
                        </h3>

                        <p>
                            Gere QR Codes automaticamente
                            para seus links encurtados.
                        </p>

                    </div>

                </div>



                <!-- RECURSO 3 -->
                <div class="resource">

                    <div
                        class="resource-icon"
                        aria-hidden="true"
                    >
                        ↗
                    </div>


                    <div>

                        <h3>
                            Fácil de compartilhar
                        </h3>

                        <p>
                            Compartilhe seus links e QR Codes
                            em qualquer lugar!
                        </p>

                    </div>

                </div>

            </div>

        </section>



        <!-- SOBRE -->
        <section
            class="about"
            id="sobre"
        >

            <div class="container">

                <h2>
                    Sobre o LinkQR
                </h2>

                <p>
                    Uma aplicação web desenvolvida para encurtar links
                    e gerar QR Codes de forma simples, rápida e prática.
                </p>

            </div>

        </section>

    </main>



    <!-- RODAPÉ -->
    <footer class="footer">

        <div class="container">

            <p>
                © 2026 LinkQR. Todos os direitos reservados.
            </p>

        </div>

    </footer>


</body>

</html>