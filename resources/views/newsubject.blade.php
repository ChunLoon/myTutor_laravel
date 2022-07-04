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

    <body>
    <header class="w3-center w3-padding-large "style="background-color: #4070f4;">
        <h2 style="color:white">New Subject Registration </h2>
        <a href="{{ url('mainpage') }}" class=" w3-button w3-round w3-right  w3-margin "> <p style="color:white">Back</p></a>
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
         </body>