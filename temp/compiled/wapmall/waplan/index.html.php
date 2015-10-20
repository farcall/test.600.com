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
        <script type="text/javascript" src="index.php?act=jslang"></script>
        <script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'jquery.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'ecmall.js'; ?>" charset="utf-8"></script>
        <?php echo $this->_var['_head_tags']; ?>
    </head>
    <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/kissy/build/kissy.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/kissy/build/switchable/switchable-pkg.js'; ?>"></script>

    <body id="log-reg" class="gray">
	<div class="top"> <h1> <a href="<?php echo url('app=default'); ?>"><img src="<?php echo $this->res_base . "/" . 'images/logo.png'; ?>" alt="<?php echo $this->_var['site_title']; ?>" width="318px" height="32" border="0"/></a></h1> 
	</div>
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
                <p>
                  <script>
                    KISSY.use('switchable', function(S) {
                        S.Slide('#J_m-slider', {
                            effect: 'scrollx',
                            easing: 'easeOutStrong'
                        });
                    });
                </script>
                </p>
                <p>&nbsp;      </p>
          </div>
          <header class="region"> 
                <div class="content"> 
                    
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
              <a href="<?php echo url('app=category'); ?>"><img alt="商品类目" height="30" src="<?php echo $this->res_base . "/" . 'images/catimg/band.png'; ?>" width="30"/><br/>
              <span>商品类目</span></a><span class="entry-decollator"></span>
              <a href="<?php echo url('app=category&act=store'); ?>"><img alt="店铺类目" height="30px" src="<?php echo $this->res_base . "/" . 'images/catimg/categorys.png'; ?>" width="30px"/><br/> 
              <span>店铺类目</span> </a><span class="entry-decollator"></span>   
                <a href="<?php echo url('app=member'); ?>"><img alt="个人中心" height="30" src="<?php echo $this->res_base . "/" . 'images/catimg/myhome.png'; ?>" width="30"/><br/> 
                <span>个人中心</span> </a><span class="entry-decollator"></span>
                <a href="<?php echo url('app=cart'); ?>"><img alt="购物车" height="30" src="<?php echo $this->res_base . "/" . 'images/catimg/movie2.png'; ?>" width="30"/><br/>
                <span>购物车</span></a>

                     
                <br/>
                <a href="<?php echo url('app=buyer_order'); ?>"><img alt="订单管理" height="30" src="<?php echo $this->res_base . "/" . 'images/catimg/recharge.png'; ?>" width="30"/><br/>
              <span>订单管理</span></a><span class="entry-decollator"></span>
                <a href="#"><img alt="活动促销" height="30" src="<?php echo $this->res_base . "/" . 'images/catimg/tuan.png'; ?>" width="30"/><br/>
                <span>活动促销</span></a><span class="entry-decollator"></span>     
                <a href="<?php echo url('app=my_favorite'); ?>"><img alt="收藏夹" height="30" src="<?php echo $this->res_base . "/" . 'images/catimg/collect.png'; ?>" width="30"/><br/>
                <span>收藏夹</span></a><span class="entry-decollator"></span>
                <a href="http://m.kuaidi100.com/uc/index.html"><img alt="查物流" height="30" src="<?php echo $this->res_base . "/" . 'images/catimg/jipiao.png'; ?>"  width="30"/><br/>
                <span>查物流</span></a><span class="entry-decollator"></span>
    </div>

            <div class="region miao">   
                <div class="miao-title"><span>热门产品</span><span>正在疯抢，售完即止</span></div>
                <div class="miao-item">
                    <a href="#">
                        <img src="<?php echo $this->res_base . "/" . 'images/index/miao1.jpg'; ?>"/>
                        <p class="miao-item-title">牛皮情侣钱包</p>
                        <p><span class="miao-item-newprice">￥49</span><del class="miao-item-oldprice">256</del></p>
                    </a>
                    <a href="#">
                        <img src="<?php echo $this->res_base . "/" . 'images/index/miao2.jpg'; ?>"/>
                        <p class="miao-item-title">沐鱼女士小马包</p>
                        <p><span class="miao-item-newprice">￥99</span><del class="miao-item-oldprice">350</del></p>
                    </a>
                    <a href="#">
                        <img src="<?php echo $this->res_base . "/" . 'images/index/miao3.jpg'; ?>"/>
                        <p class="miao-item-title">七匹狼男士内裤</p>
                        <p><span class="miao-item-newprice">￥32</span><del class="miao-item-oldprice">128</del></p>
                    </a>
                </div>
            </div>

            <div class="region focus">
                <a class="tag11p" href="#">
                    <img src="<?php echo $this->res_base . "/" . 'images/index/focus1.jpg'; ?>"/>
                    <span class="focus-name">喵鲜生</span><br/>
                    <span class="focus-info">进口食材<br>全场包邮</span>
                </a>   
                <a class="tag11p" href="#">
                    <img src="<?php echo $this->res_base . "/" . 'images/index/focus2.jpg'; ?>"/>
                    <span class="focus-name">大牌女装</span><br/>
                    <span class="focus-info">女装频道<br> 新品首发</span>
                </a>
                <a class="tag11p" href="#">
                    <img src="<?php echo $this->res_base . "/" . 'images/index/focus3.jpg'; ?>"/>
                    <span class="focus-name">一周新发现</span><br/>
                    <span class="focus-info">情人节约会<br>搭配、送礼指南！</span>
                </a>
                <a class="tag11p" href="#">
                    <img src="<?php echo $this->res_base . "/" . 'images/index/focus4.jpg'; ?>"/>
                    <span class="focus-name">天猫好券</span><br/>
                    <span class="focus-info">精品优惠券<br>限量兑换</span>
                </a>   
                <a class="tag11p" href="#">
                    <img src="<?php echo $this->res_base . "/" . 'images/index/focus5.jpg'; ?>"/>
                    <span class="focus-name">品牌街</span><br/>
                    <span class="focus-info">发现。品牌<br>汇聚国际大牌</span>
                </a>
                <a class="tag11p" href="#">
                    <img src="<?php echo $this->res_base . "/" . 'images/index/focus6.jpg'; ?>"/>
                    <span class="focus-name">周边游</span><br/>
                    <span class="focus-info">最IN周边游，5折白菜价</span>
                </a>  
            </div>

            <div class="region storey-tags">
                <a href="#">led射灯</a><a href="#">卫浴</a><a href="#">床</a><a href="#">沙发</a><a href="#">柜子</a><a href="#">四件套</a><a href="#">秋冬被</a><a href="#">灯具</a>
            </div>


            <div class="grid-c module mr-t20"> 
                <a href="#"><img height="75px" src="<?php echo $this->res_base . "/" . 'images/index/module.jpg'; ?>" width="300px"/></a> 
            </div>


            <?php echo $this->fetch('footer.html'); ?>




        </div>
    </body>
</html>