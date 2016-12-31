<?php
/**
 * Created by PhpStorm.
 * User: lyb
 * Date: 2016/12/7
 * Time: 13:28
 */

namespace app\rpc;

use app\components\LRpc;

class HouseRpc extends LRpc
{
    public function edit($loupan)
    {
        $params = $loupan;
        return LRpc::init()->post($params)->url('/house/edit');
    }

    public function getOne($id)
    {
        $params = ['id' => $id];
        return LRpc::init()->post($params)->url('/house/get');
    }


    /**
     * @param $page_info
     * @param $property_type_id
     * @return LRpc
     */
    public function getPageList($page_info, $property_type_id)
    {
        $params = [
            'page'             => intval($page_info['page']),
            'per_page'         => intval($page_info['pre_page']),
            'property_type_id' => $property_type_id,
        ];
        return LRpc::init()->post($params)->url('/house/list');
    }
}