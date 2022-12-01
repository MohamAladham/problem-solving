class Solution {

    /**
     * @param String[] $words
     * @param String $order
     * @return Boolean
     */
    function isAlienSorted($words, $order) {
        $hash = [];

        for($i=0; $i<strlen($order); $i++){
            $hash[$order[$i]] = $i;
        }

        $j = 0;
        $count = count($words);
        
        for($i=0; $i<$count-1; $i++){
            $w1 = $words[$i];
            $w2 = $words[$i+1];
            $w1_len = strlen($w1);
            $w2_len = strlen($w2);
            
            for($j=0; $j<$w1_len; $j++){
                if($j == $w2_len){
                    return false;
                }
                
                if($w1[$j] != $w2[$j]){
                    if($hash[$w1[$j]] > $hash[$w2[$j]]){
                        return false;   
                    }
                    
                    break;
                }
            }
        }


        return true;
    }
}