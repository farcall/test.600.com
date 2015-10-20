
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <?php echo $this->_var['page_seo']; ?>
        <meta name="viewport" content=" initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <link type="text/css" rel="stylesheet" href="<?php echo $this->res_base . "/" . 'css/css.css'; ?>">
        <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/jquery-1.8.0.min.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/jquery.flexslider.js'; ?>" charset="utf-8"></script>
        <script>
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
                $(".flex-direction-nav,.flex-control-nav").remove();
            });
        </script>
    </head>
    <body>
        <?php echo $this->fetch('header.html'); ?>

        <div class="lay_page ">
            <div class="fn_indexad">
                
                <section class="sliders">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php $_from = $this->_var['goods_images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_iamge');if (count($_from)):
    foreach ($_from AS $this->_var['goods_iamge']):
?>
                            <li>
                                <img  src="<?php echo $this->_var['goods_iamge']['image_url']; ?>"/>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                    </div>
                </section>
                
                <div class="indexad_banner animate">
                    <ul class="banner_list">
                        <?php if ($this->_var['store']['radio_new'] == '1'): ?>
                        <li class="list_item">
                            <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=add_time">
                                最新商品
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if ($this->_var['store']['radio_recommend'] == '1'): ?>
                        <li class="list_item">
                            <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&recommended=1">
                                推荐商品
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if ($this->_var['store']['radio_hot'] == '1'): ?>
                        <li class="list_item">
                            <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=views">
                                热门商品
                            </a>
                        </li>
                        <?php endif; ?>
                            <?php $_from = $this->_var['store']['store_gcates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['gcategory']):
?>
                            <li class="list_item">
                        <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['gcategory']['id']. ''); ?>">
                        <?php echo htmlspecialchars($this->_var['gcategory']['value']); ?>
                        </a>
                        </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                </div>
            </div>
            
            <?php echo $this->fetch('footer.html'); ?>

        </div>
    </body>
    <script>
        $(function() {
            publicmain();
        });

        $(window).resize(function() {
            publicmain();
        });

        function publicmain() {
            var h = document.documentElement.clientHeight;
            var w = document.documentElement.clientWidth;
            $('.slides li,.slides li img').css({'width': w, 'height': h});
        }
    </script>
</html>