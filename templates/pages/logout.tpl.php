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
                display: inline-block;
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
            }

        }
    </style>
</head>

<h1>Logged out:</h1>
<?= $data['fn'] . " " . $data['ln'] . " (" . $data['user'] . ")" ?>