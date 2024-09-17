#Exercise 1 Prompt for a lucky number, output a message if the number is not an integer
lucky = input("Enter a lucky number")
if lucky.isdigit():
    print("Integer")
else:
    print("The number entered is not an integer")

#Exercise 2 Print how many digits are in the number, if the number is an integer
if lucky.isdigit():
    print(len(lucky))

#Exercise 3 Prompt twice for an integer, only print the largest of the 2, if equal then output equal
num1 = int(input("Enter an integer"))
num2 = int(input("Enter a second integer"))
if num1 < num2:
    print(num2, "is the largest number")
elif num2 < num1:
    print(num1, "is the largest number")
else:
    print("They are equal")

#Exercise 4 Prompt twice for an integer. 
# Output the sum of the integers within the range of the two numbers
#e.g 10 and 15 = 75. 10 + 11 + 12 + 13 + 14 + 15 = 75
ex4a = int(input("Enter an integer"))
ex4b = int(input("Enter a second integer"))
if ex4a < ex4b:
    big = ex4b
    small = ex4a
else:
    big = ex4a
    small = ex4b

x = big - small
count = small
sum = count
for i in range(x):
    count +=1
    sum += count
print(sum)

#Exercise 5 Input multiple numbers on one input line. Split them into a list.
#Write a loop that examines and displays the ones greater than 0
string = input("Enter numbers in one line")
y = string.split()
#eval() function evaluates the specified function and if the expression is a legal python statement,
#it will be executed
test = [eval(x) for x in y]
for x in test:
    if x > 0:
        print(x)

#Exercise 6 Input 3 numbers representing lower limit, higher limit and a step value
#Program should loop through and print values from low to high, in consideration to the step
lower = int(input("Enter the lower limit"))
higher = int(input("Enter the higher limit"))
step = int(input("Enter the step value"))
for i in range(lower, higher, step):
    print(i)

#Exercise 7 Use range loop and print each number from 0 to 49
# Each number should be printed individually as opposed to concatenating them as a string

for i in range(0,5):
    k = i*10
    for x in range(k,k+10):
        print(f"{x:>4d}", end=" ")
    print()

#Exercise 8 Rewrite Ex4 where the program takes into account the case
#that the first number entered is bigger than the last
# e.g 10 and 15 sum = 75 but 15 and 10 sum is also 75
#Already done