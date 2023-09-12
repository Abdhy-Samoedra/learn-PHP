<?php
$numbers = [44, 12, 678, 35, 99];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: salmon;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>

<body>
    <?php foreach ($numbers as $num) { ?>
        <div><?php echo "$num" ?></div>
    <?php } ?>

    <br>

    <?php for($i = 0; $i < count($numbers); $i++){?>
        <div> <?php echo "$numbers[$i]"?></div>
    <?php } ?>
</body>

</html>