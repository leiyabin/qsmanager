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
                $res->img_1_url = Utils::getImgUrl($res->img_1);
                $res->img_2_url = Utils::getImgUrl($res->img_2);
                $res->img_3_url = Utils::getImgUrl($res->img_3);
                $res->img_4_url = Utils::getImgUrl($res->img_4);
                $res->img_5_url = Utils::getImgUrl($res->img_5);
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

    public function add($house)
    {
        return $this->house_rpc->add($house);
    }

    public function getPageList($page_info, $property_type_id)
    {
        $list = $this->house_rpc->getPageList($page_info, $property_type_id);
        if (isset($list->list)) {
            return $list;
        }
        return [];
    }

}