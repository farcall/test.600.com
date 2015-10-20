<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <?php echo $this->_var['page_seo']; ?>
        <link href="<?php echo $this->res_base . "/" . 'css/common.css'; ?>" type="text/css" rel="stylesheet" />
        <link href="<?php echo $this->res_base . "/" . 'css/index.css'; ?>" type="text/css" rel="stylesheet" />
        <link href="<?php echo $this->res_base . "/" . 'css/base.css'; ?>" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="index.php?act=jslang"></script>
        <script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'jquery.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'ecmall.js'; ?>" charset="utf-8"></script>
        <?php echo $this->_var['_head_tags']; ?>
    </head>
    <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/kissy/build/kissy.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/kissy/build/switchable/switchable-pkg.js'; ?>"></script>

    <body id="log-reg" class="gray">
        <div class="tmall-h5-v2">
            <div class="region">
                <div class="slider" id="J_m-slider">
                    <ul class="ks-switchable-content">
                        <li><a href="#"><img src="<?php echo $this->res_base . "/" . 'images/index/slider1.jpg'; ?>"/></a></li>
                        <li><a href="#"><img src="<?php echo $this->res_base . "/" . 'images/index/slider2.jpg'; ?>"/></a></li>
                        <li><a href="#"><img src="<?php echo $this->res_base . "/" . 'images/index/slider3.jpg'; ?>"/></a></li>
                        <li><a href="#"><img src="<?php echo $this->res_base . "/" . 'images/index/slider4.jpg'; ?>"/></a></li>
                        <li><a href="#"><img src="<?php echo $this->res_base . "/" . 'images/index/slider5.jpg'; ?>"/></a></li>
                    </ul> 
                    <div class="ks-switchable-nav">
                        <a class="ks-active"></a><a class=""></a><a class=""></a><a class=""></a><a class=""></a>
                    </div> 
                </div>
                <script>
                    KISSY.use('switchable', function(S) {
                        S.Slide('#J_m-slider', {
                            effect: 'scrollx',
                            easing: 'easeOutStrong'
                        });
                    });
                </script>
            </div>
            <header class="region"> 
                <div class="content"> 
                    <div class="top"> <h1> <a href="<?php echo url('app=default'); ?>"><img alt="<?php echo $this->_var['site_title']; ?>" src="<?php echo $this->_var['site_logo']; ?>" width="80px"/></a></h1> </div> 
                    <div id="fake-search"> 
                        <form method="GET" action="<?php echo url('app=search'); ?>">
                            <div class="fakeInput">
                                <input class="text" name="keyword" style="color:silver"/>
                                <input type="submit" value="" class="search-button" />
                                <input type="hidden" name="app" value="search" />
                                <input type="hidden" name="act" value="index" />
                            </div> 
                        </form>
                    </div> 
                </div> 
            </header>

            <div class="region entry-list"> 
                <a href="<?php echo url('app=category'); ?>"><img alt="商品类目" height="29px" src="<?php echo $this->res_base . "/" . 'images/ico1.png'; ?>" width="29px"/><br/><span>商品类目</span></a><span class="entry-decollator"></span>
                <a href="<?php echo url('app=category&act=store'); ?>"><img alt="店铺类目" height="30px" src="<?php echo $this->res_base . "/" . 'images/ico2.png'; ?>" width="30px"/><br/> <span>店铺类目</span> </a><span class="entry-decollator"></span>   
                <a href="<?php echo url('app=member'); ?>"><img alt="个人中心" height="31px" src="<?php echo $this->res_base . "/" . 'images/ico3.png'; ?>" width="31px"/><br/> <span>个人中心</span> </a><span class="entry-decollator"></span>
                <a href="<?php echo url('app=cart'); ?>"><img alt="购物车" height="31px" src="<?php echo $this->res_base . "/" . 'images/ico4.png'; ?>" width="37px"/><br/><span>购物车</span></a>

                     
                <br/>
                <a href="<?php echo url('app=buyer_order'); ?>"><img alt="订单管理" height="32px" src="<?php echo $this->res_base . "/" . 'images/ico5.png'; ?>" width="22px"/><br/><span>订单管理</span></a><span class="entry-decollator"></span>
                <a href="#"><img alt="活动促销" height="19px" src="<?php echo $this->res_base . "/" . 'images/ico6.png'; ?>" style="margin-top: 8px;margin-bottom: 8px;" width="44px"/><br/><span>活动促销</span></a><span class="entry-decollator"></span>     
                <a href="<?php echo url('app=my_favorite'); ?>"><img alt="收藏夹" height="30px" src="<?php echo $this->res_base . "/" . 'images/ico7.png'; ?>" width="34px"/><br/><span>收藏夹</span></a><span class="entry-decollator"></span>
                <a href="http://m.kuaidi100.com/uc/index.html"><img alt="查物流" height="28px" src="<?php echo $this->res_base . "/" . 'images/ico8.png'; ?>"  width="34px"/><br/><span>查物流</span></a><span class="entry-decollator"></span>
            </div>

            </div>
            
            <section class="item_show_box1 box1 region">
    <header>
        <span>
            今日团购        </span>
        <a class="ico_04 more">
        </a>
    </header>

         
         <div class="flex flex-f-row">                
                         
                         
                        <?php $_from = $this->_var['groupbuy_list_wap']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');$this->_foreach['fe_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_group']['total'] > 0):
    foreach ($_from AS $this->_var['group']):
        $this->_foreach['fe_group']['iteration']++;
?>
                         <div class="goodsItem flex_in">
            <a href="<?php echo url('app=groupbuy&id=' . $this->_var['group']['group_id']. ''); ?>">
                <img src="<?php if ($this->_var['group']['group_image']): ?><?php echo $this->_var['group']['group_image']; ?><?php else: ?><?php echo $this->_var['group']['default_image']; ?><?php endif; ?>" alt="<?php echo htmlspecialchars($this->_var['group']['group_name']); ?>" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"><?php echo price_format($this->_var['group']['group_price']); ?></span> &nbsp;<del>¥<?php echo $this->_var['group']['price']; ?></del></span> 
                        <br><?php echo sub_str(htmlspecialchars($this->_var['group']['group_name']),18); ?></div>
        </div>
        
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </div>
    
</section>
            

<div class="blank2"></div>

<section class="item_show_box1 box1 region">
    <header>
        <span>
            最新商品        </span>
        <a class="ico_04 more">
        </a>
    </header>

         
         <div class="flex flex-f-row">                
                         
                         
                        <?php $_from = $this->_var['img_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['fe_groupbuy'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_groupbuy']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['fe_groupbuy']['iteration']++;
?>
                         <div class="goodsItem flex_in">
            <a href="<?php echo url('app=goods&id=' . $this->_var['goods']['goods_id']. ''); ?>">
                <img src="<?php echo $this->_var['goods']['default_image']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>">
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> <?php echo price_format($this->_var['goods']['price']); ?> </span> 
                        <br><?php echo sub_str($this->_var['goods']['goods_name'],18); ?> </div>
        </div>
        
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </div>
    
</section>

<div class="blank2"></div>

<section class="item_show_box1 box1 region">
    <header>
        <span>
            热卖商品        </span>
        <a class="ico_04 more">
        </a>
    </header>

         
         <div class="flex flex-f-row">                
                         
                         
                        <?php $_from = $this->_var['img_goods_list1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['fe_groupbuy'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_groupbuy']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['fe_groupbuy']['iteration']++;
?>
                         <div class="goodsItem flex_in">
            <a href="<?php echo url('app=goods&id=' . $this->_var['goods']['goods_id']. ''); ?>">
                <img src="<?php echo $this->_var['goods']['default_image']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>">
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> <?php echo price_format($this->_var['goods']['price']); ?> </span> 
                        <br><?php echo sub_str($this->_var['goods']['goods_name'],23); ?> </div>
        </div>
        
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </div>
    
</section>
            <div class="grid-c module mr-t20"> 
                <a href="#"><img height="75px" src="<?php echo $this->res_base . "/" . 'images/index/module.jpg'; ?>" width="300px"/></a> 
            </div>

        </div>
<?php echo $this->fetch('footer.html'); ?>
    </body>
</html>