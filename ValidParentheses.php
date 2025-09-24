    <?php
    function isBalanced($string)
    {
        // Define a hash map for bracket pairs
        $bracketMap = [
            '(' => ')',
            '{' => '}',
            '[' => ']'
        ];

        // Stack to keep track of opening brackets
        $stack = [];

        // Iterate through each character in the string
        for ($i = 0; $i < strlen($string); $i++) {
            $char = $string[$i];

            // If it's an opening bracket, push it onto the stack
            if (isset($bracketMap[$char])) {
                array_push($stack, $char);
            }
            // If it's a closing bracket, check for a match
            elseif (in_array($char, $bracketMap)) {
                if (empty($stack) || $bracketMap[array_pop($stack)] !== $char) {
                    return false; // Mismatch or unbalanced
                }
            }
        }

        // If the stack is empty, the brackets are balanced
        return empty($stack);
    }

    // Test the function
    $testString = "{[()]}";
    echo isBalanced($testString) ? "Match" : "MisMatch"; // Output: Balanced
