@extends('layouts.admin')

@section('content')

@include('admin.partials.notification')
    <table class="table table-hover">
        <thead>
          @include('admin.plan.columnsHeader')
        </thead>
        <tbody>
            @if ($plans && count($plans) > 0)


                @foreach ($plans as $item)

                    @include('admin.plan.columns',$item)

                @endforeach

            @else
            @include('admin.plan.Column_noItem')
                @endif

        </tbody>
    </table>

@endsection
