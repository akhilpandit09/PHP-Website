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

  <div class="top-navbar sticky-top">
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
      <h2 class="text-center">About Us</h2>
    </div>

    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="https://images.pexels.com/photos/534164/pexels-photo-534164.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid aboutimg">
        </div>

        <div class="col-lg-6 col-md-6 col-12 align-center">
          <h2 class="display-4">who we are?</h2>
          <p class="py-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam necessitatibus, saepe minus quas vero deleniti ullam ut provident architecto in totam officia deserunt iusto.</p>
          <a href="about.php" class="btn btn-success">Learn More</a>
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