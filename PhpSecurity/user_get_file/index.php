<?php

if(! isset($_GET['show'])){
    exit();
}

$show = $_GET['show'];
// by this approach if user type ?show=../db  he/she will see all information about your database connection from db.php
// from page source in the browser

//$content = file_get_contents("content/{$show}.php");

// the correct approach to prevent this big issue ,(refer to the allowed values that will assigned to ?show )
$allowed = ['cats' ,'dogs'];
$content = in_array($show , $allowed) ? file_get_contents("content/{$show}.php") : "" ;
?>
<!doctype html>
<html lang="en">
<head>
   
</head>
<body>

<?php echo $content; ?>
</body>
</html>