<?php

function getString(): string
{
    return trim(fgets(STDIN));
}

function key_proc(string $_key, array $_buf): array
{
    if ($_key == 'B') {
        $_len = count($_buf);
        if ($_len > 0) {
            array_pop($_buf);
        }
    } else {
        $_buf[] = $_key;
    }
    return $_buf;
}

function output($_str): void
{
    echo $_str . "\n";
}

function main(): void
{
    $_S = str_split(getString());

    $_res = [];
    foreach ($_S as $_c) {
        $_res = key_proc($_c, $_res);
    }
    output(implode('', $_res));
}
main();
