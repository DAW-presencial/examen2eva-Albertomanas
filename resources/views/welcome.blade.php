<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Inicio</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand text-success">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/tutores') }}">Tutores</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/tutores/create') }}">Crear tutor</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main role="main">

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing p-5">

        <!-- Three columns of text below the carousel -->
        <div class="row p-5">
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://img.icons8.com/cute-clipart/128/000000/github.png" alt="github"/>
            <h2>GitHub</h2>
            <p>Repositorio del examen</p>
            <p><a class="btn btn-success" href="https://github.com/DAW-presencial/examen2eva-Albertomanas" role="button">Ir &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://img.icons8.com/cute-clipart/128/000000/code-fork.png" alt="server remoto"/>
            <h2>Servidor remoto</h2>
            <p>Servidor remoto de clase</p>
            <p><a class="btn btn-success" href="http://albertomanas.hopto.org/trabajos/" role="button">Ir &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle pb-2" src="https://img.icons8.com/dusk/124/000000/help.png" alt="documentación Laravel"/>
            <h2>Documentación Laravel</h2>
            <p>Documentación de Laravel</p>
            <p><a class="btn btn-success" href="https://laravel.com/docs/8.x/readme" role="button">Ir &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </main>
  </body>
</html>
