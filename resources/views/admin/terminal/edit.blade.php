@extends('admin.layout.app')

@include('admin.components.image-upload')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<!-- /.box-header -->

				<form class="form-horizontal"
				      action="{!! route('panel.terminal.update', $terminal->id) !!}"
				      method="post" enctype="multipart/form-data">
					<input type="hidden" name="_method" value="patch">
					@include('admin.terminal.form')
				</form>

			</div>
		</div>
	</div>
@endsection
