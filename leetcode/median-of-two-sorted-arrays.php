<?php
/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Float
 */
function findMedianSortedArrays($nums1, $nums2)
{
    if (count($nums1) > 1000 || count($nums2) > 1000 || count($nums1) + count($nums2) > 2000) return false;
    $nums3 = array_merge($nums1, $nums2);
    sort($nums3);
    $count = count($nums3);

    if ($count % 2 === 0) $median = ($nums3[$count / 2] + $nums3[$count / 2 - 1]) / 2;
    else $median = $nums3[round($count / 2) - 1];

    return $median;
}
