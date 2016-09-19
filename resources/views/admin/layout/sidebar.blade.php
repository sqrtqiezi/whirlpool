<ul class="sidebar-menu">
	<li class="header">内容管理</li>
	<!-- Optionally, you can add icons to the links -->
	<li class="{!! is_active('panel.news.') ? 'active' : null !!}"><a href="{!! route('panel.news.index') !!}"><i class="fa fa-newspaper-o"></i> <span>新闻中心</span></a></li>
	<li class="{!! is_active('panel.life.') ? 'active' : null !!}"><a href="{!! route('panel.life.index') !!}"><i class="fa fa-birthday-cake"></i> <span>“会”生活</span></a></li>
	<li class="{!! is_active('panel.terminal.') ? 'active' : null !!}"><a href="{!! route('panel.terminal.index') !!}"><i class="fa fa-shopping-cart"></i> <span>终端形象</span></a></li>
	<li class="{!! is_active('panel.project') ? 'active' : null !!}"><a href="{!! route('panel.project.index') !!}"><i class="fa fa-building"></i> <span>工程案例</span></a></li>
	<li class="{!! is_active('panel.product') ? 'active' : null !!}"><a href="{!! route('panel.product.index') !!}"><i class="fa fa-television"></i> <span>厨房电器</span></a></li>
	<li class="{!! is_active('panel.site-config.') ? 'active' : null !!}"><a href="{!! route('panel.site-config.index') !!}"><i class="fa fa-cog"></i> <span>基本信息</span></a></li>
</ul>
