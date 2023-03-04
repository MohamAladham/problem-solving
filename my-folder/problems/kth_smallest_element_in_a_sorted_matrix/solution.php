class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($matrix, $k) {
    $heap = new SplMaxHeap();
        for($i =0; $i< sizeof($matrix); $i++){
            for($j= 0; $j < sizeof($matrix[0]); $j++){
                $heap->insert($matrix[$i][$j]);
                if($heap->count() >$k)
                    $heap->extract();
            }
        }
        return $heap->top();  
    }
}