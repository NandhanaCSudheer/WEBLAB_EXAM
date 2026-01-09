<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
</head>
<body>
    <?php
    $con=mysqli_connect('localhost','root','','school');
    if(!$con){
        die("Connection failed!!!".mysqli_connect_error());
    }
    else{
        $sq="SELECT *from register";
        $res=mysqli_query($con,$sq);
    }
    ?>
    <center>
        <form method="POST">
        <table align="center" border="2">
            <tr><td>Rollno: </td><td>
                <select name="r">
                    <option value="">SELECT ROLLNO</option>
                <?php while($row=mysqli_fetch_assoc($res)){?>
                    <option value="<?php echo $row['rollno']; ?>">
                        <?php echo $row['rollno'];?>
                    </option>
                <?php } ?>
                </select>
                </td></tr>
        </table>
    </center>
     <input type="submit" name="submit" id="submit" value="SUBMIT">
        </form>

</body>
</html>

<?php
if(isset($_POST["submit"])){
    $con=mysqli_connect('localhost','root','','school');
    if(!$con){
        die("Connection failed!!!".mysqli_connect_error());
    }
    else{
        $r=$_POST["r"];
        $sq1="SELECT * FROM register where rollno='$r'";
        $result=mysqli_query($con,$sq1);
        if($row=mysqli_fetch_assoc($result)){
            echo "<table><tr><th>Name: </th><th>Rollno: </th><th>Division: </th></tr>";
            echo "<tr><td>{$row['name']}</td><td>{$row['rollno']}</td><td>{$row['div']}</td></tr></table>";
        }
    }
}
?>
