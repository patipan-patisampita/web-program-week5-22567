<?php
$score = 59;
switch ($score) {
    case $score >= 80 && $score <= 100:
        echo "GEADE A";
        break;

    case $score >= 70 && $score <= 79:
        echo "GEADE B";
        break;

    case $score >= 60 && $score <= 69:
        echo "GEADE C";
        break;

    case $score >= 50 && $score <= 59:
        echo "GEADE D";
        break;

    case $score >= 0 && $score <= 49:
        echo "GEADE F";
        break;

    default:
        echo "ERROR SCORE";
        break;
}
