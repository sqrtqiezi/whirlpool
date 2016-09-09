@extends('admin.layout.app')

@include('admin.components.alert')

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

				<form class="form-horizontal" action="{!! route('panel.product-type.update', $type->id) !!}"
				      method="post">
					<input type="hidden" name="_method" value="patch">
					@include('admin.product.type.form')
				</form>

			</div>
		</div>
	</div>
@endsection
