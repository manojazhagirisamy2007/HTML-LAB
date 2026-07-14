d1={}
s=input("enter a string in formet name-dd-mm-yyyy:")
l1=s.split("-")

ch=l1[0]
l1.remove(ch)

s1="/".join(l1)
d1[ch]=s1

print("the result is:",d1)
