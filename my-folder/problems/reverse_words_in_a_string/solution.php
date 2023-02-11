class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        return $this->usingStack($s);
    }



    function usingStack($str){
        $ans = '';
        $word = '';
        $stack = new SplStack();

        for($i=0; $i<strlen($str); $i++){
            if($str[$i] !== ' '){
                $word .= $str[$i];
                if($i === strlen($str)-1){
                    $stack->push($word);
                }
            }else{
                if(strlen($word)){
                    $stack->push($word);
                }

                $word = '';
            }
        }

        while(!$stack->isEmpty()){
            $ans .= $stack->pop();

            if(!$stack->isEmpty()){
                $ans .= ' ';
            }
        }

        return $ans;
    }
}