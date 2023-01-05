<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!--BootstrapScipt-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <!-- My own Javafile-->

  <!-- My Own CSS-->
  <link rel="stylesheet" href="css/style.css" />
  <title>Heidis Language About</title>
</head><body>
   <!--Navigation Bar with Logo and Titel-->
   <nav class="navbar navbar-dark navbar-expand-lg bg-success">
    <div class="container-fluid">
      <a id="title" class="navbar-brand align-text-top m-auto text-lg-start text-wrap" href="confirmation.php">
        <img class="d-inline-block" src="image/logo.jpeg" alt="logo" width="100" height="100">
        Heidi`s Language School</a>
      <!--Navbar button to open menu-->
      <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation justify-content-end">
        <span class="navbar-toggler-icon">
        </span>
      </button>
      <!--Pages link and titel-->
      <div class="collapse navbar-collapse me-5 pt-5" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active pt-5 me-5">
            <a class="nav-link" href="Index.php">Home</a>
          </li>
          <li class="nav-item active pt-5 me-5">
            <a class="nav-link" href="Register.php">Register</a>
          </li>
          <li class="nav-item active pt-5 me-5">
            <a class="nav-link" href="Certificate.php">Certificat</a>
          </li>
          <li class="nav-item active pt-5 me-5">
            <a class="nav-link" href="About.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--pagecontext body with image-->
  <div class="bg-image mh-auto" style="
    background-image: url('image/1260521.jpg');">
  <div class="w-50 p-3 m-auto col-md-4 mh-auto formul">
      <h1 class="centered">Besten dank - du hast folgende Angaben eingetragen:</h1><div id="confirmation-message" class="centered"></div>
      <script>
          writeConfirmation();
      </script>
  </div>
</div>
</body>
 <!--footer-->
 <footer class="bg-success text-center py-3 mt-0">
  <div class="container">
    <img class="d-inline-block" src="image/logo.jpeg" alt="Logo" width="100" height="100" class="mb-3">
    <p class="text-white mb-0">Heidis Helvetic</p>
    <p class="text-white mb-0">Mountain street 4</p>
    <p class="text-white mb-0">80W0 Alps</p>
    <p class="text-white mb-0">Switzereland</p>
    <p class="text-white mt-3 mb-0">Schwarz Agency Switzerland Oppertunity Zürich</p>
  </div>
</footer>
</html>