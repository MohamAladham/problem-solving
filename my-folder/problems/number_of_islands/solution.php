class Solution {

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
       // loop through the grid to start from new island.
       // mark each node as visited.
       // dfs each start go to its 4 directions.
       // if all directions are 0s, increase islands counter

       $total = 0;

        for($i=0; $i<count($grid); $i++){
            for($j=0; $j<count($grid[0]); $j++){
                if($grid[$i][$j] == 1){
                    $this->DFS($grid, $i, $j, $total);
                    $total++;
                }
            }

        }

       return $total;
    }


    function DFS(&$grid, $i, $j, &$total){
        if(!isset($grid[$i][$j]) || $grid[$i][$j] == 0){
            return;
        }

        $grid[$i][$j] = 0;
        
        $this->DFS($grid, $i, $j+1, $total);
        $this->DFS($grid, $i+1, $j, $total);
        $this->DFS($grid, $i, $j-1, $total);
        $this->DFS($grid, $i-1, $j, $total);
    }
}