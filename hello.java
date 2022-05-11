/*
Javaファイルをコンパイルすると
クラスファイル(JVM用のバイナリ)ができる
これをJava仮想環境で動かす
*/

/*
クラス名とファイル名は同一にする
1ファイルに1クラスを記述する
予約されたクラス名を使用してはいけない
*/

import java.util.Random;
import java.util.stream.IntStream;

public class hello{
    /*
    staticメソッドはインスタンス化しなくても実行できる
    mainメソッドは最初に動く部分なので必ずstatic
    */
    public static void main(String[] args) {
        System.out.println("Hello World!");

        // 要素数5の配列を値0で初期化
        int[] array_number = new int[5];

        // randomクラスのインスタンス化
        Random rand = new Random();

        for (int i=0; i<5; i++) {
            array_number[i] = rand.nextInt(101);
        }

        int sum_number = IntStream.of(array_number).sum();
        // 「文字列型のデータ」ではなくStringクラスのインスタンス
        String res = FizzBuzz(sum_number);
        System.out.println(res);

    }

    // 関数(メソッド)宣言の練習
    private static String FizzBuzz(int sum_number) {
        if (sum_number%3 == 0 && sum_number%5 == 0){
            return "FizzBuzz";
        } else if (sum_number%3 == 0) {
            return "Fizz";
        } else if (sum_number%5 == 0) {
            return "Buzz";
        } else {
            return String.valueOf(sum_number);
        }
    }

}