<?php

declare(strict_types=1);

namespace Noffily\TeapotSlim\Test;

use Noffily\Teapot\Core\Runner;
use Slim\Psr7\Factory\ServerRequestFactory;

final class IndexPageTestCase
{
    public function seeIndexPage(Runner $runner): void
    {
        $request = (new ServerRequestFactory())->createServerRequest('GET', '/');
        $result = $runner->execute($request);

        $result->seeResponseCodeIs(200);
        $result->seeResponseBodyContentsIs('<a href="/hello/world">Try /hello/world</a>');
    }
}
