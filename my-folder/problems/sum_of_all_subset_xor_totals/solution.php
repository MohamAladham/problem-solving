class Solution
{

    private $sum = 0;

    /**
     * @param Integer[] $nums
     * @return Integer
     */
     function subsetXORSum( $nums )
    {
        $this->backtrack( $nums, [], 0 );

        return $this->sum;
    }


    function backtrack( $nums, $set, $index = 0 )
    {
        $xor = 0;
        foreach ( $set as $s )
        {
            $xor ^= $s;
        }

        $this->sum += $xor;

        if ( count( $set ) === count($nums) )
        {
            return;
        }

        for ( $i = $index; $i < count( $nums ); $i++ )
        {
            $set[]    = $nums[$i];
            $this->backtrack( $nums, $set, $i + 1 );
            array_pop( $set );
        }
    }

}