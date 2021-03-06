<?php
/**
 * add.php.
 * @author keepeye <carlton.cheng@foxmail>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
use yii\helpers\Html;
use app\consts\HouseConst;

?>

<script charset="utf-8" src="/static/admin/js/ajaxfileupload.js"></script>
<script charset="utf-8" src="/static/admin/js/upload.js"></script>
<script charset="utf-8" src="/static/admin/js/dropdown.js"></script>
<script charset="utf-8" src="/static/admin/js/form.check.js"></script>
<script charset="utf-8" src="/static/admin/js/checkbox.js"></script>
<?php $this->beginBlock('breadcrumb');//面包屑导航 ?>
<div class="pageheader" style="height: 50px;padding-top: 10px">
    <h2><span style="font-style: normal">经纪人</span>
        <span style="font-style: normal">修改</span></h2>
</div>

<?php $this->endBlock(); ?>

<?php $this->beginBlock('footer');//尾部附加 ?>
<script>
    $(function () {
        $("#add_button").click(function () {
            var $name = $('input[name=broker_name]').val().trim();
            var $phone = $('input[name=phone]').val().trim();
            var $img = $('input[name=broker_img_url]').val().trim();
            var $email = $('input[name=email]').val().trim();
            var $tag = $('input:checkbox[name=tag]:checked');
            $tag = getCheckBoxStr($tag);
            var $class_id = $('#dropdownMenu1').attr('tag');
            var $id = $('input[name=id]').val();
            if (!checkVal($name, '姓名', true, 0, 10)) {
                return;
            }
            if (!checkVal($phone, '联系方式', true, 0, 20)) {
                return;
            }
            if ($email != '' && !checkType($email, 'email')) {
                return;
            }
            $.ajax({
                url: '/admin/broker/edit',
                type: 'post',
                dataType: 'json',
                data: {
                    name: $name,
                    img: $img,
                    email: $email,
                    phone: $phone,
                    tag: $tag,
                    position_id: $class_id,
                    id: $id
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
<?php $this->endBlock(); ?>
<div class="panel panel-default">
    <input type="hidden" name="id" value="<?= $broker->id ?>">
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 10%">姓名
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" placeholder="输入10个字以内" name="broker_name" class="form-control"  value="<?= $broker->name; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 10%">联系方式
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <input type="text" name="phone" class="form-control"  value="<?= $broker->phone; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 10%">职位
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6 dropdown">
                <button style="width: 200px;" class="btn btn-default dropdown-toggle" type="button" tag="<?= $broker->position_id; ?>"
                        id="dropdownMenu1"
                        data-toggle="dropdown">
                    请选择职位
                </button>
                <ul style="margin-left: 10px" class="dropdown-menu" role="menu">
                    <?php foreach ($list as $item): ?>
                        <li class="li_on_click" role="presentation" tag="<?= $item->id; ?>">
                            <a role="menuitem" tabindex="-1" href="#"><?= $item->value; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 10%">照片
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <label style="color: red; width: 400px">*上传图片尺寸78*98</label>
                <input type="file" id="broker_img" name="broker_img" style="display:inline">
                <input type="button" tag="broker_img" value="上传" class="upload_file">
                <input type="hidden" name="broker_img_url" value="<?= $broker->img; ?>">
                <?php
                if (!empty($broker->img_url)) {
                    echo '<a target="_blank" class="upload_res" href="' . $broker->img_url . '">点击查看</a>';
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 10%">标签
                <fond style="color: red">*</fond>
            </label>
            <div class="col-sm-6">
                <?php foreach (HouseConst::$broker_type as $key => $name): ?>
                    <label>
                        <input type="checkbox" <?php if (in_array($key, $broker->tag_arr)) echo 'checked' ?>
                               value="<?= $key ?>"
                               name="tag"><?= $name ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="width: 10%">email
            </label>
            <div class="col-sm-6">
                <input type="text" name="email" class="form-control" value="<?= $broker->email; ?>">
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