<?php
/**
 * AdministratorsController.php.
 * @author keepeye <carlton.cheng@foxmail>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace app\controllers\admin;

use app\components\LController;
use app\components\Utils;
use Yii;
use app\manager\AdminManager;
use yii\data\Pagination;

class AdminController extends LController
{
    /**
     * @var AdminManager
     */
    public $admin_manager;

    public function init()
    {
        parent::init();
        $this->admin_manager = new AdminManager();
    }

    public function actionIndex()
    {
        $page = empty($this->params['page']) ? $this->default_page : $this->params['page'];
        $res = $this->admin_manager->getList($page);
        if ($this->hasError($res)) {
            $list = [];
            $pages = new Pagination(['totalCount' => 0, 'defaultPageSize' => 20]);
        } else {
            $pages = new Pagination(['totalCount' => $res->total, 'defaultPageSize' => $res->per_page]);
            $list = $res->admin;
        }
        return $this->render('index', [
            'list'  => $list,
            'pages' => $pages
        ]);
    }

    //添加
    public function actionAdd()
    {
        $request = Yii::$app->request;
        if (!$request->isPost) {
            return $this->render('add');
        } else {
            if (!Utils::validVal($this->getRequestParam('username'), true, 0, 20)) {
                return $this->error('请输入不大于20位的用户名！');
            }
            if (!Utils::validVal($this->getRequestParam('password'), true)) {
                return $this->error('密码不能为空！');
            }
            if (!Utils::validVal($this->getRequestParam('name'), true, 0, 10)) {
                return $this->error('请输入不大于10位的姓名！');
            }
            if (!Utils::validEmail($this->params['email'])) {
                return $this->error('email格式不正确！');
            }
            if (!Utils::validPhone($this->params['phone'])) {
                return $this->error('phone格式不正确！');
            }
            $admin = [
                'username' => $this->params['username'],
                'password' => $this->params['password'],
                'name'     => $this->params['name'],
                'email'    => $this->params['email'],
                'phone'    => $this->params['phone'],
            ];
            $res = $this->admin_manager->add($admin);
            if ($this->hasError($res)) {
                return $this->error('添加用户失败！');
            } else {
               return $this->success();
            }
        }
    }

    //修改
    public function actionEdit()
    {
        $request = Yii::$app->request;
        $id = (int)$request->get('id', $request->post('id'));
        if (!$id) {

        }
        if (!$request->isPost) {
            return $this->render('edit');
        } else {

        }
    }

    /**
     * 删除用户,支持批量删除
     * @return array
     * @throws \Exception
     * @throws \yii\db\Exception
     */
    public function actionDelete()
    {
        $request = Yii::$app->request;
        $ids = $request->get('ids');
        if (!$ids) {
            return $this->error('请选中至少一个');
        }
        $ids = array_filter(explode(',', $ids));
        if (empty($ids)) {
            return $this->error('ids参数不合法');
        }
    }

    //登录日志
    public function actionLogs()
    {
//        $query = AdministratorLogin::find();
//        //搜索
//        $searchConditions = Yii::$app->request->get('search');
//        if (!empty($searchConditions)) {
//            if (!empty($searchConditions['username'])) {
//                $query->where('username like :username',[':username'=>'%'.$searchConditions['username'].'%']);
//            }
//        }
//        $countQuery = clone $query;
//        $pages = new Pagination(['totalCount'=>$countQuery->count(),'defaultPageSize'=>20]);
//        $list = $query->offset($pages->offset)->limit($pages->limit)->orderBy('id desc')->all();
//        return $this->render('logs',[
//            'list' => &$list,
//            'pages' => $pages
//        ]);
    }
}