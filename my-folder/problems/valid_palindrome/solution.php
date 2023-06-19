<?php


class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s     = preg_replace('/[^a-zA-Z0-9]/', '', $s);
        $s     = strtolower( $s );
        $left  = 0;
        $right = strlen($s) - 1;

        while ( $left <= $right )
        {
            if ( $s[$left] !== $s[$right] )
            {
                return FALSE;
            }

            $left++;
            $right--;
        }

        return TRUE;
    }
}
