<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title><?=$title?></title>
</head>
<body>
    <form action="postregister" method="post" class="w-50 m-auto">
    <h1 class="text-center">Register</h1>
    <div class="form-group">
    Email : <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
    Username : <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
    password : <input type="password" class="form-control" name="password">
    </div>
    <button class="btn-primary w-100">Submit</button>
    </form>
</body>
</html>