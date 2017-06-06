@extends('frontEnd.core')

@section('content')
        <div id="home">
                <div id="red-flag">
                    <div id="elektro-logo"><p>{{__('app.exhibition')}}</p></div>
                </div>
            <div id="discover-vr">{{__('app.discovervr')}}<p></p></div>
            <div id="title-page-text-block">
                <p>{{__('app.call-to-action-1-line')}}</p>
                <p>{{__('app.call-to-action-2-line')}}</p>
            </div>
        </div>
@endsection