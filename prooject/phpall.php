<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <div class="container">
      <p>this is a php code </P> <br>
        <!-- php basic syntax-->
    <?php
    echo "hello world this code is printed using php";
    // this is single line comment
    /* this 
       is
       multiple
       line
       comment
    */
    
    // variable in php
    $variable1=30;
    $variable2=40;
    echo $variable1;
    echo $variable2;
    echo $variable1+$variable2;

    // php is case insensitive

    // operators in PHP
    // 1.Arithmetic Operators

      echo "<h3>Arithmetic Operators</h3>";

      echo "<br>";
      echo "The value of variable1 + variable2 is";
      echo "<br>";
      echo $variable1 + $variable2;

      echo "<br>";
      echo "The value of variable1 - variable2 is";
      echo "<br>";
      echo $variable1 - $variable2;

      echo "<br>";
      echo "The value of variable1 * variable2 is";
      echo "<br>";
      echo $variable1 * $variable2;

      echo "<br>";
      echo "The value of variable1 / variable2 is";
      echo "<br>";
      echo $variable1 / $variable2;
    // 2.Assignment Operators

    echo "<h3>Assignment Operators</h3>";

    $newvariable = $variable1;
    echo "The value of new variable is";
    echo "<br>";
    echo $newvariable;

    $newvariable=$newvariable+1;
    echo $newvariable;

    $newvariable=$newvariable-1;
    echo $newvariable;

    $newvariable=$newvariable*1;
    echo $newvariable;

    $newvariable=$newvariable/1;
    echo $newvariable;

    // 3.Comparision Operators

     echo "<h3>Comparision Operators</h3>";

     echo "The value of 1==4 is";
     echo var_dump(1==4); // var_dump tells whether the statement is true or false
     echo "<br>";

     echo "The value of 1!=4 is";
     echo var_dump(1!=4); // var_dump tells whether the statement is true or false
     echo "<br>";


     echo "The value of 1<=4 is";
     echo var_dump(1<=4); // var_dump tells whether the statement is true or false
     echo "<br>";


     echo "The value of 1>=4 is";
     echo var_dump(1>=4); // var_dump tells whether the statement is true or false
     echo "<br>";


    // 4.Increament/Decreament Operators 

    echo "<h3>Increament/Decreament Operators</h3>";

    
    echo $variable1++;
    echo "<br>";
    echo $variable1;
    
    echo $variable1--;
    echo "<br>";
    echo $variable1;
    
    echo ++$variable1;
    echo "<br>";
    echo $variable1;
    
    echo --$variable1;
    echo "<br>";
    echo $variable1;
    

    

    // 5.Logical Operators 

    echo "<h3>Logical Operators</h3>";

    // and
    
    $myvar= (true and false);
    echo "<br>";
    echo var_dump($myvar);

    $myvar= (true and true);
    echo "<br>";
    echo var_dump($myvar);

    $myvar= (false and true);
    echo "<br>";
    echo var_dump($myvar);

    $myvar= (false and false);
    echo "<br>";
    echo var_dump($myvar);

   echo "<br>";

    // or

    $myvar= (true or false);
    echo "<br>";
    echo var_dump($myvar);

    $myvar= (true or true);
    echo "<br>";
    echo var_dump($myvar);

    $myvar= (false or true);
    echo "<br>";
    echo var_dump($myvar);

    $myvar= (false or false);
    echo "<br>";
    echo var_dump($myvar);

   echo "<br>";


    // not(!)

    $var1= (true);
    echo "<br>";
   echo var_dump(!$var1);

   echo "<br>";

    // xor
    
    $myvar= (true xor false);
    echo "<br>";
    echo var_dump($myvar);

    $myvar= (true xor true);
    echo "<br>";
    echo var_dump($myvar);

    $myvar= (false xor true);
    echo "<br>";
    echo var_dump($myvar);

    $myvar= (false xor false);
    echo "<br>";
    echo var_dump($myvar);

   echo "<br>";

   ?>

<!--Data types in PHP -->
<?php
define('pi',3.14);
// 1.string
echo "<br>";
$var2 = "Ayush Godbole";
echo var_dump($var2);
echo "<br>";

// 2.Integer
echo "<br>";
$var2 = 61;
echo var_dump($var2);
echo "<br>";

// 3.Float
echo "<br>";
$var2 = 67.45;
echo var_dump($var2);
echo "<br>";

// 4.Boolean
echo "<br>";
$var2 = true;
echo var_dump($var2);
echo "<br>";
// 5.Array
// 6.Object
echo pi;
$var3=46;
$new_var=$var3;
echo $new_var;

?>




</div>
</body>
</html>


































































































































































































































































































