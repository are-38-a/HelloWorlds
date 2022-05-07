<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>hello</title>
    </head>

    <body>
        <?php
            // 関数定義の練習
            function FizzBuzz (int $sum_number): string{
                if ($sum_number%3 == 0 && $sum_number%5 == 0){
                    return "FizzBuzz";
                } elseif ($sum_number%3 == 0) {
                    return "Fizz";
                } elseif ($sum_number%5 == 0) {
                    return "Buzz";
                } else {
                    return (string) $sum_number;
                    /*
                    $sum_numberをそのまま返すとintなのでエラーになる
                    (返り値の型を宣言しているため)
                    */
                }
            }

            echo "Hello World！"."\n";

            // PHPの配列は連想配列
            $array_number = array();

            for ($i = 0; $i < 5; $i ++) {
                $array_number[$i] = rand(0,100);
            }
            
            $sum_number = array_sum($array_number);
            
            $res = FizzBuzz($sum_number);
            echo $res."\n";
        ?>
    </body>

</html>
