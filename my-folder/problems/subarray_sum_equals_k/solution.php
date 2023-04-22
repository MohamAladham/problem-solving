class Solution {
    /**
     * @param int[] $nums
     */
    function subarraySum(array $nums, int $k): int {
        $map = [0=>1];
        $count = 0;
        $pre = [];

        for($i=0; $i<count($nums); $i++) {
            if($i === 0){
                $pre[] = $nums[$i];
            }else{
                $pre[] = $pre[$i-1] + $nums[$i];
            }
        }

        foreach ($pre as $sum) {
            $count += $map[$sum - $k] ?? 0;

            $map[$sum] = ($map[$sum] ?? 0) + 1;
        }

        return $count;
	}
}