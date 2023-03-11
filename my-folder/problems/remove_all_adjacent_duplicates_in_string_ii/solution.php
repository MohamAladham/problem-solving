class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function removeDuplicates($s, $k) {
        $stack = new SplStack();
        $ans = '';

        for($i=0; $i<strlen($s); $i++){
            if(!$stack->isEmpty() && $stack->top()[0] === $s[$i]){
                $char = $stack->pop();
                if($char[1]+1 < $k){
                    $stack->push([$char[0], $char[1]+1]);
                }
            }else{
                $stack->push([$s[$i], 1]);
            }
        }

        while(!$stack->isEmpty()){
            $val = $stack->shift();
            $char = $val[0];
            $count = $val[1];

            for($i=0; $i<$count; $i++){
                $ans .= $char;
            }
        }

        return $ans;
    }
}