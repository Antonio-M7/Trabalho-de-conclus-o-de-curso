<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Fale Conosco</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <a href="index.php"><img src="imagens/LOGO.png" alt="logo"></a>

        <div>
            <nav>
                <a class="botao" href="index.php">Home</a>
                <a class="botao" href="sobre.php">Sobre</a>
                <a class="botao" href="servicos.php">Serviços</a>
                <a class="botao" href="faleconosco.php">Fale Conosco</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="form_fale">
            <section>
                <form action="http://localhost/projetofinal/faleconcluido.php" method="post">
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text"  name="nome" id="nome" placeholder="nome" required>
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="e-mail" required>
                    </div>
                    <div>
                        <label for="text_area">Mensagem</label>
                        <textarea name="text_area" id="text_area" placeholder="mensagem" maxlength="500" rows="10" required></textarea>
                    </div>
                    <div>
                        <input type="submit" id="submit" name="submit" value="Enviar">
                    </div>
                </form>
            </section>
        </div>

        <footer>
            <div class="div_footer">
                <div class="div_footer_p">
                    Av. Ayrton Senna, 2541 - Barra da Tijuca, Rio de Janeiro - RJ, 22775-002
                    Aeroporto de Jacarepaguá, Hangar 8
                    Tel: 0000-0000
                </div>
            </div>

            <div class="div_footer">
                <nav>
                    <a class="instagram_icon" href="#" target="_blank"><img src="imagens/627ba7278d659819b11084f4.png" alt="ícone instagram">
                    </a>
                </nav>
            </div>
        </footer>
    </main>

</body>

</html>