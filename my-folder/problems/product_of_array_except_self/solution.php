class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $count  = count( $nums );
        $result = [];
        $left   = 1;
        $right  = 1;

        for ( $i = 0; $i < $count; $i++ )
        {
            if ( $i === 0 )
            {
                $result[$i] = 1;
            } else
            {
                $left       *= $nums[$i - 1];
                $result[$i] = $left;
            }
        }

        for ( $i = $count - 1; $i >= 0; $i-- )
        {
            if ( $i === $count - 1 )
            {
                $result[$i] *= 1;
            } else
            {
                $right = $right * $nums[$i + 1];
            }

            $result[$i] *= $right;
        }

        return $result;        
    }
}