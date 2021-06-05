
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 mx-auto">
            <h4 class="text-uppercase"><strong>{{__($title)}}</strong></h4>
            <form class="shadow-sm rounded py-3 px-3 form-create" action="{{route('permissions.update',$permission->id)}} " method="POST">
                @method('PUT')
                <input type="hidden" name="id" value="{{$permission->id}}">
                @include('master.permissions.partials.form')
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>

    </script>

@stop


