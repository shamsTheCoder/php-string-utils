<?php

namespace YourVendor\StringUtils;

class StringUtils
{
    /**
     * Capitalizes the first letter of a string.
     * @param string $str The string to capitalize.
     * @return string The string with the first letter capitalized.
     */
    public static function capitalize(string $str): string
    {
        return ucfirst(strtolower($str));
    }

    /**
     * Converts a string to kebab-case (lowercase with hyphens).
     * @param string $str The string to convert.
     * @return string The kebab-case string.
     */
    public static function toKebabCase(string $str): string
    {
        return strtolower(preg_replace('/[A-Z]/', '-$0', lcfirst($str)));
    }

    /**
     * Reverses a string.
     * @param string $str The string to reverse.
     * @return string The reversed string.
     */
    public static function reverseString(string $str): string
    {
        return strrev($str);
    }

    /**
     * Truncates a string to a specified length, adding an ellipsis if truncated.
     * @param string $str The string to truncate.
     * @param int $length The maximum length of the string.
     * @return string The truncated string with an ellipsis if it exceeds the length.
     */
    public static function truncate(string $str, int $length): string
    {
        return strlen($str) > $length ? substr($str, 0, $length) . '...' : $str;
    }

    /**
     * Checks if a string is a palindrome.
     * @param string $str The string to check.
     * @return bool True if the string is a palindrome, false otherwise.
     */
    public static function isPalindrome(string $str): bool
    {
        $cleaned = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str));
        return $cleaned === strrev($cleaned);
    }
}
