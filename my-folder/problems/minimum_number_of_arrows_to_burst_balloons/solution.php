<?php


class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function findMinArrowShots($points) {
        sort($points);
        $end=$points[0][1];
	    $res=1;

    	for ($i=1; $i<count($points); $i++) {
			if ($points[$i][0]<=$end) {
				$end = min($end,$points[$i][1]);
			} else {
				$end=$points[$i][1];
				$res++;
			}
		}

        return $res;
    }
}
