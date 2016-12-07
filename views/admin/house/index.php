<?php
/**
 * index.php.
 * @author keepeye <carlton.cheng@foxmail>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
use yii\helpers\Url;

?>
<script charset="utf-8" src="/static/admin/js/dropdown.js"></script>
<script>
    $(function () {
        $("#search_button").click(function () {
            var class_id = $('#dropdownMenu1').attr('tag');
            if (class_id == 0) {
                return;
            }
            var url = '/admin/house/index?';
            if (class_id != 0) {
                url += 'property_type_id=' + class_id;
            }
            location.href = url;
        });
    })
</script>
<?php $this->beginBlock('breadcrumb');//面包屑导航 ?>
<div class="pageheader" style="height: 50px;padding-top: 10px">
    <h2><span style="font-style: normal">二手房</span>
        <span style="font-style: normal">二手房列表</span></h2>
</div>
<?php $this->endBlock(); ?>

<?php $this->beginBlock('footer');//尾部附加 ?>
<?php $this->endBlock(); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="toolbar">
            <div style="display: inline-block;">
                <div class="form-inline"
                ">
                <div class="form-group">
                    <div class="col-sm-6 dropdown">
                        <button style="width: 200px; height: 40px" class="btn btn-default dropdown-toggle"
                                type="button"
                                tag="<?= $property_type_id ?>"
                                id="dropdownMenu1"
                                data-toggle="dropdown">
                            请选择物业类型
                        </button>
                        <ul style="margin-left: 10px;" class="dropdown-menu" role="menu">
                            <?php foreach ($property_type_list as $key => $item): ?>
                                <li class="li_on_click" role="presentation" tag="<?= $key; ?>">
                                    <a role="menuitem" tabindex="-1" href="#"><?= $item; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <button type="submit" id="search_button" class="btn btn-default">搜索</button>
            </div>
        </div>
    </div>
    <h4>楼盘列表</h4>
</div>
<div class="panel-body">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>物业类型</th>
            <th>片区</th>
            <th>地址</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($house_list as $item): ?>
            <tr>
                <th><?= $item->id; ?></th>
                <th><?= $item->property_type; ?></th>
                <th><?= $item->area_name; ?></th>
                <th><?= $item->address; ?></th>
                <th><?= \app\components\Utils::formatDateTime($item->c_t); ?></th>
                <th>
                    <a href="<?= Url::to(['edit', 'id' => $item->id]); ?>"><i class="fa fa-pencil"></i></a>
                </th>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div>
        <?= \yii\widgets\LinkPager::widget(['pagination' => $pages]); ?>
    </div>
</div>
</div>
