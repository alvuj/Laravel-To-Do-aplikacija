<html>
    <head>
        <title>To-do</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <nav class="container navbar navbar-expand-lg navbar-light text-white" style="background-color: #6351CE;>
            <a class="navbar-brand" href="/">To do</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link text-white" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="tasks/create">Novi zadatak</a>
                </li>
                <li class="nav-item">
                  {{-- <a class="nav-link" href="#">Svi tasks</a> --}}
                </li>
                <li class="nav-item">
                  {{-- <a class="nav-link disabled" href="#">Disabled</a> --}}
                </li>
              </ul>
            </div>
          </nav>
        <div class="container">
        @yield('content')
    </div>
    </body>
    
    
    <div class="container my-5">


    <section class="">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #6351CE;">
      <!-- Grid container -->
      
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: #6351CE;">
        © 2024 Copyright: AV
        <a class="text-white" href="https://github.com/alvuj">Github</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>
    
  </div>
  <!-- End of .container -->
    </html>