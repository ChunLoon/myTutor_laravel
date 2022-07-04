<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    
    
    <title>My tutor</title>


    

<style>

        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,300;1,400;1,500&display=swap');

:root{
  --pink:#FF046F;
  --violet:#C63BFA;
}

*{
    font-family: 'Roboto', sans-serif;
    text-transform: capitalize;
    text-decoration: none;
    outline: none;
    margin: 0; padding: 0;
    box-sizing: border-box;
  }

*::selection{
  background:var(--pink);
  color:#fff;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
}

body{
    background: #C63BFA;
}

  
  .header-active{
    top:0;
    width: 100%;
    border-radius: 0;
    box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
  }
  
 
  .content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    padding-top: 14rem;
    padding-bottom: 8rem;
    text-align: center;
  }
  
  .content h1{
    font-size: 5rem;
    color: #fff;
    padding:0 1rem;
    text-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
    text-transform: uppercase;
  }
  
 .content p{
    font-size: 2rem;
    color:#eee;
    padding:1rem 25rem;
  }
  
  
  
  
  .footer{
    text-align: center;
  }
  
    
  @media (max-width:768px){
  
  html{
    font-size: 55%;
  }

}
    </style>


</head>


<body >





<div class="content">
 
    <h1>My Tutor</h1>
    <p>Lorem ipsum dolor sit amet. Est alias perspiciatis non accusamus accusantium ut facilis assumenda et illum tempora ex omnis maxime eos maxime adipisci qui dolor corrupti! Ea possimus odit et quis soluta qui illum consequatur aut Quis quasi. </p><p>Qui autem natus vel reprehenderit consequatur et deserunt modi. Ut maiores consequatur vel quibusdam molestiae est repellendus sequi et earum laudantium. </p><p>A ducimus placeat et atque quibusdam quo omnis suscipit hic quos quia a error nesciunt aut quia inventore vel rerum culpa! Qui illum modi est animi officia et deleniti illum. Est autem saepe et deleniti voluptatibus non quasi accusantium ea aliquid excepturi? Aut voluptas modi aut molestiae animi At incidunt praesentium.  </p>

    <div class=" w3-button " style="background-color: #4070f4;">
    <a href="{{ url('login') }}"> <p style="color:white">Login</p></a>
    </div>

    <p> </p>
    <div class=" w3-button " style="background-color: #4070f4;">
      <a href="{{ url('registration') }}"> <p style="color:white"> Register</p></a>
      </div>
</div>
 

<footer class="w3-footer w3-center w3-white w3-bottom">
        <p>created by <span>Loon 278884</span> </p>
    </footer>


    </body>
</html>
