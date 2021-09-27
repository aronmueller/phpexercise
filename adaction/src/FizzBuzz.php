<?php declare(strict_types=1);

require_once "./FizzBuzzClass.php";

// If the Step 1 submit button has been pressed
if (isset($_POST['submit1'])) {
    $max1 = sanitize_input($_POST['max1']);

    // Generate sequence
    $seq = new Sequence;
    $sequence = range(1, $max1);
    foreach ($sequence as $value) {
        $result = $seq->generateStep1($value);
        echo $result . " ";
    }
}

// If the Step 2 submit button has been pressed
if (isset($_POST['submit2'])) {
    $max2 = sanitize_input($_POST['max2']);

    // Generate sequence
    $seq = new Sequence;
    $sequence = range(1, $max2);
    foreach ($sequence as $value) {
        $result = $seq->generateStep2($value);
        echo $result . " ";
    }
}

// If the Step 3 submit button has been pressed
if (isset($_POST['submit3'])) {
    $max3 = sanitize_input($_POST['max3']);

    // Generate sequence
    $seq = new Sequence;
    $sequence = range(1, $max3);
    $mod_sequence = array();
    foreach ($sequence as $key => $value) {
        $result = $seq->generateStep2($value);
        echo $result . " ";
        $mod_sequence[$key] = $result;
    }

    /* 
    ?><pre><?php
    print_r(array_count_values($mod_sequence));
    ?></pre><?php
    */

    // Generate report
    $tmp = array_count_values($mod_sequence);
    $fizz_cnt = $tmp['fizz'];
    $buzz_cnt = $tmp['buzz'];
    $fizzbuzz_cnt = $tmp['fizzbuzz'];
    $lucky_cnt = $tmp['lucky'];
    $int_cnt = count(array_filter(array_values($mod_sequence), 'is_int'));
    $report = '<h6>Report:</h6>
        <ul>
            <li>Fizz: ' . $fizz_cnt . '</li>
            <li>Buzz: ' . $buzz_cnt . '</li>
            <li>FizzBuzz: ' . $fizzbuzz_cnt . '</li>
            <li>Lucky: ' . $lucky_cnt . '</li>
            <li>Integers: ' . $int_cnt . '</li>
        </ul>';
    echo $report;
}

// Ensure data is sanitized
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    // Check number values
    if (is_numeric($data)) {
        if ($data > 1) {
            return $data;
        } else {
            echo '<script>alert("Number must be greater than 1.")</script>';
            exit();
            }
    } else {
        echo '<script>alert("You must enter a number.")</script>';
        exit();
    }
}