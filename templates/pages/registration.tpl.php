<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        @media screen and (max-width: 800px) {
    *{
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
    padding: 20px 2px;
}


nav ul li.active {
    background-color: rgb(91, 91, 91);
    color: black;
    text-decoration: none;
}

  }
    </style>
</head>
   <body>
        <?php if(isset($message)) { ?>
            <h1><?= $message ?></h1>
            <?php if($again) { ?>
                <a href="index.php?oldal=belepes" class="btn">Try again!</a>
            <?php } ?>
        <?php } ?>
    </body>  
</html>