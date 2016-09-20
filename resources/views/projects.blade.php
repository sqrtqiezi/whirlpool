@extends('layouts.base')

@section('content')
    <div class="content content-projects">
        @include('layouts/mobile_top')
        <div class="mobile-detail only-mobile">
            <section class="title">
                <span class="main-title">engineering case</span>
                <span class="sub-title">工程案例</span>
            </section>
        </div>

        <div class="grid-cell grid-cell-no-1 only-desktop"></div>
        <div class="grid-cell grid-cell-no-2 only-desktop">
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </div>
        <div class="grid-cell grid-cell-no-3 only-desktop"></div>
        <div class="grid-cell grid-cell-no-4 only-desktop">
        </div>
        <div class="grid-cell grid-cell-no-5 only-desktop">
            <a data-pjax href="{{ route('home') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-6">
            <div class="scrollbar-macosx">
                <div class="project-wrapper">
                    @foreach($projectsList as $project)
                        <div class="project-item">
                            <img src="/{!! $project->thumbnail !!}" alt="">
                            <section class="project-content">
                                <span class="title">{!! $project->title !!}</span>
                                <span class="content">{!! $project->description !!}</span>
                            </section>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-16 only-desktop">
            <a href="javascript:;" class="nav-page-prev"></a>
        </div>
        <div class="grid-cell grid-cell-no-17 only-desktop"></div>
        <div class="grid-cell grid-cell-no-18 only-desktop"></div>
        <div class="grid-cell grid-cell-no-19 only-desktop"></div>
        <div class="grid-cell grid-cell-no-20 only-desktop">
            <a href="javascript:;" class="nav-page-next"></a>
        </div>
        @include('layouts/mobile_footer')
    </div>
@endsection
