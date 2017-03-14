<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="initial-scale=1.0,width=device-width">

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta charset="UTF-8" />

    <link rel="stylesheet" type="text/css" href="assets/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>

  </head>

  <body id="body">

    <div class="content-container">
        <img src="pictures/01.jpg" alt="test"/>
        @foreach ($elements as $element)
          <p>ceci est l'element : {{ $element->title_element }} dont le path est : {{ $element->path_file }}</p>
          
        @endforeach

    </div>

  </body>

</html>