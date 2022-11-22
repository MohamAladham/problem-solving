class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function nextGreaterElements($nums) {
        $stack = [];
        $result = [];

        foreach($nums as $n){
            $result[] = -1;
        }

        for($i=1; $i<=2; $i++){
            foreach($nums as $index=>$n){
                while($stack && $n > $nums[end($stack)]){
                    $result[array_pop($stack)] = $n;
                }

                array_push($stack, $index);
            }
        }


        return $result;
    }
}