@extends('admin.layouts.master')
@section('title','dashboard')

@section('content')
<div class="row g-3 mb-3">
  <div class="col-xxl-6 col-lg-12">
    @component('admin.layouts.components.cardBackgroundImg',['title'=>'Welcome to '.auth()->user()->name,'subTitle'=>'Welcome','image'=>'1'])
    @endcomponent
  </div>
</div>


 
@endsection