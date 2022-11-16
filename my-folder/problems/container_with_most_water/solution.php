class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $count = count( $height );
        $max   = 0;
        $left  = 0;
        $right = $count - 1;

        while ( $left < $right )
        {
            $area = ( $right - $left ) * min( $height[$left], $height[$right] );
            $max  = max( $area, $max );

            if ( $height[$left] <= $height[$right] )
            {
                $left++;
            } else
            {
                $right--;
            }
        }

        return $max;
    }
}