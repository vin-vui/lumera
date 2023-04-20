<?php

function short_number($number) {
    $abbrevs = [
        12 => 'T',
        9 => 'G',
        6 => 'M',
        3 => 'k',
        0 => '',
    ];

    $formatted_number = $number;

    foreach ($abbrevs as $exponent => $abbrev) {
        if ($number >= pow(10, $exponent)) {
            $display_number = $number / pow(10, $exponent);
            $decimals = ($exponent >= 3 && round($display_number, 1) < 100) ? 1 : 0;
            $formatted_number = number_format($display_number, $decimals, ',', ' ') . $abbrev;
            break;
        }
    }

    return $formatted_number;
}
