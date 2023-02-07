<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title> @yield('title') </title>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Office</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              {{-- / --}}
              @if (Auth::user()->role == 1)
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/employees" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Employee
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/employees">Employee Data</a></li>
                  <li><a class="dropdown-item" href="/attendences-report">Attandances Data</a></li>
                  <li><a class="dropdown-item" href="/salarys">Salary Data</a></li>
                  <li><a class="dropdown-item" href="/leavepermits">Leave Permition</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/departements">Departements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Evaluation</a>
              </li>
              @endif
              {{-- / --}}
              @if (Auth::user()->role == 2)
              <li class="nav-item">
                <a class="nav-link" href="/attendences">Attendance</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/leavepermit-add">Leave Permit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/notifycation">Notifycation</a>
              </li>
              @endif
              
              <li class="nav-item">
                <a class="nav-link" href="/logout" onclick="return confirm('yakin ingin logout?')">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <br>
        @yield('content')
      </div>

    </body>
</html>