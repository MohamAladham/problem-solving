class Solution {

    /**
     * @param Integer[][] $firstList
     * @param Integer[][] $secondList
     * @return Integer[][]
     */
    function intervalIntersection($firstList, $secondList) {
        $result = [];
        $i = $j = 0;

        while($i<count($firstList) && $j<count($secondList)){
            $start = max($firstList[$i][0], $secondList[$j][0]);
            $end = min($firstList[$i][1], $secondList[$j][1]);
            
            if($start<=$end){
                $result[] = [$start, $end];
            }

            if($firstList[$i][1] < $secondList[$j][1]){
                $i++;
            }else{
                $j++;
            }
        }

        return $result;
    }
}