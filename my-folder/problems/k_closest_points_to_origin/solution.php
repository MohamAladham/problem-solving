class Solution {

    /**
     * @param Integer[][] $points
     * @param Integer $k
     * @return Integer[][]
     */
    function kClosest($points, $k) {
        $minHeap = new SplMinHeap();

        for($i=0; $i<count($points); $i++){
            $distance = sqrt(pow($points[$i][0],2) + pow($points[$i][1],2));
            $minHeap->insert([$distance, $i]);
        }

        for($i=0; $i<$k; $i++){
            $v[] = $points[$minHeap->extract()[1]];
        }

        return $v;
    }
}