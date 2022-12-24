class Solution {
    public boolean wordBreak(String s, List<String> wordDict) {
    return dfs(s, wordDict, new HashSet<>());
}

private boolean dfs(String s, List<String> wordDict, Set<String> checked) {
    if (s.isEmpty()) return true;
    if (checked.contains(s)) return false;
    checked.add(s);
    
    for (String w : wordDict) {
        if (s.startsWith(w) && dfs(s.substring(w.length()), wordDict, checked)) return true;
    }
    return false;
}
}