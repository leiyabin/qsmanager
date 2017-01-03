<?php
/**
 * add.php.
 * @author keepeye <carlton.cheng@foxmail>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
use yii\helpers\Html;
use app\components\Utils;
use app\consts\HouseConst;

?>

<script charset="utf-8" src="/static/admin/js/ajaxfileupload.js"></script>
<script charset="utf-8" src="/static/admin/js/upload.js"></script>
<script charset="utf-8" src="/static/admin/js/form.check.js"></script>
<script charset="utf-8" src="/static/admin/js/dropdown.js"></script>
<script charset="utf-8" src="/static/admin/js/checkbox.js"></script>
<script type="text/javascript" src="/datetime/jedate/jedate.js"></script>
<script type="text/javascript">
    $(function () {
        jeDate({
            dateCell: "#dateinfo1",
            isinitVal: false,
            isTime: true //isClear:false,
        });
        jeDate({
            dateCell: "#dateinfo2",
            isinitVal: false,
            isTime: true //isClear:false,
        });
    });
    var honse_lat = '<?= $house->lat ?>';
    var honse_lon = '<?= $house->lon ?>';
</script>
<?php $this->beginBlock('breadcrumb');//面包屑导航 ?>
<div class="pageheader" style="height: 50px;padding-top: 10px">
    <h2><span style="font-style: normal">二手房</span>
        <span style="font-style: normal">修改</span></h2>
</div>

<?php $this->endBlock(); ?>

<?php $this->beginBlock('footer');//尾部附加 ?>
<?php $this->endBlock(); ?>
<div class="panel panel-default">
    <input type="hidden" name="id" value="<?= $house->id ?>">
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">区县/片区
            </label>
            <div class="col-sm-6 dropdown" style="float:left; width: 242px;">
                <input type="text" disabled class="form-control"
                       value="<?= $house->quxian_name ?>">
            </div>
            <div class="col-sm-6 dropdown" style="float:left;  width: 242px; margin-left: 30px">
                <input type="text" class="form-control" disabled
                       value="<?= $house->area_name ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">地址
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->address ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">物业公司
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->property_company ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">物业类型
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->property_type ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房龄
            </label>
            <div class="col-sm-6">
                <input type="text" disabled style="width: 460px; display: inline" class="form-control"
                       class="form-control" value="<?= $house->house_age ?>">年
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">所在楼层
            </label>
            <div class="col-sm-6">
                <input type="text" disabled style="width: 460px; display: inline" class="form-control"
                       value="<?= $house->in_floor ?>">层
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">总楼层
            </label>
            <div class="col-sm-6">
                <input type="text" disabled style="width: 460px; display: inline" class="form-control"
                       value="<?= $house->total_floor ?>">层
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">户型
            </label>
            <div class="col-sm-6">
                <label><?= $house->jishi ?>室&nbsp;&nbsp;<?= $house->jitin ?>厅&nbsp;&nbsp;<?= $house->jiwei ?>卫&nbsp;&nbsp;
                    <?= $house->jichu ?>厨&nbsp;&nbsp;<?= $house->jiyangtai ?>阳台</label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">装修
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->decoration_name ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">产权类型
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->right_type_name ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">购买方式
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->buy_type_name ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">单价
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" style="width: 460px; display: inline"
                       value="<?= $house->unit_price ?>">元
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">总价
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" style="width: 460px; display: inline"
                       value="<?= $house->total_price ?>">万元
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">朝向
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->face ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">建筑面积
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" style="width: 460px; display: inline"
                       value="<?= $house->build_area ?>">平米
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房屋设施
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->house_facility ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房屋描述
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->house_description ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">楼层单元
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->floor_unit ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">关键字
            </label>
            <div class="col-sm-6">
                <input type="text" disabled class="form-control" value="<?= $house->keywords ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">设置推荐
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <label>
                    <input type="checkbox" name="recommend" <?php if ($house->recommend) echo 'checked'; ?>>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">经纬度
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width:800px;">
                <div style=" margin:auto;width:800px;height:600px;border:2px solid gray; margin-bottom:20px;"
                     id="container"></div>
                <input style="float: left;width:200px" id="where" name="where" class="form-control" type="text"
                       placeholder="请输入地址">
                <input style="float: left;margin-left: 20px; display: inline" id="but" type="button"
                       class="btn btn-default" value="地图查找"/>
                <fond style="float:left;line-height:40px; margin:0 20px">经度</fond>
                <input style="float: left;width:150px" readonly id="lon" name="lon" maxlength="10"
                       class="form-control" type="text" value="<?= $house->lon ?>">
                <fond style="float:left;line-height:40px; margin:0 20px">维度</fond>
                <input style="float: left;width:150px" readonly id="lat" name="lat" type="text" maxlength="9"
                       class="form-control" value="<?= $house->lat ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">挂牌时间
                <fond style="color: red">*</fond>
            </label>

            <div class="col-sm-6">
                <input type="text" readonly id="dateinfo1" name="sale_time" class="form-control datainp"
                       value="<?php if (!empty($house->house_attach->sale_time)) echo Utils::formatDateTime($house->house_attach->sale_time); else echo ''; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">上次交易时间
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" readonly id="dateinfo2" name="last_sale_time" class="form-control datainp"
                       value="<?php if (!empty($house->house_attach->last_sale_time)) echo Utils::formatDateTime($house->house_attach->last_sale_time); else echo ''; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房本年限
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6 dropdown">
                <button style="width: 200px;" class="btn btn-default dropdown-toggle" type="button"
                        tag="<?= Utils::getValue($house->house_attach, 'deed_year', 0); ?>"
                        id="dropdownMenu1"
                        data-toggle="dropdown">
                    <?= Utils::getValue($house->house_attach, 'deed_year_name', '请选择房本年限'); ?>
                </button>
                <ul style="margin-left: 10px" class="dropdown-menu" role="menu">
                    <?php foreach (HouseConst::$deed_year as $key => $name): ?>
                        <li class="li_on_click" role="presentation" tag="<?= $key ?>">
                            <a role="menuitem" tabindex="-1" href="javascript:void(0)"><?= $name ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">是否唯一
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <label>
                    <input type="checkbox"
                           name="is_only" <?php if (!empty($house->house_attach->is_only)) echo 'checked'; ?>>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">抵押信息
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="请输入20个字以内"
                       name="mortgage_info" value="<?= Utils::getValue($house->house_attach, 'mortgage_info', '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">产权所属
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="请输入10个字以内"
                       name="right_info" value="<?= Utils::getValue($house->house_attach, 'right_info', '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">小区名称
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="请输入20个字以内"
                       name="community_name" value="<?= Utils::getValue($house->house_attach, 'community_name', '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">小区图片
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <label style="color: blue;display: block;">*请上传图片尺寸200*120（或是长:宽=5:3）的图片</label>
                <input type="file" id="community_img" name="community_img" style="display:inline">
                <input type="button" tag="community_img" value="上传" class="upload_file">
                <input type="hidden" name="community_img_url"
                       value="<?= Utils::getValue($house->house_attach, 'community_img', ''); ?>">
                <?php
                if (!empty($house->house_attach->community_img_url)) {
                    echo '<a target="_blank" class="upload_res" href="' . $house->house_attach->community_img_url . '">点击查看</a>';
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">小区简介
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control"
                       name="community_introduction" placeholder="请输入200个字以内"
                       value="<?= Utils::getValue($house->house_attach, 'community_introduction', '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">户型简介
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control"
                       name="door_model_introduction" placeholder="请输入200个字以内"
                       value="<?= Utils::getValue($house->house_attach, 'door_model_introduction', '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">是否为学区房
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <label>
                    <input type="checkbox"
                           name="is_school_house" <?php if (!empty($house->is_school_house)) echo 'checked'; ?>>
                </label>
            </div>
        </div>
        <div class="form-group" id="school_info">
            <label class="col-sm-3 control-label" style="width: 12%">教育配套
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control" placeholder="请输入50个字以内"
                       name="school_info" value="<?= Utils::getValue($house, 'school_info', '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">交通出行
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control" placeholder="请输入200个字以内"
                       name="traffic_info" value="<?= Utils::getValue($house->house_attach, 'traffic_info', '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">费税解析
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control" placeholder="请输入200个字以内"
                       name="tax_explain" value="<?= Utils::getValue($house->house_attach, 'tax_explain', '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">小区均价
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="number" class="form-control" style="width: 480px; display: inline"
                       name="community_average_price"
                       value="<?= Utils::getValue($house->house_attach, 'community_average_price', '') ?>">元
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">建筑年代
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="number" class="form-control" style="width: 480px; display: inline" name="build_year"
                       value="<?= Utils::getValue($house->house_attach, 'build_year', '') ?>">年
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">楼栋总数
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="number" class="form-control" style="width: 480px; display: inline" name="total_building"
                       value="<?= Utils::getValue($house->house_attach, 'total_building', '') ?>">栋
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">户型总数
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="number" class="form-control" style="width: 480px; display: inline" name="total_door_model"
                       value="<?= Utils::getValue($house->house_attach, 'total_door_model', '') ?>">个
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">建筑类型
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6 dropdown">
                <button style="width: 200px;" class="btn btn-default dropdown-toggle" type="button"
                        tag="<?= Utils::getValue($house->house_attach, 'build_type', 0); ?>"
                        id="dropdownMenu2"
                        data-toggle="dropdown">
                    <?= Utils::getValue($house->house_attach, 'build_type_name', '请选择建筑类型'); ?>
                </button>
                <ul style="margin-left: 10px" class="dropdown-menu" role="menu">
                    <?php foreach (HouseConst::$build_type as $key => $name): ?>
                        <li class="li_on_click" role="presentation" tag="<?= $key ?>">
                            <a role="menuitem" tabindex="-1" href="javascript:void(0)"><?= $name ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="form-group" id="loupan_feature">
            <label class="col-sm-3 control-label" style="width: 12%">楼盘特色
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <?php foreach (HouseConst::$feature as $key => $name): ?>
                    <label>
                        <input type="checkbox"
                               value="<?= $key ?>" <?php if (in_array($key, $house->tag_arr)) echo 'checked' ?> <?= $name ?>
                               name="tag"><?= $name ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <button id="add_button" class="btn btn-primary">提交</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        var school_info = $('#school_info');
        var loupan_feature = $('#loupan_feature');
        $("input[name=is_school_house]").click(function () {
            if ($(this).is(':checked')) {
                school_info.show();
                loupan_feature.find('input[value=4]').attr('checked',true);
            } else {
                school_info.hide();
                loupan_feature.find('input[value=4]').attr('checked',false);
            }
        });
        $("#add_button").click(function () {
            var $recommend = $('input:checkbox[name=recommend]');
            if ($recommend[0].checked) {
                $recommend = 1;
            } else {
                $recommend = 0;
            }
            var $lon = $('input[name=lon]').val().trim();
            var $lat = $('input[name=lat]').val().trim();
            var $sale_time = $('input[name=sale_time]').val().trim();
            var $last_sale_time = $('input[name=last_sale_time]').val().trim();
            var $deed_year = $('#dropdownMenu1').attr('tag');
            var $is_only = $('input:checkbox[name=is_only]');
            if ($is_only[0].checked) {
                $is_only = 1;
            } else {
                $is_only = 0;
            }
            var $mortgage_info = $('input[name=mortgage_info]').val().trim();
            var $right_info = $('input[name=right_info]').val().trim();
            var $community_name = $('input[name=community_name]').val().trim();
            var $community_introduction = $('input[name=community_introduction]').val().trim();
            var $door_model_introduction = $('input[name=door_model_introduction]').val().trim();
            var $school_info = $('input[name=school_info]').val().trim();
            var $traffic_info = $('input[name=traffic_info]').val().trim();
            var $tax_explain = $('input[name=tax_explain]').val().trim();
            var $community_average_price = $('input[name=community_average_price]').val().trim();
            var $build_year = $('input[name=build_year]').val().trim();
            var $total_building = $('input[name=total_building]').val().trim();
            var $total_door_model = $('input[name=total_door_model]').val().trim();
            var $build_type = $('#dropdownMenu2').attr('tag');
            var $id = $('input[name=id]').val().trim();
            var $tag = $('input:checkbox[name=tag]:checked');
            var $is_school_house = $('input[name=is_school_house]').is(':checked');
            if ($is_school_house)
                $is_school_house = 1;
            else
                $is_school_house = 0;
            $tag = getCheckBoxStr($tag);
            var $community_img = $('input[name=community_img_url]').val().trim();
            if ($lon == 0 || $lat == 0) {
                alert('请选择经纬度！');
                return;
            }
            if (!checkVal($sale_time, '挂牌时间', true)) {
                return;
            }
            if (!checkVal($last_sale_time, '上次交易时间', true)) {
                return;
            }
            if ($deed_year == 0) {
                alert('请选择房本年限！');
                return;
            }
            if (!checkVal($mortgage_info, '抵押信息', true, 0, 20)) {
                return;
            }
            if (!checkVal($right_info, '产权所属', true, 0, 10)) {
                return;
            }
            if (!checkVal($community_name, '小区名称', true)) {
                return;
            }
            if (!checkVal($community_img, '小区图片', true)) {
                return;
            }
            if (!checkVal($community_introduction, '小区简介', true, 0, 200)) {
                return;
            }
            if (!checkVal($door_model_introduction, '户型简介', true, 0, 200)) {
                return;
            }
            if (!checkVal($tax_explain, '费税解析', true, 0, 200)) {
                return;
            }
            if ($is_school_house ==1 && !checkVal($school_info, '教育配套', true, 0, 50)) {
                return;
            }
            if (!checkVal($traffic_info, '交通出行', true, 0, 200)) {
                return;
            }
            if (!checkVal($community_average_price, '小区均价', true)) {
                return;
            }
            if (!checkVal($build_year, '建筑年代', true)) {
                return;
            }
            if (!checkVal($total_building, '楼栋总数', true)) {
                return;
            }
            if (!checkVal($total_door_model, '户型总数', true)) {
                return;
            }
            if ($build_type == 0) {
                alert('请选择建筑类型！');
                return;
            }
            $.ajax({
                url: '/admin/house/edit',
                type: 'post',
                dataType: 'json',
                data: {
                    id: $id,
                    build_type: $build_type,
                    total_door_model: $total_door_model,
                    total_building: $total_building,
                    build_year: $build_year,
                    community_average_price: $community_average_price,
                    traffic_info: $traffic_info,
                    is_school_house: $is_school_house,
                    school_info: $school_info,
                    door_model_introduction: $door_model_introduction,
                    community_introduction: $community_introduction,
                    tax_explain: $tax_explain,
                    community_img: $community_img,
                    community_name: $community_name,
                    lon: $lon,
                    lat: $lat,
                    right_info: $right_info,
                    mortgage_info: $mortgage_info,
                    deed_year: $deed_year,
                    last_sale_time: $last_sale_time,
                    sale_time: $sale_time,
                    tag: $tag,
                    is_only: $is_only,
                    recommend: $recommend
                },
                success: function (res) {
                    if (res.status == 1) {
                        alert('修改成功!');
                    } else {
                        alert(res.msg);
                    }
                },
                error: function () {
                    alert('系统错误，请联系客服人员！');
                }
            })
        });
    });

</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script>
<script type="text/javascript" src="/static/admin/js/map.js"></script>
