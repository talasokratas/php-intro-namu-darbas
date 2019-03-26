<?php declare(strict_types=1);

namespace Nfq\Akademija\Strict;
function strict(...$numbers) {
    calculateHomeWorkSum($numbers);
};

function calculateHomeWorkSum(int...$numbers): int {
    $sum = 0;
    foreach($numbers as $number) {
    $sum += $number;
}
return $sum;
}