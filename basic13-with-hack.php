<?hh

// let's go ahead and create another a hack file

function addNumbers(Vector<int> $arr): Vector<int> {
    print "this is a test." . "\n";
    return $arr;
}

addNumbers(Vector {1, 2, 3});

/*
When you're writing in hack, remember that you need to define the type of both your parameters, and the type of the data being returned from the function. Note: If you are returning or accepting various types, there are ways to define that (and you have each type defined in order by which its matching parameter will be fed)

You also need to return the same type that you defined in the beginning. If you don't do either of these, you're function won't work.
*/

// let's do the basic 13 in hack


// 1. Print 1-255
// Print all the integers from 1 to 255.
function print_1_to_255(): int {
    print "printing 1 to 255..." . "\n";
    for ($i = 1; $i <= 255; $i++) {
        print $i . "\n";
    }
    print "done printing 1 to 255..." . "\n";
	return 255;
}

print_1_to_255();

// 2. Print Ints and Sum 0-255
// Print integers from 0 to 255, and with each integer print the sum so far.

function print_int_and_sum(): int {
	$sum = 0;
	print "Printing 0-255 and summing all values... \n";
	for ($i = 0; $i <= 255; $i++) {
		$sum += $i;
		print $i . "\n";
	}
	print "SUM: {$sum} \n";
	print "Done printing 0-255 and summing... \n";
	return $sum;
}

print_int_and_sum();


// 3. Find and Print Max
// Given an array, find and print its largest element.
function find_and_print_max(Vector<int> $vect): int {
	$max = $vect[0];
	foreach ($vect as $val) {
		if ($val >= $max) {
			$max = $val;
		}
	}
	print "MAX: {$val} \n";
	return $max;
}
find_and_print_max(Vector{-1, 2, 3, 4, 5});


// 4. Array with Odds
// Create an array with all the odd integers between 1 and 255 (inclusive).
function array_with_odds(): Vector<int>{
	$odd_nums = Vector{};
	for ($i = 1; $i <= 255; $i++) {
		if ($i % 2 == 1) {
			// note that $vectorName->add($itemToAdd) is the correct format for add function
			$odd_nums->add($i);
		}
	}
	print "Var dumping odd numbers now... \n";
	var_dump($odd_nums);
	print "Done var dumping odd numbers now... \n";
	return $odd_nums;
}

array_with_odds();

// 5. Greater than Y
// Given an array and a value Y, count and print the number of array values greater than Y.
function greater_than_y(Vector<int> $vect, int $y): int {
	$count = 0;
	foreach($vect as $val) {
		if ($val > $y) {
			$count++;
		}
	}
	print "COUNT: {$count} \n";
	return $count;
}
greater_than_y(Vector{1, 2, 3, 4, -1, 100, -50, 100}, 1);

// 6. Max, Min, Average
// Given an array, print the max, min and average values for that array.
function max_min_avg(Vector<int> $vect): Map<int> {
		$sum = 0;
		$data = Map{
			"max" => $vect[0],
			"min" => $vect[0],
			"avg" => 0
		};
		
		var_dump($vect);
		foreach($vect as $val) {
			print $val . "\n";
			// check for max
			if ($val >= $data['max']) {
				$data['max'] = $val;
			}
			// check for min
			if ($val <= $data['min']) {
				$data['min'] = $val;
			}
			// add to sum
			$sum += $val;
		}
		
		// get average
		$data['avg'] = $sum/count($vect);
		// display and dump data	
		var_dump($data);
		return $data;
}

max_min_avg(Vector{1, 2, -3, 4, 5, 100, 500, 1000, 100010});

// 7. Swap String For Array Negative Values
// Given an array of numbers, replace any negative values with the string "Dojo".
function swap_string_for_negative_values(Vector<int> $vec): Vector {
	foreach($vec as $idx => $val) {
		if ($val < 0) {
			$vec[$idx] = "Dojo";
		}
	}
	var_dump($vec);
	return $vec;
}

swap_string_for_negative_values(Vector{-1, 2, -3, 4, 5});
 
// 8. Print Odds 1-255
// Print all odd integers from 1 to 255.
function print_odds_1_to_255(): Vector<int> {
	$odd_vals = Vector{};
	for ($i = 1; $i <= 255; $i++) {
		if ($i % 2 == 1) {
			$odd_vals->add($i);
		}
	}
	var_dump($odd_vals);
	return $odd_vals;
}

print_odds_1_to_255();

// 9. Iterate and Print Array
// Iterate through a given array, printing each value.
function iterate_and_print_array(Vector $vec): Vector {
	foreach($vec as $val) {
		print $val . "\n";
	}
	return $vec;
}
iterate_and_print_array(Vector{1, 2, 3, 4, 5, "hello", "this", "is", "a", "vector"});

// 10. Get and Print Average
// Analyze an array's values and print the average.
function get_and_print_avg(Vector<int> $vec): float {
	$average = 0;
	$sum = 0;
	foreach($vec as $val) {
		$sum += $val;
	}
	$average = $sum / count($vec);
	print $average . "\n";
	return $average;
}
get_and_print_avg(Vector{1,2,3,4,5,6,7,8,9,10});


// 11. Square the Values
// Square each value in a given array, returning that same array with changed values.
function square_the_values(Vector<int> $vec): Vector<int> {
	foreach($vec as $idx => $val) {
		$vec[$idx] = $val * $val;
	}
	var_dump($vec);
	return $vec;
}
square_the_values(Vector{1, 2, 3, 4, 5});

// 12. Zero Out Negative Numbers
// Return the given array, after setting any negative values to zero.
function zero_out_negative_numbers(Vector<int> $vec): Vector<int> {
	foreach($vec as $idx => $val) {
		if ($val < 0) {
			$vec[$idx] = 0;
		}
	}
	var_dump($vec);
	return $vec;
}
zero_out_negative_numbers(Vector{1, 2, 3, -5, -10, 10});

// 13. Shift Array Values
// Given an array, move all values forwards (towards 0 index) by one index, dropping the first and leaving a "0" value at the end.
function shift_array_vals(Vector<int> $vec): Vector<int> {
	foreach($vec as $idx => $val) {
		try {
			$vec[$idx] = $vec[$idx + 1];			
		} catch (Exception $e) { /*notice exception here and var $e - generically catches the exception*/
			print "EXCEPTION";
			print $e->getMessage(); /*getMessage() is a built in function to give you exception message*/
			$vec[$idx] = 0; // here we just set last item to 0
		}
	}
	var_dump($vec);
	return $vec;
}

shift_array_vals(Vector{1, 2, 3, 4, 5, 6, 7});


