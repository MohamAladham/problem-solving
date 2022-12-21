
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute( $nums )
    {
        $res         = [];
        $used        = array_fill( 0, count( $nums ), FALSE );
        $permutation = [];
        $this->backtrack( $res, $nums, $permutation, $used );

        return $res;
    }


    function backtrack( &$res, &$nums, &$permutation, &$used )
    {
        if ( count( $permutation ) === count( $nums ) )
        {
            $res[] = $permutation;

            return;
        }

        for ( $i = 0; $i < count( $nums ); $i++ )
        {
            if ( !$used[$i] )
            {
                $used[$i]      = TRUE;
                $permutation[] = $nums[$i];
                $this->backtrack( $res, $nums, $permutation, $used );
                $used[$i] = FALSE;
                array_pop( $permutation );
            }
        }
    }
}