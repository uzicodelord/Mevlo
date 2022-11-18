<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <style>
        @media screen and (max-width: 800px) {
            * {
                width: 100%;
                margin: 0 auto;
                padding: 0;
                box-sizing: border-box;
            }

            nav {
                display: flex;
                flex: 1;
                text-align: center;
                background-color: black;
                text-decoration: none;
            }

            nav ul {
                list-style-type: none;
                margin: 0px;
                padding: 15px 0px;
                text-decoration: none;
            }

            nav ul li {
                display: inline;
                margin-left: 0;
                margin-top: 0;
                padding: 20px 9.8px;
                padding-top: 0px;
                padding-bottom: 0px;
            }

            nav ul li.active {
                background-color: rgb(91, 91, 91);
                color: black;
                text-decoration: none;
                height: 50px;   
            }

        }
    </style>
</head>
<?php
//print_r($_SESSION);
echo "<h5>";
if (isset($_SESSION['user']))
    echo "Logged in: " . $_SESSION['user'] . " " . $_SESSION['fn'] . " " . $_SESSION['ln'];
else
    echo "Not logged in";
echo "</h5>";
?>
<h2 class="welcome1"><strong>Welcome</strong></h2>
<h4><strong>The origin of Venice city</strong></h4>
<p style="font-size:18px;">Venice city used to be a bridge between the Middle East and the rest of Europe. This was mainly due to the sizeable merchant fleet. As a result, trade took place and products unknown to Europe - such as spices and sugar cane - were brought back from places faraway. Shipbuilding also helped maintain the wealth of Venice. However, Venice has not always been an Italian city. It was originally a republic and the presence of the Venetian fleet in the Mediterranean was a pain in the ass of the then Republic of Genoa. Several wars and battles, including the Battle of Sapienza in which Venezia ended up taking a large part of her fleet but also quarrels with the Pope, caused the power and wealth of Venice to diminish. In the end, the city as you know it today was created: a unique, water-rich place with a lot of history and great tourist attractions.</p>
<h4><strong>Things to do in Venice Italy</strong></h4>
<p style="font-size:18px;">The Italian city of Venice (Venezia) is located on the Adriatic Sea in the northeast of the country. The city in Italy is divided into six districts and some of the most famous islands are Lido di Venezia, Murano and Burano. The special thing about your visit of Venice city is that there are no normal roads in the city. There is one long bridge between the mainland and Venice, with only one road and a railway. Every other transportation runs via the famous canals - of which there are about 177 - to and from the more then a hundred islands that makes up Venice. The Canal Grande is one of the widest canals and apart from a touristic gondola you can also opt for a water bus (Vaporetto) to get around in the city.

Due to the typical location of the various parts of the city - all surrounded by so much water - Venice city is famous for its bridges (including the Rialto Bridge), but also for the many squares (such as the Piazza San Marco with the Saint Mark's Basilica). But Venice Italy is so much more than just gondolas and special infrastructure, because during a visit to the city you can also admire the many palaces (Ca' d'Oro, Palazzo Ducale (Doge's Palace)), many museums (like Galleria dell'Accademia, Museo Correr and the Peggy Guggenheim Collection) and churches (Basilica di Santa Maria Gloriosa dei Frari and San Zanipolo). The sheer number of amazing sights will probably make you realize that you'll need a couple of days to visit Venice city.</p>
<h5 class="welcome1"><strong>Check Venice in 4K</strong></h5>
<video width="500px" height="300px" controls="controls" / class="video">

    <source src="./video/venice.mp4" type="video/mp4">
</video>
<iframe width="500px" height="300px" src="https://www.youtube.com/embed/1_5n1EfcWyM?start=19" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br><br><br>