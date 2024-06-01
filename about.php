<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            <h1>About Us</h1>
            <div class="row">
                <div class="col-md-6">
                    <img src="imgs/cafe.jpg" alt="Our Store" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>Our History</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at arcu eget odio fermentum malesuada. Proin vel sapien et dui iaculis placerat. Sed sit amet odio nec velit consequat ultrices. Sed nec purus eget risus pulvinar consequat.</p>
                    <h2>Our Address</h2>
                    <p>1234 Coffee Avenue,<br> Cityville, State, Zip Code</p>
                    <h2>Owner</h2>
                    <p>John Allen</p>
                </div>
            </div>
        </div>
    </header>

    <footer>
        John Allen Dugelio 2024
    </footer>
</body>
</html>
