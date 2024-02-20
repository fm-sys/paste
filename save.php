<?php
$text = $_POST['text'];
$file = 'pastebin.txt';
file_put_contents($file, $text);
echo "Text saved successfully!";
?>
