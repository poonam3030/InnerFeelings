<?php 

$_ServerName = "localhost";
$UserName = "root";
$dbpassword = "";
$dbname = "innerfeeling";

$Conn = mysqli_connect($_ServerName,$UserName,$dbpassword,$dbname);
if(!$Conn){
   echo"Connection Failure";

}
else{
    echo "Connection Established";
}

if($_SERVER['REQUEST_METHOD']=== "POST")
{
    
    $a = $_POST['firstname'];
    $b = $_POST['Lastname'];
    $c = $_POST['email'];
    $d = $_POST['message'];
$sql = "INSERT INTO messagebox(firstname,Lastname,email,message)VALUES ('$a','$b','$c','$d')";
 
 if(mysqli_query($Conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
} else{
    echo "ERROR: Hush! Sorry $sql. ". mysqli_error($Conn);
    
}
header("Refresh:5;url = messageform.php");
}
?>
