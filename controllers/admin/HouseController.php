<?php
/**
 * Created by PhpStorm.
 * User: lyb
 * Date: 2016/12/7
 * Time: 13:40
 */

namespace app\controllers\admin;

use app\components\LController;
use app\components\Utils;
use yii\data\Pagination;
use app\consts\HouseConst;
use app\manager\HouseManager;
use app\manager\ConfigManager;
use app\consts\ConfigConst;

class HouseController extends LController
{
    /**
     * @var HouseManager
     */
    public $house_manager;
    /**
     * @var ConfigManager
     */
    public $config_manager;

    public function init()
    {
        parent::init();
        $this->house_manager = new HouseManager();
        $this->config_manager = new ConfigManager();
    }

    public function actionIndex()
    {
        //render_data
        $house_list = [];
        $pages = new Pagination(['totalCount' => 0, 'defaultPageSize' => $this->page_size]);
        //select_params
        $area_id = $this->getRequestParam('area_id', 0);
        $property_type_id = $this->getRequestParam('property_type_id', 0);
        $select_page = empty($this->params['page']) ? $this->default_page : $this->params['page'];
        $select_page_info = ['page' => $select_page, 'pre_page' => $this->page_size];
        $res = $this->house_manager->getList($select_page_info, $area_id, $property_type_id);
        if (!empty($res)) {
            $pages = new Pagination(['totalCount' => $res->total, 'defaultPageSize' => $res->per_page]);
            $house_list = $res->house_list;
        }

        return $this->render('index', [
            'house_list'         => $house_list,
            'property_type_list' => HouseConst::$property_type,
            'pages'              => $pages,
            'property_type_id'   => $property_type_id,
        ]);
    }

    public function actionEdit()
    {
        $id = $this->getRequestParam('id');
        if (empty($id)) {
            return $this->render('add');
        }
        if (!$this->is_post) {
            $house = $this->house_manager->get($id);
            if (empty($house)) {
                return $this->render('add');
            } else {
                $data = ['house' => $house];
                return $this->render('edit', $data);
            }
        } else {
            $error_msg = $this->checkLoupanParams();
            if ($error_msg) {
                return $this->error($error_msg);
            }
            $loupan = $this->getLoupan();
            $loupan['id'] = $id;
            $res = $this->loupan_manager->edit($loupan);
            if ($this->hasError($res)) {
                return $this->error('修改失败！');
            } else {
                return $this->success();
            }
        }
    }

}