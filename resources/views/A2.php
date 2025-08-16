<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paulistao</title>
    <style>

        body{
            margin: 0;


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
            margin-left: -250px;


        }

        #SerieA1-title{
            margin-top: 50px;


        }

        #container-SerieA1{
            display: flex;
            justify-content: center;


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
        <div id="container-SerieA1">
            <h1 id="SerieA1-title">Serie A1</h1>
        </div>
        <div> 
            <table>
                    <tr><td>Primavera</td></tr>
                    <tr><td>Capivariano</td></tr>
                    <tr><td>Ituano</td></tr>
                    <tr><td>Taubaté</td></tr>
                    <tr><td>São José‑SP</td></tr>
                    <tr><td>Ferroviária</td></tr>
                    <tr><td>XV de Piracicaba‑SP</td></tr>
                    <tr><td>Santo André‑SP</td></tr>
                    <tr><td>Grêmio Prudente</td></tr>
                    <tr><td>Oeste</td></tr>
                    <tr><td>Juventus</td></tr>
                    <tr><td>Linense</td></tr>
                    <tr><td>Votuporanguense</td></tr>
                    <tr><td>São Bento</td></tr>
                    <tr><td>Portuguesa Santista</td></tr>
                    <tr><td>Rio Claro</td></tr>
            </table>

        </div>
    </div>
</body>
</html>