<!-- Home -->
<li class="dropdown {!! $utilities->activate(['home_path']) !!}">
    <a href="{!! route('home_path') !!}" class="dropdown-toggle disabled" data-toggle="dropdown"> {!! trans('ahk.home') !!} </a>
    <ul class="dropdown-menu">
        <li class="{!! $utilities->activate(['']) !!}">
            <a href="#">{!! trans('ahk.health') !!}</a>
        </li>
        <li class="{!! $utilities->activate(['']) !!}">
            <a href="#">{!! trans('ahk.logistics') !!}</a>
        </li>
        <li class="{!! $utilities->activate(['']) !!}">
            <a href="#">{!! trans('ahk.energy') !!}</a>
        </li>
    </ul>
</li>
<!-- End Home -->

<!-- Pages -->
<li class="dropdown {!! $utilities->activate(['health.events', 'health.news']) !!}">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> {!! trans('ahk.health') !!} </a>
    <ul class="dropdown-menu">
        <li class="{!! $utilities->activate(['health.news']) !!}">
            <a href="{!! route('health.news') !!}">{!! trans('ahk.news') !!}</a>
        </li>
        <li class="{!! $utilities->activate(['health.info']) !!}">
            <a href="{!! route('health.info') !!}">{!! trans('ahk.info') !!}</a>
        </li>
        <li>
            <a href="#">{!! trans('ahk.events') !!}</a>
        </li>
        <li>
            <a href="#">{!! trans('ahk.links') !!}</a>
        </li>
        <li>
            <a href="#">{!! trans('ahk.downloads') !!}</a>
        </li>
    </ul>
</li>
<!-- End Pages -->

<!-- Companies -->
<li class="{!! $utilities->activate(['work_groups']) !!}">
    <a href="{!! route('work_groups') !!}"> {!! trans('ahk.work_groups') !!} </a>
</li>
<!-- End Companies -->

<!-- Companies -->
<li class="{!! $utilities->activate(['companies.index']) !!}">
    <a href="{!! route('companies.index') !!}"> {!! trans('ahk.community') !!} </a>
</li>
<!-- End Companies -->

<!-- About -->
<li class="{!! $utilities->activate(['about_path']) !!}">
    <a href="{!! route('about_path') !!}"> {!! trans('ahk.about') !!} </a>
</li>
<!-- End About -->
