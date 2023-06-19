<?php


class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $buyPointer = 0;
        $maxProfit = 0;

        for($sellPointer=1; $sellPointer<count($prices); $sellPointer++){
            if($prices[$sellPointer] > $prices[$buyPointer]){
                $profit = $prices[$sellPointer] - $prices[$buyPointer];
                $maxProfit = max( $maxProfit, $profit );
            }else{
                $buyPointer = $sellPointer;
            }
        }

        return $maxProfit;
    }
}
