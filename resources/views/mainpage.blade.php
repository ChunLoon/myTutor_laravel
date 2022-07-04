<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>MainPage</title>
    <style>
        @media screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }

        @media screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }

        body{
   
    background: #C63BFA;
}
    </style>

</head>

<body>
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>

    @endif
 <!-- interface -->
    <header class="w3-center w3-padding-large "style="background-color: #4070f4;">
        <h2 style="color:white">Subject List</h2>

        
    </header>
   
    <!-- <button class="w3-button w3-round w3-right  w3-margin" style="background-color: #4070f4;" onclick="document.getElementById('newsub').style.display= 'block';return false;">New Subject</button>
    </div> -->

    <a href="{{ url('newsubject') }}" class=" w3-button w3-round w3-right  w3-margin " style="background-color: #4070f4;"> <p style="color:white">New Subject </p></a>


    <div class="w3-padding" style='max-width:600px;margin:auto'>
        <table class="w3-table w3-striped w3-bordered">
            <thead>
              
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Learning Hours</th>
            </thead>
          
</table>
</div>

    <footer class="w3-footer w3-center w3-bottom " style="background-color: #4070f4;">  <p style="color:white">created by <span>Loon 278884</span> </p>
</footer>


 <!--<div id="newsub" class="w3-modal w3-animate-opacity">  

        <div class="w3-modal-content w3-round" style="width:500px">
            <header class="w3-row" style="background-color: #4070f4;"> <span onclick="document.getElementById
     ('newsub').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                <h4 class="w3-margin-left">New Subject Form</h4>
            </header>
            <div class="w3-padding">
                <form method="post" action="{{route('savesubject')}}">
                    {{csrf_field()}}
                    <p><input class="w3-input w3-round w3-border" type="text" name="subtitle" placeholder="Name"></p>
                    <p><input class="w3-input w3-round w3-border" type="text" name="subdes" placeholder="Description"></p>
                    <p><input class="w3-input w3-round w3-border" type="number" name="subprice" placeholder="Price" step="any"></p>
                    <p><input class="w3-input w3-round w3-border" type="text" name="subhours" placeholder="Learning Hours"></p>
                    </textarea></p>
                    <button class="w3-button w3-blue w3-round" type="submit">Insert</button>
                </form>
            </div>
        </div>
    </div>-->

</body>

</html>