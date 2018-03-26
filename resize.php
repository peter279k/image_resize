<?php

namespace Gumlet;

require 'vendor/autoload.php';

use \Gumlet\ImageResize;

$image = new ImageResize('image.jpg');
$image->scale(50);
$image->save('image2.jpg');
