def print_factors(w):
   print("The factors of",w,"are:")
   for i in range(1, w + 1):
       if w % i == 0:
           print(i)

print_factors(500)