<?php

function getInt()
{
    return intval(trim(fgets(STDIN)));
}

function getIntList()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function getCost($_data, $_i)
{
    $_c = 0;
    foreach ($_data as $_d) {
        $_c += ($_d - $_i) ** 2;
    }
    return $_c;
}

function output($_str)
{
    echo $_str . "\n";
}

function main()
{
    $_N = getInt();

    if ($_N > 0) {
        $_a = getIntList();
        $_ave = array_sum($_a) / count($_a);
        $_cost = 0;
        if (is_int($_ave)) {
            $_cost = getCost($_a, intval($_ave));
        } else {
            $_c1 = getCost($_a, floor($_ave));
            $_c2 = getCost($_a, ceil($_ave));

            $_cost = $_c1 < $_c2 ? $_c1 : $_c2;
        }
        output(strval($_cost));
    } else {
        output('0');
    }
}
main();
