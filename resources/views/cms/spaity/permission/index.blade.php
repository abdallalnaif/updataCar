@extends('cms.parent')

@section('title' , 'Index Permission')

@section('main_title' , 'Index Permission')

@section('sub_title' , 'index of permission')


@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          {{-- <a href="{{route('countries.create')}}" type="submit" class="btn btn-info">Add New permission</a> --}}

          <form action="" method="get" style="margin-bottom:2%;">
            <div class="row">
                <div class="input-icon col-md-2">
                    <input type="text" class="form-control" placeholder="Search By Name"
                       name='name' @if( request()->name) value={{request()->name}} @endif/>
                      <span>
                          <i class="flaticon2-search-1 text-muted"></i>
                      </span>
                    </div>


            <div class="col-md-4">
                  <button class="btn btn-success btn-md" type="submit"> Filter</button>
                  <a href="{{route('permissions.index')}}"  class="btn btn-danger">End Filter</a>
                  {{-- @can('Create-City') --}}

                  <a href="{{route('permissions.create')}}"><button type="button" class="btn btn-md btn-primary"> Add New permission </button></a>
                  {{-- @endcan --}}
            </div>

                 </div>
        </form>
        </div>


        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">id</th>
                <th>Permission Name</th>

                <th>Setting</th>

              </tr>
            </thead>
            <tbody>

                @foreach ($permissions as $permission )
                <tr>
                    <td>{{$permission->id  }}</td>
                    <td>{{ $permission->name }}</td>

                    <td>
                        <div class="btn-group">
                          <a href="{{route('permissions.edit' , $permission->id )}}" type="button" class="btn btn-info">edit</a>
                          <button type="button" onclick="performDestroy({{$permission->id }} , this)" class="btn btn-danger">delete</button>
                        </div>
                      </td>
                  </tr>
                @endforeach




            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        {{ $permissions->links() }}
      </div>
      <!-- /.card -->


      <!-- /.card -->
    </div>
    <!-- /.col -->

    <!-- /.col -->

    @endsection

@section('scripts')

<script>
    function performDestroy(id , reference){

        confirmDestroy('/cms/permissions/'+id  ,reference );

    }

    </script>
@endsection
