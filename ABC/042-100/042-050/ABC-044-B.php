<?php

function getString()
{
    return trim(fgets(STDIN));
}


function output($_str)
{
    echo $_str . "\n";
}

function main()
{
    $_buf = str_split(getString());

    $_d = array();
    $_f = true;

    foreach ($_buf as $_c) {
        if (array_key_exists($_c, $_d)) {
            $_d[$_c] += 1;
        } else {
            $_d[$_c] = 1;
        }
    }

    foreach (array_values($_d) as $_v) {
        if ($_v % 2 == 1) {
            $_f = false;
            break;
        }
    }

    output($_f ? 'Yes' : 'No');
}
main();
