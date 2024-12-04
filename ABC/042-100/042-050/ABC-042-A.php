<?php

function getIntList()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function output($_str)
{
    echo $_str . "\n";
}

function main()
{
    $_abc = getIntList();

    sort($_abc);

    output($_abc === [5, 5, 7] ? 'YES' : 'NO');
}

main();


