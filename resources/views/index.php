<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paulistao</title>
    <style>

        body{
            margin: 0;
            background-image: url("img/campodes");

        }

        #container-main{
            font-family: arial;


        }

        #container-header{
            display: flex;
            width: 100%;
            height: 150px;
            background-color: green;
            align-items: center;
            justify-content: space-between;
            box-shadow: 1px 2px 5px black

        }

        #text-main{
            margin-left: 20px;
            color: white;


        }

        .buttons{
            margin-right: 60px;
            width: 50px;
            height: 30px;

        }

        #taça-img{
            width: 100px;
            height: 100px;
            margin-left: -330px;


        }

        #SerieA1-title{
            margin-top: 50px;
            margin-left: 20px;


        }

        #container-SerieA1{
            display: flex;
            justify-content: center;\
            align-items: center;
            margin-right: 100px;


        }

        .images-a1{
            width: 100px;
            height: 100px;



        }


    </style>
</head>
<body>
    <div id="container-main">
        <div id="container-header">
            <h1 id="text-main">Campeonato Paulista</h1>
            <img id="taça-img" src="img/taça-paulistao.png" alt="">
            <div>
            <a href="A2.php"><button class="buttons">A2</button></a>
            </div>
        </div>
        <div id="container-SerieA1">
            <h1 id="SerieA1-title">Serie A1</h1>
        </div>
        <div>
          <table border="2" style="width: 100%; text-align: center; margin-top: 20px;">
                    <tr><td><img class="images-a1" src="img/da.png" alt=""></td><td>Água Santa</td></tr>
                    <tr><td><img class="images-a1" src="img/botafogo-ribeiro.png" alt=""></td><td>Botafogo‑SP</td></tr>
                    <tr><td><img class="images-a1" src="img/RedBullBragantino.png" alt=""></td><td>Bragantino</td></tr>
                    <tr><td><img class="images-a1" src="img/corinthians.png" alt=""></td><td>Corinthians</td></tr>
                    <tr><td><img class="images-a1" src="img/guarani.png" alt=""></td><td>Guarani</td></tr>
                    <tr><td><img class="images-a1" src="img/AAinternacional.png" alt=""></td><td>Inter de Limeira</td></tr>
                    <tr><td><img class="images-a1" src="img/mirassol.png" alt=""></td><td>Mirassol</td></tr>
                    <tr><td><img class="images-a1" src="img/noroeste.png" alt=""></td><td>Noroeste</td></tr>
                    <tr><td><img class="images-a1" src="img/novorizantino.png" alt=""></td><td>Novorizontino</td></tr>
                    <tr><td><img class="images-a1" src="img/palmeiras.png" alt=""></td><td>Palmeiras</td></tr>
                    <tr><td><img class="images-a1" src="img/pontepreta.png" alt=""></td><td>Ponte Preta</td></tr>
                    <tr><td><img class="images-a1" src="img/portuguesa.png" alt=""></td><td>Portuguesa</td></tr>
                    <tr><td><img class="images-a1" src="img/santos.png" alt=""></td><td>Santos</td></tr>
                    <tr><td><img class="images-a1" src="img/saobernardo.png" alt=""></td><td>São Bernardo</td></tr>
                    <tr><td><img class="images-a1" src="img/saopaulo.png" alt=""></td><td>São Paulo</td></tr>
                    <tr><td><img class="images-a1" src="img/veloclube.png" alt=""></td><td>Velo Clube</td></tr>
            </table>
        </div>
        </div>
</body>
</html>