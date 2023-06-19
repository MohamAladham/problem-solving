<?php


class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        // "a good   example"
        // "example good a"

        $s = trim($s);
        $s = explode(' ', $s);
        var_dump($s);
        $s = array_filter($s, function($a){return $a != '';});
        var_dump($s);
        $s = array_reverse($s);
        $s = implode(' ', $s);
        return $s;
    }
}
