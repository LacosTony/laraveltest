<!DOCTYPE html>
<html lang="en">
  <head>
    <title>test</title>
  </head>

  <body id="body">
    
    <div class="content-container">

           <!--//@yield('content')
           -->
           <img class="presa-img box-shadow no-drag" src="pictures/01.jpg" alt="slide 1"/> 

        @foreach ($elements as $element)
          <p>ceci est l'element : {{ $element->title_element }} dont le path est : {{ $element->path_file }}</p>
          <!--<img class="presa-img box-shadow no-drag" src="pictures/01.jpg"/>-->
        @endforeach
      
      
      
    </div>


  </body>

</html>