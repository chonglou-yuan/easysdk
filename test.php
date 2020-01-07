<?php
require_once './vendor/autoload.php';
use Easysdk\Map\Qmap;
$temp = new Qmap(["key"=>"123"]);
print_r($temp);
exit();