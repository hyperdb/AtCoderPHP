<?php

function getInt()
{
    return intval(trim(fgets(STDIN)));
}

function outputInt($_int)
{
    echo strval($_int) . "\n";
}

function main()
{
    $_a = getInt();
    $_b = getInt();
    $_h = getInt();

    outputInt(intval(($_a + $_b) * $_h / 2));
}
main();
