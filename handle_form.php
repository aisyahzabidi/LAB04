<<<<<<< HEAD
<html>
<head>
<title>Form Feedback </title>
</head>
<body>
<?php #Script handle form

 "<p> Thank you, <b>". $_POST ["name"].
"</b> for the following comments: <br/>". 
$_POST ["comments"]. "<p> We will reply to you at <i>". 
$_POST["email"]. "</i</p"; 

?>
</body> 
</html> 
=======
<html>
<head>
<title> Form Feedback</title>
</head>
<body>
<?php  #Script handle form

echo "<p> Thank you, <b>".$_POST["name"].
"</b> for the following comments: <br/>".
$_POST ["comments"]. "<p>We will reply to you at <i>".
$_POST ["email"]. " </i></p>";

?>
</body>
</html>
>>>>>>> 77ea48fd13331e896e973ead82f0abcb9c887345
