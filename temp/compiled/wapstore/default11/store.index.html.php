
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" name="viewport">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <?php echo $this->_var['page_seo']; ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $this->res_base . "/" . 'css/index.css'; ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo $this->res_base . "/" . 'css/flexslider.css'; ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo $this->res_base . "/" . 'css/mmenu.css'; ?>">
        <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/jquery.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/jquery.flexslider.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/jquery.mmenu.min.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/touchslider.dev.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'ecmall.js'; ?>" charset="utf-8"></script>


    </head>
    <body>
        <?php echo $this->fetch('header.html'); ?>

        <div class="content">

            
            <div class="banner">   
                
                <section class="slider" style="overflow:hidden;"> 
                    <div class="flexslider" id="z_slider">
                        <ul class="slides">
                            <?php $_from = $this->_var['goods_images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_iamge');if (count($_from)):
    foreach ($_from AS $this->_var['goods_iamge']):
?>
                            <li>
                                <?php if ($this->_var['goods_iamge']['image_link']): ?>
                                <a href="<?php echo $this->_var['goods_iamge']['image_link']; ?>"> <img  src="<?php echo $this->_var['site_url']; ?>/<?php echo $this->_var['goods_iamge']['image_url']; ?>"/></a>
                                <?php else: ?>
                                <img  src="<?php echo $this->_var['site_url']; ?>/<?php echo $this->_var['goods_iamge']['image_url']; ?>"/>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                    </div>
                </section>
            </div>
            <script>
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide"
                    });
                });
            </script>
            
            <div class="sort">
                <ul>
                    <?php if ($this->_var['store']['radio_new'] == '1'): ?>
                    <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=add_time">
                        <li>
                            <div class="imgbox"><img src="<?php if ($this->_var['store']['store_new_images']): ?><?php echo $this->_var['store']['store_new_images']; ?> <?php else: ?><?php echo $this->res_base . "/" . 'images/sr1.png'; ?> <?php endif; ?>"></div>
                            <span>最新商品</span>
                        </li>
                    </a>
                    <?php endif; ?>
                    <?php if ($this->_var['store']['radio_recommend'] == '1'): ?>
                    <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&recommended=1">
                        <li>
                            <div class="imgbox"><img src="<?php if ($this->_var['store']['store_recommend_images']): ?><?php echo $this->_var['store']['store_recommend_images']; ?> <?php else: ?><?php echo $this->res_base . "/" . 'images/sr2.png'; ?><?php endif; ?>"></div>
                            <span>推荐商品</span>
                        </li>
                    </a>
                    <?php endif; ?>
                    <?php if ($this->_var['store']['radio_hot'] == '1'): ?>
                    <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=views">
                        <li>
                            <div class="imgbox"><img src="<?php if ($this->_var['store']['store_hot_images']): ?><?php echo $this->_var['store']['store_hot_images']; ?> <?php else: ?><?php echo $this->res_base . "/" . 'images/sr3.png'; ?><?php endif; ?>"></div>
                            <span>热门商品</span>
                        </li>
                    </a>
                    <?php endif; ?>

                            <?php $_from = $this->_var['store']['store_gcates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['gcategory']):
?>
                        <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['gcategory']['id']. ''); ?>">
                        <li>
                        <div class="imgbox"><img src="<?php echo $this->res_base . "/" . 'images/sr1.png'; ?> "></div>
                        <span><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?></span></li>
                        </a>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                </ul>
            </div>



            <?php if ($this->_var['new_groupbuy']): ?>
            <h2 class="tuan-title">最新团购</h2>

            <div class="tuan_box swipe">
                <ul class="tuan_list"  id="slider1">
                    <?php $_from = $this->_var['new_groupbuy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>

                    <li>
                        <a href="<?php echo url('app=groupbuy&id=' . $this->_var['group']['group_id']. ''); ?>">
                            <div class="con">
                                <div class="tuan_imgbox">
                                    <img src="<?php echo $this->_var['group']['default_image']; ?>">
                                    <p><?php echo htmlspecialchars($this->_var['group']['group_name']); ?></p>
                                </div>
                                <span class="tuan_price">团购价：<strong><?php echo price_format($this->_var['group']['group_price']); ?></strong></span>
                                <?php if ($this->_var['group']['state'] == 1): ?>
                                <span class="s_time"><img src="<?php echo $this->res_base . "/" . 'images/time.png'; ?>">剩余：<?php echo $this->_var['group']['lefttime']; ?></span>
                                <?php elseif ($this->_var['group']['state'] == 2): ?>
                                <span class="s_time">活动已结束</span>
                                <?php elseif ($this->_var['group']['state'] == 3): ?>
                                <span class="s_time">活动已完成</span>
                                <?php elseif ($this->_var['group']['state'] == 4): ?>
                                <span class="s_time">活动已取消</span>
                                <?php endif; ?>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <span onClick="t1.prev();" class="prenext pre"></span>
                <span onClick="t1.next();" class="prenext next"></span>
            </div>
            <?php endif; ?>  


            <?php if ($this->_var['recommended_goods']): ?>
            <div class="lists">	
                <h2>橱窗推荐<a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&recommended=1">more<img src="<?php echo $this->res_base . "/" . 'images/more.png'; ?>"></a></h2>
                <ul>
                    <?php $_from = $this->_var['recommended_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rgoods');if (count($_from)):
    foreach ($_from AS $this->_var['rgoods']):
?>
                    <a href="<?php echo url('app=goods&id=' . $this->_var['rgoods']['goods_id']. ''); ?>">
                        <li>
                            <img src="<?php echo $this->_var['site_url']; ?>/<?php echo $this->_var['rgoods']['default_image']; ?>" />
                            <p><?php echo htmlspecialchars($this->_var['rgoods']['goods_name']); ?></p>
                            <span><?php echo price_format($this->_var['rgoods']['price']); ?></span>
                            <i><?php if ($this->_var['rgoods']['cost_price'] == '0'): ?><?php echo price_format($this->_var['rgoods']['price']); ?>   <?php else: ?><?php echo price_format($this->_var['rgoods']['cost_price']); ?><?php endif; ?></i>
                        </li>
                    </a>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


                </ul>
            </div>
            <?php endif; ?>

            <?php if ($this->_var['new_goods']): ?>
            <div class="lists">
                <h2>新品上市<a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=add_time">more<img src="<?php echo $this->res_base . "/" . 'images/more.png'; ?>"></a></h2>
                <ul>
                    <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ngoods');if (count($_from)):
    foreach ($_from AS $this->_var['ngoods']):
?>
                    <a href="<?php echo url('app=goods&id=' . $this->_var['ngoods']['goods_id']. ''); ?>">
                        <li>
                            <img src="<?php echo $this->_var['site_url']; ?>/<?php echo $this->_var['ngoods']['default_image']; ?>" />
                            <p><?php echo htmlspecialchars($this->_var['ngoods']['goods_name']); ?></p>
                            <span><?php echo price_format($this->_var['ngoods']['price']); ?></span>
                            <i><?php if ($this->_var['ngoods']['cost_price'] == '0'): ?><?php echo price_format($this->_var['ngoods']['price']); ?>   <?php else: ?><?php echo price_format($this->_var['ngoods']['cost_price']); ?><?php endif; ?></i>
                        </li>
                    </a>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


                </ul>
            </div>
            <?php endif; ?>
        </div>
        <?php echo $this->fetch('footer.html'); ?>
    </body>
</html>
<script>
                   var t1 = new TouchSlider('slider1', {'auto': true, speed: 600, timeout: 6000})
</script>
