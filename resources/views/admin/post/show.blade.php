@extends('admin.layouts.app')
@section('title','dashboard')
    

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Post</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Title</h3>
                 
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
             
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
        
           <h1>{{ $post->title }}</h1>
           <p>{{ $post->description }}</p>
           <hr>
           <h4>Tag</h4>
           @foreach ($post->tags as $t)
               {{ $t->tag_name }} [ {{ $t->created_at  }} ],
           @endforeach

           <h3>Comments</h3>
           


           @forelse ($post->comments as $c)
           <p>{{ $c->details }}</p>
            @empty
              <p>no comment found</p>
            @endforelse

            <form action="{{ url('/comments') }}" method="post">
              @csrf
              <input type="text" name="comment_body">
              <input type="hidden" name="post_id" value="{{ $post->id }}">
              <input type="submit" name="" value="Save">
            </form>

          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
@endsection