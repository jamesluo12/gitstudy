<?php
    namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use App\Annotation\Foo;
use Hyperf\Di\Annotation\AnnotationCollector;
use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * @Controller("xiao")
 * @Foo(bar="10")
 */
 class IndexOneController extends AbstractController
 {
     /**
      * @RequestMapping(path="/li", method={"get","post"})
      */
     public function index()
     {
        return 3;
     }
     
 }
?>