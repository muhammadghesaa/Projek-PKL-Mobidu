<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman | Home</title>

  {{-- Bootstrap css --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  {{-- My css --}}
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
</head>

<body>

  {{-- Nav bar --}}
  <nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand color-white text-light" href="#">ManEmp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Workspaces
            </a>
            <ul class="dropdown-menu">

              <li>
                <hr class="dropdown-divider">
              </li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Recent
            </a>
            <ul class="dropdown-menu">

              <li>
                <hr class="dropdown-divider">
              </li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Projects
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Projects</a></li>
              <li><a class="dropdown-item" href="#">Create</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>

            </ul>
          </li>
        </ul>
        {{-- nav search --}}
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        {{-- end nav search --}}
      </div>
    </div>
  </nav>



  {{-- End Navbar --}}

  @yield('main')




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
</body>

</html>