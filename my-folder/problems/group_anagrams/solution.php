class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $len = count($strs);        
        $mapArr = [];
        $resArr = [];

        for($i=0;$i<$len;$i++){
            $tempArr = str_split($strs[$i]);
            sort($tempArr);
            $tempStr = implode("",$tempArr);
          
            $resArr[$tempStr][] = $strs[$i];
        }
        
        return array_values($resArr);
    }
}