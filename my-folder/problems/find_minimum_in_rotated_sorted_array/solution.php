class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        $l = 0;
        $r = count($nums) - 1;
        $min = PHP_INT_MAX;

        while($l<=$r){
            $m = floor(($l+$r)/2);

            $min = min($nums[$m], $min);

            //LEFT SIDE
            if($nums[$l]<=$nums[$m]){
                if($nums[$l] > $nums[$r]){
                    $l = $m +1;
                }else{
                    $r = $m -1;
                }
            }else{
                if($nums[$r]>$nums[$m]){
                    $r = $m -1;
                }else{
                    $l = $m +1;
                }
            }

           
        }

        return $min;
    }
}