<?php

// File path
$file_path = "example.txt";

// Writing to a file
function writeToFile($file_path, $content) {
    // Open the file in write mode. If the file doesn't exist, it will be created.
    $file = fopen($file_path, "w") or die("Unable to open file for writing!");
    
    // Write the content to the file
    fwrite($file, $content);
    
    // Close the file
    fclose($file);
    
    echo "Content has been written to the file successfully.\n";
}

// Reading from a file
function readFromFile($file_path) {
    // Check if file exists
    if (!file_exists($file_path)) {
        die("File does not exist!");
    }
    
    // Open the file in read mode
    $file = fopen($file_path, "r") or die("Unable to open file for reading!");
    
    // Read the file content
    $content = fread($file, filesize($file_path));
    
    // Close the file
    fclose($file);
    
    return $content;
}

// Example usage

// Writing to the file
$content_to_write = "This is a sample text.Lalalal lalala i was wrooonggg\nWe are writing this to a file.\n";
writeToFile($file_path, $content_to_write);

// Reading from the file
$read_content = readFromFile($file_path);
echo "Content read from the file:\n";
echo $read_content;
