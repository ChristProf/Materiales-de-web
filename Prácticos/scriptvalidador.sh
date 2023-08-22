#!/bin/bash

read -p "Ingrese ci" ci

a=0
contador=0

base="2 9 8 7 6 3 4"

for i in $base
do
	a=$((a+(($i * ${ci:$contador:1})%10)))
	contador=$((contador+1))
done
#if [ '$a' == '0' ]
#then
#	echo "El digito verificador es 0"
#else
#	echo "El digito verificador es " $((10 - $a %10))
#fi
digito=$((10-$a%10))

if [ ${ci:7:1} == $digito ]
then
	echo "Es valido"
else
	echo "No es valido"
fi
