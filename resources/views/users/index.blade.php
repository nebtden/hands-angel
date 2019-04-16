@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <section class="main-content page-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="listing-wrap">
                        <div class="content-listing">
                            <p><span></span>Found Listings</p>
                            <div class="list-tab">
                                <div class="flat-tabs" data-effect="fadeIn">
                                    <div class="content-tab">
                                        <div class="content-inner active">
                                            @foreach($users as $user)
                                                <div class="menu-food clearfix">
                                                    <div class="featured-food float-left">
                                                    <span class="effect">
                                                        <img src="{{$user->head_img}}" alt="" />
                                                    </span>
                                                    </div>
                                                    <div class="content-food float-left">
                                                        <h5><a href="/users/{{ $user->id }}">{{$user->name}}</a> </h5>
                                                        <p>{{$user->introduction}}
                                                        </p>
                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('users.right')
            </div>
        </div>
    </section> @endsection
