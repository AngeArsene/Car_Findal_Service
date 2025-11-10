<?php

if (! function_exists('flatten_array')) {
    /**
     * Recursively flattens a deeply nested array.
     *
     * @param array $array The input nested array.
     * @return array A flat array containing only values.
     */
    function flatten_array(array $array): array
    {
        $result = [];

        array_walk_recursive($array, function ($value) use (&$result) {
            $result[] = $value;
        });

        return $result;
    }
}
