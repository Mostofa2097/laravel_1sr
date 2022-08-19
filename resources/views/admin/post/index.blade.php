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
             <table class="table table-bordered ">
                <tr>
                    <th>id</th>
                    <th>post title</th>
                    <th>description</th>
                    <th>total view</th>
                    <th>is_published</th>
                    <th>author_id</th>
                    <th>rating</th>
                    <th>author name</th>
                    <th>#</th>
                  
                </tr>
                @foreach ($post_list as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->view_count}}</td>
                    <td>{{$post->is_published}}</td>
                    <td>{{$post->author_id}}</td>
                    <td>{{$post->rating}}</td>
                    <td>{{$post->post_owner ? $post->post_owner->name : '_'}}</td>
                    <td><a href="{{ url("/post/show/$post->id") }}">view details</a></td>
                </tr>
               @endforeach
             </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
           
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
@endsection