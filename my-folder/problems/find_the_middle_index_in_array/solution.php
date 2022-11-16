class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMiddleIndex($nums) {

        $count  = count( $nums );
        $prefxs = [];
        $index  = -1;

        for ( $i = 0; $i < $count; $i++ )
        {
            if ( $i === 0 )
            {
                $prefxs[] = $nums[$i];
            } else
            {
                $prefxs[] = $prefxs[$i - 1] + $nums[$i];
            }
        }

        for ( $i = 0; $i < $count; $i++ )
        {
            $prefix_end = $prefxs[$count - 1] - $prefxs[$i];

            if ( $i === 0 )
            {
                $prefxs[$i - 1] = 0;
            }

            
            if ( $prefxs[$i - 1] === $prefix_end )
            {
                $index = $i;
                break;
            }
        }
        
        return $index;        
    }
}