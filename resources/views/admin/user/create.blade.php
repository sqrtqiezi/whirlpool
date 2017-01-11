@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form class="form-horizontal" action="{!! route('panel.user.store') !!}"
                      method="post">
                    @include('admin.user.form')
                </form>

            </div>
        </div>
    </div>
@endsection
