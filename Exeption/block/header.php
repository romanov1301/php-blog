<!Doctype html>

<html lang="en">
<link rel = "stylesheet", href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Web Site</title>
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Roman Enterprise</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Main</a>
        <a class="p-2 text-dark" href="about.php">Contact</a>

    </nav>

    <?php
    if($_COOKIE['user'] == 'true'):
    ?>
    <a class="btn btn-outline-primary" href="/auth.php">Personal account</a>

    <?php  else:  ?>

    <a class="btn btn-outline-primary" href="/auth.php">Sign up</a>
    <?php endif; ?>
</div>


</body>
</html>
