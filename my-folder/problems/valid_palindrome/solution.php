class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s     = preg_replace('/[^a-zA-Z0-9]/', '', $s);
        $s     = strtolower( $s );
        $s     = str_split( $s );
        $left  = 0;
        $count = count( $s );
        $right = $count - 1;

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