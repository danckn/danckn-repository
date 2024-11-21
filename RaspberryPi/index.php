<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raspberry Pi Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <img src="logo.png" class="img-fluid" alt="">
            <button class="navbar-toggler" type="button" data-bs toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5 fw-semibold">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid text-center bg-secondary fs-5 text-light align-items-center">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-md-6 p-5">
                <form class="row g-3 needs-validation" novalidate>
                <div class="row g-3 border border-5">
                    <h2>Sign up</h2>
                    <div class="col p-2">
                        <label for="validationCustom01" class="form-label"></label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col p-2">
                    <label for="validationCustom01" class="form-label"></label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
                    </div>
                    <div class="mx-auto p-2">
                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" required>
                    </div>
                    <div class="mx-auto p-2">
                        <input type="password" class="form-control" placeholder="Password" aria-label="Password" required>
                    </div>
                    <div class="mx-auto p-2">
                        <input type="password" class="form-control" placeholder="Confirm password" aria-label=" Confirm password" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Sign up</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</body>
</html>