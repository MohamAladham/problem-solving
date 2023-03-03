class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest($nums, $k) {
        $maxHeap = new SplMaxHeap();

        for($i=0; $i<count($nums); $i++){
            $maxHeap->insert($nums[$i]);
        }

        for($i=0; $i<$k; $i++){
            $v = $maxHeap->extract();
        }

        return $v;
    }
}