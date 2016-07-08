<?php


// unsecure cookie
//setcookie('key','value');

// secure cookie with http only = true to access your cookie throgth http only
// type this command in your browser console and see the result with tow methods
// document.cookie
setcookie('key',crypt('value' , null),0,'/',null,null,true);



echo htmlspecialchars($_COOKIE['key']);