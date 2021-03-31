list1=["9","8","6","4"]
list2=["5","9","3","8",]
if len(list1)==len(list2):
         print("length is equal")
else:
        print("length is not equal")


zipped_lists = zip(list1,list2)
sum = [list2+list1 for (list1,list2)in zipped_lists]
print(sum)
if zip(list1)==zip(list2):
    print("sum of two list are same")
else:
    print("sum of two list are not same")

for value in list1:
 if value in list2:
    common = 1

if common == 1:
     print("there are common elements")
else:
     print("no common elements")




