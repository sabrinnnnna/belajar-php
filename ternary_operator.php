<?php
$score = 85;
$attendance = 92;
$grade = '';

// if else nested
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

// ternary operator with if else nested
$grade = ($score >= 80)
    ? (($attendance >= 90) ? "Excellent" : "Good, but improve attendance")
    : (($attendance >= 90) ? "Needs to improve score" : "Needs improvement in score and attendance");
?>