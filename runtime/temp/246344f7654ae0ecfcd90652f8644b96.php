<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:39:"template/mytheme/html/comment/ajax.html";i:1653471608;}*/ ?>
    <!--评论开始-->
    <form class="comment_form clearfix">
        <input type="hidden" name="comment_pid" value="0">
        <!--评论框-->
        <div class="myui-comment__form col-pd clearfix">       	
            <textarea class="comment_data form-control" name="comment_content" rows="5" placeholder="请输入评论内容..."></textarea>
            <div class="pt20 clearfix">
            	<span class="gbook_remaining text-muted hidden-xs">最多可以输入200字符</span>
            	<div class="pull-right">
	                <?php if($comment['verify'] == 1): ?>
	                <img id="verify_img" src="<?php echo url('verify/index'); ?>" onClick="this.src=this.src+'?'"  alt="单击刷新" height="30" />	                
	                &nbsp;&nbsp;<input class="form-control verify" type="text" id="verify" name="verify" placeholder="验证码" />
	                <?php endif; ?>
	               <a href="javascript:;" class="my_comment_submit btn btn-primary pull-right">确认发布</a>
	            </div>
            </div>	            
        </div>
    </form>
    <?php $__TAG__ = '{"num":"'.$mytheme['detail']['comment_num'].'","paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Comment")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; if(!(empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty()))): ?>
	<div class="col-xs-1">
    	<div class="myui-panel__head active clearfix">
    		<span class="more pull-right">共“<span class="text-red" id="item_count"><?php echo intval($__PAGING__['record_total']); ?></span>”条评论</span>
			<h3 class="title">
				用户评论
			</h3>						
		</div>
        <?php if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ?>
       	<div class="styu-message__list comment top-line-dot clearfix">
			<div class="avatar">
				<a href="javascript:;"><img class="face" src="/static/images/home/duface.png" width="45" height="45" /></a> 
			</div>
			<div class="data">
				<span class="text-muted pull-right"><?php echo date('Y-m-d H:i:s',$vo['comment_time']); ?></span>
				<h5 class="name"><a class="font-bold" href="javascript:;"><?php echo $vo['comment_name']; ?></a></h5>
				<p class="content"><?php echo mac_em_replace($vo['comment_content']); ?></p>
				<div class="foot clearfix">
	            	<a class="my_comment_report pull-right text-muted" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;">举报 <i class="fa fa-exclamation-circle"></i></a>
	                <a class="digg_link text-muted" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;">
	                    <i class="fa fa-thumbs-up"></i>
	                    <span class="digg_num text-red"><?php echo $vo['comment_up']; ?></span>
	                </a>
	                <span class="split-line"></span>
	                <a class="digg_link text-muted" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;">
	                    <i class="fa fa-thumbs-down"></i>
	                    <span class="digg_num text-red"><?php echo $vo['comment_down']; ?></span>
	                </a>
	                <span class="split-line"></span>
	                <a class="my_comment_reply text-muted" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;"> <i class="fa fa-commenting"></i> 回复</a>              
	            </div>
	            <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): if( count($vo['sub'])==0 ) : echo "" ;else: foreach($vo['sub'] as $key=>$child): ?>
		        <div class="styu-message__list child top-line-dot clearfix">
					<div class="avatar">
						<a href="javascript:;"><img class="face" src="/static/images/home/duface.png" width="45" height="45" /></a> 
					</div>
					<div class="data">
						<span class="text-muted pull-right"><?php echo date('Y-m-d H:i:s',$child['comment_time']); ?></span>
						<h5 class="name"><a class="font-bold" href="javascript:;"><?php echo $child['comment_name']; ?></a></h5>
						<p class="content"><?php echo mac_em_replace($child['comment_content']); ?></p>
						<div class="foot clearfix">
		                	<a class="my_comment_report pull-right text-muted" data-id="<?php echo $child['comment_id']; ?>" href="javascript:;">举报 <i class="fa fa-exclamation-circle"></i></a>
		                    <a class="digg_link text-muted" data-id="<?php echo $child['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;">
		                        <i class="fa fa-thumbs-up"></i>
		                        <span class="digg_num text-red"><?php echo $child['comment_up']; ?></span>
		                    </a>
		                    <span class="split-line"></span>
		                    <a class="digg_link text-muted" data-id="<?php echo $child['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;">
		                        <i class="fa fa-thumbs-down"></i>
		                        <span class="digg_num text-red"><?php echo $child['comment_down']; ?></span>
		                    </a>                   
		                </div>
					</div>
				</div> 
		        <?php endforeach; endif; else: echo "" ;endif; ?>   
			</div>
		</div>                        
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--评论结束-->
    
    <?php if($__PAGING__['page_total'] > 1): ?>
	<ul class="myui-page text-center clearfix">
		<li><a class="btn btn-default" href="javascript:void(0);" onclick="Myui.Comment.Show(1)">首页</a></li>
		<li><a class="btn btn-default" href="javascript:void(0);" onclick="Myui.Comment.Show('<?php echo $__PAGING__['page_prev']; ?>')">上一页</a></li>							
		<?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): ?>
		<li class="hidden-xs"><a class="btn<?php if($__PAGING__['page_current'] == $num): ?> btn-warm<?php else: ?> btn-default<?php endif; ?>" href="javascript:void(0)" onclick="Myui.Comment.Show('<?php echo $num; ?>')"><?php echo $num; ?></a></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<li class="visible-xs"><a  class="btn btn-warm"><?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?></a></li>
		<li><a class="btn btn-default" href="javascript:void(0)" onclick="Myui.Comment.Show('<?php echo $__PAGING__['page_next']; ?>')">下一页</a></li>
		<li><a class="btn btn-default" href="javascript:void(0)" onclick="Myui.Comment.Show('<?php echo $__PAGING__['page_total']; ?>')">尾页</a></li>							
	</ul>
	<?php endif; endif; ?>
	
	
	