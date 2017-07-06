declare -a arr=("test-ml")

## now loop through the above array
for i in "${arr[@]}"
do
   echo "$i";
   echo `git checkout $i`;
   echo `git pull origin $i`;
   echo `print mstarunkumar`;
   echo `Arun4#@!`;
   echo `git rm -f html/adminer.php`;
   echo `git add -A`;
   echo `git commit -m "$i Missing Orders file deleted"`;
   echo `git push origin $i`;
   echo `print mstarunkumar`;
   echo `print Arun4#@!`;
   # or do whatever with individual element of the array
done
