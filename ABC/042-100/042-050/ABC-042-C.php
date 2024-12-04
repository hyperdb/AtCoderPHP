<?php

function getIntList()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function main()
{
    list($_N, $_K) = getIntList();
    $_D = getIntList();

    for ($_i = $_N; $_i < 100000; $_i++) {
        $_j = $_i;
        $_r = true;
        while ($_j > 0) {
            $_m = $_j % 10;
            if (in_array($_m, $_D)) {
                $_r = false;
                break;
            }
            $_j = intval($_j / 10);
        }
        if ($_r) {
            echo $_i;
            break;
        }
    }
}

main();