class Solution
{

    private $candidates;
    private $target;

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum( $candidates, $target )
    {
        $list             = [];
        $this->candidates = $candidates;
        $this->target     = $target;
        $this->backtrack( $list, [], 0 );

        return $list;
    }


    function backtrack( &$list, $try, $start )
    {
        $sum = 0;
        foreach ( $try as $t )
        {
            $sum += $t;
        }

        if ( $sum === $this->target )
        {
            $list[] = $try;

            return;
        }

        if ( $sum > $this->target )
        {
            return;
        }

        for ( $i = $start; $i < count( $this->candidates ); $i++ )
        {
            $try[] = $this->candidates[$i];
            $this->backtrack( $list, $try, $i );
            array_pop( $try );
        }
    }
}