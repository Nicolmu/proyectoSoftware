<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titulo")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/script.js') }}"></script>


</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img class="d-inline-block align-top"
            src="{{asset ('img/logo-de-Sena-sin-fondo-Blanco-300x300.png') }}" alt="Logo Sena" width="60" height="60">
            Sena</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Sedes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
            Sobre Nosotros!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item active">
          <a class="nav-link disabled active">Disabled</a>
        </li>
      </ul>
      <form class="d-flex my-2" role="search">
          <input class="form-control me-5" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-0 my-sm-1" type="submit">Search</button>
      </form>
    </div>
</div>
</nav>
</header>


    @yield("contenido")
    <th>
    <th>
     
    <footer class="bg-success text-white">
    <div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
        <div class="col-12">
            <div class="row row-2">
                <div class="col-sm-3 text-md-center"><h5><span> <i class="fa fa-firefox text-light" aria-hidden="true"></i></span><b>Sena Cide</b></h5></div>
                <div class="col-sm-3  my-sm-0 mt-5"><ul class="list-unstyled"><li class="mt-0">Platform</li><li>Help Center</li><li>Security</li></ul></div>
                <div class="col-sm-3  my-sm-0 mt-5"><ul class="list-unstyled"><li class="mt-0">Customers</li><li>Use Cases</li><li>Customers Services</li></ul></div>
                <div class="col-sm-3  my-sm-0 mt-5"><ul class="list-unstyled"><li class="mt-0">Company</li><li>About</li><li>Careers- <span class="Careers">We're-hiring</span></li></ul></div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-0 pt-0 row-1 mb-0  px-sm-3 px-2">
        <div class="col-12">
            <div class="row my-4 row-1 no-gutters">
                <div class="col-sm-3 col-auto text-center"><small>&#9400; Centro Industrial y de Desarrollo Empresarial SENA</small></div><div class="col-md-3 col-auto "></div><div class="col-md-3 col-auto"></div>
                <div class="col  my-auto text-md-left  text-right "> <small> hello@misena.com <span><img src="https://i.imgur.com/TtB6MDc.png" class="img-fluid "  width="25"></span> <span><img src="https://i.imgur.com/N90KDYM.png" class="img-fluid "  width="25"></span></small>  </div>
            </div>
        </div>
    </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
