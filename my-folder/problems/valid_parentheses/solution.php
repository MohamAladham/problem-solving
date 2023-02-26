class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        if(strlen($s) % 2 !==0){
            return false;
        }
        
        $stack = new SplStack();
        
        for($i=0; $i<strlen($s); $i++){
            $chr = $s[$i];

            if($chr === '(' ){
                $stack->push(')');
            }elseif($chr === '[' ){
                $stack->push(']');
            }elseif($chr === '{' ){
                $stack->push('}');
            }elseif($stack->isEmpty() || $stack->pop() !== $chr){
                return false;
            }
        }

        return $stack->isEmpty();
    }
}