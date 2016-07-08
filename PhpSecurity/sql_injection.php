<?php

$db = new PDO('mysql:host=localhost;dbname=phpSec', 'root', 'root');


if(isset($_POST['email'])) {
    $email = $_POST['email'];
   // this is bad approach to execute query in database assuming that user type ';drop table demo;--
   // in email input filed this command will drop demo table from your schema
    // this is what exactly will happen in implementation level
    /* $db->query("select * from users where email = '';drop table demo;--");*/

//    $user = $db->query("select * from users where email = '{$email}' ");

    // So instead of this approach  that you must use (prepare statement)
    $user =  $db->prepare("select * from users where email = :email");
    $user->execute([
        'email' => $email,
    ]);
    if($user->rowCount()){
        exit("email already exist");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- stylesheets -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


</head>
<body>
<form action="sql_injection.php" method="POST" class="form-inline">
    <div class="form-group">
            <input  name="email" class="form-control">
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
    </div>

</form>




<!-- javascript/jQuery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
<![endif]-->
</body>
</html>