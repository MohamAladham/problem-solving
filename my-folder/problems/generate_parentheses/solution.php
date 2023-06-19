<?php


class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $result = [];

        $this->backtrack(n: $n, openCount: 0, closeCount: 0, path: [], result: $result);

        return $result;
    }


    function backtrack(int $n, int $openCount, int $closeCount, array $path, array &$result):void
    {
        if($openCount === $closeCount && $openCount === $n){
            $result[] = implode('', $path);
            return;
        }

        if($openCount < $n){
            $path[] = '(';
            $this->backtrack($n, $openCount+1, $closeCount, $path, $result);
            array_pop($path);
        }

        if($closeCount < $openCount){
            $path[] = ')';
            $this->backtrack($n, $openCount, $closeCount+1, $path, $result);
            array_pop($path);
        }
    }
}
