<?php
function getString()
{
    return trim(fgets(STDIN));
}

function output($_str)
{
    echo $_str . "\n";
}

function main()
{
    $_S = getString();
    $_N = strlen($_S);

    $_b = 1 << ($_N - 1);

    $_total = 0;
    for ($_i = 0; $_i < $_b; $_i++) {
        $_c = 0;
        for ($_j = 0; $_j < $_N; $_j++) {
            $_c += intval($_S[$_j]);
            $_x = 1 << $_j;
            if ($_i & $_x) {
                $_total += $_c;
                $_c = 0;
            } else if ($_j < ($_N - 1)) {
                $_c *= 10;
            }
        }
        $_total += $_c;
    }
    output(strval($_total));
}
main();
