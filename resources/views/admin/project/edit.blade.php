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
                <form class="form-horizontal" action="{!! route('panel.project.update', $project->id) !!}"
                      method="post">
                    <input type="hidden" name="_method" value="patch">
                    @include('admin.project.form')
                </form>
            </div>
        </div>
    </div>
@endsection
