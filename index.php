<?php
require "vendor/autoload.php";

use function calculateHomeWorkSum as Sum;
use function Nfq\Akademija\Not_Typed\calculateHomeWorkSum as NotTypedSum;
use function Nfq\Akademija\Soft\calculateHomeWorkSum as SoftSum;
use function Nfq\Akademija\Strict\strict as StrictSum;

echo 'calculateHomeWorkSum: ' . Sum(3, 2.2, '1') . '<br>';
echo 'Nfq\Akademija\Not_Typed\calculateHomeWorkSum: ' . NotTypedSum(3, 2.2, '1') . '<br>';
echo 'Nfq\Akademija\Soft\calculateHomeWorkSum: ' . SoftSum(3, 2.2, '1') . '<br>';
echo 'Nfq\Akademija\Strict\calculateHomeWorkSum: ' . StrictSum(3, 2.2, '1') . '<br>';

