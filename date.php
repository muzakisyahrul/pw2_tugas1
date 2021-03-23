<?php
// Task 1
echo date("l");
echo "<br/>";
echo date("d");
echo "<br/>";
echo date("M");
echo "<br/>";
echo date("m");
echo "<br/>";
echo date("Y");
echo "<br/>";
echo time();
echo "<br/>";

// Task 2
echo date(
    "l, d-M-Y",
    time() +
        60 * 60 * 24 * 100 // 100 hari mendatang
);
echo "<br/>";

// Task 3
echo date(
    "l, d-M-Y",
    time() +
        60 * 60  * 24 * 1000 // 1000 hari mendatang
);
echo "<br/>";

// Task 4
echo date(
    "l, d-M-Y",
    time() -
        60 * 60  * 24 * 500 // 500 hari lampau
);
echo "<br/>";

// Task 5 
echo date("l", mktime(0, 0, 0, 12, 21, 2021)); // hari lahir saya
echo "<br/>";

// Task 6 
echo date("l", strtotime("21 December 2030")); // hari ulang tahun saya di tahun 2030