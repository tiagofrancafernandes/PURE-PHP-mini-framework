#!/bin/env php
<?php
$target_file = $argv[1] ?? null;
if(!$target_file)
{
    echo "Usage: regex.php <file>\n";
    exit(1);
}

if (!file_exists($target_file))
{
    return null;
}

echo PHP_EOL."File: ".$target_file.PHP_EOL;

$regex = '/^(\s|\n)*\<\?(\s|\n)*?$/m';
$content   = file_get_contents($target_file);

$subst = "\n<?php\n";

$result = preg_replace($regex, $subst, $content);

file_put_contents($target_file, $result);
