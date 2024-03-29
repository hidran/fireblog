<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free blogging platform">
    <meta name="author" content="Hidran Arias,@hidran">
    <meta name="generator" content="php mvc">
    <title>FIREBLOG</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
    <nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='#'>BLOGGING SYSTEM</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarCollapse'
                    aria-controls='navbarCollapse' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarCollapse'>
                <ul class='navbar-nav me-auto mb-2 mb-md-0'>
                    <li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='/posts'>POSTS</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='/post/create'>NEW POSTS</a>
                    </li>

                </ul>
                <form class='d-flex'>
                    <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                    <button class='btn btn-outline-success' type='submit'>Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<main role="main" class="container">

    <h1><?=$this->content?></h1>

</main><!-- /.container -->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM'
        crossorigin='anonymous'></script>

</body>
</html>

