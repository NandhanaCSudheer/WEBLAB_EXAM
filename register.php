<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <center>
        <h1>Registration Page<br></h1>
       <form method="POST" name="sform" onsubmit="return func()"> 
        <table align ="center" border="2">
            <tr><Td><h2>Name: </h2><Td>
                <td><input type="text" name="n" id="n"></td>
            </tr>
            <tr><Td><h2>Rollno: </h2><Td>
                <td><input type="number" name="r" id="r"></td>
            </tr>
            <tr><Td><h2>Division: </h2><Td>
                <td><input type="text" name="d" id="d"></td>
            </tr>
       </table>
       <input type="submit" name="submit" id="submit" value="SUBMIT">
        </form>
    </center>
    <script>
        function func(){
            let n=document.getElementById("n").value;
             let r=document.getElementById("r").value;
              let d=document.getElementById("d").value;
              if(n===""||!isNaN(n)){
                alert("Name can't be empty and must be a string!!!");
                return false;
              }
              if(r===""||isNaN(r)){
                alert("Age can't be empty and must be a number!!!");
                return false;
              }
              if(d===""||!isNaN(n)){
                alert("Division can't be empty and must be a character!!!");
                return false;
              }
              return true;
        }
    </script>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $con=mysqli_connect('localhost','root','','school');
    if(!$con){
        die("Connection failed!!!".mysqli_connect_error());
    }
    $n=$_POST["n"];
    $r=$_POST["r"];
    $d=$_POST["d"];
    $sq="INSERT into register values('$r','$n','$d')";
    if(mysqli_query($con,$sq)){
        echo "<script>alert('Registration Successful');</script>";
    }
    else{
        echo "<script>alert('Registration Failed')</script>";
    }
}
?>