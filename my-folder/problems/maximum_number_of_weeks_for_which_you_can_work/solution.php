class Solution {
    /**
     * @param Integer[] $milestones
     * @return Integer
     */
    function numberOfWeeks($milestones) {
        /*
The Greedy idea is, if the max elements is larger than the sum of the rest elements. then the max answer is 2 * rest + 1, because the best strategy is pick max, pick other, pick max, pick other....pick max. otherwise, we can finish all of the milestones.
        */
        
        $mx = max($milestones);
        $sum = array_sum($milestones);
        $rest = $sum - $mx;

        return min($rest * 2 + 1, $sum);
    }
}
