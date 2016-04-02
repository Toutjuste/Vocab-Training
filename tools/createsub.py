#!/usr/bin/python3
# -*- coding: utf-8 -*-

# Read 2 files in current dir:
# en.txt
# fr.txt

# Output: sub.csv

f_en = open("en.txt", "r")
en = f_en.read().split("\n")
f_en.close()

f_fr = open("fr.txt", "r")
fr = f_fr.read().split("\n")
f_fr.close()

f = open("sub.csv", "w")

if len(fr) != len(en):
    print("Files doesn't have the same size !")
else:
    for i in range(len(fr)):
        if en[i] != "" and fr[i] != "":
            f.write(en[i] + "=" + fr[i] + "\n")

f.close()

