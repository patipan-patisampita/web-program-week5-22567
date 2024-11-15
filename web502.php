<?php
$score = 59;
if ($score >= 80 && $score <= 100) { //80-100 = GEADE A
    echo "GEADE A";
} else if ($score >= 70 && $score <= 79) {
    echo "GEADE B";
} else if ($score >= 60 && $score <= 69) {
    echo "GEADE C";
} else if ($score >= 50 && $score <= 59) {
    echo "GEADE D";
} else if ($score >= 0 && $score <= 49) {
    echo "GEADE F";
} else {
    echo "ERROR SCORE";
}
