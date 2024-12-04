<?php

function getInt()
{
    return intval(trim(fgets(STDIN)));
}

function output($_str)
{
    echo $_str . "\n";
}

function main()
{
    $_N = getInt();
    output(strval(intval(($_N + 1) * $_N / 2)));
}
main();
