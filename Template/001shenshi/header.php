<div class='page-with-sidebar' id='page-container'>
	<div class='navbar navbar-fixed-top'>
		<div class='container-fluid'>
			<div class='navbar-header'>
				<button class='col-xs-2 navbar-toggle collapsed pull-left' onclick="document.querySelector('#sidebar-left').classList.toggle('collapse')"  type='button'>
					<i class="fa fa-bars" style="font-size: 23px;color: #e5bd5b;"></i>
				</button>
				<a class='col-xs-8 navbar-brand' href='/'><img class="logo" src='{cms_logo}' ></a>
			</div>

		</div>
	</div>
	<div class='sidebar collapse navbar-collapse' id='sidebar-left'>
		<form class="sidebar-search full-width" accept-charset="UTF-8" method="get">
            {cms_search}
			<div class='form-group'>
				<input type="text" name="TXT" id="q" value="" class="form-control f-s-12" placeholder="搜索" />
				<button class='btn btn-search' type='submit'>
					<i class='fa fa-search'></i>
				</button>
			</div>
		</form>

		<div class='title'>分类</div>

		<ul class="uk-nav uk-nav-side uk-nav-parent-icon nav" data-uk-nav>
			<li class="uk-parent  uk-active">
				<a href="#" class="icon">
					<i class="icon iconfont icon-shipin"></i>
					<span>视频专区</span>
				</a>
				<ul class="uk-nav-sub">
					{video_menu}
                    <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
					{/video_menu}
				</ul>
			</li>
			<li class="uk-parent">
				<a href="#" class="icon">
					<i class="icon iconfont icon-ruxianai"></i>
					<span>高清专区</span>
				</a>
				<ul class="uk-nav-sub">
					{hd_menu}
					<li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                    {/hd_menu}
				</ul>
			</li>
			<li class="uk-parent ">
				<a href="#" class="icon">
					<i class=" iconfont icon-tubiao1shuxiaoshuo"></i>
					<span>小说专区</span>
				</a>
				<ul class="uk-nav-sub">
					{book_menu}
                    <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                    {/book_menu}
				</ul>
			</li>

			<li class="uk-parent ">
				<a href="#" class="icon">
					<i class="iconfont icon-biyuntao1"></i>
					<span>图片专区</span>
				</a>
				<ul class="uk-nav-sub">
					{pic_menu}
					<li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                    {/pic_menu}
				</ul>
			</li>
            {if $cms_config['live_status']=='1'}
                <li class="uk-parent ">
                    <a href="#" class="icon">
                        <i class=" iconfont icon-maikefeng"></i>
                        <span>直播专区</span>
                    </a>

                    <ul class="uk-nav-sub">
                        {live_menu}
                        <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                        {/live_menu}
                    </ul>
                </li>
             {/if}
			<li class='fb-links'><a  href="{cms_domain1}"><span>发布地址一</span></a></li>
			<li class='fb-links'><a  href="{cms_domain2}"><span>发布地址二</span></a></li>
		</ul>
	</div>
	<div class='content'>
		{cms_banner_a}
		<div class='alert alert-success alert-dismissible' role='alert' style='font-size: 14px'> 公告：
			{cms_notice}
		</div>
	</div>

</div>