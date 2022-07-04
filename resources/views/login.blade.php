<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');



.footer{
    text-align: center;
  }
  

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #C63BFA;
}

.container{
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin: 0 20px;
}

.container .forms{
    display: flex;
    align-items: center;
    height: 440px;
    width: 200%;
    transition: height 0.2s ease;
}


.container .form{
    width: 50%;
    padding: 30px;
    background-color: #fff;
    transition: margin-left 0.18s ease;
}

.container.active .login{
    margin-left: -50%;
    opacity: 0;
    transition: margin-left 0.18s ease, opacity 0.15s ease;
}


.container.active .forms{
    height: 600px;
}
.container .form .title{
    position: relative;
    font-size: 27px;
    font-weight: 600;
}



.form .input-field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 30px;
}

.input-field input{
    position: absolute;
    height: 100%;
    width: 100%;
    padding: 0 35px;
    border: none;
    outline: none;
    font-size: 16px;
    border-bottom: 2px solid #ccc;
    border-top: 2px solid transparent;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid){
    border-bottom-color: #4070f4;
}

.input-field i{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 23px;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) ~ i{
    color: #4070f4;
}

.input-field i.icon{
    left: 0;
}
.input-field i.showHidePw{
    right: 0;
    cursor: pointer;
    padding: 10px;
}

.form .checkbox-text{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
}

.checkbox-text .checkbox-content{
    display: flex;
    align-items: center;
}

.checkbox-content input{
    margin: 0 8px -2px 4px;
    accent-color: #4070f4;
}

.form .text{
    color: #333;
    font-size: 14px;
}

.form a.text{
    color: #4070f4;
    text-decoration: none;
}
.form a:hover{
    text-decoration: underline;
}

.form .button{
    margin-top: 35px;
}

.form .button input{
    border: none;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 6px;
    background-color: #4070f4;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button input:hover{
    background-color: #265df2;
}

.form .login-signup{
    margin-top: 30px;
    text-align: center;
}

input[type="checkbox"] {
    -webkit-appearance: checkbox;
       -moz-appearance: checkbox;
            appearance: checkbox;
    display: inline-block;
    width: auto;
  }

</style>





</head>
<body class="antialiased"> <!-- localhost javascript-->
    @if (session('save'))  <!-- session-->
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">My Tutor Login Form</span>

                <form name="loginForm" action="{{route('login.post')}}" method="post" accept-charset="UTF-8">

                {{csrf_field()}}
                        <label for="email">Email</label>
                        <p><input id="email" class="w3-input w3-round w3-border" type="email" name="email" required></p>
                        @if ($errors->has('email'))
                        <span class="w3-red">{{ $errors->first('email') }}</span>

                        @endif
                        <label for="password">Password</label>
                        <p><input id="password" class="w3-input w3-round w3-border" type="password" name="password" required></p>
                        @if ($errors->has('password'))
                        <span class="w3-red">{{ $errors->first('password') }}</span>
                        
                        @endif
                     <p>
                    <input class="w3-check" name="rememberme" type="checkbox" id="idremember">
                    <label>Remember Me</label>
                </p>

                       <div>
                        <a href="#" class="text">Forgot password?</a>
                    </div>
                    
                    <div class="input-field button">
                        <input  type="submit" name="submit" id="idsumit">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="{{ url('registration') }}" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>



</body>

</html>