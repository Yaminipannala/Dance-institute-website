<?php  
session_start();  
include("db.php");  

if ($_SERVER['REQUEST_METHOD'] == "POST")  
{  
       
$email = $_POST['email'];  
$password = $_POST['pass']; 



if (!empty($email) && !empty($password) && !is_numeric($email))  
{  
    $query = "select * from saiabhinaya where email = '$email' limit 1";  
    $result = mysqli_query($con, $query); 

    if($result){

    

    
    
    if ($result && mysqli_num_rows($result) > 0)  
    {  
        $user_data = mysqli_fetch_assoc($result);  
        
        if ($user_data['pass'] == $password)  
        {  
            header("Location: home.php");
            exit(); 
            
        }  
    }  
}
echo "<script type='text/javascript'> alert('wrong username or password')</script>";  
}
else{
    echo "<script type='text/javascript'> alert('wrong username or password')</script>";  
}
}
  ?> 



<!DOCTYPE html>
<html>
<head>
    
<title>www.wedance.com</title>
<link rel="stylesheet" type="text/css" href="hie.css">

<style>

</style>
</head>
<body>
 <section>
    <div class="form-box">
        <div class="form-value">
            <form method="POST">
                
            <h1>Login</h1>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="email" name="email" required>
                <label for="">Email id</label>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>

                <input type="password" name="pass" required>
                <label for="">Password</label>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>
                
            </div>
            
            <div class="register">
                <p1>Dont Have a Account? <a href="register.php" >Register</a></p1>
            </div>
            <button>login</button>
            </form>
        </div>

    </div>
 </section>   
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>                                                                                                                                                                                                                                                                              </p2></pre>
</body>
</html>