<?php

// Converts string into array 
function humanized_list($x_physicists_string) 
{
  		$physicists_array = explode(", ", $x_physicists_string);

  		//sort naturally
		sort($x_physicists_array);

		//pop and save to var
		$x_lastitem = array_pop($x_physicists_array);

		//then push 'add'
		array_push($x_physicists_array, "and ");

		//then add popped item back
		array_push($x_physicists_array, $x_lastitem);

		//return value
		return $x_physicists_array;
}

// List of famous peeps
$physicists_string = "Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark";

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);


//convert to string to echo
$physicists_string = implode(", ", $famous_fake_physicists);


// Output sentence
echo "Some of the most famous fictional theoretical physicists are $physicists_string. " . PHP_EOL;

?>