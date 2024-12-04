<?php

function getString()
{
    return trim(fgets(STDIN));
}

function toList($_str)
{
    return str_split($_str);
}

function key_proc($_key, $_buf)
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

function output($_str)
{
    echo $_str . "\n";
}

function main()
{
    $_S = toList(getString());

    $_res = [];
    foreach ($_S as $_c) {
        $_res = key_proc($_c, $_res);
    }
    output(implode('', $_res));
}
main();
