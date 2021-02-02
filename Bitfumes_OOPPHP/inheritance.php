<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
        require "fruits.php";

        $mango1 = new Mango();
        $mango1->setName('mango');
        echo $mango1->pick();

        $apple1 = new Apple();
        $makeJuice = $apple1->juice();
        echo $makeJuice;

    ?>
</body>
</html>






<!-- 
Pick mango
Juice! 
-->