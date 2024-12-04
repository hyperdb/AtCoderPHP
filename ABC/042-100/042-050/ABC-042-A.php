<?php

function getIntList()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function main()
{
    $_abc = getIntList();

    sort($_abc);

    echo $_abc === [5, 5, 7] ? 'YES' : 'NO';
}

main();
