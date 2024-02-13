<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <?=$this->section('homeCss')?>
    <title><?=$this->e($title)?></title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #eee;
            font-family: 'Roboto', sans-serif;
            text-align: center;
            font-weight: bold;
        }

        .container {
            flex: 1;
        }
    </style>
</head>
<body>
    <?=$this->insert('templates/navbar')?>
    <main class="container">
        <?=$this->section('content')?>
    </main>
    <?=$this->insert('templates/footer')?>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>