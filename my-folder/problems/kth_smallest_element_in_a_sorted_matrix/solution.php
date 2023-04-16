class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($matrix, $k) {
    /*
[1, 5, 9]
[10,11,13]
[12,13,15]
// max heap
    */   

        $heap = new SplMaxHeap();

        for($i=0; $i<count($matrix); $i++ ){
            for($j=0; $j<count($matrix[0]); $j++ ){
                $heap->insert($matrix[$i][$j]);
                
                if($heap->count() > $k){
                    $heap->extract();
                }
            }
        }


        return $heap->count() ? $heap->top() : $matrix[0][0];
    }
}