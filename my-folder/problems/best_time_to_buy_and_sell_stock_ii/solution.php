class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        // [7,1,5,3,6,4] 
        // [1,2,3,4,5]

        $sum = 0;
        $buy = 0;
        
        for($sell=1; $sell<count($prices); $sell++){
            if($prices[$sell] < $prices[$buy]){
                $buy = $sell;
            }else{
                $profit = $prices[$sell] - $prices[$buy];
            //    $maxArr[$buy] = isset($maxArr[$buy]) ? max($maxArr[$buy], $profit) : $profit;
                $sum += $profit;
                $buy = $sell;
            }
        }
        
        return $sum;
    }
}