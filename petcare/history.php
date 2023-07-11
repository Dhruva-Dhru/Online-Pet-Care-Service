<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking_history</title>
    
    <style>
      body{
            background-image:url("image100.jpg");
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
            justify-content: center;
            margin: auto;
            background-blend-mode:darken;
      }
      
      
      h1 {
        text-align: center;
        font-size: 36px;
        margin-bottom: 30px;
        color: #170230;
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
      


     .bookings{
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
    </style>
  </head>
    <body>

        <h1>Booking History</h1>
        <center>
        <div>
        <button type="submit" name="submit" onclick="window.location='dog.php'"  >Home</button>
    </div>
        </center>
       
    

        <?php
            session_start();
            $user_email=$_SESSION["id"];
            $con = mysqli_connect("localhost","root","","assignment"); 
            if (isset($_POST["delete_boarding"])) {
                $sql='DELETE FROM `boarding` WHERE `book_id` = "'.$_POST["delete_boarding"].'"';
                $result=$con->query($sql);

                if ($result) {
                    echo '<script>alert("deleted")</script>';
                }
            }
            $sql="SELECT * FROM boarding  WHERE Emailid= '$user_email'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($boarding=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'book_id : '.$boarding['book_id'].'<br>'; 
                 echo 'Emailid : '.$boarding['Emailid'].'<br>';
                 echo 'service : '.$boarding['service'].'<br>';
                 echo 'petname : '.$boarding['petname'].'<br>';
                 echo 'petbreed : '.$boarding['petbreed'].'<br>';
                 echo 'checkin : '.$boarding['checkin'].'<br>';
                 echo 'checkout : '.$boarding['checkout'].'<br>';
                
                 echo '<button type="submit" form = "delete_boarding" name ="delete_boarding" value="'.$boarding['book_id'].'">delete</button>';
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            echo '<form id="delete_boarding" action="" method="post">
        
            </form>';




            if (isset($_POST["delete_daycare"])) {
              $sql='DELETE FROM `daycare` WHERE `book_id` = "'.$_POST["delete_daycare"].'"';
              $result=$con->query($sql);

              if ($result) {
                  echo '<script>alert("deleted")</script>';
              }
          }
            $sql="SELECT * FROM daycare  WHERE Emailid= '$user_email'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($daycare=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'Emailid : '.$daycare['Emailid'].'<br>';
                 echo 'service : '.$daycare['service'].'<br>';
                 echo 'petname : '.$daycare['petname'].'<br>';
                 echo 'petbreed : '.$daycare['petbreed'].'<br>';
                 echo 'start : '.$daycare['start'].'<br>';
                 echo 'end: '.$daycare['end'].'<br>';
                 echo 'from_time: '.$daycare['from_time'].'<br>';
                 echo 'to_time: '.$daycare['to_time'].'<br>';
                 echo 'book_id : '.$daycare['book_id'].'<br>';
                 echo '<button type="submit" form = "delete_daycare" name ="delete_daycare" value="'.$daycare['book_id'].'">delete</button>';           
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            echo '<form id="delete_daycare" action="" method="post">
        
            </form>';


            if (isset($_POST["delete_dayout"])) {
                $sql='DELETE FROM `walking` WHERE `book_id` = "'.$_POST["delete_dayout"].'"';
                $result=$con->query($sql);
  
                if ($result) {
                    echo '<script>alert("deleted")</script>';
                }
            }
              $sql="SELECT * FROM walking  WHERE `Emailid`= '$user_email'";
              $result=$con->query($sql);
              echo '<center>';
              echo '<br><br>';
              if (mysqli_num_rows($result)>0) {
                  while ($walking=mysqli_fetch_array($result)) {
                  echo '<div class="bookings">';
                   echo 'Emailid  : '.$walking['Emailid'].'<br>';
                   echo 'service : '.$walking['service'].'<br>';
                   echo 'Pet_name : '.$walking['petname'].'<br>';
                   echo 'Pet_breed : '.$walking['petbreed'].'<br>';
                   echo 'startdate : '.$walking['startdate'].'<br>';
                   echo 'enddate : '.$walking['enddate'].'<br>';
                   echo 'distance : '.$walking['distance'].'<br>';
                   echo 'pickup_time :'.$walking['pickup_time'].'<br>';
                   echo 'book_id : '.$walking['book_id'].'<br>';
                   echo '<button type="submit" form = "delete_dayout" name ="delete_dayout" value="'.$walking['book_id'].'">delete</button>';  
                   echo '</div>';
                   echo '<br><br>';
                  }
              }
              echo '<form id="delete_dayout" action="" method="post">
          
              </form>';



             if (isset($_POST["delete_grooming"])) {
              $sql='DELETE FROM `grooming` WHERE `book_id` = "'.$_POST["delete_grooming"].'"';
              $result=$con->query($sql);

              if ($result) {
                  echo '<script>alert("deleted")</script>';
              }
          }
            $sql="SELECT * FROM groom_or_pool  WHERE Emailid= '$user_email'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($groom_or_pool=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'Emailid : '.$groom_or_pool['Emailid'].'<br>';
                 echo 'service : '.$groom_or_pool['service'].'<br>';
                 echo 'petname : '.$groom_or_pool['petname'].'<br>';
                 echo 'petbreed : '.$groom_or_pool['petbreed'].'<br>';
                 echo 'app_date: '.$groom_or_pool['app_date'].'<br>';
                 echo 'app_time : '.$groom_or_pool['app_time'].'<br>';
                 echo 'book_id : '.$groom_or_pool['book_id'].'<br>';
                 echo '<button type="submit" form = "delete_grooming" name ="delete_grooming" value="'.$groom_or_pool['book_id'].'">delete</button>';  
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            echo '<form id="delete_grooming" action="" method="post">
        
            </form>';

            
            
            echo '</center>';

              
        ?>


         </body>
</html>