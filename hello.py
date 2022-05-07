import random
from tkinter.font import ROMAN

# 関数定義の練習
def FizzBuzz(sum_number :int) -> str:
    if sum_number%3 == 0 and sum_number%5 == 0:
        return "FizzBuzz"
    elif sum_number%3 == 0:
        return "Fizz"
    elif sum_number%5 == 0:
        return "Buzz"
    else:
        """
         型アノテーションはしているが
         intのまま返してもエラーにはならない
         (その場合普通にint型になる)
        """
        return str(sum_number)

def main():
    print("Hello World!")

    # 要素数5で初期化するがlist型は可変長配列
    list_number = [0 for _ in range(5)]

    for i in range(5):
        list_number[i] = random.randint(0,100)
    
    sum_number = sum(list_number)

    res = FizzBuzz(sum_number)

    print(res)


if __name__ == "__main__" :
    main()
