class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hash = [];

        foreach($nums as $index=>$val){
            if(isset($hash[$val])){
                return [$hash[$val], $index];
            }
            
            $hash[$target-$val] = $index;
        }

        return $nums;
    }
}