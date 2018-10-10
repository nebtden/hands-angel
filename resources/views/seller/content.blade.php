@extends('seller.index')

@section('content')
    <section class="content-header">
        <h1>
            {{ $header  }}
            <small>{{ $description }}</small>
        </h1>

    </section>

    <section class="content">

        @include('seller.partials.error')
        @include('seller.partials.success')
        @include('seller.partials.exception')
        @include('seller.partials.toastr')

        {!! $content !!}

    </section>
@endsection