<?php

// The purpose of this file is to warmup with some basic PHP exercises (in prepartion for Hack). We've done basic 13 here many times before, but it's always a nice warm up exercise.

// 1. Print 1-255
// Print all the integers from 1 to 255.
function print_one_to_255() {
    for ($i = 1; $i <= 255; $i++) {
        print $i . "\n";
    }
    return range(0,255);
}

print_one_to_255();

// 2. Print Ints and Sum 0-255
// Print integers from 0 to 255, and with each integer print the sum so far.

function sum_0_to_255() {
    $sum = 0;
    for ($i = 0; $i <= 255; $i++) {
        $sum += $i;
    }
    print $sum . "\n";
    return $sum;
}

sum_0_to_255();

// 3. Find and Print Max
// Given an array, find and print its largest element.
function find_print_max($arr) {
    $max = 0;
    foreach ($arr as $value) {
        if ($value >= $max) {
            $max = $value;
        }
    }
    print $max . "\n";
    return $max;
}

find_print_max([10,-5,100]);

// 4. Array with Odds
// Create an array with all the odd integers between 1 and 255 (inclusive).

function array_with_odds() {
    $odds = [];
    for ($i = 1; $i <= 255; $i++) {
        if ($i % 2 == 1) {
            array_push($odds, $i);
        }
    }
    var_dump($odds);
    return $odds;
}

array_with_odds();

// 5. Greater than Y
// Given an array and a value Y, count and print the number of array values greater than Y.

function greater_than_y($arr, $y) {
    $count = 0;
    foreach($arr as $value) {
        if ($value > $y) {
            $count++;
        }
    }
    print $count . "\n";
    return $count;
}

greater_than_y([5,10,15,20,25,30], 10);

// 6. Max, Min, Average
// Given an array, print the max, min and average values for that array.
function max_min_avg($arr){
    $min = 0;
    $max = 0;
    $avg = 0;
    $sum = 0;
    foreach($arr as $value) {
        // check min
        if ($value <= $min) {
            $min = $value;
        } 
        // check max
        elseif ($value >= $max) {
            $max = $value;
        }
        // add to sum
        $sum += $value;
    }
    // get avg
    $avg = $sum/count($arr);
    print "Max: {$max}" . "\n";
    print "Min: {$min}" . "\n";
    print "Avg: {$avg}" . "\n";
    return [$max, $min, $avg];
}

max_min_avg([100, 10, 5, -5, -15]);

// 7. Swap String For Array Negative Values
// Given an array of numbers, replace any negative values with the string "Dojo".
function swap_neg_for_string($arr) {
    foreach($arr as $index => $value) {
        if ($value < 0) {
            $arr[$index] = "dojo";
        }
    }
    var_dump($arr);
    return $arr;
}

swap_neg_for_string([-1, 1, 5, -5]);
 
// 8. Print Odds 1-255
// Print all odd integers from 1 to 255.
function print_odds_1_to_255(){
    $odds = [];
    for ($i = 1; $i <= 255; $i++) {
        if ($i % 2 == 1) {
            print $i . "\n";
            array_push($odds, $i);
        }
    }
    return $odds;
}

print_odds_1_to_255();

// 9. Iterate and Print Array
// Iterate through a given array, printing each value.

function iterate_and_print($arr) {
    foreach($arr as $value) {
        print $value . "\n";
    }
}
iterate_and_print(["hello", "there", "my", "name", "is", "tim"]);

// 10. Get and Print Average
// Analyze an array's values and print the average.
function get_print_avg($arr) {
    $sum = 0;
    $avg = NULL;
    foreach ($arr as $value) {
        $sum += $value;
    }
    $avg = $sum/count($arr);
    print $avg . "\n";
    return $avg;
}
get_print_avg([1, 2, 3, 4, 5, 6]);

// 11. Square the Values
// Square each value in a given array, returning that same array with changed values.
function square_the_values($arr){
    foreach ($arr as $index => $value) {
        $arr[$index] = $value * $value;
    }
    var_dump($arr);
    return $arr;
}
square_the_values([1, 5, 10]);

// 12. Zero Out Negative Numbers
// Return the given array, after setting any negative values to zero.

function zero_out_array($arr) {
    foreach($arr as $i => $val) {
        if ($val < 0) {
            $arr[$i] = 0;
        }
    }
    var_dump($arr);
    return $arr;
}

zero_out_array([-1, 10, 15, -10]);

// 13. Shift Array Values
// Given an array, move all values forwards (towards 0 index) by one index, dropping the first and leaving a "0" value at the end.

function shift_array_vals($arr) {
    foreach($arr as $i => $val) {
        $arr[$i] = $arr[$i + 1];
    }
    $arr[count($arr) - 1] = 0;
    var_dump($arr);
    return $arr;
}
shift_array_vals([1,2,3,4,5]);