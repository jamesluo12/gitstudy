<?php
    namespace App\Annotation;

use Hyperf\Di\Annotation\AbstractAnnotation;

    /**
     * @Annotation
     * @Target({"CLASS", "METHOD"})
     */

    class Foo extends AbstractAnnotation{
        /**
         * @var string
         */
        public $bar;

        public function __construct($value = null)
        {
            parent::__construct($value);
        }

    }

?>