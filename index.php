<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cadastro.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <div id="logo">
        <img src="Dado2.png">
        <h1>Dadinho Filmes - Cadastro</h1>
    </div>

    <section id="grid">
        <header>
            <div>
                <form action=" " method="post" id="barrapesquisa">
                    <input type="text" id="pesquisa" placeholder="Digite seu nome ou um apelido">
                </form>
            </div>
        </header>

        <main>
            <div>
                <form action=" " method="post" id="email">
                    <input type="text" id="textoemail" placeholder="Escolha um email">
                </form>
            </div>
        </main>

        <nav>
            <div>
                <form action=" " method="post" id="senha">
                    <input type="text" id="textosenha" placeholder="Crie uma senha">
                </form>
            </div>
        </nav>

        <footer>
            <div>
                <form action=" " method="post" id="confirmasenha">
                    <input type="text" id="textoconfirmasenha" placeholder="Confirme sua senha">
                </form>
            </div>
        </footer>

        <b>
            <div>
            <form id="nascimento">
                <label for="data">Informe a data do seu nascimento:<br></label>
                <input type="date" id="data" name="data">
            </form>
            </div>
        </b>

        <c>
            <div>
                <form id="check">
                    <input type="checkbox" id="termos" name="termos">
                    <label for="termos">Eu aceito os termos e condições de serviço deste site.</label>
                </form>
            </div>

            <div>
                <form id="check2">
                    <input type="checkbox" id="notificacao" name="notificacao">
                    <label for="notificacao">Eu desejo receber notificações deste site.</label>
                </form>
            </div>
        </c>

        <d>
            <button id="botao">CRIAR CONTA</button>
        </d>

        <e>
            <div id="esqueceu">
                <a href="http://127.0.0.1:5500/login.html" id="esquecer">Já tem uma conta? Faça seu login aqui!</a>
            </div>
        </e>
    </section>
</body>
</html>

