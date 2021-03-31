print('Enter the length of a side of square')
s = int(input("Enter your value: "))
print('Enter the length and breadth of rectangle')
l = int(input("Enter your value: "))
b = int(input("Enter your value: "))
print('Enter the base and height of tringle')
h = int(input("Enter your value: "))
d = int(input("Enter your value: "))
x = lambda s : s * s
y = lambda l,b : l * b
t=0.5
z= lambda h,d,t : h * d * t
print("Area of square is :",x(s))
print('Area  of rectangle',y(l,b))
print('Area of tringle',z(h,d,t))