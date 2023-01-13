class TrieNode{

    public $children = [];
    public $endOfWord = false;

    public function __construct(){
      
    }
}

class Trie {
    
    public $root;
    
    /**
     */
    function __construct() {
        $this->root = new TrieNode();
    }
  
    /**
     * @param String $word
     * @return NULL
     */
    function insert($word) {
        $cur = $this->root;

        for($i=0; $i<strlen($word); $i++){
            if(!isset($cur->children[$word[$i]])){
                $cur->children[$word[$i]] = new TrieNode();
            }

            $cur = $cur->children[$word[$i]];
        }

        $cur->endOfWord = true;
    }
  
    /**
     * @param String $word
     * @return Boolean
     */
    function search($word) {
        $cur = $this->root;

        for($i=0; $i<strlen($word); $i++){
            if(!isset($cur->children[$word[$i]])){
                return false;
            }

            $cur = $cur->children[$word[$i]];
        }

        return $cur->endOfWord;
    }
  
    /**
     * @param String $prefix
     * @return Boolean
     */
    function startsWith($prefix) {
        $cur = $this->root;

        for($i=0; $i<strlen($prefix); $i++){
            if(!isset($cur->children[$prefix[$i]])){
                return false;
            }
            $cur = $cur->children[$prefix[$i]];
        }

        return true;        
    }
}

/**
 * Your Trie object will be instantiated and called as such:
 * $obj = Trie();
 * $obj->insert($word);
 * $ret_2 = $obj->search($word);
 * $ret_3 = $obj->startsWith($prefix);
 */