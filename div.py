# -*- coding: utf-8 -*-

import os, glob
images = []
os.chdir('.')

for file in glob.glob('images/lacasuri/*.jpg'):
    images.append(str(file))

def divHtml(s, i):
    i = str(i)
    myslidesClassName = 'mySlides2'
    string = '<div class="' + myslidesClassName + '">' + '\n'
    string += '<div class="numbertext">' + i + ' / ' + i + '</div>' + '\n'
    string += '<img src="' + images[int(i)-1] + '" style="width:100%">' + '\n'
    string += '<div class="text">' + s + '</div>'  + '\n' + '</div>'
    print(string)

def divHtml2(i):
    i = str(i)
    myslidesClassName = 'mySlides1'
    string = '<div class="' + myslidesClassName + '">' + '\n'
    string += '<img src="' + images[int(i) - 1] + '" style="width:100%">' + '\n'
    string += '</div>'
    print(string)
        
        

f = open("./str.txt", 'r')
i = 1
for x in range(0,14):
    divHtml2( i)
    i+=1
    
