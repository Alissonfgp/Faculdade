<!--
* Provavelmente existem bugs, como é um trabalho simples de faculdade não testei tudo e provavelmente não irei
* O codigo é livre e alguns textos/imgs foram pegos de outros sites
-->

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <title>Acessar sua Conta</title>
    </head>
    <body>
        <div class="title-login">Acessar</div>
        <div class="login-box">
        <div class="content-wrapper">
            <div class="info-text">Informações da Conta</div></br></br></br>
            <fieldset>
            <legend>Informações</legend>
            <div class="input-group">
				<label>Usuário</label>
				<input type="email" name="conta_usuario" placeholder="Insira seu Usuário">
            </div>
            <div class="input-group">
				<label>Senha</label>
				<input type="password" name="conta_senha" placeholder="Insira sua Senha">
            </div>
            </fieldset></br>
            <fieldset>
                <button id="enviar" class="button pull-left">
                <span class="button-left">
				    <input type="hidden" name="enviar" value="1">
                    <span class="button-right">Enviar</span>
                </span>
                <button id="cancelar" class="button pull-right">
                <form id="cancelar" method="post"> <!-- metodo requisitado ($_POST['cancelar']) -->
                    <span class="button-left">
                        <input type="hidden" name="cancelar" value="1">
                        <span class="button-right">Cancelar</span>
                    </span>
                </form>
            </fieldset>
        </div>
    </body>
</html>