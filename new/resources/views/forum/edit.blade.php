@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit</div>

                <div class="card-body">
                    <form action="{{route('forum.update', $forum->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                       <div class="form-group">
                           <input type="text" name="title" class="form-control" value="{{$forum->title}}">
                       </div>
                       <div class="form-group">
                           <textarea type="text" name="description" class="form-control" placeholder="Description..">
                           {{$forum->title}} </textarea>
                       </div>
                       <div class="form-group">
                           <select name="tags" class="form-control">@foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                           </select>
                       </div>
                       <div class="form-group">
                           <input type="file" name="image" class="form-control">
                       </div>
                       <div class="form-group">
                        <div class="col-md-4">
                        <img src="{{asset('images/' .$forum->image)}}" alt="" width="100%">
                        </div>
                       </div>
                       <button type="submit" class="btn btn-dark btn-block ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
