class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $pre = [];
        $post = [];
        $ans = [];

        foreach($nums as $index=>$val){
            if($index === 0){
                $pre[] = $val;
            }else{
                $pre[] = $pre[$index-1] * $val;
            }
        }

        for($i=count($nums)-1; $i>=0; $i--){
            if($i === count($nums)-1){
                $post[$i] = $val;
            }else{
                $post[$i] = $post[$i+1] * $nums[$i];
            }
        }
        
        foreach($nums as $index=>$val){
            if($index === 0){
                $ans[$index] = $post[$index+1];
            }elseif($index === count($nums)-1){
                $ans[$index] = $pre[$index-1];
            }else{
                $ans[$index] = $pre[$index-1] * $post[$index+1];
            }
        }

        return $ans;
    }
}