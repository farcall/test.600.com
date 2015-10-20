

<div class="lay_header" style="height:45px">
    <div class="lay_toptab mod_tab" id="lay_head">
        <ul>
            <li class="tab_item go_back">
                <a href="javascript:history.back(-1);"> <i class="qb_icon icon_goback"></i></a>
            </li>

            <a class="tab_item tab_item_logo" href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. ''); ?>">
                <img src="<?php echo $this->_var['store']['store_logo']; ?>" >
            </a>
            <a class="tab_item" href="<?php if ($this->_var['visitor']['user_id']): ?><?php echo url('app=buyer_order'); ?><?php else: ?><?php echo url('app=member&act=login&ret_url=' . $this->_var['ret_url']. ''); ?><?php endif; ?>">
                <i class="qb_icon icon_icenter"></i>
            </a>
            <a class="tab_item" href="<?php echo url('app=cart'); ?>">
                <i class="qb_icon icon_cart"></i>
                
                <i class="qb_icon icon_number_bubble qb_none"></i>
            </a>
        </ul>
    </div>
</div>