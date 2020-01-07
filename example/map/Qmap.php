<?php
require_once '../../vendor/autoload.php';
use Easysdk\Map\Qmap;
$temp = new Qmap("ADPBZ-WKACO-OTKWO-S44I6-HRDQ5-TKBTU");
print_r($temp->geocoder("40.004086,116.656657"));
exit();