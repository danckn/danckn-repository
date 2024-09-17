#Exercise 3 Check if the string ends in a period,
#  contains all alphabet characters and contains an 'x' 
# also replace all 'e' with 'E'

text = input("Enter a string")
print('x' in text)
print(text.isalpha())
print(text.endswith('.'))
new_string = text.replace('e', 'E')
print(new_string)

#Exercise 4 Print the first and last character in the string and
# the number of times it occurs in the string
text2 = input("Enter a string")
start = text2.count(text2[0])
print("Amount of", text2[0], "=", start)
# using -1 in count means it takes the last letter
end = text2.count(text2[-1])
print("Amount of", text2[-1], "=", end)

#Exercise 5 Prompt to enter the radius of circle, 
# take it as a variable then print the area of the circle
ex5 = int(input("Enter radius of circle"))
pi = 3.14159
area = pi*ex5**2
print("The area is", area)

#Exercise 6 Prompt twice for integer
#Print the product of the two
#Then also with decimals and then with nonnumerical
num1 = int(input("Enter a number"))
num2 = int(input("Enter a second number"))
print(num1 + num2)

#Exercise 7 Prompt the user for a string then again for a number
#The string should repeat for the number in the prompt
ex7 = input("Enter a string")
ex7n = int(input("Enter a number"))
print(ex7*ex7n)

#Exercise 8 Prompt the suer twice for a number
#The first is the base and the second is the exponent
ex8 = int(input("Enter a number"))
ex8a = int(input("Enter a second number"))
print(ex8**ex8a)