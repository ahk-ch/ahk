@extends('ahk.layouts.master')
@section('title', "{$workGroup->name} - {$industry->name}")
@section('inline-css')
    <style>
        {!! File::get(public_path(elixir("css/industries/work-groups.min.css"))) !!}
    </style>
    <style type="text/css">
        .service-block-v5 {
            background: url('/build/img/breadcrumbs/img3.jpg') no-repeat;
            background-size: cover;
            background-position: center center;
        }
    </style>
@endsection
@section('header_links')
    @include('ahk._partials.header_industries_links')
@endsection
@section('content')
    <div class="service-block-v5 img-v1">
        <div class="container">
            <div class="row equal-height-columns">
                <a href="#protocols">
                    <div class="col-md-3 service-inner equal-height-column">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-diamond"></i>
                        <span>Protocols</span>
                    </div>
                </a>

                <a href="#ideas">
                    <div class="col-md-3 service-inner equal-height-column service-border">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-rocket"></i>
                        <span>Ideas</span>
                    </div>
                </a>

                <a href="#decisions">
                    <div class="col-md-3 service-inner equal-height-column service-border">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-rocket"></i>
                        <span>Decisions</span>
                    </div>
                </a>

                <a href="#events">
                    <div class="col-md-3 service-inner equal-height-column">
                        <i class="icon-custom icon-md rounded-x icon-bg-u icon-support"></i>
                        <span>Events</span>
                    </div>
                </a>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>

    <div class="container content-sm">
        <div class="text-center margin-bottom-50">
            <h2 class="title-v2 title-center">POPULAR NEWS</h2>
            <p class="space-lg-hor">Stay up to date with the most popular internal news for your industry sector.</p>
        </div>

        <div class="row news-v2">
            @foreach($articles as $article)
                <div class="col-md-4 md-margin-bottom-30">
                    <a href="#">
                        <div class="news-v2-badge">
                            <img class="img-responsive"
                                 src="{!! route('files.render', ['path' => $article->thumbnail->path]) !!}"
                                 alt="{{ $article->title }} Logo">
                            <p>
                                <span>{!! $article->created_at->format('d') !!}</span>
                                <small>{!! $article->created_at->format('M') !!}</small>
                            </p>
                        </div>
                        <div class="news-v2-desc bg-color-light">
                            <h3>{{ $article->title }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container content-sm">
        <div class="text-center margin-bottom-50">
            <h2 class="title-v2 title-center">PROTOCOLS</h2>
            <p class="space-lg-hor">Call to action (download pdf?)</p>
        </div>
        <!--Basic Table-->
        <div class="panel panel-green margin-bottom-40">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th class="hidden-sm">Last Name</th>
                    <th>Username</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td class="hidden-sm">Otto</td>
                    <td>@mdo</td>
                    <td><span class="label label-warning">Expiring</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td class="hidden-sm">Thornton</td>
                    <td>@fat</td>
                    <td><span class="label label-success">Success</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td class="hidden-sm">the Bird</td>
                    <td>@twitter</td>
                    <td><span class="label label-danger">Error!</span></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>htmlstream</td>
                    <td class="hidden-sm">Web Design</td>
                    <td>@htmlstream</td>
                    <td><span class="label label-info">Pending..</span></td>
                </tr>
                </tbody>
            </table>
        </div>
        <!--End Basic Table-->

        <div class="margin-bottom-40"></div>

    </div>


@endsection
