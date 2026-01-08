<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<body>
    <center>
        <form method="POST">
        <h1>Enter your Electricity Bill: </h1><input type="text" id="bill" name="bill"><br>
        <input type="submit" id="submit" name="submit" value="Generate Bill"> 
</form>
    </center>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $u=$_POST["bill"];
    $base=10;
    $r1=0.15;
    $r2=0.20;
    $bill=($u<=100)?$base+($u*$r1):
    $base+($r1*100)+(($u-100)*$r2);
    echo "<center>The Amount is: ".$bill."</center>";
}
?>