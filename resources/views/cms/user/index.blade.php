@extends('cms.parent')

@section('title' , 'Index User')

@section('main_title' , 'Index User')

@section('sub_title' , 'index of User')


@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <a href="{{route('users.create')}}" type="submit" class="btn btn-info">{{ __('message.Add New User') }}</a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success session_alert" >
                    {{ Session::get('success') }}
                </div>
            @elseif (Session::has('error'))
            <div class="alert alert-danger session_alert" >
                {{ Session::get('error') }}
            </div>
            @endif

          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>{{ __('message.image') }}</th>
                <th>{{ __('message.name') }}</th>
                <th>{{ __('message.email') }}</th>
                <th>{{ __('message.status') }}</th>
                <th>{{ __('message.City') }}</th>
                <th>{{ __('message.setting') }}</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($users as $user )
                <tr>
                    <td>{{$user->id  }}</td>

                    <td>
                      <img class="img-circle img-bordered-sm"

                        @if($user->attachments->count() > 0)
                            src="{{ asset('storage/Image/user/' . $user->attachments->first()->url) }}"
                        @else
                        src=""
                        @endif

                      width="50" height="50" alt="User Image">
                    </td>

                    <td>{{ $user->first_name ?? ""}} {{ $user->last_name ?? ""}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->status ?? ""}}</td>
                    <td><span class="badge bg-success"> {{$user->city->name ?? ""}}</span></td>


                    <td>
                        <div class="btn-group">
                            <a href="{{route('users.edit' , $user->id )}}" type="button" class="btn btn-info">{{ __('message.edit') }}</a>
                            <button type="button" onclick="performDestroy({{$user->id }} , this)" class="btn btn-danger">{{__('message.delete')}}</button>
                            <a href="{{route('users.show' , $user->id )}}" type="button" class="btn btn-success">{{__('message.show')}}</a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        {{ $users->links() }}
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

        confirmDestroy('/cms/users/'+id  ,reference );

    }

    </script>


<script>
    setTimeout(function() {
        $('.session_alert').fadeOut('slow');
    }, 3000); // 5000 milliseconds (5 seconds)
</script>


@endsection
