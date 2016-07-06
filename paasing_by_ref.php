<?php

/*---------------------------------------------------------------------------------------
 *       Simple Example for Passing by Value and Passing buy Reference
 *--------------------------------------------------------------------------------------  */

// $v1 now passing by value
$v1 = 'x';

// result of printing=> 'x'
print $v1 . ' ';

// $v1 become passing by reference
$v1 = &$v2 ;

$v2= 'y';

// result of printing=> 'y'
print $v1 .PHP_EOL;


/*---------------------------------------------------------------------------------------
 *       String Example for Passing by Value and Passing buy Reference
 *--------------------------------------------------------------------------------------  */

// assigned value to $var1 and $var2
$var1 = 'foo';
$var2 = 'bar';


// init function and inside it change $var1 and $var2 values
function byVal($var1  , $var2 )
{
    $var1 = 'zoo';
    $var2 = 'see';
    // do your stuff
}
// call the function
byVal($var1 , $var2);
// print $var1 and $var2 and see the result of printing
// we will note that not changes in $var1 and $var2  because it passing by value
print $var1 . ' ' . $var2  . PHP_EOL;


// init function and inside it change $var1 and $var2 values and add this & to $var2
function byRef($var1  , &$var2 )
{
    $var1 = 'mee';
    $var2 = 'bee';

}
// call the function
byRef($var1 , $var2);

// print $var1 and $var2 and see the result of printing
// we will note that $var2 it;s value has changed because it passing by reference
print $var1 . ' ' . $var2 . PHP_EOL ;


/*---------------------------------------------------------------------------------------
 *       Math Example for Passing by Value and Passing buy Reference
 *--------------------------------------------------------------------------------------  */

$x = 10 ;
$y =15;

function Add($x , $y)
{
    $x = 5;
    print  'Total x and y is ' . ($x + $y) . PHP_EOL;
}

Add($x , $y);

print  'x = '. $x .  ' y = ' . $y  . PHP_EOL;


function _Add(&$x , $y)
{
    $x = 5;
    print  'Total x and y is ' . ($x + $y) . PHP_EOL;
}


_Add($x , $y);

print  'x = ' . $x .  ' y = ' . $y ;
