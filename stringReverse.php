<?php
function ReverseString(string $data)
{
    $reversedString = "";
    for ($i = strlen($data) - 1; $i >= 0; $i--) {
        $reversedString .= $data[$i];
    }
    echo $reversedString;
}
ReverseString("Hello, World!");