<?php

/*  Every bit of data must be validated on input and escaped on output   */

function escape(&$output)
{
    return htmlspecialchars($output);
}

function sanitizeInput(&$input)
{
    return trim(strip_tags($input));
}

//tell Chrome to disable it's XSS protection,
header("X-XSS-Protection: 0");

// without prevent Xss
//echo $_POST["comment"];

// prevent Xss
// validate and sanitize user input

if (!empty($_POST['comment'])) {
    $userComment = sanitizeInput($_POST['comment']);

}

// escape user output
if (!empty($userComment)) {
    echo escape(trim($userComment));

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


<!-- javascript/jQuery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
<![endif]-->
</body>

<div class="col-sm-6 col-sm-offset-3 text-danger">
    <form action="index.php" method="post">
        <div class="form-group">
            <div class="col-lg-3">
                <!--                try to fill this input <script>alert("hacked")</script> -->
                <input type="text" name="comment" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-3">
                <button type="submit" class="btn btn-success"> Login</button>
            </div>
        </div>
</div>
</html>


