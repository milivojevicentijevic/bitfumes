<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
</head>
<body>
    <?php
        require "Student.php";
        require "Bill.php";

        $student1 = new Student();
        $student1->setTotalMarks(89);
        echo $student1->getTotalMarks();

        $bill1 = new Bill();
        $totalBill = $bill1->dinner(2)->dessert(1)->coldDrink(2)->bill;
        echo "$totalBill<br>";
    ?>
</body>
</html>





<!-- 
89
let s begin
51
It s over! 
-->