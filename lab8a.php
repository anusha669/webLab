<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab8a</title>
</head>
<body>
    <h4>4MT17IS007     ANUSHA S SHETTY</h4><br><br>
    <form method="POST" action="lab8a.php">
    <table>
        <tr>
            <td>
                <input type="number" name="num1" placeholder="Enter number">
            </td>
            <td>
                <input type="number" name="num2" placeholder="Enter number">
            </td>
        </tr>
        <tr>
            <td>
                <input type="reset" value="Clear" >
            </td>
            <td>
                <button type="submit" name="submit" value="calculate">Calculate
            </td>
        </tr>
    </table>
    </form>

    <?php

        if(isset($_POST['submit']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "<table>";
            if(is_numeric($num1) and is_numeric($num2))
            {
                echo "<tr><td> Addition ".($num1+$num2)."</td></tr>";
                echo "<tr><td> Subraction ".($num1-$num2)."</td></tr>";
                echo "<tr><td> Multiplication ".($num1 * $num2)."</td></tr>";
                if($num2 != 0)
                    echo "<tr><td> Division ".($num1/$num2)."</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>