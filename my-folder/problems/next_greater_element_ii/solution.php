class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function nextGreaterElements($nums) {
        $stack = new SplStack();
        $arr = array_fill(0,count($nums), -1);

        for($i=1; $i<=2; $i++){
           foreach($nums as $k=>$v){
               while(!$stack->isEmpty() && $nums[$stack->top()]<$v){
                   $pop = $stack->pop();
                   $arr[$pop] = $v;
               }

               $stack->push($k);
           }
        }

        return $arr;
    }
}