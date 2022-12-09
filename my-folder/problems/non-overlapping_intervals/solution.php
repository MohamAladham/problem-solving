class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function eraseOverlapIntervals($intervals) {
        sort($intervals);
        //$res = $intervals[0];
        $count = count($intervals);
        $count_removes = 0;

        if($count === 1 || !$count){
            return 0;
        }

        $prev_index = 0;

        for($i=1; $i<$count; $i++){
            $c_start = $intervals[$i][0];
            $c_end = $intervals[$i][1];
            $prev_start = $intervals[$prev_index][0];
            $prev_end = $intervals[$prev_index][1];

            if($c_start < $prev_end ){
                $count_removes++;
                $prev_index = $prev_end>$c_end? $i:$prev_index;
            }else{
                $prev_index = $i;
            }

        }

        return $count_removes;
    }
}