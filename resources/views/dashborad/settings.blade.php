<html>
    <head>
        <title>setting</title>
        <link rel="stylesheet" href='{{asset("style.css")}}'>
</head>
<body >
@extends('dashborad.admin')
    @section('content')
  
<div class="container-fluid setting">

<div class="row">
    <div class="col col-12">
        <h1 class="text-center text-primary title ">setting web</h1>
    </div>
</div>
<fieldset class="field">
<div class="panel-heading">
                        <h2 class="panel-title text-center text-info"> dashborad setting</h2>
                    </div>
<div class="body">
    <form action="/dashborad/update/{{$setting->id}}" method="post" enctype="multipart/form-data">
        @csrf 
       
        <div class="form-group">
            <label class="form-label text-white ">logo</label>
            <input class="form-control" name="logo" type="file" value='{{asset("images/".$setting->logo)}}'>
        </div>
        <div class="form-group">
            <label class="form-label text-white ">image </label>
            <input class="form-control" name="fivicon" type="file" value="{{$setting->favicon}}">
        </div>
        <div class="form-group">
            <label class="form-label text-white ">name </label>
            <input class="form-control" name="title" type="text" placeholder="name" value="{{$setting->title}}">
        </div>
        <div class="form-group">
            <label class="form-label text-white">decsrption </label>
            <textarea rows="5" cols="12" name="decsrption" class="form-control" >{{$setting->decsrption}}</textarea>
        </div>
        <div class="form-group">
            <label class="form-label text-white ">email </label>
            <input class="form-control" name="email" type="email" placeholder="email" value="{{$setting->email}}">
        </div>
        <div class="form-group">
            <label class="form-label text-white ">phone number </label>
            <input class="form-control" name="phone" type="number" placeholder="phone" value="{{$setting->phone}}">
        </div>
        <div class="form-group">
            <label class="form-label  ">address </label>
            <input class="form-control" name="adddress" type="text" placeholder="address" value="{{$setting->adddress}}">
        </div>
        <div class="form-group">
            <label class="form-label ">facebook </label>
            <input class="form-control" name="facebook" type="text" placeholder="facebook" value="{{$setting->facebook}}">
        </div>
        <div class="form-group">
            <label class="form-label ">instagram </label>
            <input class="form-control" name="instagram" type="text" placeholder="instagram" value="{{$setting->instagram}}">
        </div>
        <div class="form-group">
                                    <button class="btn btn-primary save" type="submit">save</button>
                                </div>
                                @if($errors->any())
                                    {!! implode('', $errors->all('<div class="bg-info">:message</div>')) !!}
                                @endif
                              
</form>
</div>
</div>
@endsection
  </body>
</html>
