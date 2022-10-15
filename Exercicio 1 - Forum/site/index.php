<!--
* Provavelmente existem bugs, como é um trabalho simples de faculdade não testei tudo e provavelmente não irei
* O codigo é livre e alguns textos/imgs foram pegos de outros sites
-->

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <title>Signos</title>
    </head>
    <body>
        <div class="title-text"> Qual é seu signo?</div>
        <div class="search-box">
             <div class="info-text">Preencha com a data do seu nascimento</div>
             <form action="http://127.0.0.1/signos.php?acao=resultado" method="post"> <!-- trocar '127.0.0.1' pela url desejada-->
					
                     <center><br>
                     <input type="date" name="resultado"> <!--exibir quadro de datas-->
                     <input type="submit"></center>
             </form>
        </div>
    </body>
</html>