<!DOCTYPE html>
<html lang="en">
<style>
    .colour {
        background-color: red;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="2">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="colour">
                <?php else : ?>
                <tr>
                <?php endif ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i , $j" ?></td>
                <?php endfor ?>
                </tr>
            <?php endfor ?>
    </table>
</body>

</html>