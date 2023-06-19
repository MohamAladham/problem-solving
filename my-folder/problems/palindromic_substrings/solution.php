<?php


class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSubstrings($s) {
        // qmaddamr
        // qmadamr
        $count = 0;

        for($i=0; $i<strlen($s); $i++){
            $l = $i;
            $r = $i;
            while($l>=0 && $r<=strlen($s) && $s[$l]===$s[$r]){
                $count++;
                $l--;
                $r++;
            }

            // for event string
            $l = $i;
            $r = $i+1;
            while($l>=0 && $r<=strlen($s) && $s[$l]===$s[$r]){
                $count++;
                $l--;
                $r++;
            }
        }

        return $count;
    }
}
