@extends('layouts.app')
@section('title')
Organizations
@stop
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

@section('content')
@include('layouts.filter_organization')
@include('layouts.sidebar_organization')
<div class="inner_services">
    <div id="content" class="container">
        <div class="col-sm-12 p-0 card-columns">
            @foreach($organizations as $organization)
            <div class="card">
                <div class="card-block">
                    {{-- <img src="/frontend/assets/images/logo_dummy.png" alt="" title="" class="org_logo_img"> --}}
                    <h4 class="card-title">
                        <a href="/organizations/{{$organization->organization_recordid}}" class="notranslate title_org">{{$organization->organization_name}}</a>
                    </h4>
                    <p class="card-text" style="font-weight:400;">
                        {!! Str::limit($organization->organization_description, 200) !!}
                    </p>
                    <h4><span>Number of Services:
                        @php
                            if(count($organization->services) == 0){
                                $organization_services = $organization->getServices->count();
                            }
                        @endphp
                        @if(isset($organization->services) && count($organization->services) != 0)
                            {{$organization->services->count()}}
                        @elseif(count($organization->services) == 0)
                            {{ $organization->getServices->count() }}
                        @else
                            0
                        @endif
                        </span>
                        <a href="/organizations/{{$organization->organization_recordid}}">
                            <img src="/frontend/assets/images/arrow_right.png" alt="" title="" class="float-right">
                        </a>
                    </h4>
                    @auth
                        <h4> <span>Last Updated: </span> {{ $organization->updated_at }}</h4>
                    @endauth
                </div>
            </div>
            @endforeach
        </div>
        <div class="example col-md-12">
            <div class="row">
                <div class="col-md-6 pagination_text">
                    <p>Showing {{ $organizations->currentPage() * Request::get('paginate') - intval(Request::get('paginate') - 1)  }}-{{ $organizations->currentPage() * Request::get('paginate')  }} of {{ $organizations->total() }} items  <span>Show {{ Request::get('paginate') }} per page</span></p>
                </div>
                <div class="col-md-6 text-right">
                    {{ $organizations->appends(\Request::except('page'))->render() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


