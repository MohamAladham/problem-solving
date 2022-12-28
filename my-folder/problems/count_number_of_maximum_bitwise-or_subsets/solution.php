
class Solution
{

    private $sum = 0;
    private $occurres = [];

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function countMaxOrSubsets( $nums )
    {
        $this->backtrack( $nums, [], 0 );
        $max = 0;

        foreach ( $this->occurres as $k => $v )
        {
            $max = max( $v, $max );
        }

        return $max;
    }


    function backtrack( $nums, $set, $index = 0 )
    {
        $or = 0;
        foreach ( $set as $s )
        {
            $or |= $s;
        }
        $this->occurres[$or] = isset( $this->occurres[$or] ) ?
            $this->occurres[$or] + 1 : 1;

        if ( count( $set ) === count( $nums ) )
        {
            return;
        }

        for ( $i = $index; $i < count( $nums ); $i++ )
        {
            $set[] = $nums[$i];
            $this->backtrack( $nums, $set, $i + 1 );
            array_pop( $set );
        }
    }

}