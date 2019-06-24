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
<?php require "block/header.php"?>
    <div class="container mt-5"><h3 class = "mb5">Our articles</h3>
        </div>
    <div class="d-flex flex-wrap">
    <?php
        for($i=0; $i<5; $i++):
    ?>
    <div class = "container mt-5">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Hello World</h4>
        </div>
        <div class="card-body">
            <img src="img/bg<?php echo($i+1) ?>.jpg" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
                <li>10 users see this</li>
                <li>Email support</li>
                <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">About</button>
        </div>
    </div></div>

    <?php endfor; ?>
</div>
</div>

</header>

<?php require "block/footer.php"?>


</body>
</html>