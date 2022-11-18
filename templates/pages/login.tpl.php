<head>
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
	padding-bottom: 0;
}

nav ul li.active {
    background-color: rgb(91, 91, 91);
    color: black;
    text-decoration: none;
}
#username{
	width: 150px;
	text-align: center;
	margin: 0;
}

#pass {
	width: 150px;
	text-align: center;
	margin: 0;
}
#submit {
	width: 150px;
	text-align: center;
	margin: 0;
}

#first {
	width: 150px;
	text-align: center;
	margin: 0;
}
#last {
	width: 150px;
	text-align: center;
	margin: 0;
}
.loginpage {
	width:91%;
}
.loginpages {
	width: 91%;
}



  }
  </style>
</head>

<form action = "?page=login2" method = "post" class="loginpage">
  <fieldset class="loginpage">
	<legend class="welcome1" style="font-size: 40px; margin: 0;">Login</legend>
	<br>
	<input type="text" id="username" name="username" placeholder="Username" required class="tb"><br><br>
	<input type="password" id="pass" name="password" minlength="8" placeholder="Password" required class="tb"><br><br>
	<input type="submit" id="submit" name="login" value="Login" class="submit">
	<br>&nbsp;
  </fieldset>  
</form>
<form action = "?page=registration" method = "post" class="loginpages">
  <fieldset class="loginpages">
	<legend class="welcome1" style="font-size: 40px; margin: 0;">Registration</legend>
	<br>
	<input type="text" id="first" name="firstname" placeholder="First name" required class="tb"><br><br>
	<input type="text" id="last" name="lastname" placeholder="Last name" required class="tb"><br><br>
	<input type="text" id="username" name="username" placeholder="Username" required class="tb"><br><br>
	<input type="password" id="pass" name="password" minlength="8" placeholder="Password" required class="tb"><br><br>
	<input type="submit" id="submit" name="registration" value="Register" class="submit1">
	<br>&nbsp;
  </fieldset>
</form>
