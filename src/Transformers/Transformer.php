<?php namespace Ballen\Linguist\Transformers;

/**
 * Linguist
 *
 * Linguist is a PHP library for parsing strings, it can extract and manipulate
 *  prefixed words in content ideal for working with @mentions, #topics and
 *  even custom action tags!
 *
 * @author Bobby Allen <ballen@bobbyallen.me>
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 * @link https://github.com/bobsta63/linguist
 * @link http://www.bobbyallen.me
 *
 */
abstract class Transformer
{

    /**
     * Validate that the transformer input is a string.
     * @param string $string
     * @throws \InvalidArgumentException
     */
    protected function validateInput($string)
    {
        if (!is_string($string)) {
            throw new \InvalidArgumentException('The input must be of type string!');
        }
    }

    /**
     * Strips HTML tags from the given string.
     * @param string $message The string that does/may contain HTML tags.
     * @return string
     */
    protected function stripHtml($message)
    {
        return strip_tags($message);
    }

    /**
     * Retrieves the formatted text.
     * @return string
     */
    public function get()
    {
        return $this->formatted;
    }

    /**
     * Default __toString() method to return the formatted text.
     * @return string
     */
    public function __toString()
    {
        return $this->get();
    }
}
