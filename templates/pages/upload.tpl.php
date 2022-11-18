<?php
    // Application logic:
    include('config.inc.php');
    $messages = array();   

    // Form checkings:
    if (isset($_POST['send'])) {
        //print_r($_FILES);
        foreach($_FILES as $file) {
            if ($file['error'] == 4);   // There was no file uploaded
            elseif (!in_array($file['type'], $MEDIATYPES))
                $messages[] = " The type is not correct: " . $file['name'];
            elseif ($file['error'] == 1   // The file size exceeds the limit allowed in php.ini
                        or $file['error'] == 2   // The file size exceeds the limit allowed in HTML Form
                        or $file['size'] > $MAXSIZE) 
                $messages[] = " Too big file: " . $file['name'];
            else {
                $target_dir = $FOLDER.strtolower($file['name']);
                if (file_exists($target_dir))
                    $messages[] = " Already exist: " . $file['name'];
                else {
                    move_uploaded_file($file['tmp_name'], $target_dir);
                    $messages[] = ' Ok: ' . $file['name'];
                }
            }
        }        
    }
    // Visualization logic:
?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="./styles/style.css" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">

    <title>Gallery</title>
    <style type="text/css">
        label {display: flex; 
            justify-content:left;  
            cursor: pointer; }
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
#first {
    width: 300px;
    text-align: center;
    right: 0;
}

  }
    </style>
</head>
<body>
    <h3>Upload to gallery:</h3>
<?php
    if (!empty($messages))
    {
        echo '<ul>';
        foreach($messages as $m)
            echo "<li>$m</li>";
        echo '</ul>';
    }
?>
    <form action="upload.tpl.php" method="post"
                enctype="multipart/form-data">
        <label><strong>First: <br>
            <input type="file" name="first" id="first" required>
</strong>
        </label>
        <label><strong>Second: <br>
            <input type="file" name="second" id="first">
</strong>
        </label>
        <label><strong>Third: <br>
            <input type="file" name="third" id="first">
</strong>
        </label>        
        <input type="submit" name="send" id="first" style="background-color: black; color: white;">
      </form>    
</body>
</html>
