class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hash = [];

        foreach($nums as $k=>$v){
            if(isset($hash[$v])){
                return [$hash[$v], $k];
            }

            $hash[$target - $v] = $k;
        }

        return [];
    }
}