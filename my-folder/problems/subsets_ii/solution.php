<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsetsWithDup($nums) {
        $list = [];
        $tempList = [];
        sort($nums);
        $this->backtrack( $list, $tempList, $nums, 0 );

        return $list;
    }



    function backtrack( &$list, $tempList, $nums, $start )
    {
        $list[] = $tempList;

        for ( $i = $start; $i < count( $nums ); $i++ )
        {
            if($i>$start && $nums[$i] === $nums[$i-1]){
                continue;
            }

            $tempList[] = $nums[$i];
            $this->backtrack( $list, $tempList, $nums, $i + 1 );
            array_pop( $tempList );
        }
    }

}
