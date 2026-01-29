<?php

/**
 * 
 */
function getStringRow($_row_cnt): array
{
    $_buf = [];
    for ($_i = 0; $_i < $_row_cnt; $_i++) {
        $_buf[] = trim(fgets(STDIN));
    }
    return $_buf;
}

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
    list($_N, $_L) = getIntList();
    $_strings = getStringRow($_N);

    sort($_strings);

    output(implode("", $_strings));
}

main();
