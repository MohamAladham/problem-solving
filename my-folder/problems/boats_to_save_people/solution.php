class Solution {

    /**
     * @param Integer[] $people
     * @param Integer $limit
     * @return Integer
     */
    function numRescueBoats($people, $limit) {
        $total = 0;
        $left = 0;
        $right = count($people) - 1;
        sort($people);

        while($left <= $right){
            if($people[$right] + $people[$left] <= $limit){
                $left++;
            }

            $total++;
            $right--;         
        }

        return $total;
    }
}