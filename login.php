<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <center>
        <h1>Admin Login Page<br></h1>
       <form method="POST" name="sform" onsubmit="return func()"> 
        <table align ="center" border="2">
            <tr><Td><h2>User Name: </h2><Td>
                <td><input type="text" name="uname" id="uname"></td>
            </tr>
            <tr><Td><h2>Password: </h2><Td>
                <td><input type="password" name="pass" id="pass"></td>
            </tr>
       </table>
       <input type="submit" name="submit" id="submit" value="SUBMIT">
        </form>
    </center>
    <script>
        function func(){
            let n=document.forms["sform"]["uname"].value;
             let p=document.forms["sform"]["pass"].value;
              if(n===""||!isNaN(n)){
                alert("Name can't be empty and must be a string!!!");
                return false;
              }
              if(p===""){
                alert("Password can't be empty!!!");
                return false;
              }
              else if(p.length<6){
                alert("Password muist contain atleast 6 digits!!!");
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
    $n=$_POST["uname"];
    $p=$_POST["pass"];
    $sq="SELECT * from login where username='$n' AND password='$p'";
    $result=mysqli_query($con,$sq);
    if(mysqli_num_rows($result)==1){
        echo "<script>alert('Login Successfully');window.location.href='register.php'</script>";
    }
    else{
        echo "<script>alert('Login failed');<script>";
    }
}
?>