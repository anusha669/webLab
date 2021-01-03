<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix</title>
</head>
<body>
    <?php
    echo "<h4>4MT17IS007     ANUSHA S SHETTY</h4><br><br>";
    $mat1 = [[1,2,3],[4,5,6],[7,8,9]];
    $mat2 = [[1,2,3],[4,5,6],[7,8,9]];
    function display($mat){
        foreach($mat as $row){
            foreach($row as $col){
                echo $col." ";}
            echo "<br>";}
    }
    echo "First:<br>";
    display($mat1);
    echo "Second:<br>";
    display($mat2);
    echo "<h4>Transpose of first matrix: </h4>";
    for($i = 0;$i < 3; $i++)
        for($j=0;$j<3;$j++)
            $mat3[$i][$j] = $mat1[$j][$i];
    display($mat3);
    
    for($i=0;$i<3;$i++)
        for($j=0;$j<3;$j++)
            $mat3[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
    echo "<h4>Addition of matrix:</h4> <br>";
    display($mat3);
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            $mat3[$i][$j] = 0;
            for($k =0;$k<3;$k++){
                $mat3[$i][$j] += $mat1[$i][$k]*$mat2[$k][$j];
            }
        }
    }
    echo "<h4>Multiplication of matrix :</h4><br>";
    display($mat3);
    ?>
</body>
</html>