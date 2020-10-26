@extends('layout.layout')
@section('content')
    <div class="container" align="center" style="margin: 120px 0">
        <form  method="post" enctype="multipart/form-data" action="{{route('employes.update',$employee->id)}}">
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie Title</label>
                    <input type="name" class="form-control" name="title" value="{{old('name',$employee->name)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie Year</label>
                    <input type="name" class="form-control" name="year" value="{{old('surname',$employee->surname)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie Description</label>
                    <input type="name" class="form-control" name="description" value="{{old('position',$employee->position)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie Rating</label>
                    <input type="name" class="form-control" name="rating" value="{{old('phone',$employee->phone)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie Image Url</label>
                    <input type="name" class="form-control" name="image" value="{{old('is_hired',$employee->is_hired)}}">
                </div>
            </div>
            @csrf
            {{--        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">--}}
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
