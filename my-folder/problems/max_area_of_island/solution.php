class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxAreaOfIsland($grid) {
        $max = 0;

        foreach($grid as $r=>$rows){
            foreach($rows as $c=>$value){
                if($value === 1){
                   $max = max($max, $this->DFS($grid, $r, $c));
                }
            }
        }

        return $max;
    }


    function DFS(&$grid, $r, $c){
        if(!isset($grid[$r][$c]) || $grid[$r][$c] !== 1){
            return 0;
        }
        
        $grid[$r][$c] = 2;

        return 1 + $this->DFS($grid, $r - 1, $c)
                + $this->DFS($grid, $r + 1, $c)
                + $this->DFS($grid, $r, $c - 1)
                + $this->DFS($grid, $r, $c + 1);
    }
}