@extends('layouts.admin')

@section('content')

    <table class="table table-hover">
        <thead>
          @include('admin.File.columnsHeader')
        </thead>
        <tbody>
            @if ($files && count($files) > 0)


                @foreach ($files as $item)

                    @include('admin.File.columns',$item)

                @endforeach
            @endif
        </tbody>
    </table>

@endsection
