#!/bin/bash
ITEMS=( 1 2 3 4 5 6 7 8 9 )
# While loop
STRING=''
while [ "$STRING" != "Hello World" ]
do
    if [ -z  "$STRING" ]
      
    then
      echo "$STRING"
      STRING="Hello"
      echo "$STRING"
    else
        echo "$STRING"
        STRING="${STRING} World"
        echo "$STRING"
    fi
done


echo "$STRING"
