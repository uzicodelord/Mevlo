<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function validateemail() {
            var x = document.myform.email.value;
            var atposition = x.indexOf("@");
            var dotposition = x.lastIndexOf(".");
            if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
                alert("Please enter a valid e-mail address");
                return false;
            }
        }

        function validate() {
            var regName = /^[a-zA-Z]+$/;
            var name = document.getElementById('name').value;
            if (!regName.test(name)) {
                alert('Please enter your name.');
                document.getElementById('name').focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
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



            #name {
                width: 200px;
                margin: 0;
            }

            #email {
                width: 200px;
            }

            #message {
                width: 200px;
                height: 80px;
            }

        }
        .venice {
            color: black;
            font-size: 20px;
        }
        .venice:hover {
            
            background-color: lightskyblue;
            color:black;
            text-decoration: none;

        }
    </style>
</head>

<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <div style="text-align: center; margin-top: 20px;">
        <form name="myform" method="post" action="form.php" onsubmit="return validateemail(); return validate();">
            <p>Full Name: <br><input type="text" id="name" name="fname" value=""></p>
            <p>Email: <br><input type="text" name="email" id="email" value=""><br /></p>
            <p>Message: <br><textarea type="textarea" id="message" name="message" value="" required></textarea></p>

            <input type="submit" value="Submit" onclick="validate();" style="background-color: green; color:white; width:100px;"><br><br>
            <a href="https://www.venicelover.com/" class="venice">Venice Lover</a>
            <br><br>
            

            <iframe class="welcome1" style="margin-left:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3375296155727!2d19.66695091525771!3d46.89607994478184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sPallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar!5e0!3m2!1shu!2shu!4v1475753185783" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <br><br><br>
        </form>
    </div>

</body>

</html>