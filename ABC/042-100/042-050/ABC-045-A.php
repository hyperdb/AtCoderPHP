<?php

/**
 * 
 */
function getInt(): int
{
    return intval(trim(fgets(STDIN)));
}

/**
 * 
 */
function outputInt($_int): void
{
    echo strval($_int) . "\n";
}

/**
 * 
 */
function main(): void
{
    $_a = getInt();
    $_b = getInt();
    $_h = getInt();

    outputInt(intval(($_a + $_b) * $_h / 2));
}
main();
