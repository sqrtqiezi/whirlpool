@extends('admin.layout.app')

@include('admin.components.alert')

@include('admin.components.image-upload')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box">
			{{--<div class="box-header with-border">--}}
			{{--<h3 class="box-title">Horizontal Form</h3>--}}
			{{--</div>--}}
			<!-- /.box-header -->

				<form class="form-horizontal" action="{!! route('panel.terminal.store') !!}"
				      method="post" enctype="multipart/form-data">
					@include('admin.terminal.form')
				</form>

			</div>
		</div>
	</div>
@endsection
