<?php

/**
 * 
 */
function getIntList(): array
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

/**
 * 
 */
function output($_str): void
{
    echo $_str . "\n";
}

/**
 * 
 */
function main(): void
{
    $_d = getIntList();

    sort($_d);

    output($_d[2] == $_d[0] + $_d[1] ? 'Yes' : 'No');
}

main();
