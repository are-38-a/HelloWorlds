package main

import(
	"fmt"
	"math/rand"
	"time"
	"strconv"
)

// 関数定義の練習
func FizzBuzz(sum_number int) string{
	/*
	resを予め宣言して""で初期化した場合
	resは文字列型なので数値を代入できない
	strconvを使って明示的に変換する
	(pythonとかだと入っちゃう)
	*/
	res := ""
	if sum_number%3 == 0 && sum_number%5 == 0 {
		res = "FizzBuzz"
	} else if sum_number%3 == 0 {
		res = "Fizz"
	} else if sum_number%5 == 0 {
		res = "Buzz"
	} else {
		res = strconv.Itoa(sum_number)
	}
	return res
}

func main() {
	fmt.Println("Hello, World!")

	// 固定長の配列
	var array_number[5] int

	// 可変長の配列はスライス
	// var slice_number []int

	// 乱数を使うにはシードを設定
	rand.Seed(time.Now().UnixNano())

	// ループ処理
	for i:=0; i<5; i++{
		array_number[i] = rand.Intn(100)
	}

	// 配列を合計する関数がない
	sum_number := 0
	for _, x := range array_number{
		sum_number += x
	}

	// 宣言!しないと代入できない
	res := FizzBuzz(sum_number)

	fmt.Println(res)
}