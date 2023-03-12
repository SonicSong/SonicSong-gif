#!/bin/sh
for file in ./*.gif
do
	convert "$file[0]" $file.png 
done
