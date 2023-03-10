class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        if(count($nums) === 1){
            return true;
        }
        
        $target = count($nums)-1;

        for($i=count($nums)-2; $i>=0; $i--){
            $distance = $target - $i;
            
            if($nums[$i] >= $distance){
                $target = $i;
            }elseif($i === 0){
                return false;
            }
        }

        return true;
    }
}