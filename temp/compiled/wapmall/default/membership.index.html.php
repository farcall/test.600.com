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
    </head>

    <body onselectstart="return true;" ondragstart="return false;">
        <div class="container get card">
            <header>
                <div class="header card">
                    <div id="card" data-role="card" >
                        <div class="front" style="background-image:url(<?php echo $this->_var['data_card']['card_bg']; ?>);">
                            <span class="name" style="color:#<?php echo $this->_var['data_card']['card_name_color']; ?>">
                                <?php echo $this->_var['data_card']['card_name']; ?>
                            </span>
                            <span class="no" style="color:#<?php echo $this->_var['data_card']['card_num_color']; ?>;">
                                会员卡号：
                                <?php echo $this->_var['data_card_info']['card_num']; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="tbox group_btn3">
                        <li>
                        </li>
                        <li>
                            <?php if ($this->_var['data_card_info']): ?>
                            <a href="<?php echo url('app=membership&act=card_info_edit&id=' . $_GET['id']. ''); ?>">修改信息</a>
                            <?php else: ?>
                            <a href="<?php echo url('app=membership&act=card_info_add&id=' . $_GET['id']. ''); ?>">点击领取</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="body">
                <ul class="list_ul">
                    <div>
                        <li class="li_f">
                            <a href="<?php echo url('app=store&id=' . $_GET['id']. ''); ?>">
                                <label class="label">
                                    <i>
                                        &nbsp;
                                    </i>
                                    进入商城
                                    <span>
                                        &nbsp;
                                    </span>
                                </label>
                            </a>
                        </li>
                    </div>
                    <div> 
                        <li class="li_v">
                            <a href="<?php echo url('app=buyer_order'); ?>">
                                <label class="label">
                                    <i>
                                        &nbsp;
                                    </i>
                                    我的订单
                                    <span>
                                        &nbsp;
                                    </span>
                                </label>
                            </a>
                        </li>

                    </div>

                    <div>
                        <?php if ($this->_var['data_card']['phone'] != ''): ?>
                        <li class="li_i">
                            <a class="label" href="tel:<?php echo $this->_var['data_card']['phone']; ?>">
                                <i>
                                    &nbsp;
                                </i>
                                <?php echo $this->_var['data_card']['phone']; ?>
                                <span>
                                    &nbsp;
                                </span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="li_k">
                            <a href="javascript:void(0)">
                                <label class="label">
                                    <i>
                                        &nbsp;
                                    </i>
                                    <p class="mutipleLine">
                                        关于我们
                                    </p>
                                    <span>
                                        &nbsp;
                                    </span>
                                </label>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <footer>
            <nav class="nav">
                <ul class="box">
                    <li>
                        <a href="<?php echo url('app=membership&id=' . $_GET['id']. ''); ?>"  class="on" >
                            <p class="card"></p>
                            <span>会员卡</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('app=buyer_order'); ?>" class="my ">
                            <p class="my"></p>
                            <span>我的</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </footer>
    </body>

</html>