<?php
/**
 * Created by PhpStorm.
 * User: xiaojin
 * Email: job@ainiok.com
 * Date: 2019/1/5 0:09
 */

namespace Illuminate\Contracts\Http;

interface Kernel
{
    public function bootstrap();

    public function handle($requset);

    public function terminate($request, $response);

    public function getApplication();
}