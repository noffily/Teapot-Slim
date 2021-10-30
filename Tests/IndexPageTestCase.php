<?php

declare(strict_types=1);

namespace Noffily\TeapotSlim\Test;

use Noffily\Teapot\Core\RequestEmitter;
use Slim\Psr7\Factory\ServerRequestFactory;

final class IndexPageTestCase
{
    public function seeIndexPage(RequestEmitter $emitter): void
    {
        $request = (new ServerRequestFactory())->createServerRequest('GET', '/');
        $result = $emitter->run($request);

        $result->seeResponseCodeIs(200);
        $result->seeResponseBodyContentsIs('<a href="/hello/world">Try /hello/world</a>');
    }
}
