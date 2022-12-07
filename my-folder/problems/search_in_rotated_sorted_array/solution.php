class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $l = 0;
        $r = count($nums) - 1;

        while($l<=$r){
            $m = (int) (($l+$r)/2);

            if($nums[$m] === $target){
                return $m;
            }

            if($nums[$m]>=$nums[$l]){
                if($target <= $nums[$m] && $target >= $nums[$l]){
                    $r = $m -1;
                }else{
                    $l = $m +1;
                }
            }else{
                if($target >= $nums[$m] && $target <= $nums[$r]){
                    $l = $m +1;
                }else{
                    $r = $m -1;
                }
            }
            
        }
        return -1;
    }
}