<?php
/**
 * add.php.
 * @author keepeye <carlton.cheng@foxmail>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
use yii\helpers\Html;

?>

<script charset="utf-8" src="/static/admin/js/ajaxfileupload.js"></script>
<script charset="utf-8" src="/static/admin/js/upload.js"></script>
<script charset="utf-8" src="/static/admin/js/form.check.js"></script>
<script charset="utf-8" src="/static/admin/js/dropdown.js"></script>
<script charset="utf-8" src="/static/admin/js/checkbox.js"></script>
<script type="text/javascript" src="/datetime/jedate/jedate.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script>
<script type="text/javascript">
//    $(function () {
//        jeDate({
//            dateCell: "#dateinfo",
//            isinitVal: true,
//            isTime: true //isClear:false,
//        });
//    })
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
                <input type="text"  disabled class="form-control"
                       value="<?= $house->quxian_name ?>">
            </div>
            <div class="col-sm-6 dropdown" style="float:left;  width: 242px; margin-left: 30px">
                <input type="text"  class="form-control" disabled
                       value="<?= $house->area_name ?>">
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">地址
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->address ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">物业公司
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->property_company ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">物业类型
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->property_type ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房龄
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  style="width: 460px; display: inline" class="form-control"
                       class="form-control" value="<?= $house->house_age ?>">年
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">所在楼层
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  style="width: 460px; display: inline" class="form-control"
                       value="<?= $house->in_floor ?>">层
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">总楼层
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  style="width: 460px; display: inline" class="form-control"
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
                <input type="text" disabled  class="form-control" value="<?= $house->decoration_name ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">产权类型
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->right_type_name ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">购买方式
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->buy_type_name ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">单价
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" style="width: 460px; display: inline"
                       value="<?= $house->unit_price ?>">元
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">总价
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" style="width: 460px; display: inline"
                       value="<?= $house->total_price ?>">万元
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">朝向
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->face ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">建筑面积
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" style="width: 460px; display: inline"
                       value="<?= $house->build_area ?>">平米
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房屋设施
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->house_facility ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">房屋描述
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->house_description ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">楼层单元
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->floor_unit ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">关键字
            </label>
            <div class="col-sm-6">
                <input type="text" disabled  class="form-control" value="<?= $house->keywords ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">设置推荐
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <label>
                    <input type="checkbox" name="recommend" <?php if($house->recommend) echo 'checked';?>>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 12%">经纬度
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
                                '<a role="menuitem" tabindex="-1" href="#">' + res.data[j].name + '</a></li>').appendTo($ul);
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
        $("#add_button").click(function () {
            var $name = $('input[name=loupan_name]').val().trim();
            var $average_price = $('input[name=average_price]').val().trim();
            var $address = $('input[name=address]').val().trim();
            var $sale_office_address = $('input[name=sale_office_address]').val().trim();
            var $opening_time = $('input[name=opening_time]').val().trim();
            var $area_id = $('#dropdownMenu2').attr('tag');
            var $property_type_id = $('#dropdownMenu3').attr('tag');
            var $sale_status = $('#dropdownMenu4').attr('tag');
            var $jiju = $('input:checkbox[name=jiju]:checked');
            $jiju = getCheckBoxStr($jiju);
            var $min_square = $('input[name=min_square]').val().trim();
            var $max_square = $('input[name=max_square]').val().trim();
            var $lon = $('input[name=lon]').val().trim();
            var $lat = $('input[name=lat]').val().trim();
            var $developers = $('input[name=developers]').val().trim();
            var $property_company = $('input[name=property_company]').val().trim();
            var $banner_img = $('input[name=banner_img_url]').val().trim();
            var $img = $('input[name=loupan_img_url]').val().trim();
            var $img_1 = $('input[name=img_1_url]').val().trim();
            var $img_2 = $('input[name=img_2_url]').val().trim();
            var $img_3 = $('input[name=img_3_url]').val().trim();
            var $img_4 = $('input[name=img_4_url]').val().trim();
            var $img_5 = $('input[name=img_5_url]').val().trim();
            var $right_time = $('input[name=right_time]').val().trim();
            var $tag = $('input:checkbox[name=tag]:checked');
            $tag = getCheckBoxStr($tag);
            var $recommend = $('input:checkbox[name=recommend]');
            if ($recommend[0].checked) {
                $recommend = 1;
            } else {
                $recommend = 0;
            }
            var $remark = $('input[name=remark]').val().trim();
            var $id = $('input[name=id]').val().trim();
            if (!checkVal($name, '名称', true, 0, 30)) {
                return;
            }
            if (!checkVal($average_price, '均价', true)) {
                return;
            }
            if (!checkVal($address, '项目地址', true, 0, 50)) {
                return;
            }
            if (!checkVal($sale_office_address, '售楼处地址', true, 0, 50)) {
                return;
            }
            if (!checkVal($opening_time, '开盘时间', true)) {
                return;
            }
            if ($area_id == 0) {
                alert('请选择片区！');
                return;
            }
            if ($property_type_id == 0) {
                alert('请选择物业类型！');
                return;
            }
            if ($sale_status == 0) {
                alert('请选择售卖状态！');
                return;
            }
            if (!checkVal($jiju, '居室情况', true)) {
                return;
            }
            if ($min_square == 0) {
                alert('请填写最小面积！');
                return;
            }
            if ($max_square == 0) {
                alert('请填写最大面积！');
                return;
            }
            if ($lon == 0 || $lat == 0) {
                alert('请选择经纬度！');
                return;
            }
            if (!checkVal($developers, '开发商', true, 0, 50)) {
                return;
            }
            if (!checkVal($property_company, '物业公司', true, 0, 50)) {
                return;
            }
            if (!checkVal($banner_img, 'banner图', true)) {
                return;
            }
            if (!checkVal($img, '楼盘图片', true)) {
                return;
            }
            if (!checkVal($img_1, '效果图1', true)) {
                return;
            }
            if (!checkVal($img_2, '效果图2', true)) {
                return;
            }
            if (!checkVal($img_3, '效果图3', true)) {
                return;
            }
            if (!checkVal($img_4, '效果图4', true)) {
                return;
            }
            if ($right_time == 0) {
                alert('请填写产权年限！');
                return;
            }
            if (!checkVal($tag, '楼盘特色', true)) {
                return;
            }
            if (!checkVal($remark, '备注', false, 0, 15)) {
                return;
            }
            $.ajax({
                url: '/admin/loupan/edit',
                type: 'post',
                dataType: 'json',
                data: {
                    id: $id,
                    name: $name,
                    average_price: $average_price,
                    address: $address,
                    sale_office_address: $sale_office_address,
                    opening_time: $opening_time,
                    area_id: $area_id,
                    property_type_id: $property_type_id,
                    sale_status: $sale_status,
                    jiju: $jiju,
                    min_square: $min_square,
                    max_square: $max_square,
                    lon: $lon,
                    lat: $lat,
                    developers: $developers,
                    property_company: $property_company,
                    banner_img: $banner_img,
                    img: $img,
                    img_1: $img_1,
                    img_2: $img_2,
                    img_3: $img_3,
                    img_4: $img_4,
                    right_time: $right_time,
                    tag: $tag,
                    recommend: $recommend,
                    remark: $remark
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
<script type="text/javascript" src="/static/admin/js/map.js"></script>
