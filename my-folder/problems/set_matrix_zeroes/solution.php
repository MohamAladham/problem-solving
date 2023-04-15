class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function setZeroes(&$matrix) {
        $hash = [];

        for($i=0; $i<count($matrix); $i++){
            for($j=0; $j<count($matrix[0]); $j++){
                if($matrix[$i][$j] === 0){
                    $hash[] = [$i, $j];
                }
            }
        }

        foreach($hash as $h){
            $row = $h[0];
            $col = $h[1];

            for($i=0; $i<count($matrix[0]); $i++){
                $matrix[$row][$i] = 0;
            }
        
            for($i=0; $i<count($matrix); $i++){
                $matrix[$i][$col] = 0;
            }
        }

    }
}