<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}


body{
  
    background: #C63BFA;
}


    </style>
  
</head>


<body >
    

 

<header>
    <div class="w3-content w3-padding  ">
      <div class="w3-card  w3-padding w3-white " >
        <header class=" w3-padding"  style="background-color: #4070f4;">
        <a href="{{ url('login') }}" class=" w3-button w3-right "> <p style="color:white"> Login </p></a>
          <h3 style="color:white">Registration Form</h3>

        </header>


        
       <form action=" {{route('register.post') }}" method="post">
        {{csrf_field()}}
           <label for="name">Name</label>
           <p><input id="name" class="w3-input w3-round w3-border" type=
              "name" name="name" required></p>
           @if ($errors->has('name'))          
             <span class="text-danger">{{ $errors->first('name') }}</span>

            
           @endif
           <label for="email">Email</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
             "email" name="email" required></p>
           @if ($errors->has('email'))
             <span class="text-danger">{{ $errors->first('email') }}</span>
        

           @endif
           <label for="password">Password</label>
           <p><input id="password" class="w3-input w3-round w3-border" type=
              "password" name="password" required></p>
           @if ($errors->has('password'))
             <span class="text-danger">{{ $errors->first('password') }}</span>
     
             @endif         
 <label for="phone">Phone Number</label>
           <p><input id="phone" class="w3-input w3-round w3-border" type=
              "phone" name="phone" required></p>
              @if ($errors->has('phone'))
             <span class="text-danger">{{ $errors->first('phone') }}</span>

             @endif         
 <label for="address">Address</label>
           <p><textarea id="address" class="w3-input w3-round w3-border"  type=
              "address" name="address" required></textarea></p>
              @if ($errors->has('address'))
             <span class="text-danger">{{ $errors->first('address') }}</span>

             @endif         
 <label for="state">State</label>
           <p><input id="state" class="w3-input w3-round w3-border" type=
              "state" name="state" required></p>
              @if ($errors->has('state'))
             <span class="text-danger">{{ $errors->first('state') }}</span>


           @endif
           <button class="w3-button w3-round" style="background-color: #4070f4;"> <p  style="color:white">Register </p></button>
         </form>
      </div>
    </div>
   




   
</body>


</html>