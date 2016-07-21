<?php
ini_set("display_errors", 1);

require_once("src/One.php");
require_once("src/Two.php");

use ComposerTest\One;
use ComposerTest\Two;

One::getOne();
Two::getTwo();
?>