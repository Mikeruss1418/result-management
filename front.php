<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Website</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to custom CSS -->
    <link rel="stylesheet" href="front.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">NEPALAYA COLLEGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admissions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Academics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Campus Life</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    
    <header class="hero bg-primary text-white text-center py-5">
        <h1>Welcome to Nepalaya College</h1>
        <p>Your Gateway to Knowledge</p>
        <a href="viewresult.php" class="btn btn-light btn-lg">View Result</a>
    </header>

    
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image/image2.jpeg" alt="Image 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Article Title</h5>
                        <p class="card-text">Short description of the article.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image/image2.jpeg" alt="Image 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Article Title</h5>
                        <p class="card-text">Short description of the article.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image/image2.jpeg" alt="Image 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Article Title</h5>
                        <p class="card-text">Short description of the article.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
