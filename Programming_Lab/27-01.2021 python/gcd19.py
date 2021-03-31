def gcd(a, c):
    # Everything divides 0
    if (c == 0):
        return a
    return gcd(c, a % c)

a = 98
c = 56
if (gcd(a, c)):
    print('GCD of', a, 'and', c, 'is', gcd(a, c))
else:
    print('not found')
