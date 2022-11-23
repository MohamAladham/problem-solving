class Solution {

    /**
     * @param Integer[] $temperatures
     * @return Integer[]
     */
    function dailyTemperatures($temperatures) {
        $stack = [];
        $result = array_fill(0, count($temperatures), 0);

        foreach($temperatures as $index=>$t){
            while($stack && $t > $temperatures[end($stack)]){
                $stacked_index = array_pop($stack);
                $result[$stacked_index] = $index - $stacked_index;
            }

            array_push($stack, $index);
        }


        return $result;
    }
}