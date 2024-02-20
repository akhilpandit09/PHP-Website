<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>PHP Website</title>
  <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>

  <div class="top-navbar sticky-top ">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-secondary-subtle">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><span class="fw-bold">PHP Website</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <section class="my-5">
    <div class="py-5 text-bg-success text-center position-relative">
      <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-3 col-12">
          <div class="card" style="width: 18rem;">
            <img src="https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Photographic</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-12">
          <div class="card" style="width: 18rem;">
            <img src="https://images.pexels.com/photos/2820640/pexels-photo-2820640.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Videographic</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-12">
          <div class="card" style="width: 18rem;">
            <img src="https://images.pexels.com/photos/15141034/pexels-photo-15141034/free-photo-of-triple-beef-burger-on-wooden-board.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fooding</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="sticky-bottom">
    <p class="p-3 bg-dark text-white text-center">copyright 2024 - @akhileshwarpandit</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>