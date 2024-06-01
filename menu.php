<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="imgs/logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <!-- Add the logout button -->
                        <li class="nav-item">
                            <a class="nav-link" href="welcome.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container text-left">
            <h1>Menu</h1>
            <p>Explore our delicious offerings below:</p>
            <div class="menu-items">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="imgs/americano.jpg" class="card-img-top" alt="Item 1">
                            <div class="card-body">
                                <h5 class="card-title">Americano</h5>
                                <p class="card-text">Cafe Americano.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="imgs/capuccino.jpg" class="card-img-top" alt="Item 2">
                            <div class="card-body">
                                <h5 class="card-title">Capuccino</h5>
                                <p class="card-text">A cup of capuccino.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="imgs/espresso.jpg" class="card-img-top" alt="Item 3">
                            <div class="card-body">
                                <h5 class="card-title">Espresso</h5>
                                <p class="card-text">Cozy cup of espresso.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer>
        John Allen Dugelio 2024
    </footer>
</body>
</html>
