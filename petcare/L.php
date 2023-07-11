<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            display: grid;
            background-image:url("HH.jpg");
            background-blend-mode:darken;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
            justify-content: center;
            margin: auto;
            background-color: rgba(237, 194, 52, 0.861);
            
        }
       
        
         .dd {
            display: grid;
            background-color: aqua;
            justify-content: center;
            width: 300px;
            height: 300px;
            margin-left: 2cm;
            background-color:rgba(58, 41, 2, 0.016);
            background: transparent;
            border: 2px solid rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            border-radius: 20px;
               
            box-shadow: 15px 10px 10px 7px rgb(53, 45, 2);
        }
        input{
            font-size: 16px;
            background-color: #ecf0f1;
            border: 1px solid #bdc3c7;
            border-radius: 10px;
            padding: 3px;
        }
        button{  background-color: #ecf0f1;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            padding: 5px;

        }
        h1{color:white;
           
            text-align: center;}
        #l{ margin-left: 2cm;
        color:whitesmoke;}
    </style>
</head>
<body >
    <h1 id=l>
        Pet Care Center
    </h1>
    <div class="dd"> 
        <form role="form"  name="first" action="" method="post">
            <div class="center">
                
                <h1>Login</h1>
           

                <input type="email"  style="color: blue" id="Eid" placeholder=" Enter Emailid" name="Emailid" required> <br/><br>

            
                <input type="password"  id="pwd" placeholder="enter password" name="Password" required><br/>
                <br/>
                <button type="submit"  name="submit" value="Register" style="margin-left:2cm" >  Login  </button>
                <br/>
                
                    
            </div>
            
        </form>
        <div class="=center"> <h2 style ="color:white">Click here to  Register </h2>
             <button onclick="window.location='R.php'" > Click here</button></div>
        
        </div>
    </div>

    <?php
// put your code here
if(isset($_POST['submit'])){
    $user_email = $_POST['Emailid'];	
           
    $Password = $_POST['Password'];
            
            
    $con = mysqli_connect("localhost","root","","assignment");
            
    if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " .mysqli_connect_error();
        }
            
            
    $query = "SELECT * FROM regsiter WHERE Emailid='$user_email' and Password='$Password'";
        $result = mysqli_query($con,$query);
        if($result)
        {
            if(mysqli_num_rows($result)>0)
                 {
                    session_start();
                    $_SESSION['id'] = $user_email;
                    header("Location: dog.php");
                     }
            else{
                echo("Invalid credenatials");
                }
            }                     
        else{
            echo("Invalid credenatials");
            }
    }                   
?>
</body>
</html>