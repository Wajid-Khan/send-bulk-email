<?php  

// HTML string with <p> tags
$htmlString = '<p>This is a paragraph</p>';

// Remove <p> tags
$plainText = strip_tags($htmlString);

// Display the content without <p> tags
echo $plainText;

?>