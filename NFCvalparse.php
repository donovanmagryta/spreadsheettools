<?php
$tagval = "id+skill+grade";
$piece =  (explode('+',$tagval, -1));
$student = $piece[0];
$skill = $piece[1];
$grade = $piece[2];
echo $student;
echo $skill;
echo $grade;
?>
