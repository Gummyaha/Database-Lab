import urllib2
from bs4 import BeautifulSoup
from lxml import etree
import time
import pandas as pd
import numpy as np
soup = BeautifulSoup(open("C:\Users\Administrator\Downloads\sdf.html"), "lxml", from_encoding="utf-8")
try:
    count = 0
    cat = soup.find_all("a", {"class": "klitem"})
    manu = []
    for x in cat:
        name = x['aria-label']
        print name
        x = x.find('img')
        try:
            url = x["data-key"]
            except Exception as e:
                try:
                    url = x["data-src"]
                    except Exception as e:
                        try:
                            url = x["src"]
                            except Exception as e:
                                print "just give up here"                                                        
        manu.append((name,url))
        count+=1
        if(count == 100):
            break
        s = pd.DataFrame(manu)
        s.to_csv('C:\Users\Administrator\Downloads\hi.csv', header=False, encoding='utf-8', mode='a')
        except Exception as e:
            print e
