<?php


class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {
        $water = 0;
        $count = count( $height );
        $stack = new SplStack();

        for ( $i = 0; $i < $count; $i++ )
        {
            while ( !$stack->isEmpty() && $height[$i] > $height[$stack->top()] )
            {
                $top = $stack->pop();

                if ( $stack->isEmpty() )
                {
                    break;
                }

                $d     = $i - $stack->top() - 1;
                $water += $d *
                    ( min( $height[$i], $height[$stack->top()] ) - $height[$top] );
            }

            $stack->push( $i );
        }

        return $water;
    }
}
