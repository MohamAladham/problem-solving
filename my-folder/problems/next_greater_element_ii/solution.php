class Solution {
/*



4
___

*/


    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function nextGreaterElements($nums) {
        $ans = array_fill(0,count($nums), -1);
        $stack = new SplStack();

        for($i=1; $i<=2; $i++){
            foreach($nums as $index=>$val){
                while(!$stack->isEmpty() && $stack->top()[0] < $val){
                    $e = $stack->pop();
                    $ans[$e[1]] = $val;
                }

                $stack->push([$val, $index]);
            }

        }
        
        return $ans;
    }
}