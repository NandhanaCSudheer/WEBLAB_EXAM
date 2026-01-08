<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Test</title>
</head>
<body>
    <center><h1>Online Test</h1>
    <h2>Maths</h2>
    <h3>
        <form method="POST" >
        Q1.Question 1: What is 150% of 100?<br>
         A.<input type="radio" id="a1" name="a1"> 150 <br>
         B.<input type="radio" id="a2" name="a1"> 50<br>
         C.<input type="radio" id="a3" name="a1"> 100 <br>
         D.<input type="radio" id="a4" name="a1"> 200 <br><br>
        Q2.Question 2: What is 8 divided by 2?<br>
         A<input type="radio" id="b1" name="b1"> 4 <br>
         B<input type="radio" id="b2" name="b1"> 16<br>
         C<input type="radio" id="b3" name="b1"> 6 <br>
         D<input type="radio" id="b4" name="b1"> 10<br><br>
         Q3.Question 3: What is 8^2?<br>
         A<input type="radio" id="c1" name="c1"> 16 <br>
         B<input type="radio" id="c2" name="c1"> 64<br>
         C<input type="radio" id="c3" name="c1"> 256 <br>
         D<input type="radio" id="c4" name="c41"> 18<br><br>
         <input type="button" name="total" id="total" value="Calculate Total" onclick="cal1()"></button>
         <input type="submit" id="submit" name="submit" value="submit">
         <input type="text" id="m" name="m">
         </form>
         <center>
            <a href="onlinetestpart2.php">NEXT</a>
         </center>
    </h3>
    </center>
    <script>
        function cal1(){
            let m=0;
            if(document.getElementById("a1").checked){
                m++;
            } 
            if(document.getElementById("b1").checked){
                m++;
            } 
            if(document.getElementById("c2").checked){
                m++;
            } 
            document.getElementById("m").value=m;
        }
        </script>
</body>
</html>
<?php

if(isset($_POST["submit"])){
    $_SESSION["m"]=$_POST["m"];
}
?>