<!DOCTYPE html>
<html lang="en">
<head>
    <title>lab9</title>
</head>
<body>
    <?php
        echo "<h4>4MT17IS007     ANUSHA S SHETTY</h4><br><br>";
        $states = "Mississippi ALABAMA Texas Massachusetts Kansas";
        $list = explode(' ',$states);
        echo "<br>Original array: <br>";
        foreach($list as $x){
            echo $x."  ";
        }
        $k = 0;
        foreach($list as $c)
        {
            $n = strlen($c);
            if($c[$n-3] == 'x' && $c[$n-2] == 'a' && $c[$n-1] == 's'){
                $res[$k] = $c;
                $k += 1;
            }
            if( ($c[0] == 'K' || $c[0] == 'k') && ($c[$n-1] == 'S' || $c[$n-1] == 's') )
            {
                $res[$k] = $c;
                $k += 1;
            }
            if($c[0] == 'M' && $c[$n-1] == 's'){
                $res[$k] = $c;
                $k += 1;
            }
            if($c[$n-1] == 'a')
            {
                $res[$k] = $c;
                $k += 1;
            }
        }
        echo "<br> Result : ";
        foreach($res as $r){
            echo $r." ";
        }

    ?>
</body>
</html>