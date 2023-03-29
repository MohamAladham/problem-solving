class Solution {
    /**
     * @param int[] $nums
     */
    function subarraySum(array $nums, int $k): int {
        $map = [0=>1];
        $count = 0;
        $sum = 0;
        $pre = [];

        foreach ($nums as $num) {
            $sum += $num;
            $pre[] = $sum;
        }


        foreach ($pre as $sum) {
            $count += $map[$sum - $k] ?? 0;

            $map[$sum] = ($map[$sum] ?? 0) + 1;
        }

        return $count;
	}
}