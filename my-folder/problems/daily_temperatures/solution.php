<?php


class Solution {

    /**
     * @param Integer[] $temperatures
     * @return Integer[]
     */
    function dailyTemperatures($temperatures) {
/*
[73,74,75,71,69,72,76,73]
 0.  1. 2. 3. 4. 5. 6. 7
[1,  1, 4, 2, 1, 1, 0, 0]
*/

/*


4:69
3:71
*/

        $stack = new SplStack();
        $ans = array_fill(0,count($temperatures), 0);

        for($i=0; $i<count($temperatures); $i++){
            while(!$stack->isEmpty() && $temperatures[$i]>$temperatures[$stack->top()]){
                $temp = $temperatures[$stack->top()];

                if($temperatures[$i] > $temp){
                    $ans[$stack->top()] = $i - $stack->pop();
                }
            }

            $stack->push($i);
        }

        return $ans;
    }
}
