<?php


class Solution {

    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $color
     * @return Integer[][]
     */
    function floodFill($image, $sr, $sc, $color) {
        $this->sameColor = $image[$sr][$sc];
        
        if($this->sameColor !== $color){
            $this->DFS($image, $sr, $sc, $color);
        }

        return $image;
    }


    function DFS(&$image, $sr, $sc, $color){
        if(!isset($image[$sr][$sc]) || $image[$sr][$sc] !== $this->sameColor){
            return;
        }

        $image[$sr][$sc] = $color;

        $this->DFS($image, $sr-1, $sc, $color);
        $this->DFS($image, $sr+1, $sc, $color);
        $this->DFS($image, $sr, $sc-1, $color);
        $this->DFS($image, $sr, $sc+1, $color);
    }
}
