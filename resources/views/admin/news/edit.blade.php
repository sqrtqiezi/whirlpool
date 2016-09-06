@extends('admin.layout.app')

@include('admin.components.alert')

@include('admin.components.image-upload')

@section('header')
	@include('UEditor::head')
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box">
			{{--<div class="box-header with-border">--}}
			{{--<h3 class="box-title">Horizontal Form</h3>--}}
			{{--</div>--}}
			<!-- /.box-header -->

				<form class="form-horizontal" action="{!! route('panel.news.update', $news->id) !!}"
				      method="post" enctype="multipart/form-data">
					<input type="hidden" name="_method" value="patch">
					@include('admin.news.form')
				</form>

			</div>
		</div>
	</div>
@endsection
