<?php
    $username="root";
    $servername="localhost";
    $password="";
    $dbname="innerfeeling";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        echo"error";
    }

    else
    {
        if($_SERVER['REQUEST_METHOD']==="POST")
    {
       
        $email=$_POST['email'];
        $password=$_POST['psw'];
        // $password=password_hash($password, PASSWORD_DEFAULT);
      
         
         
        $query="SELECT * FROM login WHERE email='$email';";
        $q=mysqli_query($conn,$query) or die("error in query");
        $row=mysqli_fetch_assoc($q);
        $p=$row['psw'];
        $e = $email['email']
        $password=password_verify($password, $p);
        $email=email_verify($email, $e);
        if($password)
       {
        echo "LOGIN SUCCESSFULL";
        header("Refresh:1;url=index.php");
       }
       else
       {
        echo"user does not exist";

       }
       
    }

    }
?>