class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $count = count($nums);
        sort($nums);
        
        for($i=0; $i<=$count; $i++){
            if(!isset($nums[$i]) || $i !== $nums[$i]){
                return $i;
            }
        }

        return 0;
    }
}