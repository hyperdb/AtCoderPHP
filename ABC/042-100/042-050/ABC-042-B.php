<?php

function getStringRow($_row_cnt)
{
    $_buf = [];
    for($_i = 0; $_i < $_row_cnt; $_i++)
    {
        $_buf[] = trim(fgets(STDIN));
    }
    return $_buf;
}

function getIntArray()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function main()
{
    list($_N, $_L) = getIntArray();
    $_strings = getStringRow($_N);

    sort($_strings);

    echo implode("", $_strings);
}

main();
