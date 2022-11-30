class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $hash = [];

        foreach($nums as $index=>$n){
            if(isset($hash[$n]) && abs($hash[$n] - $index)<=$k){
                return true;
            }

            $hash[$n] = $index;
        }

        return false;
    }
}