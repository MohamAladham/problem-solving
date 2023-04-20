class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $search = $strs[0];
        $prefix = '';

        for($j=0; $j<strlen($search); $j++){
            $match = true;
            for($k=1; $k<count($strs); $k++){
                if(!isset($strs[$k][$j]) || $strs[$k][$j] !== $search[$j]){
                    $match = false;
                    break;
                }
            }

            if($match){
                $prefix .= $search[$j];
            }else{
                break;
            }
        }

        return $prefix;
    }
}