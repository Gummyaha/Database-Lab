import urllib2

import time

import pandas as pd
import random as ran
import numpy as np
s = pd.read_csv('C:\Users\Administrator\Downloads\\brands.csv', header=None, encoding='utf-8')
print "CSV imported"
print s
x= []

for i in range(len(s)):
    count = 0;
    while(count <3):
        name = s[1][i] +str(count)
        print name
        price = ran.randint(1000000,10000000)
        detail = "Something Something about " + name
        manu = s[0][i]
        x.append((price, name, manu, detail))

        count+=1
s = pd.DataFrame(x)
s.to_csv('C:\Users\Administrator\Downloads\\productData.csv', header=False, encoding='utf-8', mode='a')
