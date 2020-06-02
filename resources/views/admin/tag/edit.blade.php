@extends('layouts.backend.masterback')
@section('title','Update Tags')

@push('css')
@endpush


@section('content')
<div class="container-fluid">
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Edit tag:  {{$tag->name}}
                            </h2>
                        </div>
                        <div class="body">
                            <form  method="POST" action="{{route('admin.tag.update',$tag->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="tagname" name="tagname" value="{{$tag->name}}" class="form-control">
                                        <label class="form-label">Enter new tag</label>
                                    </div>
                                </div>
                                <br>
                                <a href="{{route('admin.tag.index')}}" class="btn btn-danger m-t-15 waves-effect">Go back</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update tag</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
            <!-- Horizontal Layout -->
            
        </div>
@endsection








@push('js')
@endpush