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
        <div class="row">
            <p>
                <pre>
                <?php
                $ass_arr = array(
                    "aniket"=>100,
                    "saurabh"=>200,
                    "prafull"=>300,
                    "durgesh"=>300,
                    "kunal"=>300,
                );
                $ind_arr1 = array(
                    "d","c","b","a"
                );
                $ind_arr2 = array(
                    11,21,31,41,51,61
                );

                $nested_arr = array(
                    'adj'=>array(
                        'practical'=>50,
                        'theory'=>100,
                        'type'=>'therory'
                    ),
                    'edp'=>array(
                        'practical'=>50,
                        'theory'=>0,
                        'type'=>'tw'
                    )
                );

                 array_change_key_case($ass_arr);
                print_r($ass_arr);
                array_change_key_case($ass_arr);

                echo "Total no of element in index array ".count($ind_arr1)."<br>";

                echo "Merged array"."<br>";print_r(array_merge($ind_arr1,$ind_arr2));

                echo "Does asociative array contain 100 ".(array_search("100",$ass_arr))."<br>";

                echo "array<br>";
                $temp = array(range(0,5));

                print_r($temp);

                echo "Sorted array <br>";
                (sort($ind_arr1));
                print_r($ind_arr1);
                echo "<br>revserse sorted array <br>";
                (rsort($ind_arr1));
                print_r($ind_arr1);

                $str = "Saurabh Vitthal bhalerao";
                echo "<br> Length of \"$str\" is ".strlen($str)."<br>";
                echo "<br> Reverse of \"$str\" is ".strrev($str)."<br>";strrev($str);
                echo "<br> Word count of \"$str\" is ".str_word_count($str)."<br>";
                echo "<br> Reverse of \"$str\" is ".strrev($str)."<br>";
                echo "<br> strpos of  \"Vitthal\" is ".strpos($str,"Vitthal")."<br>";
                echo "<br> replace of \"$str\" is ".str_replace('Saurabh','aniket',$str)."<br>";
                
                
                ?>
            </p>
        </div>
    </div>
</body>
</html>