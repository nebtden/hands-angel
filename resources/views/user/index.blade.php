@extends('layouts.app')

@section('content')
    @include('layouts.banner')

    <section class="flat-row page-user bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="flat-user">
                        @auth
                        <a href="/user/profile" class="edit" title="">Edit Profile
                            <i class="ion-edit"></i>
                        </a>
                        @endauth
                        <div class="avatar">
                            <img src="{{$user->head_img}}" alt="image">
                        </div>
                        <h3 class="name">{{$user->name}}</h3>
                        <ul class="info">

                            <li class="email">
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:{{$user->email}}" title="">{{$user->email}}</a>
                            </li>
                            <li class="face">
                                <i class="fa fa-facebook-square"></i>
                                <a href="{{$user->facebook}}" title="">{{$user->facebook}}</a>
                            </li>
                            <li class="twiter">
                                <i class="fa fa-twitter-square"></i>
                                <a href="{{$user->twitter}}" title="">{{$user->twitter}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="flat-tabs style2" data-effect="fadeIn">

                        <div class="content-tab listing-user">
                            <div class="content-inner active listing-list">
                                @foreach($tasks as $task)
                                <div class="flat-product clearfix">
                                    <div class="featured-product">
                                        <img src="{{$task->cover}}" alt="image" width="290" height="180">

                                    </div>
                                    <div class="rate-product">
                                        <div class="link-review clearfix">
                                            <div class="button-product float-left">
                                                <a href="/tasks?type_id={{ $task->type_id }}">
                                                    {{ $types[$task->type_id] }}
                                                </a>
                                            </div>

                                        </div>
                                        <div class="info-product"><h6 class="title">
                                                <a href="/tasks/{{$task->id}}">{{$task->title}}</a>
                                            </h6>
                                            <p>{{$task->title}}</p>
                                        </div>
                                    </div>
                                    <ul class="wrap-button float-right">
                                        <li>
                                            <button type="button" class="button" onclick="location.href='/task/{{$task->id}}/edit'">
                                                <i class="ion-edit"></i>
                                                <span>Edit</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="button delete"  >
                                                <i class="ion-trash-a"></i>
                                                <span>Delete</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach

                                <div class="blog-pagination style2 text-center">
                                    {{ $tasks->links() }}
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script type="text/javascript">
        $(function(){
            $('.delete').click(function () {
                alert("The paragraph was clicked.");
            });
        });
    </script>
@endsection

