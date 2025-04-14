<?php

function getIntList(): array
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function output($_str): void
{
    echo $_str . "\n";
}

function main(): void
{
    $_abc = getIntList();

    sort($_abc);

    output($_abc === [5, 5, 7] ? 'YES' : 'NO');
}

main();
