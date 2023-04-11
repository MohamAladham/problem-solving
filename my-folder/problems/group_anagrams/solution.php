class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        // ["eat","tea","tan","ate","nat","bat"]
        // nat, tan => atn
        $hash = [];

        foreach($strs as &$s){
            $old_s = $s;
            $s = str_split($s);
            sort($s);
            $s = implode('', $s);
            $hash[$s][] = $old_s;
        }
var_dump($strs);
        return $hash;
    }
}