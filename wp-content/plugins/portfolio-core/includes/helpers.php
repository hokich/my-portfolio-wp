<?php

function portfolio_minify_html($html) {
    return preg_replace('/>\s+</', '><', $html);
}
