<div id="menu">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation"><a href="#">Home</a></li>
                            <li role="presentation"><a href="#">Profile</a></li>
                            <li role="presentation"><a href="#">Messages</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ trans('app.language') }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation"><a href="#">LT</a></li>
                            <li role="presentation"><a href="#">EN</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>




{{--<div id="menu">--}}
    {{--<ul class="nav nav-pills">--}}
        {{--<li role="presentation" class="active"><a href="#">Home</a></li>--}}
        {{--<li role="presentation"><a href="#">Profile</a></li>--}}
        {{--<li role="presentation"><a href="#">Messages</a></li>--}}

        {{--<li role="presentation" class="dropdown">--}}
            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
                {{--Dropdown <span class="caret"></span>--}}
            {{--</a>--}}
            {{--<ul class="dropdown-menu">--}}
                {{--<li role="presentation"><a href="#">Home</a></li>--}}
                {{--<li role="presentation"><a href="#">Profile</a></li>--}}
                {{--<li role="presentation"><a href="#">Messages</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</div>--}}

{{--@foreach($list as $key => $record  )--}}

    {{--<div class="nav nav-tabs">--}}
        {{--<ul>--}}
        {{--@if (isset($record['sub_category']) && sizeof($record['sub_category']) > 0)--}}

                {{--<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"--}}
                        {{--aria-haspopup="true" aria-expanded="true">--}}
                    {{--<li><a href=" {{ $record['url'] }}"> {{$record['name']}} </a></li>--}}
                    {{--<span class="caret"></span>--}}
                {{--</button>--}}
                {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">--}}
                    {{--@foreach($record['sub_category'] as $key => $dropDown)--}}
                        {{--<li><a href=" {{ $dropDown['url'] }}"> {{$dropDown['name']}} </a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}

            {{--@else--}}
                {{--<a href=" {{ $record['url'] }}"> {{$record['name']}} </a>--}}
            {{--@endif--}}

        {{--</ul>--}}

    {{--</div>--}}
{{--@endforeach--}}