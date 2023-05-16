class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest($nums, $k) {
       $heap = new SplMaxHeap();

       foreach($nums as $n){
           $heap->insert($n);
       }


       for($i=0; $i<$k-1; $i++){
            $heap->extract();
       }

       return $heap->extract();
    }
}