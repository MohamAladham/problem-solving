class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        // [2, 3, -1, 8, 4]
        // [2, 5, 4, 12,16]
        // [16,14,11,12, 4]

        // [1, -1, 4]
        // [1, 0, 4]
        // [4, 3, 4]
        $index = -1;
        $prefix = [];

        for($i=0; $i<count($nums); $i++){
            if($i===0){
                $prefix[] = $nums[$i];
                continue;
            }

            $prefix[] = $prefix[$i-1] + $nums[$i];
        }

        $postfix = [];

        for($i=count($nums)-1; $i>=0; $i--){
            if($i===count($nums)){
                $postfix[$i] = $nums[$i];
            }else{
                $postfix[$i] = $postfix[$i+1] + $nums[$i];
            }
                

            if($postfix[$i] === $prefix[$i])
                $index = $i;
        }

        return $index;        
    }
}