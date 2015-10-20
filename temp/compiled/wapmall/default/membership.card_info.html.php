<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Description" content="">
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
        <meta content="no-cache" http-equiv="pragma">
        <meta content="0" http-equiv="expires">
        <meta content="telephone=no, address=no" name="format-detection">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="stylesheet" type="text/css" href="themes/mall/taocz/styles/default/images/huodong/membership_card/css/main.css" media="all">
        <title>
            会员卡
        </title>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    </head>
    <script type="text/javascript" src="index.php?act=jslang"></script>
    <script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'jquery.js'; ?>" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'jquery.plugins/jquery.validate.js'; ?>" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'mlselection.js'; ?>" charset="utf-8"></script>
    <body onselectstart="return true;" ondragstart="return false;">
        <script>
//<!CDATA[
            var SITE_URL = "<?php echo $this->_var['site_url']; ?>";
            var REAL_SITE_URL = "<?php echo $this->_var['real_site_url']; ?>";
//]]>

            $(function() {
                regionInit("region");
            });
        </script>

        <div class="container info_tx">
            <div class="body pt_10">
                <ul class="list_ul_card">
                    <form action="" method="post">
                        <li data-card="">
                            <header class="center">
                                <label style="display:inline-block;"><span>&nbsp;</span>填写会员卡资料</label>
                            </header>

                            <div class="forms">
                                <dl>
                                    <dt>会员名：</dt>
                                    <dd>
                                        <input name="user_name" id="user_name" value="<?php echo $this->_var['data']['user_name']; ?>" placeholder="请输入微信名" maxlength="30" class="input" type="text">
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>手机号： </dt>
                                    <dd>
                                        <input name="phone" id="phone" placeholder="请输入手机号" maxlength="30" class="input" value="<?php echo $this->_var['data']['phone']; ?>" type="text">
                                    </dd>
                                </dl>										
                                <dl>
                                    <dt>性 别： </dt>
                                    <dd>
                                        <select name="sex" id="sex" class="select" style="width:100%;">
                                            <option value="0" <?php if ($this->_var['data']['sex'] == 0): ?>selected="selected" <?php endif; ?>>男</option>
                                            <option value="1" <?php if ($this->_var['data']['sex'] == 1): ?>selected="selected" <?php endif; ?>>女</option>
                                        </select>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>所在地区:</dt>
                                    <dd>
                                        <p class="box select_box" id="region">
                                            <input type="hidden" name="region_id" value="<?php echo $this->_var['data']['region_id']; ?>" class="mls_id" />
                                            <input type="hidden" name="region_name" value="<?php echo $this->_var['data']['region_name']; ?>" class="mls_names" />
                                            <?php if ($this->_var['data']['region_id']): ?>
                                            <span><?php echo htmlspecialchars($this->_var['data']['region_name']); ?></span>
                                            <input type="button" value="编辑" class="edit_region" />
                                            <select style="display:none">
                                                <option>请选择...</option>
                                                <?php echo $this->html_options(array('options'=>$this->_var['regions'])); ?>
                                            </select>
                                            <?php else: ?>
                                            <select class="select">
                                                <option>请选择...</option>
                                                <?php echo $this->html_options(array('options'=>$this->_var['regions'])); ?>
                                            </select>
                                            <?php endif; ?>
                                        </p>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>详细地址:</dt>
                                    <dd><input name="address" id="address" placeholder="请输入详细地址" value="<?php echo $this->_var['data']['address']; ?>" maxlength="100" class="input" type="text"></dd>
                                </dl>
                            </div>
                        </li>
                        <div class="pt_10 pb_10">
                            <input type="submit" value="提&nbsp;&nbsp;&nbsp;交" class="button" style="width: 100%"/>
                        </div>
                    </form>
                </ul>
            </div>
        </div>
    </body>
</html>