Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def str1(word):
	w=[]
	for n in word:
		w.append((len(n),n))
	w.sort()
	result=w[-1][0]
	result1=w[-1][1]
	print("longest word is : ",result1)
	print("length of the word is : ",result)

	
>>> str1(['jils','jacob','sam'])

longest word is :  jacob
length of the word is :  5
>>> 