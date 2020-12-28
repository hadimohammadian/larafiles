@extends('layouts.admin')

@section('content')

    <table class="table table-hover">
        <thead>
          @include('admin.plan.columnsHeader')
        </thead>
        <tbody>
            @if ($plans && count($files) > 0)


                @foreach ($plans as $item)

                    @include('admin.plan.columns',$item)

                @endforeach
            @endif
        </tbody>
    </table>

@endsection
