class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {
        array_multisort($intervals);
        $res = [$intervals[0]];
        $k = 0;

        for($i=1; $i<count($intervals); $i++){
            $start = $intervals[$i][0];
            $end = $intervals[$i][1];
            $last_interv = end($res);

            if($start <= $last_interv[1]){
                $res[$k] = [$last_interv[0], max($end, $last_interv[1])];
            }else{
                $res[] = $intervals[$i];
                $k++;
            }
        }

        return $res;
    }
}