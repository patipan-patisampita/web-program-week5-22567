<?php
$is_user_logged_in = true;

// if ($is_user_logged_in) {
//     $title = 'Logout';
//     echo $title;
// } else {
//     $title = 'Login';
//     echo $title;
// }
$title = $is_user_logged_in ? 'Logout' : 'Login';
echo $title;