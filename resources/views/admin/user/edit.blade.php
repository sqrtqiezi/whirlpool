@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form class="form-horizontal" action="{!! route('panel.user.update', $user) !!}"
                      method="post">
                    <input type="hidden" name="_method" value="patch">
                    @include('admin.user.form')
                </form>

            </div>
        </div>
    </div>
@endsection

@section('script-in-footer')
    @parent
    <script>
        $(document).ready(function () {
          $('.js-init-password').click(function (event) {
            event.preventDefault();

            $('form').eq(0)
              .attr('action', '{{ route('panel.user.init-password', $user) }}')
              .submit()
          })
        })
    </script>
@endsection