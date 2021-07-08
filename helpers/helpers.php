<?php


use Carbon\Carbon;

if (!function_exists('kuponifyAsset')) {
    /**
     * Retrieves assets path
     *
     * @param string $path
     * @param string $secure
     *
     * @return void
     * @author Anthony Akro <anthonygakro@gmail.com> [a4anthony]
     */
    function kuponifyAsset($path, $secure = null)
    {
        $str = Carbon::now()->format('Y_m_d_h_i_s');
        return route('kuponify.assets') . '?path=' . urlencode($path) . '&v=' . $str;
    }
}