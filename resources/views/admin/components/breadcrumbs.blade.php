@if ($breadcrumbs)
	<ol class="breadcrumb" class="pull-left">
		<i class="fa fa-dashboard" style="margin-right: 5px"></i>
		@foreach ($breadcrumbs as $breadcrumb)
			@if ($breadcrumb->url && !$breadcrumb->last)
				<li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
			@else
				<li class="active">{{ $breadcrumb->title }}</li>
			@endif
		@endforeach
	</ol>
@endif
<div class="clearfix"></div>
