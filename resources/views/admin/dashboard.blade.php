@extends('layouts.admin')
@section('title')
    الرئيسية
@endsection

@section('contentHeader')
    الرئيسية
@endsection

@section('contentHeaderLink')
    <a href="{{route('admin.dashboard')}}">الرئيسية</a>
@endsection

@section('contentHeaderActive')
    عرض
@endsection

@section('content')
    <div class="row" style="background-image: url({{ asset('admin/imgs/dash.jpg') }}) ;background-size:cover;background-repeate:ni-repeate; min-height:700px;"></div>
@endsection
