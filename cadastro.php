<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <title>Cadastro</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="icon/LOGO3.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://www.geradorcpf.com/assets/js/jquery-1.2.6.pack.js"></script>
    <script src="https://www.geradorcpf.com/assets/js/jquery.maskedinput-1.1.4.pack.js"></script>
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
        <div class="form_cadastro">
        
            <section>
                <form action="http://localhost/projetofinal/registro.php" method="post">
                    
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="e-mail" required>
                    </div>

                    <div>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="senha" required maxlength="32" minlength="8" onchange="conferirSenha();">
                        <i class="bi bi-eye" name="open_eye" id="open_eye" onclick="mostrarsenha()"></i>
                    </div>
                    
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" required="required" maxlength="100" placeholder="nome">
                    </div>
                
                    <div>
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" required="required" maxlength="100" placeholder="sobrenome">
                    </div>

                    <div>
                        <label for="nascimento">Data de Nascimento</label>
                        <input type="date" name="nascimento" id="nascimento" required>
                    </div>

                    <div>
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" placeholder="cpf" autocomplete="off" required>
                    </div>
         
                    <div>
                        <label for="cep">CEP</label>
                        <input type="text" name="cep" id="cep" required placeholder="endereço">
                    </div>
                    
                    <div>
                        <label for="endereço">Endereço</label>
                        <input type="text" name="endereço" id="endereço" required placeholder="endereço">
                    </div>
                    
                    <div>
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" id="complemento" required placeholder="complemento">
                    </div>

                    <div>
                        <label for="celular">Celular</label>
                        <input type="text" name="celular" id="celular" placeholder="celular" required>
                    </div>
                    
                    <div>
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo" required>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>

                    <div>
                        <label for="voo">Data do Voo</label>
                        <input type="date" name="voo" id="voo" required>
                    </div>
                    
                    <div>
                        <label for="passageiros">Número de Passageiros</label>
                        <select name="passageiros" id="passageiros" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    
                    <div>
                        <input type="submit" id="submit" name="submit" value="Cadastrar">
                    </div>
                </form>
            </section>
            
            <span class="php_error">
                <?php
                if(isset($_SESSION["msg"])) {
                    echo $_SESSION["msg"];
                    unset($_SESSION["msg"]);
                }
                ?>
            </span>
            
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

<script src="scrip.js/script.js"></script>
<script src="scrip.js/spript2.js"></script>

</body>

</html>