<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <?php include('pages/component/header.php') ?>
    </div>

    <div class="body">
        <?php echo $body ?>
    </div>
    <script type="module" src="./scripts/index.js"></script>
</body>
</html>