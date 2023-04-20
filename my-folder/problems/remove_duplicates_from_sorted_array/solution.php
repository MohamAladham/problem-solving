class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        // [1,1,2]
        // [1,X,X]
        
        // Start from left to right, find unique numbers and add them to the $nextSpot.
        
        $nextSpot = 1;

        for($r=1; $r<count($nums); $r++){
            if($nums[$r] != $nums[$r-1]){
                $nums[$nextSpot] = $nums[$r];
                $nextSpot++;
            }
        }
        
        return $nextSpot;
    }
}