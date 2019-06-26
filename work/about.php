<!Doctype html>

<html lang="en">
<link rel = "stylesheet", href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
</head>
<body>

<?php require "block/header.php"?>
<div class="container mt-5">
    <h3>Contact form</h3>
    <form action="/check.php" method="post">
        <input class="form-control" type="email" name="email" placeholder="Input Email"><br>
        <textarea class="form-control" name="message" placeholder="Input your message"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Send</button>
    </form>
</div>
<?php require "block/footer.php"?>


</body>
</html>