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
        $property_type_id = $this->getRequestParam('property_type_id', 0);
        $select_page = empty($this->params['page']) ? $this->default_page : $this->params['page'];
        $select_page_info = ['page' => $select_page, 'pre_page' => $this->page_size];
        $res = $this->house_manager->getPageList($select_page_info, $property_type_id);
        if (!empty($res)) {
            $pages = new Pagination(['totalCount' => $res->total, 'defaultPageSize' => $res->per_page]);
            $house_list = $res->list;
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
            return $this->render('index');
        }
        if (!$this->is_post) {
            $house = $this->house_manager->get($id);
            if (empty($house)) {
                $this->redirect(['/admin/house/index']);
            } else {
                $data = ['house' => $house];
                return $this->render('edit', $data);
            }
        } else {
            $error_msg = $this->checkParams();
            if ($error_msg) {
                return $this->error($error_msg);
            }
            $house = $this->getHouse();
            $house['id'] = $id;
            $res = $this->house_manager->edit($house);
            if ($this->hasError($res)) {
                return $this->error('修改失败！');
            } else {
                return $this->success();
            }
        }
    }

    private function getHouse()
    {
        $house = [
            'build_type'              => $this->params['build_type'],
            'total_door_model'        => $this->params['total_door_model'],
            'total_building'          => $this->params['total_building'],
            'build_year'              => $this->params['build_year'],
            'sale_time'               => strtotime($this->params['sale_time']),
            'last_sale_time'          => strtotime($this->params['last_sale_time']),
            'community_average_price' => $this->params['community_average_price'],
            'traffic_info'            => $this->params['traffic_info'],
            'tax_explain'             => $this->params['tax_explain'],
            'school_info'             => $this->params['school_info'],
            'door_model_introduction' => $this->params['door_model_introduction'],
            'community_introduction'  => $this->params['community_introduction'],
            'lon'                     => $this->params['lon'],
            'lat'                     => $this->params['lat'],
            'tag'                     => $this->params['tag'],
            'community_img'           => $this->params['community_img'],
            'community_name'          => $this->params['community_name'],
            'right_info'              => $this->params['right_info'],
            'mortgage_info'           => $this->params['mortgage_info'],
            'deed_year'               => $this->params['deed_year'],
            'is_only'                 => $this->params['is_only'],
            'recommend'               => $this->params['recommend'],
        ];
        return $house;
    }

    private function checkParams()
    {
        if (!Utils::validVal($this->getRequestParam('community_name'), true, 0, 30)) {
            return '请输入不大于20字的小区名称！';
        }
        if (!Utils::validNum($this->getRequestParam('build_type'), true)) {
            return '请选择正确建筑类型！';
        }
        if (!Utils::validNum($this->getRequestParam('total_door_model'), true)) {
            return '请输入正确的总的户型数量！';
        }
        if (!Utils::validNum($this->getRequestParam('total_building'), true)) {
            return '请输入正确的总的楼栋数量！';
        }
        if (!Utils::validNum($this->getRequestParam('build_year'), true)) {
            return '请输入正确的建筑年限！';
        }
        if (!Utils::validNum($this->getRequestParam('community_average_price'), true)) {
            return '请输入正确的小区均价！';
        }
        if (!Utils::validVal($this->getRequestParam('traffic_info'), true)) {
            return '请输入不大于200字交通出行情况！';
        }
        if (!Utils::validVal($this->getRequestParam('school_info'), true)) {
            return '请输入不大于200字教育配套情况！';
        }
        if (!Utils::validVal($this->getRequestParam('traffic_info'), true)) {
            return '请输入不大于200字交通出行情况！';
        }
        if (!Utils::validVal($this->getRequestParam('door_model_introduction'), true)) {
            return '请输入不大于200字户型简介！';
        }
        if (!Utils::validVal($this->getRequestParam('tax_explain'), true)) {
            return '请输入不大于200字费税解析！';
        }
        if (!Utils::validVal($this->getRequestParam('community_introduction'), true)) {
            return '请输入不大于200字小区简介！';
        }
        if (!Utils::validVal($this->getRequestParam('community_img'), true)) {
            return '请上传小区图片！';
        }
        if (empty($this->params['lon']) || empty($this->params['lat'])) {
            return '请选择楼盘经纬度！';
        }
        if (!Utils::validVal($this->getRequestParam('right_info'), true)) {
            return '请输入不大于10字产权所属！';
        }
        if (!Utils::validVal($this->getRequestParam('mortgage_info'), true)) {
            return '请输入不大于20字抵押信息！';
        }
        if (!Utils::validNum($this->getRequestParam('deed_year'), true)) {
            return '请输入正确的房本年限！';
        }
        if (!Utils::validNum($this->getRequestParam('last_sale_time'), true)) {
            return '请选择上次交易时间！';
        }
        if (!Utils::validNum($this->getRequestParam('sale_time'), true)) {
            return '请选择上次挂牌时间！';
        }
        if (!Utils::validVal($this->getRequestParam('tag'), true, 0, 10)) {
            return '请选择楼盘标签！';
        }
        $this->params['is_only'] = $this->getRequestParam('is_only', '');
        $this->params['recommend'] = $this->getRequestParam('recommend', 0);
        return '';
    }

}