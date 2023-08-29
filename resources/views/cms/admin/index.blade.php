@extends('cms.parent')

@section('title' , 'Index Admin')

@section('main_title' , 'Index Admin')

@section('sub_title' , 'index of Admin')


@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <a href="{{route('admins.create')}}" type="submit" class="btn btn-info">{{ __('message.Add New Admin') }}</a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>

                <th>{{ __('message.image') }}</th>
                <th>{{ __('message.name') }}</th>
                <th>{{ __('message.email') }}</th>
                <th>{{ __('message.gender') }}</th>
                <th>{{ __('message.status') }}</th>
                {{-- <th>City Name</th> --}}
                <th>{{ __('message.setting') }}</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($admins as $admin )
                <tr>
                    <td>{{$admin->id  }}</td>

                    <td>
                      <img class="img-circle img-bordered-sm"

                      @if($admin->user->attachments )
                      src="{{asset('storage/Image/admin/'.$admin->user->attachments[0]->fileUrl)}}"
                      @else
                      src=""
                      @endif
                      width="50" height="50" alt="User Image">
                    </td>

                    <td>{{ $admin->user->name ?? ""}}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->user->gender ?? ""}}</td>
                    <td>{{ $admin->user->status ?? ""}}</td>
                    {{-- <td><span class="badge bg-success"> {{$admin->user->city->name ?? ""}}</span></td> --}}


                    <td>
                        <div class="btn-group">
                            <a href="{{route('admins.edit' , $admin->id )}}" type="button" class="btn btn-info">{{ __('message.edit') }}</a>
                            <button type="button" onclick="performDestroy({{$admin->id }} , this)" class="btn btn-danger">{{__('message.delete')}}</button>
                            <a href="{{route('admins.show' , $admin->id )}}" type="button" class="btn btn-success">{{__('message.show')}}</a>
                        </div>
                      </td>
                  </tr>
                @endforeach




            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        {{ $admins->links() }}
      </div>
      <!-- /.card -->


      <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
    <!-- /.col -->

    @endsection

@section('scripts')

<script>
    function performDestroy(id , reference){

        confirmDestroy('/cms/admins/'+id  ,reference );

    }

    </script>
@endsection
