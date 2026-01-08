<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Test</title>
</head>
<body>
    <h2>CS</h2>
    <h3>
        <form method="POST" >
        Q1.Question 1: Which of the following is an input device?<br>
         A.<input type="radio" id="a1" name="a1"> Monitor <br>
         B.<input type="radio" id="a2" name="a1"> Printer<br>
         C.<input type="radio" id="a3" name="a1"> Keyboard <br>
         D.<input type="radio" id="a4" name="a1"> Speaker <br><br>
        Q2.Question 2: Compiter works on ___?<br>
         A<input type="radio" id="b1" name="b1"> Water <br>
         B<input type="radio" id="b2" name="b1"> Air<br>
         C<input type="radio" id="b3" name="b1">Feelings <br>
         D<input type="radio" id="b4" name="b1"> Electricity<br><br>
         Q3.Question 3: A computer is a ____?<br>
         A<input type="radio" id="c1" name="c1"> Toy <br>
         B<input type="radio" id="c2" name="c1"> Human<br>
         C<input type="radio" id="c3" name="c"> Machine<br>
         <input type="button" name="tot" id="tot" value="Calculate Total" onclick="cal2()"></button>
         <input type="submit" id="sub" name="sub" >

            <input type="text" id="c" name="c"></h3>
            </form>
    </center>
    <a href="onlinetest.html">PREV</a>
    <script>
        function cal2(){
            let c=0;
            if(document.getElementById("a3").checked){
                c++;
            } 
            if(document.getElementById("b4").checked){
                c++;
            } 
            if(document.getElementById("c3").checked){
                c++;
            } document.getElementById("c").value=c;
        }
        </script>
</body>
</html>
<?php
    if(isset($_POST["sub"])){
        $m=$_SESSION["m"];
    $c=$_POST["c"];
    $t=$m + $c;
    echo "Marks in Maths: ".$m;
    echo "Marks in CS: ".$c;
    echo "Total marks: ".$t;
}

?>