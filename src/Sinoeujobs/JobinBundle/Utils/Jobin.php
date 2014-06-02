<?php
/**
 * Created by PhpStorm.
 * User: Bin
 * Date: 14-6-3
 * Time: 上午12:38
 */

namespace Sinoeujobs\JobinBundle\Utils;


class Jobin
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
} 