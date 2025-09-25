<?php
// Define the ListNode class for local testing
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    function mergeTwoLists($list1, $list2)
    {
        $dummy = new ListNode(0);
        $tail = $dummy;

        while ($list1 !== null && $list2 !== null) {
            if ($list1->val <= $list2->val) {
                $tail->next = $list1;
                $list1 = $list1->next;
            } else {
                $tail->next = $list2;
                $list2 = $list2->next;
            }
            $tail = $tail->next;
        }

        $tail->next = $list1 ?? $list2;
        return $dummy->next;
    }
}

// ---------- Helper functions for testing ----------
function arrayToList($arr)
{
    $dummy = new ListNode(0);
    $current = $dummy;
    foreach ($arr as $val) {
        $current->next = new ListNode($val);
        $current = $current->next;
    }
    return $dummy->next;
}

function printList($node)
{
    while ($node !== null) {
        echo $node->val . " ";
        $node = $node->next;
    }
    echo PHP_EOL;
}

// ---------- Test Run ----------
$list1 = arrayToList([1, 2, 4]);
$list2 = arrayToList([1, 3, 4]);

$solution = new Solution();
$merged = $solution->mergeTwoLists($list1, $list2);

printList($merged); // Expected: 1 1 2 3 4 4
