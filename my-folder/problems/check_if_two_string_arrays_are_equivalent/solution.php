class Solution {

    /**
     * @param String[] $word1
     * @param String[] $word2
     * @return Boolean
     */
    function arrayStringsAreEqual($word1, $word2) {
        //return $this->sol1($word1, $word2);
        return $this->sol2($word1, $word2);
    }

    function sol2($word1, $word2){
        return implode('', $word1) === implode('', $word2);
    }


    function sol1($word1, $word2){
        $s1 = '';
        $s2 = '';
        
        foreach($word1 as $a){
            $s1 .= $a;
        }
        
        foreach($word2 as $a){
            $s2 .= $a;
        }

        if($s1 === $s2){
            return true;
        }

        return false;
    }
}