<?php
    namespace App\Aspect;

use App\Annotation\Foo;
use App\Controller\IndexOneController;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;
/**
 * @Aspect
 */
class IndexAspect extends AbstractAspect
    {
        public $annotations = [
            Foo::class,
        ];
        public function process(ProceedingJoinPoint $proceedingJoinPoint)
        {
            var_dump(__CLASS__);
            $result = $proceedingJoinPoint->process();
            $foo =$proceedingJoinPoint->getAnnotationMetadata()->class[Foo::class];
            $bar = $foo->bar;
            return $result + $bar;
        }
    }
?>