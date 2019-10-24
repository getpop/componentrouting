<?php
namespace PoP\ModuleRouting;

class Utils {
    public static function arrayIsSubset(array $maybe_subset, array $set): bool
    {
        return $maybe_subset == self::arrayIntersectAssocRecursive($maybe_subset, $set);
    }

    // This function is an implementation of a recursive `array_intersect_assoc`, so that in the RouteModuleProcessor we can ask for conditions recursively (eg: array('routing-state' => array('post-type' => 'event')))
    // Modified from https://stackoverflow.com/questions/4627076/php-question-how-to-array-intersect-assoc-recursively
    public static function arrayIntersectAssocRecursive(&$arr1, &$arr2): array
    {
        if (!is_array($arr1) || !is_array($arr2)) {
            return (string) $arr1 == (string) $arr2 ? $arr1 : null;
        }

        $commonkeys = array_intersect(
            array_keys($arr1),
            array_keys($arr2)
        );
        $ret = array();
        foreach ($commonkeys as $key) {
            $value = self::arrayIntersectAssocRecursive($arr1[$key], $arr2[$key]);
            if (!is_null($value)) {
                $ret[$key] = $value;
            }
        }

        // If no values, then must return null, so it's avoided when asking is_null() above
        return $ret ? $ret : null;
    }
}
