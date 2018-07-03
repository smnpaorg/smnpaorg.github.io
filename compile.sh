

header=`cat header`
footer=`cat footer`

cd pages
for i in *
do
  text=`cat "$i"`
  text=$header$text$footer

  if [[ "$i" =~ ".html" ]]
  then
   echo "$text" > "../$i"
  else 
   mkdir "../$i" 
   echo "$text" > "../$i/index.html"
  fi
done
