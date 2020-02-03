<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <label for="num1">Enter Number 1 : </label><br>
                    <input name="num1" class="form-control" >
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="num1">Enter Number 2 : </label><br>
                    <input name="num2" class="form-control" >
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="num1">Enter Choice : </label><br>
                    <input name="ch" class="form-control" >
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <input type="submit" name="submit" class="btn btn-success" value="submit">
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <h1>
        <?php
        if(isset($_POST['submit']))
        {
            $num1 = (int) $_POST['num1'];
            $num2 = (int) $_POST['num2'];
            $ch = (int) $_POST['ch'];
            switch ($ch) {
                case 1:
                    echo "Factorial of $num1 is ".fact($num1)." $num2 is ".fact($num2);
                    break;
                case 2:
                    echo "$num1 is ".($num1%2==0?"Even":"Odd")." $num2 is ".($num2%2==0?"Even":"Odd");
                    break;
                case 3:
                    echo "$num1 is ".(checkPrime($num1)==0?"Not Prime":"Prime")." $num2 is ".(checkPrime($num2)==0?"Not Prime":"Prime");
                    break;
                case 4:
                    echo "$num1 is ".(ord($_POST['num1'])!=45?"Positive":"Negative")." $num2 is ".(ord($_POST['num2'])!=45?"Positive":"Negative");
                    
                    break;
                default:
                    echo "Enter Proper Choice";
                    break;
            }
        }

        function fact($n){
            if($n==1)
                return 1;
            else
                return $n*fact($n-1);
        }
        function checkPrime($num1)
        {
            $flag = 0;
            for($i = $num1 - 1;$i>=2;$i--)
            {
                if($num1%$i===0)
                {
                    $flag=0;
                    break;
                }
                else
                {
                    $flag=1;
                }
            }
            return $flag;
        }
        ?>
        </h1>
        
    </div>
</body>
</html>