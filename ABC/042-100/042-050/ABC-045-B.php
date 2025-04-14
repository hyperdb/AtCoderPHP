<?php


function getString(): string
{
    return trim(fgets(STDIN));
}

function output($_str): void
{
    echo $_str . "\n";
}

function main(): void
{
    $_d = array(
        str_split(getString()),
        str_split(getString()),
        str_split(getString())
    );

    $_p = 0;
    while ($_p >= 0) {
        if (count($_d[$_p]) == 0) {
            break;
        } else {
            $_v = array_shift($_d[$_p]);
            $_p = ord($_v) - ord('a');
        }
    }
    output(chr(ord('A') + $_p));
}
main();
