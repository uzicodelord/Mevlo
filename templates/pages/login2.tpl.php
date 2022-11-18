<head>
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
                padding: 20px 9.8px;
                padding-top: 0px;
                padding-bottom: 0px;
            }

nav ul li.active {
    background-color: rgb(91, 91, 91);
    color: black;
    text-decoration: none;

}
.welcome {
    width: 100%;
    margin-left: -10%;
    position: relative;
}
.welcome2 {
    width: 100%;
    margin: 0;

}

  }
    </style>
</head>
<?php if(isset($row)) { ?>
    <?php if($row) { ?>
        <h1 class="welcome2" 
        style="position:absolute; 
        justify-content:center;
        display:flex;
        margin-left: 3%;">Hi,&nbsp <strong><?= $row['first_name']." ".$row['last_name'] ?></strong></h1>

    <?php } else { ?>
        <h1 class="welcome">Login failed!</h1>
        <a href="?page=login" style="margin-top:5%; font-size:40px; cursor:pointer; text-align: center;" class="welcome" >Try again!</a>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
    <h2><?= $errormessage ?></h2>
<?php } ?>
