class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function subArrayRanges($nums) {
        $ans = 0;

        for($left=0; $left<count($nums); $left++){
            $min = $nums[$left];
            $max = $nums[$left];

            for($right=$left; $right<count($nums); $right++){
                $min = min($min, $nums[$right]);
                $max = max($max, $nums[$right]);
                $ans += $max - $min; 
            }
        }

        return $ans;
    }
}