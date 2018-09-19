<?php

require __DIR__ . '/vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();

echo $slugify->slugify('This is a sentence which will be transformed to slug string');
echo '<br />';
echo $slugify->slugify('Oto przykład zdania w języku polskim.');

?>