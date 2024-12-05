<?php

function getInt()
{
    return intval(trim(fgets(STDIN)));
}


function output($_str)
{
    echo $_str . "\n";
}

function main()
{
    $_N = getInt();
    $_K = getInt();
    $_X = getInt();
    $_Y = getInt();

    $_ans = $_N < $_K ? ($_N * $_X) : ($_K * $_X + ($_N - $_K) * $_Y);

    output(strval($_ans));
}
main();
