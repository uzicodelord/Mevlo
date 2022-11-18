<?php
include 'database.php';
session_start();
    // SQL insert
    if (isset($_SESSION['user'])) {
        try{
            $sql = "INSERT INTO `formcheck` (`email`, `fname`, `message`) VALUES (?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    $_POST['email'], $_POST['fname'], $_POST['message']
                ]);
        }
        catch (Exception $ex) {;}
    }else {
        try {
            $sql = "INSERT INTO `formcheck` (`email`, `fname`, `message`) VALUES (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                $_POST['email'], 'Guest', $_POST['message']
            ]);
        } catch (Exception $ex) {}
    }
?>
<div class="container">

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/style.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Document</title>

    </head>

    <body>
        <div class="container">
            <h2 class="welcome1">Contact Data</h2>
            <h3 class="welcome1" style="color:green; font-size: 30px;">E-mail sent successfully!</h3>
            <p class="welcome1" style="font-size: 20px;">Manager: <strong>Orhan</strong></p>
            <p class="welcome1" style="font-size: 20px;">E-mail: <strong>zenunierhan@gmail.com</strong></p>
            <a class="submit welcome1" style="font-size: 20px; margin-left: 34%; text-decoration: none;" href="/homework/">Back to homepage</a>

            <?php
	// server side checking example
	if(!isset($_POST['fname']) || strlen($_POST['fname']) < 5)
	{
		exit("Wrong name: ".$_POST['name']);
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Wrong email: ".$_POST['email']);
	}

	if(!isset($_POST['message']) || empty($_POST['message']))
	{
		exit("Wrong text: ".$_POST['textarea']);
	}

    echo "";
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
?>
    </body>

    </html>
    <a class="largerbtn welcome1" style="font-size: 20px; margin-left: 40px;" target="_blank" href="https://www.google.hu/maps/place/Pallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar/@46.8960799,19.6669509,17z/data=!3m1!4b1!4m5!3m4!1s0x4743da7a6c479e1d:0xc8292b3f6dc69e7f!8m2!3d46.8960763!4d19.6691396?hl=hu">Larger map</a>

    <iframe class="welcome1" style="margin-left:38px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3375296155727!2d19.66695091525771!3d46.89607994478184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sPallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar!5e0!3m2!1shu!2shu!4v1475753185783" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <br><br><br>

</div>