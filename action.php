<?php 
$h=$_GET["xss"];
   if($h){
       echo $_GET["xss"];
   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hack me</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
	<h1>XSS ME!</h1>
    <form action="action.php" method="get">
    
    <ul class="form-style-1">
    <li><input type="text" name="xss" class="field-divided" placeholder="Hack" /></li>
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
      </form>
</body>
</html>