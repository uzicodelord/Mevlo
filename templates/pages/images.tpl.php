<?php
// Application logic:
include('config.inc.php');

// Collecting data:    
$images = array();
$reader = opendir($FOLDER);
while (($file = readdir($reader)) !== false) {
    if (is_file($FOLDER . $file)) {
        $end = strtolower(substr($file, strlen($file) - 4));
        if (in_array($end, $TYPES)) {
            $images[$file] = filemtime($FOLDER . $file);
        }
    }
}
closedir($reader);

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <style>
        .column {
            position: relative;
            justify-content: center;
        }

        .row>.column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

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

            .column {

                position: relative;
                justify-content: left;
            }

            .row>.column {
                padding: 0;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            p {
                text-align: center;
            }


        }
    </style>

    <h1 class="welcome1">Gallery</h1> <br><br>
    <?php
    arsort($images);
    foreach ($images as $file => $date) {
    ?>
        <div class="row">
            <div class="column">
                <div class="column">
                    <div class="column">
                        <a href="<?php echo $FOLDER . $file ?>">
                            <img src="<?php echo $FOLDER . $file ?>" style="width:250px;margin-left: 10%; border: none; height: 180px">
                        </a>
                        <p class="name" style="width:50px">Name: <?php echo $file; ?></p>
                        <p style="width:100px;">Date: <?php echo date($DATEFORMAT, $date); ?></p>
                    </div>
                </div>
                 
            </div
            
            <?php
                }
                    ?>