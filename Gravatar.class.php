<?php

    /**
     * Abstract Gravatar class.
     * 
     * @abstract
     */
    abstract class Gravatar
    {
        /**
         * _default
         * 
         * (default value: 'http://i.imgur.com/WxslI.jpg')
         * 
         * @var string
         * @access protected
         * @static
         */
        protected static $_default = 'http://i.imgur.com/WxslI.jpg';

        /**
         * getImage function.
         * 
         * @access public
         * @static
         * @param string $email
         * @param int $size. (default: 50)
         * @return string
         */
        public static function getImage($email, $size = 50)
        {
            return ('http://www.gravatar.com/avatar/') .
                md5(strtolower($email)) . ('?default=') .
                urlencode(self::$_default) . ('&amp;size=') . ($size);
        }

        /**
         * setDefault function.
         * 
         * @access public
         * @static
         * @param string $path
         * @return void
         */
        public static function setDefault($path)
        {
            self::$_default = $path;
        }
    }

?>
