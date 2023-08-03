<?php

use App\Libraries\Response;

if (!function_exists('response_api')) {
    /**
     * helper for response api
     *
     * @param mixed|null $data
     * @param int $http_code
     * @param array $headers
     * @param bool $gzip
     * @param bool $raw
     * @param bool $pretty
     * @return \Illuminate\Http\JsonResponse
     */
    function response_api(mixed $data = NULL, int $http_code = 200, array $headers = [], bool $gzip = false, bool $raw = false, bool $pretty = false)
    {
        return (new Response())->api($data, $http_code, $headers, $gzip, $raw, $pretty);
    }
}
