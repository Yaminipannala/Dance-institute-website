<?php  
 
include("db.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" type="text/css" href="thankyou.css">
    <style>
       body{
    display:flex;
    justify-content: center;
    align-items: center;
    height: 10%;
    width: 100%;
   
    background-color: gray;

    background-position: center;
    background-size: cover;
   
    margin-right: 100px;
}
button {
            background-color: gray; /* Gray background */
            border: none; /* Remove border */
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button a {
            color: white; /* White text */
            text-decoration: none; /* Remove underline */
            font-size: 16px;
            font-family: Arial, sans-serif;
        }

        button:hover {
            background-color: #555; /* Darker gray on hover */
        }

        button a:hover {
            color: white; /* Keep text white on hover */
        }
        
        .thank-you-message {
            background-color: #fff;
            padding: 150px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-left: -30px;
            margin-top: 120px;
            width: 800px;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="thank-you-message">
        <h1>Thank You!</h1>
        <p>We will reach out to you soon.</p>
       <button> <a href="home.php" target="_parent">Back to Home</a></button>
    </div>
</body>
</html>
