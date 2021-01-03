<strong style="color:green">
<?php
    echo "<h4>4MT17IS007     ANUSHA S SHETTY</h4><br><br>";
    $handle = fopen("counter.txt",'r');
    if(!$handle)
    {
        echo "couldnot open file!!!";
    }
    else
    {
        $counter = (int)fread($handle,20);
        fclose($handle);
        $counter++;
        echo " <h5>Welcome:</h5><br><strong>You are ".$counter." visitor</strong>";
        $handle = fopen("counter.txt",'w');
        fwrite($handle,$counter);
        fclose($handle);
    }
?>