<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The game has begin and another one started</h1>
    <a href="./about.php">About us</a>
    <?php
        for($i = 0; $i<10; $i++){
    ?>
        <h1><?php echo $i; ?></h1>
    <?php            
        }
    ?>
</body>
</html>