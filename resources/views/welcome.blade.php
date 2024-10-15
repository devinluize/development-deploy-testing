<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('Login/welcome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


<!--Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="{{ asset('Login/Astronot.png') }}"
            alt="Bootstrap"
            width="70"
            height="70"
          />
        </a>
        <span class="fs-3 fw-semibold">AstroEdu</span>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="welcome.blade.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Navbar End -->


</body>
</html>