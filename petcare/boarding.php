<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
      body{
        background-image:url("N.jpg");
        background-size: cover;
        background-repeat:no-repeat;
          background-attachment:fixed;
            justify-content: center;
            margin: auto;
            background-blend-mode:darken;
      }
      form {
        max-width: 300px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
        font-size: 16px;
      
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        background: transparent;
        border: 2px solid ;
        border-color:wheat;
        border-radius: 20px;
        backdrop-filter: blur(5px);
       
      }
      
      h1 {
        text-align: center;
        font-size: 36px;
        margin-bottom: 30px;
        color: #0b0215;
      }
      
      label {
        display: block;
       
        font-weight: bold;
        color: #07010f;
      }
      
      input[type="text"],
      select,
      input[type="number"] {
        display: block;
        width: 70%;
        padding: 5px;
        border: none;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
        background-color: #ecf0f1;
        border: 1px solid #bdc3c7;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: #01080f;
      }
      
      select {
        background-image: linear-gradient(to bottom, #3498db, #2980b9);
        color: #fff;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      
      select option {
        background-color: #fff;
        color: #2c3e50;
      }
      
     button{
      width: 40%;
      background-color: #34a0e2;
      border-radius: 5px;
      padding: 2px;
      box-shadow: wheat;
      border-color: #2980b9;



     }
    </style>
  </head>
    <body>
     
        <div>
          <h1>Pet Boarding Bookings</h1>
          <form action="" method="POST">
            <label for="name">Pet Service:</label>
            <input type="text" id="service"   placeholder="Enter pet service" name="service"><br>
            <label for="name">Pet Name:</label>
            <input type="text" id="name"  placeholder="Enter pet name" name="petname"><br>
            <label for="breed">Pet Breed:</label>
            <input type="text" id="breed" name="petbreed" placeholder="Enter pet breed"><br>
            <label for="age">Pet Age:</label>
            <input type="number" id="age" name="petage" placeholder="Enter petage"><br>
            <label for="checkin_date">Check-in Date:</label>
            <input type="date" id="checkin_date" name="checkin" ><br><br>
            <label for="checkout_date">Check-out Date:</label>
            <input type="date" id="checkout_date" name="checkout" ><br><br>
            <label for="food">Food:</label>
            <select id="food" name="food" placeholder="Enter food type">
              <option value="dry">Dry food</option>
              <option value="wet">Wet food</option>
              <option value="both">Both dry and wet food</option>
            </select><br>
            <label for="special_needs" aria-placeholder="Enter special_needs">Special Needs:</label>
            <textarea id="special_need" name="special_need"></textarea><br><br>

            <button type="submit" name="submit"  > Submit</button>
          </form>
        </div>
 
      
        <?php
        session_start();
        $user_email=$service = $name = $breed = $age = $checkin = $checkout = $food = $need = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $user_email = $_POST['Emailid'];
            $service = $_POST['service'];
            $name = $_POST['petname'];
            $breed = $_POST['petbreed'];
            $age = $_POST['petage'];
            $checkin = $_POST['checkin'];
            $checkout=$_POST['checkout'];
            $food= $_POST['food'];
            $need= $_POST['special_need'];
            $user_email=$_SESSION['id'];

            $con = mysqli_connect("localhost","root","","assignment");                      
       
			        $query = "INSERT INTO `boarding` (service, petname,petbreed, petage, checkin,checkout,food,special_need,Emailid) VALUES ( '$service','$name', '$breed', '$age', '$checkin' ,'$checkout', '$food', '$need','$user_email')";
                        $result = mysqli_query($con,$query);

                        if($result){
              echo "<h2 style='color:blue; margin-left :10cm;'> Booking successful</h2>";
              header("Location:success.php");         
			            }
                                else
                             {
                                echo ("Fail"); 
                             }
                     } 
        ?>

         </body>
</html>