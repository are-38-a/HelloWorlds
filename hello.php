<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>hello</title>
    </head>

    <body>
        <?php
            echo "Hello World！"."\n";

            // PHPの配列は連想配列
            $array_number = array();

            for ($i = 0; $i < 5; $i ++) {
                $array_number[$i] = rand(0,100);
            }
            
            $sum_number = array_sum($array_number);

            if ($sum_number%3 == 0 && $sum_number%5 == 0){
                $res = "FizzBuzz";
            } elseif ($sum_number%3 == 0) {
                $res = "Fizz";
            } elseif ($sum_number%5 == 0) {
                $res = "Buzz";
            } else {
                $res = $sum_number;
            }

            echo $res."\n"
        ?>
    </body>

</html>
