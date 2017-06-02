<div id="menu">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"> Apie <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Bilietai</a></li>
                    <li><a href="#">Vieta ir laikas</a></li>
                    <li><a href="#">Remėjai</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Virtualūs kambariai <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">The Lab</a></li>
                            <li><a href="#">Fruit nija</a></li>
                            <li><a href="#">KTU parasparnis</a></li>
                            <li><a href="#">Space pirate trainer</a></li>
                            <li><a href="#">Samsung irklavimas</a></li>
                        </ul>
                    </li>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


</div>
{{--@foreach($list as $key => $record  )--}}

    {{--<div class="col-md-2 dropdown">--}}
        {{--<ul>--}}
            {{--@if (isset($record['sub_category']) && sizeof($record['sub_category']) > 0)--}}
                {{--{{dd($record['sub_category'])}}--}}
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

