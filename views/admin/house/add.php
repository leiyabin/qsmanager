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
    var honse_lat = '';
    var honse_lon = '';
</script>
<?php $this->beginBlock('breadcrumb');//面包屑导航 ?>
<div class="pageheader" style="height: 50px;padding-top: 10px">
    <h2><span style="font-style: normal">二手房</span>
        <span style="font-style: normal">添加</span></h2>
</div>

<?php $this->endBlock(); ?>

<?php $this->beginBlock('footer');//尾部附加 ?>
<?php $this->endBlock(); ?>
<div class="panel panel-default">
    <input type="hidden" name="id" value="0">
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">区县/片区
            </label>
            <div class="col-sm-6 dropdown" style="float:left; width: 242px;">
                <button style="width: 230px;" class="btn btn-default dropdown-toggle" type="button"
                        tag=""
                        id="dropdownMenu1"
                        data-toggle="dropdown">
                    请选择区县
                </button>
                <ul style="margin-left: 10px;" class="dropdown-menu" role="menu">
                    <?php foreach ($list as $item): ?>
                        <li class="li_on_click quxian" role="presentation" tag="<?= $item->id; ?>">
                            <a role="menuitem" tabindex="-1" href="javascript:void(0);"><?= $item->value; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-sm-6 dropdown" style="float:left;  width: 296px; margin-left: 23px">
                <button style="width: 230px;" class="btn btn-default dropdown-toggle" type="button"
                        tag=""
                        id="dropdownMenu2"
                        data-toggle="dropdown">
                        请选择片区
                </button>
                <ul style="margin-left: 10px;" class="dropdown-menu area-dropdown" role="menu">
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">地址
            </label>
            <div class="col-sm-6">
                <input type="text"  class="form-control" value="" name="address">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">物业公司
            </label>
            <div class="col-sm-6">
                <input type="text"  class="form-control" value="" name="property_company">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">物业类型
            </label>
            <div class="col-sm-6">
                <button style="width: 200px;" class="btn btn-default dropdown-toggle" type="button"
                        tag=""
                        id="dropdownMenu3"
                        data-toggle="dropdown">
                        请选择物业类型
                </button>
                <ul style="margin-left: 10px" class="dropdown-menu" role="menu">
                    <?php foreach (\app\consts\HouseConst::$property_type as $key => $name): ?>
                        <li class="li_on_click" role="presentation" tag="<?= $key ?>">
                            <a role="menuitem" tabindex="-1" href="javascript:void(0);"><?= $name ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房龄
            </label>
            <div class="col-sm-6">
                <input type="number"  style="width: 460px; display: inline" class="form-control"
                       class="form-control" value="">年
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">所在楼层
            </label>
            <div class="col-sm-6">
                <input type="number"  style="width: 460px; display: inline" class="form-control"
                       value="">层
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">总楼层
            </label>
            <div class="col-sm-6">
                <input type="number"  style="width: 460px; display: inline" class="form-control"
                       value="">层
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">户型
            </label>
            <div class="col-sm-6">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">装修
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">产权类型
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">购买方式
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">单价
            </label>
            <div class="col-sm-6">
                <input type="text"  class="form-control" style="width: 460px; display: inline"
                       value="">元
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">总价
            </label>
            <div class="col-sm-6">
                <input type="text"  class="form-control" style="width: 460px; display: inline"
                       value="">万元
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">朝向
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">建筑面积
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" style="width: 460px; display: inline"
                       value="">平米
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房屋设施
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房屋描述
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">楼层单元
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">关键字
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">设置推荐
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <label>
                    <input type="checkbox" name="recommend">
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
                       class="form-control" type="text" value="">
                <fond style="float:left;line-height:40px; margin:0 20px">维度</fond>
                <input style="float: left;width:150px" readonly id="lat" name="lat" type="text" maxlength="9"
                       class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">挂牌时间
                <fond style="color: red">*</fond>
            </label>

            <div class="col-sm-6">
                <input type="text" readonly id="dateinfo1" name="sale_time" class="form-control datainp"
                       value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">上次交易时间
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" readonly id="dateinfo2" name="last_sale_time" class="form-control datainp"
                       value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房本年限
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6 dropdown">
                <button style="width: 200px;" class="btn btn-default dropdown-toggle" type="button"
                        tag=""
                        id="dropdownMenu4"
                        data-toggle="dropdown">
                    请选择房本年限
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
                           name="is_only" >
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">抵押信息
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="请输入20个字以内"
                       name="mortgage_info" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">产权所属
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="请输入10个字以内"
                       name="right_info" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">小区名称
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="请输入20个字以内"
                       name="community_name" value="">
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
                       value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">小区简介
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control"
                       name="community_introduction" placeholder="请输入200个字以内"
                       value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">户型简介
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control"
                       name="door_model_introduction" placeholder="请输入200个字以内"
                       value="">
            </div>
        </div>
        <div class="form-group" id="school_info">
            <label class="col-sm-3 control-label" style="width: 12%">教育配套
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control" placeholder="请输入50个字以内"
                       name="school_info" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">交通出行
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control" placeholder="请输入200个字以内"
                       name="traffic_info" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">费税解析
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6" style="width: 900px;">
                <input type="text" class="form-control" placeholder="请输入200个字以内"
                       name="tax_explain" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">小区均价
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="number" class="form-control" style="width: 480px; display: inline"
                       name="community_average_price"
                       value="">元
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">建筑年代
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="number" class="form-control" style="width: 480px; display: inline" name="build_year"
                       value="">年
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">楼栋总数
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="number" class="form-control" style="width: 480px; display: inline" name="total_building"
                       value="">栋
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">户型总数
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="number" class="form-control" style="width: 480px; display: inline" name="total_door_model"
                       value="">个
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">建筑类型
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6 dropdown">
                <button style="width: 200px;" class="btn btn-default dropdown-toggle" type="button"
                        tag=""
                        id="dropdownMenu5"
                        data-toggle="dropdown">
                        请选择建筑类型
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
                               value="<?= $key ?>" <?= $name ?>
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
        $(".quxian").click(function () {
            var $class_id = $(this).attr('tag');
            //获取片区数据
            $.ajax({
                url: '/admin/area/getbyclassid',
                type: 'post',
                dataType: 'json',
                data: {
                    class_id: $class_id
                },
                success: function (res) {
                    if (res.status == 1) {
                        var $ul = $('.area-dropdown');
                        $ul.find('li').remove();
                        $ul.siblings('button').html('请选择片区').attr('tag', 0);
                        for (var j in res.data) {
                            $('<li class="li_on_click" onclick="li_on_click_fun($(this))" role="presentation" tag="' + res.data[j].id + '">' +
                                '<a role="menuitem" tabindex="-1" href="javascript:void(0);">' + res.data[j].name + '</a></li>').appendTo($ul);
                        }
                    } else {
                        alert(res.msg);
                    }
                },
                error: function () {
                    alert('系统错误，请联系客服人员！');
                }
            })

        });
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
            var $deed_year = $('#dropdownMenu4').attr('tag');
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

            var $area_id = $('#dropdownMenu2').attr('tag');
            var $property_type_id = $('#dropdownMenu3').attr('tag');
            var $address = $('input[name=address]').val().trim();
            var $property_company = $('input[name=property_company]').val().trim();
            
            var $address = $('input[name=address]').val().trim();
            var $address = $('input[name=address]').val().trim();
            var $address = $('input[name=address]').val().trim();


            var $build_type = $('#dropdownMenu5').attr('tag');
            var $tag = $('input:checkbox[name=tag]:checked');
            var $is_school_house = $('input[name=is_school_house]').is(':checked');
            if ($is_school_house)
                $is_school_house = 1;
            else
                $is_school_house = 0;
            $tag = getCheckBoxStr($tag);
            var $community_img = $('input[name=community_img_url]').val().trim();
            if ($area_id == 0) {
                alert('请选择片区！');
                return;
            }
            if ($property_type_id == 0) {
                alert('请选择物业类型！');
                return;
            }
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
                url: '/admin/house/add',
                type: 'post',
                dataType: 'json',
                data: {
                    area_id: $area_id,
                    property_type_id: $property_type_id,

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
                        alert('添加成功!');
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
