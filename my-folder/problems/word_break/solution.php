
<?php


class Solution
{

    /**
     * @param String $s
     * @param String[] $wordDict
     * @return Boolean
     */
    function wordBreak( $s, $wordDict )
    {
        $memo = [];
        return $this->backtrack( $s, $wordDict, 0, $memo );
    }


    function backtrack( $s, $wordDict, $start, &$memo )
    {
        if ( $start === strlen( $s ) )
        {
            return TRUE;
        }

        if(isset($memo[$start])){
            return $memo[$start];
        }

        for ( $end = $start + 1; $end <= strlen( $s ); $end++ )
        {
            $input = substr( $s, $start, $end - $start );
            
            if ( in_array( $input, $wordDict ) && $this->backtrack( $s, $wordDict, $end, $memo ) )
            {
                $memo[$start] = true;
                return TRUE;
            }
        }

        $memo[$start] = false;
        return FALSE;
    }
}
