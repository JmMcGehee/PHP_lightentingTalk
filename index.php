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

      <form action="index.php" method="GET">
        Name: <input type="text" name="name" />
        <input type="submit" />
      </form>
      </br>

      Your name is: 
      <?php
        echo $_GET["name"];
        //Mini GET route
      ?>

  </body>
</html>
