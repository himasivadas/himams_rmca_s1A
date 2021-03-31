Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def star():
	n=5
	for i in range(n):
		for j in range(i):
			print("*",end="")
		print(" ")
	for i in range(n,0,-1):
		for j in range(i):
			print("*",end="")
		print(" ")

		
>>> def star()
SyntaxError: invalid syntax
>>> star()
 
* 
** 
*** 
**** 
***** 
**** 
*** 
** 
* 
>>> 