class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $s_len = strlen($s);
        $t_len = strlen($t);
        $s_hash = [];
       
        if($s_len !== $t_len){
            return false;
        }

        for($i=0; $i<$s_len; $i++){
            $s_hash[$s[$i]] = isset($s_hash[$s[$i]])?$s_hash[$s[$i]] +1: 1;
        }

        for($i=0; $i<$s_len; $i++){
            if(isset($s_hash[$t[$i]])){
                $s_hash[$t[$i]]--;

                if($s_hash[$t[$i]] === 0){
                    unset($s_hash[$t[$i]]);
                }
            }
        }

        
        return !(bool) $s_hash;
    }
}