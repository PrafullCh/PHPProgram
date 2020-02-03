
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Form</title>
<body>
    <br>
    <table style="margin-left:auto;margin-right:auto;margin-top:18%;" border="1" border-collapse="collapse">
    <thead>
    <tr>
    <th>Type of operator</th>
    <th>Operation</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Arithmetic</td>
        <td>1 for addition 2 for subtraction 3 for multiplication 4 for division</td>
    </tr>
    <tr>
        <td>Relational</td>
        <td>1 for Greater than  2 for Less than 3 for Equal to 4 for Not equal to</td>
    </tr>
    <tr>
        <td>Logical</td>
        <td>1 for Logical and  2 for Logical or 3 for Logical not </td>
    </tr>
    <tr>
        <td>Bitwise</td>
        <td>1 for and oparetion and  2 for or oparetion 3 for xor oparetion 4 for not oparetion</td>
    </tr>
    </tbody>
    </table>
    <br>
    <form action="#" method="post" style="text-align:center;">
    <label for="num1"> Enter num1
    <input type="text" name="num1" id="">
    </label>
    <br>
    <label for="num2"> Enter num2
    <input type="text" name="num2" id="">
    </label>
    <br>
    <select name="op" id="" required>
        <option value="1">Arithmetic</option>
        <option value="2">Relational</option>
        <option value="3">Logical</option>
        <option value="4">Bitwise</option>
    </select>
    <select name="ch" id="" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">
    Calculate
    </button>
    </form>

</body>
</html>
<?php
$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];
$op = (int)$_POST['op'];
$ch = (int)$_POST['ch'];
// var_dump($num1);
echo "<center >" ;
$op == 1 ? Arithemtic($num1,$num2,$ch):($op==2?Relational($num1,$num2,$ch):($op == 3 ? Logical($num1,$num2,$ch): ($op == 4 ? Bitwise($num1,$num2,$ch):"Enter Proper choice")));
function Arithemtic($n1,$n2,$ch)
{
    // var_dump($ch==1);
   echo ($ch===1 ? "Addition is ".($n1+$n2) :($ch==2? "Subtraction is ".($n1-$n2):($ch==3? "Multiplication is ".($n1*$n2):($ch==4? "Division is ".($n1/$n2): "Please enter valid choice"))));
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
function Relational($n1,$n2,$ch)
{
    echo ($ch==1? "$n1 > $n2".var_dump ($n1 > $n2):($ch==2? "$n1 < $n2".var_dump($n1<$n2):($ch==3? "$n1 == $n2".var_dump($n1==$n2):($ch==4? "$n1 != $n2".var_dump($n1!=$n2): "Please enter valid choice"))));
}
function Logical($n1,$n2,$ch)
{
   echo $ch==1? "$n1 && $n2".var_dump($n1 && $n2):($ch==2? "$n1 || $n2".var_dump($n1<$n2):($ch==3? "~ $n2".var_dump(!$n2): "Please enter valid choice"));
}

function Bitwise($n1,$n2,$ch)
{
    echo $ch==1? "$n1 & $n2 = ".($n1&$n2):($ch==2? "$n1 | $n2 = ".($n1|$n2):($ch==3? "$n1 ^ $n2 = ".($n1^$n2):($ch==4? "! $n2 = ".var_dump(!$n2): "Please enter valid choice")));
}
echo "</center>"; 
?>