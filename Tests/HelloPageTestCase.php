<?php

declare(strict_types=1);

namespace Noffily\TeapotSlim\Test;

use Noffily\Teapot\Core\Runner;
use Slim\Psr7\Factory\ServerRequestFactory;

final class HelloPageTestCase
{
    public function seeHelloPage(Runner $runner): void
    {
        $request = (new ServerRequestFactory())->createServerRequest('GET', '/hello/noffily');
        $result = $runner->execute($request);

        $result->seeResponseCodeIs(200);
        $result->seeResponseBodyContentsIs('Hello, noffily');
    }
}
