class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        $colorsHash = [];

        for($i=0; $i<count($nums); $i++){
            $colorsHash[$nums[$i]] = isset($colorsHash[$nums[$i]]) ? $colorsHash[$nums[$i]]+1: 1; 
        }

        $counter = 0;
  
        for($j=0; $j<count($nums); $j++){
            while(!isset($colorsHash[$counter]) || !$colorsHash[$counter]){
                $counter++;
            }
                      
            $nums[$j] = $counter;
            $colorsHash[$counter]--;
        }
    }
}