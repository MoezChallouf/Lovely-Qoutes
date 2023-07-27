@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-3">
        @include('layout.side-bar')
    </div>
    <div class="col-6">

{{--        -------------------Alert should be here-----------------}}
        @include('shared.success-message')
        @include('shared.submit-idea')

        <hr>

        @foreach($ideas as $idea)
        <div class="mt-3">
            {{--    -----------Card-----------     --}}
            @include('shared.idea-card')

        </div>
        @endforeach
        <div class="mt-3">
            {{$ideas->links()}}
        </div>

    </div>
    @include('layout.right-section')
</div>

@endsection
