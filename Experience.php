<?php


$filePath = __DIR__ . '/filesystem/Experience.txt';


if (file_exists($filePath)) {
   
    $fileContents = file_get_contents($filePath);

  
    echo nl2br($fileContents); // Convert newlines to <br> tags for HTML output
} else {
    echo "File not found.";
}

?>