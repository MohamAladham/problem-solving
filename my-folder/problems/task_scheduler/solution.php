class Solution {

    /**
     * @param String[] $tasks
     * @param Integer $n
     * @return Integer
     */
    function leastInterval($tasks, $n) {
        // Step 1: Count the frequency of each task
        $counts = array();
        foreach ($tasks as $t) {
            $counts[$t] = isset($counts[$t]) ? $counts[$t] + 1 : 1;
        }

        // Step 2: Add the frequency of each task to a max heap
        $maxHeap = new SplMaxHeap();
        foreach ($counts as $count) {
            $maxHeap->insert($count);
        }

        // Step 3: Execute the tasks based on the max heap
        $alltime = 0; // Total time to execute all the tasks
        $cycle = $n + 1; // The time required to execute all the tasks in a cycle
        while (!$maxHeap->isEmpty()) { // While there are still tasks left to execute
            $worktime = 0; // The time required to execute the current cycle
            $tmp = array(); // A temporary array to store the tasks for the current cycle
            for ($i = 0; $i < $cycle; $i++) { // Execute tasks for one cycle
                if (!$maxHeap->isEmpty()) { // If there are still tasks left in the max heap
                    $tmp[] = $maxHeap->extract(); // Extract the task with the highest frequency and add it to the temporary array
                    $worktime++; // Increment the time required to execute the current cycle
                }
            }
            foreach ($tmp as $cnt) { // For each task in the temporary array
                if (--$cnt > 0) { // Decrement the frequency of the task and check if it still needs to be executed
                    $maxHeap->insert($cnt); // Add the task back to the max heap with its updated frequency
                }
            }
            $alltime += !$maxHeap->isEmpty() ? $cycle : $worktime; // Increment the total time required to execute all the tasks based on whether there are still tasks left to execute
        }
        
        return $alltime; // Return the total time required to execute all the tasks
    }
}