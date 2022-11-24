@extends('layouts.extendsLayout')
@section('header')
    @include('layouts.extendsheader')
@endsection
@section('footer')
    @include('layouts.extendsfooter')
@endsection
@if ($errors->any())
<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Registrasi Pengguna
                </div>
            </div>
        </div>
    </div>
</x-app-layout> -->
<div class="alert alert-success">
    <div class="row form-inline" onclick='$(this).parent().remove();'>
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <span class="label"><strong>x</strong></span>
    </div>
</div>
@endif
@section('content')
<form method="POST" action="{{ url('userStore') }}">
    @csrf
    <div class="row form-group">
        <label class ="form-label">Username*</label>
        <input id="username" name="username" type="text" class="form-control" autocomplete="off" value="
        {{old('username')}}>
    </div>

    <div class="row form-group">
        <label class ="form-label">Nama Lengkap*</label>
        <input id="fullname" name="fullname" type="text" class="form-control" autocomplete="off" value="
        {{old('fullname')}}>
    </div>

    <div class="row form-group">
        <label class ="form-label">Password*</label>
        <input id="password" name="password" type="password" class="form-control" autocomplete="off" >
    </div>

    <div class="row form-group">
        <label class ="form-label">Re-Password*</label>
        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" 
        autocomplete="off" >
    </div>

    <div class="row form-group">
        <label class ="form-label">Alamat*</label>
        <input id="address" name="address" type="text" class="form-control" 
        autocomplete="off" value="{{old('address')}}>
    </div>

    <div class="row form-group">
        <label class ="form-label">Tanggal Lahir*</label>
        <input id="birthdate" name="birthdate" type="date" class="form-control" 
        autocomplete="off" value="{{old('birthdate')}}>
    </div>

    <div class="row form-group">
        <label class ="form-label">No Telepon*</label>
        <input id="pnumber" name="pnumber" type="text" class="form-control" 
        autocomplete="off" value="{{old('pnumber')}}>
    </div>

    <div class="row form-group">
       <button class="btn btn-primary buttonConf" id="buttSubmit" type="submit">Ok</button>
       <button type="Reset" class="btn btn-danger buttonConf">Reset</button>
    </div>
</form>
@endsection

    