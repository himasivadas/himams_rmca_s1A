line= int(input("Enter a number: "))
i=1
j=1
while i<=line:
    j=1
    while j<=i:
        temp=i*j
        print(temp, end='', flush=True)
        print(" ", end='', flush=True)
        j=j+1;
    print("");
    i=i+1;