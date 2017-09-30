<?php
/**
 * Created by PhpStorm.
 * User: konohanaruto
 * Blog: http://www.muyesanren.com
 * QQ: 1039814413
 * Wechat Number: wikitest
 * Date: 2017/9/30
 * Time: 8:41
 */

namespace App\Konohanaruto\Services\Common;

use Illuminate\Support\Facades\Request;

class UserDataAccessUniversalService extends BaseService
{
    /**
     * 得到客户端user-agent信息
     *
     * @return mixed
     */
    public function getUserAgent()
    {
        return Request::header('User-Agent');
    }
}