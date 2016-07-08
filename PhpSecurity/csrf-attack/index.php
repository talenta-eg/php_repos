<?php

require 'bootstrap.php';
?>


<!doctype html>
<html lang="en">
<head>
</head>
<body>
<form action="delete.php" method="post">
    <div class="form-group">
        <button type="submit" class="btn btn-default">Delete User</button>
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'];?>"/>

    </div>

</form>
</body>
</html>

