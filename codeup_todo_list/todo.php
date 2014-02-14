<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($list)
{
    // Return string of list items separated by newlines.
    $listString = '';
    foreach ($list as $key => $listItems) {
        $listString .= '[' . ($key + 1) . '] ' . $listItems . PHP_EOL;
    }
    return $listString;
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) 
{
    // Return filtered STDIN input
    $input = trim(fgets(STDIN));
    return $upper ? strtoupper($input) : $input;
}

function read_file($fileName) {
    $handle = fopen($fileName, "r");
    $contents = fread($handle, filesize($fileName));
    $contentsArray = explode("\n", $contents);
    fclose($handle);
    return $contentsArray;
}

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (O)pen file, (Q)uit : ';

    // Get the input from user
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'O') {
        echo 'Enter path of file to open: ';
        $fileName = get_input();
        $items = read_file($fileName);

    } elseif ($input == 'N') {
        // Add to beginning or end of array?
        echo 'Do you want to add it to the (B)eginning or (E)nd of the list? ';
        $addTo = get_input(TRUE);
        echo 'Enter item: ';
        // Add according to input, default to add at end
        if ($addTo == 'B') {
            array_unshift($items, get_input());
        } else {
            array_push($items, get_input());
        }
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key - 1]);
        // Reorders array $keys
        $items = array_values($items);
    } elseif ($input == 'S') {      
        // How do you want to sort?
        echo 'Would you like to sort (A)-Z, or (Z)-A?: ';
        $sortBy = get_input(TRUE);
        // Sort according to input
        if ($sortBy == 'A') {
            sort($items);
        } elseif ($sortBy == 'Z') {
            rsort($items);
        }
    } elseif ($input == 'F') {
        // Hidden command to remove first item
        echo 'Are you sure you want to remove the first item? Y/N: ';
        $confirmation = get_input(TRUE);
            
        if ($confirmation == 'Y') {
            array_shift($items);
        } 
        
    } elseif ($input == 'L') {
        // Hidden command to remove last item
        echo 'Are you sure you want to remove the last item? Y/N: ';
        $confirmation = get_input(TRUE);

        if ($confirmation == 'Y') {
            array_pop($items);
        } 
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);

?>