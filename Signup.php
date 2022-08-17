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
        //$password=password_hash($password, PASSWORD_DEFAULT);

        $qcheck="Select email from register WHERE email='$email';"; //query
        $qemailCheck=mysqli_query($conn,$qcheck);// query->database
        $row=mysqli_fetch_assoc($qemailCheck);//value return 0->does not exsist else 1
        
        if($row)
        {

            $counter=1;   
            // header("Refresh:1;url=register.php");            

        }

    
        else
        {
            $query="INSERT INTO register(email, password) VALUES ('$email','$password')";
            mysqli_query($conn,$query)or die("failed");
            
            // header("Refresh:1;url=login.php");
        }
        
    }
    }


?>