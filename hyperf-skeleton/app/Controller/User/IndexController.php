<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller\User;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Annotation\PostMapping;
use Hyperf\HttpServer\Annotation\GetMapping;
use App\Controller\AbstractController;
use Hyperf\HttpServer\Contract\RequestInterface;
use App\Service\UserService;
use Hyperf\Di\Annotation\Inject;

/**
 * @Controller("luo")
 */

class IndexController extends AbstractController
{
    /**
     * @Inject()
     * @var UserService
     */
    private $userService;

    /**
     * @RequestMapping(path="/user", method={"get","post"})
     */
    public function index(RequestInterface $re)
    {
        $user = $this->request->input('luo', 'Hyperf');
        $method = $this->request->getMethod();
        $id = $re->input('id',5);
        $di = $this->userService->getInfoById((int)$id);
        return [
            'method' => $method,
            'message' => "Hello {$user}.",
            'id' => $di,
        ];
    }
}
