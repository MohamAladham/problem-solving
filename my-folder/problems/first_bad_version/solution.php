/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $left = 1;
        $right = $n;

        while($left <= $right){
            $m = floor(($left+$right)/2);
            $isBad = $this->isBadVersion($m);

            if($isBad){
                $right = $m - 1;
            }else{
                $left = $m + 1;
            }
        }

        return $left;
    }
}