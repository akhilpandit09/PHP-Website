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
            <h2 class="text-center">Contact Us</h2>
        </div>
        <div class="w-50 m-auto mt-5">
            <form action="userInfo.php" method="post" class="vstack gap-4">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter you username">
                </div>

                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Enter your email address">
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" name="mobile" autocomplete="off" class="form-control" placeholder="Enter your Mobile number">
                </div>

                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" name="comment" placeholder="Your comments...."></textarea>
                </div>

                <button type="submit" class="btn btn-success p-2">Submit</button>
            </form>
        </div>
    </section>

    <footer class="sticky-bottom">
        <p class="p-3 bg-dark text-white text-center">copyright 2024 - @akhileshwarpandit</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>