class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $min_p = PHP_INT_MAX;
        $max   = 0;

        foreach ( $prices as $k => $v )
        {
            if ( $min_p > $v  )
            {
                $min_p   = $v;
            }elseif($v - $min_p > $max){
                $max = $v - $min_p;
            }
        }

        return $max;
    }
}