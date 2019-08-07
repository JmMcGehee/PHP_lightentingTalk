<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Lightening App</title>
  </head>
  <body>
    <!-- <?php
      echo "Hello World";
    ?>

    <?php
      echo "<h1>This is a header tag</h1>";
    ?>

    <?php
      $text = "This";
      $integer = 80;
      $decimal = 3.14;
      $isBoolean = true;

      echo "$text is how we can store a variable";
      echo "Datatypes can be a number like $integer, </br>
      A decimal like $decimal, </br>
      Or a boolean like $isBoolean.
      ";
     ?> -->

     <!-- <?php
        echo "<hr>";
        echo "<h3>Strings</h3>";

        $greeting = "Hello";
        echo "String: $greeting </br>";
        echo strlen($greeting)."<--string length </br>";
        echo $greeting[0]."<---first letter </br>";
      ?> -->

      <!-- SHOW POST vs. GET here -->
      <!-- <form action="index.php" method="GET">
        Password: <input type="password" name="password" />
        <input type="submit" />
      </form>
      </br>

      Password: -->
      <?php
        echo $_POST["GET"];
        //Mini GET route
      ?>

      <!-- <hr>
      <h3>Addition</h3>
      <form action="index.php" method="GET">
        First number: <input type="number" name="num1">
      </br>
        Second number: <input type="number" name="num1">
      </br>
        <input type="submit">
      </form>

      Anwser:
      <?php
        echo $_GET["num1"] + $_GET["num2"]
       ?> -->

      <!-- <form class="" action="index.php" method="GET">
          Color: <input type="text" name="color"> <br>
          Plural Noun: <input type="text" name="pluralNoun"><br>
          Celebrity: <input type="text" name="celebrity">
          <input type="submit">
      </form>
      <br>
       <?php
          $color = $_GET["color"];
          $pluralNoun = $_GET["pluralNoun"];
          $celebrity = $_GET["celebrity"];

          echo "Roses are $color </br>";
          echo "$pluralNoun are blue </br>";
          echo "I love $celebrity";
        ?> -->
<!-- AAAAAARRRRRAAAAYYYYYYS -->

    <!-- <?php
      $friends = array("Cory","Elliot","Parker");
      echo $friends . "<br>"; //don't work
      // foreach($friends as $name){
      //   echo $name . "<br>";
      // }
     ?> -->

     <!-- <?php
     function sayHi($name){
       echo "Hello $name";
     }

     sayHi("Mike")
      ?> -->

      <br>
      <form action="site.php" method="GET">
     Num1: <input type="number" name="num1">
     Operator: <input type="text" name="op">
     Num2: <input type="number" name="num2">
     <input type="submit">
   </form>

   <?php
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     $op = $_GET["op"];

     if($op == "+"){
          echo $num1 + $num2;
     } elseif($op == "-"){
          echo $num1 - $num2;
     } elseif($op == "/"){
          echo $num1 / $num2;
     } elseif($op == "*"){
          echo $num1 * $num2;
     } else {
          echo "Invalid Operator";
     }
     ?>
  </body>
</html>
