@extends('backendlayout.app')


@section('content')
<div class="container-fluid ml-4">
    <a name="" id="" class="btn" href="{{ route('blogs.show',$blog->id) }}" role="button">
        <i class="fa-solid fa-2xl fa-chevron-left"></i>

    </a>

</div>

<div class="container">
    <div class="row">
        <h3> {{$blog->title}}</h3>

        @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>
        @endif
        <div class="col">
            <form  action="{{ route('blogs.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <div class="form-group">
                            <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="title">
                                      @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                      <div class="form-group">
                        <div class="mb-3">
                            <label for="bodyText" class="form-label">Brödtext</label>
                            <textarea class="form-control" name="bodyText" id="bodyText" rows="3">{{ $blog->bodyText }}</textarea>
                            @error('bodyText')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        </dvi>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <div class="form-group">
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Text">{{ $blog->description }}</textarea>
                                      @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                       <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <img class="card-img-top img-thumbnail" style="width: 300px; height: 200px" src="{{asset('storage/images/'.$blog->blogImage)}}" alt="bild">
                        <div class="form-group">
                            <input type="file" name="blogImage" value="{{asset('storage/images/'.$blog->blogImage)}}" class="form-control">
                                      @error('blogImage')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block mt-2 w-100">Spara</button>
            </form>
        </div>
    </div>
</div>
@endsection
