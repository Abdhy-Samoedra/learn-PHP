<?php
function hello(){
    return "hello world";
}
function hello2($nama){
    return "hello $nama";
}

function hello3($time = "Morning", $name = "abdhy"){
    return "Good $time , $name";
}
function a($b,$a=5)
{
    echo "a = $a";
    echo "b = $b";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo hello()?></h1>
    <br>
    <h1><?php echo hello2("abdhy")?></h1>
    <br>
    <h1><?php echo hello3("night","luis")?></h1>
    <br>
    <h1><?php echo hello3()?></h1>
    <br>
    <h1><?php echo hello3("rudi")?></h1>
    <h1><?php echo a(3)?></h1>
</body>
</html>