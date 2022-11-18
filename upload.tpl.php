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
<link rel="stylesheet" href="./styles/style.css" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Gallery</title>
    <style type="text/css">
        label {display: flex; 
            justify-content:left;  
            cursor: pointer; }
    </style>
</head>
<body>
    <div id="content" style="position:absolute; justify-content:center; margin-left:20%; padding-left:20%">
    <h1>Uploading to the gallery:</h1>
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
            <input type="file" name="first" required>
</strong>
        </label>
        <label><strong>Second: <br>
            <input type="file" name="second">
</strong>
        </label>
        <label><strong>Third: <br>
            <input type="file" name="third">
</strong>
        </label>        
        <input type="submit" name="send" class="button">
        <br><br>
      </form>    
      <a href="index.php" class="button" style="margin-left: 30px; padding: 5px 5px; width: 170px">Back to Home Page</a>
</div>
</body>
</html>
