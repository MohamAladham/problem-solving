class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $maxHeap = new SplMaxHeap();
        $hash = [];

        for($i=0; $i<count($nums); $i++){
            $hash[$nums[$i]] = isset($hash[$nums[$i]]) ? ++$hash[$nums[$i]]:1;
        }

        foreach($hash as $key=>$value){
            $maxHeap->insert([$value,$key]);
        }

        for($i=0; $i<$k; $i++){
            $ans[] = $maxHeap->extract()[1];
        }

        return $ans;
    }
}