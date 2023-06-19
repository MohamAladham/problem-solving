<?php


class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $ans = '';
        $stack = new splStack();

        for($r=0; $r<=strlen($s); $r++){
             if($s[$r] === ' ' || $r === strlen($s)){
                while(!$stack->isEmpty()){
                    $ans .= $stack->pop();
                }

                if($r !== strlen($s)){
                    $ans .= ' ';
                }
             }else{
                 $stack->push($s[$r]);
             }
        }


        return $ans;
    }
}
