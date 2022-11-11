class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        /*
    00, 20
    01, 10
    02, 00 <
    10, 21 
    11, 11
    12, 01 <
    20, 22 
    21, 12 < 
    22, 02 < 

    ij, (count-j-1)i


    */

        $count    = count( $matrix );
        $hash_old = [];


        for ( $i = 0; $i < $count; $i++ )
        {
            for ( $j = 0; $j < $count; $j++ )
            {
                $hash_old[$this->hashIndexes( $i, $j )] = $matrix[$i][$j];

                $new_i = $count - $j - 1;

                if ( isset( $hash_old[$this->hashIndexes( $new_i, $i )] ) )
                {
                    $matrix[$i][$j] = $hash_old[$this->hashIndexes( $new_i, $i )];
                } else
                {
                    $matrix[$i][$j] = $matrix[$new_i][$i];
                }
            }
        }

    }


    function hashIndexes( $ind1, $ind2 )
    {
        return $ind1 . '_' . $ind2;
    }
}