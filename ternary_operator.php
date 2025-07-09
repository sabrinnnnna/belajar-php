<?php
$a = 13;

// ternary operator
$b = $a < 10 ? "Hello" : "Good Bye";

// if else statement
if ($a < 10) {
    $b = "Hello";
} else {
    $b = "Good Bye";
}

echo $b;

// soal
$score = 85;
$attendance = 92;
$grade = '';

if ($score >= 80) {
    if ($attendance >= 90) {
        $grade = "Excellent";
    } else {
        $grade = "Good, but improve attendance";
    }
} else {
    if ($attendance >= 90) {
        $grade = "Needs to improve score";
    } else {
        $grade = "Needs improvement in score and attendance";
    }
}

// jawaban
$grade = $score >=80 ? ...
echo $grade; // Output: Excellent

?>