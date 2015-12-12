<?php
$tester = __DIR__ . "\\bin\\palma_ts.exe";

$test = "2014-01-xy";
$test = "2014-02-bloky";
$test = "2014-03-TN";
$test = "2015-01-Postupnost";
$test = "2015-02-Bloky";
#$test = "2015-03-Kopirovac";


chdir(__DIR__ . "\\" . $test);

echo "\n--------------------------- INPUT\n";
echo file_get_contents(__DIR__ . "\\" . $test . "\\" . "input");

if(is_file("generator.php")) {
    echo "\n--------------------------- GEN\n";
    include "generator.php";
}

echo "\n--------------------------- RUN\n";
echo exec("\"" . $tester . "\" turing input output 10000000 10000000");

echo "\n--------------------------- OUTPUT\n";
echo file_get_contents(__DIR__ . "\\" . $test . "\\" . "output");