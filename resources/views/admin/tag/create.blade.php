@extends('layouts.backend.masterback')
@section('title','Create Tags')

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
                               Create New Tag
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.tag.store')}}" method="POST">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="tagname" name="tagname" class="form-control">
                                        <label class="form-label">Enter tag</label>
                                    </div>
                                </div>
                                <br>
                                <a href="{{route('admin.tag.index')}}" class="btn btn-danger m-t-15 waves-effect">Go back</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Add tag</button>

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