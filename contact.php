<?php
/* Email Variables */
$emailSubject = 'contactformprocess!';
$webMaster = 'yb1502@gmail.com';


/* Data Variables */
$email = htmlspecialchars($_POST["email"]);
$name = htmlspecialchars($_POST["name"]);
$comments = htmlspecialchars($_POST["message"]);



$body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Comments: $comments <br>
EOD;
$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body,
$headers);


/* Results rendered as HTML */
$theResults = <<<EOD
<html>
<head>
<title>sent message</title>
<meta http-equiv="refresh" content="10;URL=index.html">
<style type="text/css">
<!--
body {
background-color: #444;
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 20px;
font-style: normal;
line-height: normal;
font-weight: normal;
color: #fec001;
text-decoration: none;
padding-top: 200px;
margin-left: 150px;
width: 800px;
}
-->
</style>
</head>
<div align="center">תודה רבה,  ההודעה נשלחה בהצלחה.</div>
</div>
</body>
</html>
EOD;
echo "$theResults";
?>





