class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProductDifference($nums) {
        return $this->sol1($nums);
    }

    function sol1($nums){
        sort($nums);
        
        $count_nums = count($nums);
      
        return ($nums[$count_nums -1] * $nums[$count_nums -2]) 
        - ($nums[0] * $nums[1]);
    }
}