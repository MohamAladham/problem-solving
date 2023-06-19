<?php


class Solution {

    /**
     * @param String $date1
     * @param String $date2
     * @return Integer
     */
    function daysBetweenDates($date1, $date2) {

        $date1 = strtotime($date1);
        $date2 = strtotime($date2);
        $datediff = $date1 - $date2;

        return abs(round($datediff / (60 * 60 * 24)));

    }
}
