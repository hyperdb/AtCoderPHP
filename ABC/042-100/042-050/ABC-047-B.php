<?php

/**
 * 
 */
function getIntList(): array
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function getIntListRow(int $_row_cnt): array
{
    $_buf = [];
    for ($_i = 0; $_i < $_row_cnt; $_i++) {
        $_buf[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
    }
    return $_buf;
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
function main()
{
    [$_w, $_h, $_n] = getIntList();
    $_l = getIntListRow($_n);

    $_m = array();
    for ($_i = 0; $_i < $_h; $_i++) {
        $_x = array();
        for ($_j = 0; $_j < $_w; $_j++) {
            $_x[] = 1;
        }
        $_m[] = $_x;
    }

    foreach ($_l as $_r) {
        if ($_r[2] == 1) {
            for ($_i = 0; $_i < $_h; $_i++) {
                for ($_j = 0; $_j < $_r[0]; $_j++) {
                    $_m[$_i][$_j] = 0;
                }
            }
        } elseif ($_r[2] == 2) {
            for ($_i = 0; $_i < $_h; $_i++) {
                for ($_j = $_r[0]; $_j < $_w; $_j++) {
                    $_m[$_i][$_j] = 0;
                }
            }
        } elseif ($_r[2] == 3) {
            for ($_i = 0; $_i < $_r[1]; $_i++) {
                for ($_j = 0; $_j < $_w; $_j++) {
                    $_m[$_i][$_j] = 0;
                }
            }
        } else {
            for ($_i = $_r[1]; $_i < $_h; $_i++) {
                for ($_j = 0; $_j < $_w; $_j++) {
                    $_m[$_i][$_j] = 0;
                }
            }
        }
    }

    $_s = 0;
    foreach ($_m as $_row) {
        $_s += array_sum($_row);
    }
    print(strval($_s));
}
main();
