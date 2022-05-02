import random
from tkinter.font import ROMAN

def main():
    print("Hello World!")

    list_number = [0 for _ in range(5)]

    for i in range(5):
        list_number[i] = random.randint(0,100)
    
    sum_number = sum(list_number)

    if sum_number%3 == 0 and sum_number%5 == 0:
        res = "FizzBuzz"
    elif sum_number%3 == 0:
        res = "Fizz"
    elif sum_number%5 == 0:
        res = "Buzz"
    else:
        res = sum_number

    print(res)


if __name__ == "__main__" :
    main()
