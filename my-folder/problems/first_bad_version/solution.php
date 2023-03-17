/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        // 1, 2, 3, 4, 5
        $left = 1;
        $right = $n - 1;

        while($left<=$right){
            $m = floor(($right+$left)/2);

            if($this->isBadVersion($m)){
                $right = $m - 1;
            }else{
                $left = $m + 1;
            }
        }

        return $left;
    }
}