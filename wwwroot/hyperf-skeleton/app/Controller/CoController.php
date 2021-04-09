<?php
    namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use App\Annotation\Foo;
use Hyperf\Di\Annotation\AnnotationCollector;
use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Utils\Context;

/**
 * @Controller("two")
 */
 class CoController extends AbstractController
 {
     /**
      * @RequestMapping(path="/hi", method={"get","post"})
      */
     public function index()
     {
        return Context::get('foo', 'null');
     }

    /**
    * @RequestMapping(path="/yi", method={"get","post"})
    */
     public function get(RequestInterface $request)
      {
        $foo = $request->input('luo');
        Context::set('foo', $foo);
        return Context::get('foo');
      }
     
 }
?>