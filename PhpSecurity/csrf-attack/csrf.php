<!doctype html>
<html lang="en">
<head>
</head>
<body>
<!--A Cross Site Request Forgery (CSRF) Attack is a type of web application vulnerability
 where the victim unintentionally runs a script in their browser that takes advantage of their logged in session to a particular site.
 CSRF attacks can be performed over GET or POST requests.


<!-- by this script attacker can delete user in one second by redirect you for this page for example
    or run $.ajax({}) method in the browser console -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
    $.ajax({
        url: 'http://localhost:8080/PHPSecurity/csrf-attack/delete.php',
        type: 'POST'

    });
</script>
<!--
   How prevent CSRF attacks on your GET and POST requests.

   1- The first it to include a random token with each request, this is a unique string that is generated for each session.
       We generate the token and then include it in every form as a hidden input.
       The system then checks if the form is valid by comparing the token with the one stored in the users session variable.
       This means that in order to an attacker to generate a request, the attacker would have to know the token value.

   2- The second method is to use random name for each form field.
       The value of the random name for each field is stored in a session variable
       and after the form has been submitted the system generates a new random value.
       This means in order for an attack to work the attacker would have to guess these random form names.

   3- Create csrf.class.php File ( http://www.wikihow.com/Prevent-Cross-Site-Request-Forgery-(CSRF)-Attacks-in-PHP )

-->
</body>
</html>