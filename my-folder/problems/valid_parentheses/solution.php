class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $s = str_split($s);
        $stack= [];
        
        if(count($s) % 2 !==0){
            return false;
        }
        
        // [)
        
        foreach($s as $p){
            $peek = $stack[array_key_last($stack)];
            
            if(in_array($p, ['(','[','{'])){
                $stack[] = $p;
            }
            elseif($stack && $p === ')' && $peek === '('){
                array_pop($stack);
            }
            
            elseif($stack && $p === ']' && $peek === '['){
                array_pop($stack);
            }
            
            elseif($stack && $p === '}' && $peek === '{'){
                array_pop($stack);
            }else{
                return false;
            }
            
        }
        
        var_dump($stack);
        return !$stack;
    }
}