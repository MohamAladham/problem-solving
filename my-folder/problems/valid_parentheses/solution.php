class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = new SplStack();

        for($i=0; $i<strlen($s); $i++){
            if(in_array($s[$i], ['(','{','['])){
                $stack->push($s[$i]);
                continue;
            }elseif( !$stack->isEmpty() && (
                ($s[$i] === ')' && $stack->top() != '(')
                || ($s[$i] === '}' && $stack->top() != '{')
                || ($s[$i] === ']' && $stack->top() != '[')
            )){
                return false;
            }elseif($stack->isEmpty()){
                return false;
            }

            $stack->pop();
        }

        return $stack->isEmpty();
    }
}