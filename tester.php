<?php
$tester = __DIR__ . "\\bin\\palma_ts.exe";

$test = "2014-01-xy";
$test = "2014-02-bloky";
$test = "2014-03-TN";

chdir(__DIR__ . "\\" . $test);

echo "\n--------------------------- INPUT\n";
echo file_get_contents(__DIR__ . "\\" . $test . "\\" . "input");

echo "\n--------------------------- RUN\n";
echo exec("\"" . $tester . "\" turing input output 1000 1000");

echo "\n--------------------------- OUTPUT\n";
echo file_get_contents(__DIR__ . "\\" . $test . "\\" . "output");