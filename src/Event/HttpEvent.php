<?php

namespace Src\Event;

use Src\App;
use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

class HttpEvent
{
    /**
     * Execute when requested
     *
     * @param Request $request
     * @param Response $response
     * @return ResponseServer
     */
    public function onRequest(Request $swrequest, Response $swresponse)
    {
        $dispatcher = App::getSupport('dispatcher');
        $request = App::getSupport('request');
        $response = App::getSupport('response');
        $request->set($swrequest, $swresponse);
        $response->set($swresponse);

        $res = $dispatcher->handle($request, $response);
        $response->end($res);
    }

    /**
     * Execute when the server start
     *
     * @param Server $server
     */
    public function onStart(Server $server)
    {
    }

    /**
     * Execute when the server close
     *
     * @param Server $server
     */
    public function onShutdown(Server $server)
    {
    }

    /**
     * Execute when the worker start
     *
     * @param Server $server
     */
    public function onWorkerStart(Server $server)
    {
    }

    /**
     * Execute when the worker stop
     *
     * @param Server $server
     * @param int $workerId
     */
    public function onWorkerStop(Server $server,int $workerId)
    {
    }

    /**
     * Execute when the browser connect
     *
     * @param Server $server
     * @param int $fd
     * @param int $reactorId
     */
    public function onConnect(Server $server,int $fd,int $reactorId)
    {
    }

    /**
     * Execute when the browser close
     *
     * @param Server $server
     * @param int $fd
     * @param int $reactorId
     */
    public function onClose(Server $server,int $fd,int $reactorId)
    {
    }

    /**
     * @param Server $server
     * @param int $taskId
     * @param int $srcWorkerId
     * @param array $data
     * @return string
     */
    public function onTask(Server $server,int $taskId,int $srcWorkerId,array $data)
    {
    }

    /**
     * @param Server $server
     * @param int $taskId
     * @param $data
     * @return mixed
     */
    public function onFinish(Server $server,int $taskId,$data)
    {
    }
}