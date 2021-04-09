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
use Hyperf\Guzzle\ClientFactory;
use Hyperf\Di\Annotation\Inject;

/**
 * @Controller("three")
 */
 class DoController extends AbstractController
 {

  /**
   * @Inject()
   * @var ClientFactory
   */
  public $clientFactory;

  /**
  * @RequestMapping(path="/tt", method={"get","post"})
  */
  public function gg(RequestInterface $request){
    $secends = $request->input('secends',2);
    sleep($secends);
    return $secends;
  }
  /**
  * @RequestMapping(path="/dd", method={"get","post"})
  */
  public function index()
  {
    $client = $this->clientFactory->create();
    $client->get('127.0.0.1:9501/tt?secends=2');
    $client = $this->clientFactory->create();
    $client->get('127.0.0.1:9501/tt?secends=2');
      return 1;
     }
     
 }
?>