<?php

function getInt(): int
{
    return intval(trim(fgets(STDIN)));
}

function output($_str): void
{
    echo $_str . "\n";
}

function main(): void
{
    $_N = getInt();
    output(strval(intval(($_N + 1) * $_N / 2)));
}
main();
