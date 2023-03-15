class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $total = 0;
        $buyP = 0;
        $sellP = 0;

        for(; $sellP < count($prices); $sellP++){
            if($prices[$sellP] > $prices[$buyP]){
                $total += $prices[$sellP] - $prices[$buyP];
            }

            $buyP = $sellP;
        }

        return $total;
    }
}