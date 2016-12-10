<?php
/**
 * Created by PhpStorm.
 * User: lyb
 * Date: 2016/12/7
 * Time: 13:30
 */

namespace app\manager;

use app\components\Utils;
use app\consts\HouseConst;
use app\rpc\HouseRpc;

class HouseManager
{
    public $house_rpc;

    public function __construct()
    {
        $this->house_rpc = new HouseRpc();
    }

    public function get($id)
    {
        $res = $this->house_rpc->getOne($id);
        if (isset($res->id)) {
            $tag_arr = explode(',', $res->tag);
            $res->tag_arr = $tag_arr;
            if (!empty($res->house_attach)) {
                $res->house_attach->deed_year_name = HouseConst::$deed_year[$res->house_attach->deed_year];
                $res->house_attach->build_type_name = HouseConst::$build_type[$res->house_attach->build_type];
                $res->house_attach->community_img_url = Utils::getImgUrl($res->house_attach->community_img);
            }
            return $res;
        } else {
            return null;
        }
    }

    public function edit($house)
    {
        return $this->house_rpc->edit($house);
    }

    public function getList($page_info, $area_id, $property_type_id)
    {
        $res = $this->house_rpc->getList($page_info, $area_id, $property_type_id);
        if (isset($res->error_code)) {
            return null;
        } else {
            //todo
            return $res;
        }
    }
}