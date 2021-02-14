<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    header .header{
      background-color: #fff;
      height: 45px;
    }
    header a img{
      width: 134px;
    margin-top: 4px;
    }
    .login-page {
      width: 1000px;
      padding: 8% 0 0;
      margin: auto;
    }
    .login-page .form .login{
      margin-top: -40px;
    margin-bottom: 10px;
    }
    .form {
      position: relative;
      z-index: 1;
      background: #FFFFFF;
      max-width: 500px;
      margin: 0 auto 100px;
      padding: 45px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }
    .form button {
      font-family: "Roboto", sans-serif;
      text-transform: uppercase;
      outline: 10;
      background-color: #328f8a;
      background-image: linear-gradient(45deg,#328f8a,#08ac4b);
      width: 100%;
      border: 0;
      padding: 15px;
      color: #FFFFFF;
      font-size: 14px;
      -webkit-transition: all 0.3 ease;
      transition: all 0.3 ease;
      cursor: pointer;
    }
    .form .message {
      margin: 15px 0 0;
      color: #b3b3b3;
      font-size: 12px;
    }
    .form .message a {
      color: #4CAF50;
      text-decoration: none;
    }

    .container {
      position: relative;
      z-index: 1;
      max-width: 300px;
      margin: 0 auto;
    }

    body {
      background-color: #328f8a;
      background-image: linear-gradient(45deg,#328f8a,#08ac4b);
      font-family: "Roboto", sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    </style>
    <title>DNS LookUp</title>
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
    <h1> DNS LookUp</h1>

        <form action="os_commandi.php" method="POST">

            <p>

            <label for="target"></label>
            <input type="text" id="target" name="target" value="www.google.com">

            <button type="submit" name="form" value="submit">Lookup</button>

            </p>

        </form>

  </body>
</html>

<?php

    if(isset($_POST["target"]))
    {

        $target = $_POST["target"];
        $substitutions = array(
        		'&&' => '',
        		';'  => '',
            '||' => '',
            '&' => '',
        	);

        	// Remove any of the charactars in the array (blacklist).
        	$target = str_replace( array_keys( $substitutions ), $substitutions, $target );

        if($target == "")
        {

            echo "<font color=\"red\">Enter a domain name...</font>";

        }

        elseif ($target == "www.google.com|whoami") {
          // code...
          echo "Wow You Win This CTF Poda Chekka... Nee Hacker aaaano ";

        }

        

        else
        {

            echo "<p align=\"left\">" . shell_exec("nslookup $target " ) . "</p>";


        }

    }

?>
