<?php

class Text
{
    private static $texts;

    public static function get($key)
    {
	    if (!$key) {
		    return null;
	    }

        if (!self::$texts) {
            self::$texts = require('../application/config/texts.php');
        }

	    if (!array_key_exists($key, self::$texts)) {
		    return null;
	    }

        return self::$texts[$key];
    }

}
