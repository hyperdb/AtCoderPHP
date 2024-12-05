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
    [$_N, $_A] = getIntList();
    $_x = getIntList();

    $_dp = array();

    for ($_i = 0; $_i < ($_N + 1); $_i++) {
        $_sub_1 = array();
        for ($_j = 0; $_j < ($_N * 50 + 1); $_j++) {
            $_sub_2 = array();
            for ($_k = 0; $_k < ($_N + 1); $_k++) {
                $_sub_2[] = 0;
            }
            $_sub_1[] = $_sub_2;
        }
        $_dp[] = $_sub_1;
    }

    $_dp[0][0][0] = 1;

    for ($_i = 0; $_i < $_N; $_i++) {
        for ($_j = 0; $_j < array_sum($_x); $_j++) {
            for ($_k = 0; $_k < $_N; $_k++) {
                if ($_dp[$_i][$_j][$_k] == 0) {
                    continue;
                } else {
                    $_dp[$_i + 1][$_j][$_k] += $_dp[$_i][$_j][$_k];
                    $_dp[$_i + 1][$_j + $_x[$_i]][$_k + 1] += $_dp[$_i][$_j][$_k];
                }
            }
        }
    }

    $_res = 0;
    for ($_k = 1; $_k <= $_N; $_k++) {
        $_res += $_dp[$_N][$_A * $_k][$_k];
    }
    output(strval($_res));
}
main();
