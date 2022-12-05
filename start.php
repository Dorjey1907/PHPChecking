<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body style="background-color:skyblue;" >
    
    <!-- This is php syntax -->
<div style="background-color:grey; width: 800px; margin-left: 200px; padding: 10px 50px;">
    
    <?php
    echo "<h1>This is my first php page</h1>";
    echo "Hello World!";
    echo "<br>"; 
    echo "Welcome to PHP Learning class!";
    ?>
    <hr>


    <!-- Php case sansitivity -->
    <?php
    echo "<h1> 1: PHP Case Sensitivity</h1>";
    echo "<h3>1:a: In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.</h3>";
    echo "Welcome to Learning PHP <br>";
    Echo "Welcome to Learning PHP <br>";
    ECHO "Welcome to Learning PHP <br>";
    EchO "Welcome to Learning PHP <br>";
    ?>

    <?php
    echo "<h3>1:b: However, the variable names are case sensitive</h3>";
    $Flower="Sun Flower";
    $FLOWER="Sun Flower";
    $flower="SunFlower";

    echo "This is $Flower <br>";
    echo "This is $flower <br>";
    echo "This is $FLOWER ";
    ?>
    <hr>

    <!-- PHP Comment -->
    <?php
    echo "<h1>2: PHP Comment</h1>";
    echo "<h3>2:a: Single line comment</h3> ";
    echo "// This is single line comment <br>";
    echo "# This is also single line comment";

    echo "<h3>2:b: Multi-line comment</h3> ";
    echo "/* This is multi-line comment */";

    echo "<h3>2:c: Comment to leave a part of code</h3> ";
    $add =5 /* + 10 */ + 15;
                                    echo "5 /* + 10 */ + 15 <br>"; //This is just to show in output
    echo $add;
    ?>
    <hr>
</div>


<div style="background-color:orange; width: 800px; margin: 10px 200px; padding: 10px 50px;">
    <!-- PHP Variable -->
    <!-- Variable Declaring/ Creating -->
    <?php
    echo "<h1>3: PHP Variables</h1>";
   
    echo "<h3>3:a: Declaring/Creating Variables</h3>";
    $word= "Learn PHP";
    $no1 =10.5;
    $no2= 15;
    echo "$word <br>";
    echo "$no1 <br>";
    echo "$no2 <br>";
    echo "I love to . $word. a lot. <br>";
    echo $no1 + $no2;
    ?>
    <hr>

    <!-- Global Scope -->
    <?php
    echo "<h3>3:b: Variable Scope (Global Scope)</h3>";
    $x = 55.5; // global scope
    function myFunction() {
    // using variable x inside this function will generate an error as global variable can be execuated only outside function
    echo "<p>Variable x inside function is: $x</p>";
    }
    myFunction();
    echo "<p>Variable x outside function is: $x</p>";
    ?>
    <hr>

    <!-- Local Scope -->
    <?php
    echo "<h3>3:b: Variable Scope (Local Scope)</h3>";
    function localFunction() {
    $y = 90.05; // local scope
    echo "<p>Variable x inside function is: $y</p>";
    }
    localFunction();
     // using variable x outside this function will generate an error as local variable can be execuated only inside function
    echo "<p>Variable x outside function is: $y</p>";
    ?>
    <hr>

    <?php
     echo "<h3>3:b: Variable Scope (global KeyWord)</h3>";
     $xy = 50;
     $xz = 100;
     function golbalKeyTest(){
        global $xy, $xz;
        $zz= $xy + $xz;
        echo $zz; // output the new value for variable $zz
     }
     golbalKeyTest(); // run function
     ?>
     <hr>

     <?php
     echo "<h3>3:b: Variable Scope (GLOBALS[index])</h3>";
     $x1= 200;
     $x2= 300;
     function GLOBALSTest(){
        $GLOBALS["x3"]= $GLOBALS["x1"] + $GLOBALS["x2"]; 
     }
     GLOBALSTest();
     echo $x3; 
     ?>
     <hr>

     <?php
     echo "<h3>3:b: Variable Scope (static KeyWord)</h3>";
     function staticTest() {
        static $xx = 2;
        echo "$xx <br>";
        $xx++;
      }
      staticTest();
      staticTest();
      staticTest();
      staticTest();
      staticTest();
     ?>
</div>


<div style="background-color:green; width: 800px; margin: 10px 200px; padding: 10px 50px;">
      <!-- PHP echo and print statement -->
      <!-- echo statement example1 -->
      <?php
      echo "<h1>4: PHP echo and print statement</h1>";
      echo "<h3>4:a: echo statement, example1</h3>";
      echo "I Love Learning PHP <br>";
      echo "I wish i am first learner <br>";
      echo "I am ", "learning ", "it for the fiest time <hr>";
      //echo statement example2
      echo "<h3>4:a: echo statement, example2</h3>";
      $text1 = "MY INTEREST";
      $text2 = "Thank";
      $text3 = "w3school.com for the guidance";
      $val1 = 150;
      $val2 = 50;
      $val3 = 200;
      echo "<h5>" . $text1 . "</h5>";
      echo "I would like to  " . $text2 . " a lot " . $text3 . "<br>";
      echo $val1 + $val2 + $val3;
      ?>
      <hr>

      <!-- print statement example1 -->
      <?php
      print "<h3>4:b: print statement, example1</h3>";
      print "I Love Learning PHP <br>";
      print "I wish i am first learner <br>";
      print "I am learning it for the fiest time <hr>";
      //print statement example2
      echo "<h3>4:b: print statement, example2</h3>";
      $text1 = "MY INTEREST";
      $text2 = "Thank";
      $text3 = "w3school.com for the guidance";
      $val1 = 150;
      $val2 = 50;
      $val3 = 200;
      print "<h5>" . $text1 . "</h5>";
      print "I would like to  " . $text2 . " a lot " . $text3 . "<br>";
      print $val1 + $val2 + $val3;
      ?>
</div>


<div style="background-color:indigo; width: 800px; margin: 10px 200px; padding: 10px 50px;">
      <!-- PHP Data Types -->
      <?php
      echo "<h1>5: PHP Data Types</h1>";
      //PHP String 
      echo "<h3>5:a: PHP String</h3>";
      $string1= "Welcome to my first PHP page!";
      $string2= "I am glad that I have got the opportunity!";
      $string3 = "I own endless gratitute to my king!";
      $string4= "Thank you! Mewangchog !";
      echo $string1;
      echo "<br>";
      echo $string2;
      echo "<br>";
      echo $string3;
      echo "<br>";
      echo $string4;
      echo "<hr>";
      ?>

      <?php
      //PHP Integer 
      echo "<h3>5:b: PHP Integer</h3>";
      $integer1 = 505;
      $integer2 = 100;
      $integer3 = 300;
      var_dump($integer1);
      echo "<br>";
      var_dump($integer2);
      echo "<br>";
      var_dump($integer3);
      echo "<hr>";
      ?>

    <?php
      //PHP Float
      echo "<h3>5:c: PHP Float</h3>";
      $integerx = 20.09;
      $integery = 100.50;
      $integerz = 508.02;
      var_dump($integerx);
      echo "<br>";
      var_dump($integery);
      echo "<br>";
      var_dump($integerz);
      echo "<hr>";
      ?>

    <?php
      //PHP Boolean
      echo "<h3>5:d: PHP Boolean</h3>";
      $booleanx = true;
      $booleany = false;
      var_dump($booleanx);
      echo "<br>";
      var_dump($booleany);
      ?>
</div>


<div style="background-color:pink; width: 800px; margin: 10px 200px; padding: 10px 50px;">
    <h1>10: PHP Form</h1>
    <form action="forms" method="POST">
    <label >Name:</label>
    <input type="text" name="name" placeholder="Enter your name here"><br><br>
    <label>E-mail:</label>
    <input type="text" name="email" placeholder="Enter your email address"><br><br>
    <label>Contact</label>
    <input type="text" name="contact" placeholder="Enter your Contact number"> <br><br>
    <input type="submit">
    </form>

    Welcome to you,
    <?php echo $_POST["name"];?>
    Your email address is: 
    <?php echo $_POST["email"];?>
    Your Contact no. is :
    <?php echo $_POST["contact"];?>
</div>
    

</body>
</html>