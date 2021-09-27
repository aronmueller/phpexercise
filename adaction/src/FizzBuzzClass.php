<?php declare(strict_types=1);

class Sequence{
    public function generateStep1($number) {
        if ($number % 15 == 0) {
            $number = "fizzbuzz";
        } elseif ($number % 5 == 0) {
            $number = "buzz";
        } elseif ($number % 3 == 0) {
            $number = "fizz";
        }
        return $number;
    }

    public function generateStep2($number) {
        if (preg_match('/3/', strval($number))) {
            $number = "lucky";            
        } elseif ($number % 15 == 0) {
            $number = "fizzbuzz";
        } elseif ($number % 5 == 0) {
            $number = "buzz";
        } elseif ($number % 3 == 0) {
            $number = "fizz";
        }
        return $number;
    }
}