<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: grid;
            background-color:rgb(137, 232, 232);
            border-radius: 10px;
            box-shadow: 15px 10px 10px 0px rgb(142, 241, 218);
            background-repeat:no-repeat;
            background-position:center top;
            background-attachment:fixed;
            min-height: 100vh;
            justify-content: center;    
        }
        #dd{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .dd1{
            width: 200px;
            margin: 70px;
            position: relative;
            text-align: center;
        }


        .jj{opacity:0.5;
        margin-left: 0.3cm;;
        }


        .mm{  border-radius: 10px;
            box-shadow: 15px 10px 10px 0px rgb(52, 88, 79);
        }

        .container{
            position: relative;
            text-align: center;
            color: dark green;
        }

        .bf{
            position: absolute;
            bottom: 80px;
            left: 40px;
            font-style:italic;
            color:rgba(13, 7, 97, 0.737) ;
        

        }
        .fb{position: absolute;
            top: 30px;
            left: 40px;

        }
        

    </style>
</head>
<body>
    <div class="container">
        <img src="aajpg.jpg" alt="" class=jj width="100%;">
        <div  class="fb"> 
            <div style="margin-right: 25cm;"> <button onclick="window.location='dog.php' ">Home</button>
            <button  onclick="window.location='l.php'">logout</button>
            <button  onclick="window.location='history.php'">history</button>
            <button  onclick="window.location='feedback.php'">feedback</button>
        </div></div>
        <div class="bf">
            
        <h2 >Welcome to our pet care website! We are dedicated to providing you with information 
            and resources to help you take the best possible care of your furry friends. 
            Whether you're a new pet owner or an experienced one, our website is designed to offer helpful tips, advice,
             and guidance on a wide range of pet care topics.<br/><br/>
             Our team of experienced writers and pet experts is dedicated to providing accurate and up-to-date information on all aspects of pet care.
              We understand that pets are an important part of our lives, and we want to help you give your furry companions the best possible care and attention they deserve.
            <br/><br/>we will provide pet services such as Pet boarding,Daycare,Pet's day out,Pool Sessions,Pet grooming.
            </h2></div>
            <div><br>
        <h1 style=" font-style:oblique;color:rgb(5, 5, 62) ;">Click on the below image for a desired pet services..........</h1>
    </div>
    </div>
    
   
    <div id=dd>

        <div class="dd1">
           <img src="boarding.jpeg" onclick="window.location='boarding.php'"  class=mm width="200px";>
            <h1 style="margin: 0px;color: dark green;">Pet boarding</h1>
            <h3 style="margin: 0px;color: dark green">Perfect if your pet need overnight pet care</h3>
        </div>
        

        <div class="dd1">
            <img src="Daycare.jpg" onclick="window.location='daycare.php'" width="200px"  class=mm>
            <h1 style="margin: 0px;color: dark green">Daycare</h1>
            <h4 style="margin: 0px;color: dark green">Daytime pet care in your pet sitter's pet friendly home</h4>
        </div>

        <div class="dd1">
            <img src="Petout.jpg" onclick="window.location='petout.php'" width="200px"  class=mm>
            <h1 style="margin: 0px;color:dark green">Pet's day out</h1>
            <h4 style="margin: 0px;color:dark green">Pet walking for certain distance </h4>
        </div>

        <div class="dd1">
            <img src="Pooling.jpg"  onclick="window.location='pooling.php'" width="200px"  class=mm >
            <h1 style="margin: 0px;color: dark green">Pool Sessions</h1>
            <h4 style="margin: 0px;color: dark green">Turns out pets like the water just as much as we</h4>
        </div>

        <div class="dd1" >
            <img src="grooming.jpg" onclick="window.location='grooming.php'" width="200px" height="50%"  class=mm>
            <h1 style="margin: 0px;color: dark green">Pet grooming</h1>
            <h4 style="margin: 0px;color:dark green">Provide a new look for your pet</h4>
        </div>
       
    </div>
</body>
</html>
