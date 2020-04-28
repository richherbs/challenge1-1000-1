<!-- Challenge
Prints the numbers 0-1000-0 (every number inbetween), with 1000 only once and each number on a new line in:

The fewest PHP characters you can
A unique way that no other team members have used -->

<?php

$count = 0;

while($count < 1000){
    echo $count."\n";
    $count ++;
}

while($count >= 0){
    echo $count."\n";
    $count --;
}