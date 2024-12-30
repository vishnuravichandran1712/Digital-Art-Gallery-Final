<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstname=$_POST['fName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cnfpassword=$_POST['conform-password'];
    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
    elseif( $cnfpassword!= $password) {
        echo "Password Not Matches ";
    }
     else{
        $insertQuery="INSERT INTO users(firstname,email,password)
                       VALUES ('$firstname','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: indx.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>