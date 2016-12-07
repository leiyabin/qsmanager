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
        return LRpc::init()->post($params)->url('/loupan/edit');
    }

    public function getOne($id)
    {
        $params = ['id' => $id];
        return LRpc::init()->post($params)->url('/loupan/get');
    }

    public function getList($page_info, $area_id = 0, $property_type_id = 0)
    {
        $params = [
            'page'             => intval($page_info['page']),
            'per_page'         => intval($page_info['pre_page']),
            'area_id'          => $area_id,
            'property_type_id' => $property_type_id,
        ];
        return LRpc::init()->post($params)->url('/loupan/list');
    }
}