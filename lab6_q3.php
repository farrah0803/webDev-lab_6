<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php 
    $height = 5;
    $width = 10;
    function calculateArea($h,$w)
    {
        $area = $h*$w;
        return $area;
    }
    $area = calculateArea($height,$width);
    echo"The area of rectangle is ". $area ."cm²" ;
    ?>
</body>
</html>
