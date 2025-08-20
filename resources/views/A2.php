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

        #SerieA2-title{
            margin-top: 50px;
            margin-left: 20px;


        }

        #container-SerieA2{
            display: flex;
            justify-content: center;\
            align-items: center;
            margin-right: 100px;


        }

        .images-a2{
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
            <a href="/"><button class="buttons">A1</button></a>
            </div>
        </div>
        <div id="container-SerieA2">
            <h1 id="SerieA2-title">Serie A2</h1>
        </div>
        <div>
          <table border="2" style="width: 100%; text-align: center; margin-top: 20px;">
                    <tr>><td><img class="images-a2" src="img/primavera.png" alt=""><td>Primavera</td></tr>
                    <tr>><td><img class="images-a2" src="img/capivariano.png" alt=""><td>Capivariano</td></tr>
                    <tr>><td><img class="images-a2" src="img/ituano.png" alt=""><td>Ituano</td></tr>
                    <tr>><td><img class="images-a2" src="img/taubate.png" alt=""><td>Taubaté</td></tr>
                    <tr>><td><img class="images-a2" src="img/saojose.png" alt=""><td>São José‑SP</td></tr>
                    <tr>><td><img class="images-a2" src="img/ferroviaria.png" alt=""><td>Ferroviária</td></tr>
                    <tr>><td><img class="images-a2" src="img/xvpiracicaba.png" alt=""><td>XV de Piracicaba‑SP</td></tr>
                    <tr>><td><img class="images-a2" src="img/santoandre.png" alt=""><td>Santo André‑SP</td></tr>
                    <tr>><td><img class="images-a2" src="img/gremioprudente.png" alt=""><td>Grêmio Prudente</td></tr>
                    <tr>><td><img class="images-a2" src="img/oeste.png" alt=""><td>Oeste</td></tr>
                    <tr>><td><img class="images-a2" src="img/juventus.png" alt=""><td>Juventus</td></tr>
                    <tr>><td><img class="images-a2" src="img/linense.png" alt=""><td>Linense</td></tr>
                    <tr>><td><img class="images-a2" src="img/votapureguense.png" alt=""><td>Votuporanguense</td></tr>
                    <tr>><td><img class="images-a2" src="img/saobento.png" alt=""><td>São Bento</td></tr>
                    <tr>><td><img class="images-a2" src="img/portuguesasantista.png" alt=""><td>Portuguesa Santista</td></tr>
                    <tr>><td><img class="images-a2" src="img/rioclaro.png" alt=""><td>Rio Claro</td></tr>
            </table>
        </div>
        </div>
</body>
</html>