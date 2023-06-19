<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        $list = [];
        $tempList = [];
        $this->backtrack( $list, $tempList, $nums, 0 );

        return $list;
    }



    function backtrack( &$list, $tempList, $nums, $start )
    {
        $list[] = $tempList;

        for ( $i = $start; $i < count( $nums ); $i++ )
        {
            $tempList[] = $nums[$i];
            $this->backtrack( $list, $tempList, $nums, $i + 1 );
            array_pop( $tempList );
        }
    }

}
