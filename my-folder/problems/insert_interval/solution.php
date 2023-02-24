class Solution {
   
 /*
         ____________   <- new interval
      _______________   <- after merge      
____  _______  ____  _______        ________________
------------------------------------------------------
^  ^  ^  ^  ^  ^  ^  ^  ^  ^  ^  ^  ^  ^  ^  ^  ^  ^
1  2  3  4  5  6  7  8  9  10  11  12  13  14  15  16


 */  
      
   
    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
    function insert($intervals, $newInterval) {
        $newStart = $newInterval[0];
        $newEnd = $newInterval[1];
       
        $i = 0;
        $n = count($intervals);

        $output = array();

        //              _________
        // ______ ________ x____________x
        // -----------------------------
        while ($i < $n && $newStart > $intervals[$i][0]) {
            array_push($output, $intervals[$i]);
            $i = $i + 1;
        }
    
        if (empty($output) || end($output)[1] < $newStart) {
            array_push($output, $newInterval);
        }
        else {
            $output[count($output) - 1][1] = max(end($output)[1], $newEnd);
        }
        
        while ($i < $n) {
            $ei = $intervals[$i];
            $start = $ei[0];
            $end = $ei[1];

            if (end($output)[1] < $start) {
                array_push($output, $ei);
            }
            else {
                $output[count($output) - 1][1] = max(end($output)[1], $end);
            }
            $i++;
        }
      
        return $output;
    }
}