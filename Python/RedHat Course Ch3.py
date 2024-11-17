#Exercise 1 2 lists concatenate them
first = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
second = ["day", "day", "sday", "nesday", "rsday", "day", "urday"]
#Use zip function to join first items in list together and second items with each other etc.
result =[f + s for f, s in zip(first,second)]
print(result)

#Exercise 2 add each iteration to a list
#Print the contents of the list on one line and the sum of elements in list on another
prompt = "Enter a number (or the word 'end' to quit) "
list = []
total = 0

while True:
    data = input(prompt)
    if data == "end":
        break
    try:
        data = float(data) if '.' in data else int(data)
        list.append(data)
    except ValueError:
        # In case the input is not a valid number
        print("Please enter a valid number.")
    #Remainder of while loop goes here
    total = sum(list)
print(list)
print(total)

#Exercise 3 create a loop asking the user to input a number
#Repeat until user enters 'end'. Enter each number into a set. verify if number is already in the set, if yes update a entry counter to track how many is not in set.
#Print the contents of the set on one line and the number of elements that were not aded to the set on second.
entry = 0
myset = set()
while True:
    data = input(prompt)
    if data == "end":
        break
    try:
        data = float(data) if '.' in data else int(data)
        if data in myset:
            entry +=1
            print("Number already in set, cannot be added")
        else:
            #use add for sets instead of append for lists
            myset.add(data)
    except ValueError:
        # In case the input is not a valid number
        print("Please enter a valid number.")
print(myset)
print(entry)

#Exercise 4 Use a single set to determine the number of unique words in the user's input.
#You can use the same sample while loop from Exercise 1.
#Each time through the loop, the individual words should be added to the single set.
#When done looping, output the contents of the set sorted alphabetically.
#Also, output the number of unique words.

unique_words = set()
while True:
    user_input = input("Enter words to be input in a set ")
    # Split the sentence into words
    words = user_input.split()
    # Add the words to the set (set will automatically handle duplicates)
    unique_words.update(words)
    # Count the number of unique words
    unique_count = len(unique_words)
    #.add(unique_words)
    if user_input == "end":
        break
sorted_list = sorted(unique_words)
print(sorted_list)
print(unique_count)

#Exercise 5 Use a dictionary to create a mapping from the digits 0-9 to the words zero, one, two, etc.
#Next, ask the user to input a number.
#If the user enters 1437, then the program should print one four three seven.

dictionary = {'0':'zero','1':'one','2':'two','3':'three','4':'four','5':'five','6':'six','7':'seven','8':'eight','9':'nine'}
number = input("Enter a number, it will be returned in words ")
# Convert each digit to its word using the dictionary
words = [dictionary[digit] for digit in number]
# Join the list of words into a space-separated string and print the result
print(" ".join(words))

#Exercise 6 Rewrite Exercise 4 to count the frequency of each word in the user's input.
#A dict provides the perfect data structure for this problem.
#Let the words be the keys, and let the counts be the values.
#Print the results sorted by the words.
#Finally, print the results sorted by the counts.

# Initialize an empty set and a dictionary to store word counts
unique_words = set()
word_frequency = {}

while True:
    user_input = input("Enter words to be input in a set (type 'end' to finish): ")
    
    # End the loop if the user inputs "end"
    if user_input.lower() == "end":
        break

    # Split the sentence into words
    words = user_input.split()
    
    # Add words to the set and count their frequency in the dictionary
    unique_words.update(words)
    for word in words:
        if word in word_frequency:
            word_frequency[word] += 1
        else:
            word_frequency[word] = 1

# Sort the unique words alphabetically and print them
sorted_by_words = sorted(word_frequency.items())  # Sorted by words (keys)
print("Word frequency (sorted by words):")
for word, count in sorted_by_words:
    print(f"{word}: {count}")

# Sort by word frequency (counts) in descending order
sorted_by_count = sorted(word_frequency.items(), key=lambda item: item[1], reverse=True)
print("\nWord frequency (sorted by count):")
for word, count in sorted_by_count:
    print(f"{word}: {count}")