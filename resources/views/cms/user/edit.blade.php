@extends('cms.parent')

@section('title' , 'Edit User')

@section('main_title' , 'Edit User')

@section('sub_title' , 'Edit User')


@section('styles')

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header ">
              <h3 class="card-title ">{{ __('message.Edit User') }}</h3>
            </div>
            <!-- /.card-header -->

            @if (Session::has('success'))
                <div class="alert alert-success" >
                    {{ Session::get('success') }}
                </div>
            @elseif (Session::has('error'))
            <div class="alert alert-danger" >
                {{ Session::get('error') }}
            </div>
            @endif

            <!-- form start -->
            {{-- <form method="POST" action="{{ route('users-update' ) }}" enctype="multipart/form-data"> --}}
            <form method="POST" action="{{ route('users.update',$users->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <input style="display: none" name="user_id" value="{{ $users->id }}">

              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>{{ __('message.City') }}</label>
                        <select class="form-control select2" id="city_id" name="city_id"  style="width: 100%;">
                            @foreach ($cities as $city)
                            {{-- <option value="{{ $city->id }}">{{ $city->name }}</option> --}}

                            <option @if ($city->id == $users->city_id) selected @endif value="{{ $city->id }}">
                              {{ $city->name }}
                            </option>
                            @endforeach

                        </select>
                        @error('city_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="address">{{ __('message.address') }}</label>
                          <input type="text" value="{{ $users->address }}" class="form-control" name="address" id="address" >
                          @error('address')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                      </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>{{ __('message.Role Name') }}</label>
                        <select class="form-control select2" id="role_id" name="role_id"  style="width: 100%;">
                            @foreach ($roles as $role)
                            <option 
                                @if($users->roles->first()->id == $role->id)
                                    selected
                                @endif 
                                value="{{ $role->id }}">{{ $role->name }}
                            </option>

                            @endforeach

                        </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="first_name">{{ __('message.first_name') }}</label>
                        <input type="text" class="form-control" value="{{ $users->first_name }}" name="first_name" id="first_name" >
                        @error('first_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="last_name">{{ __('message.last_name') }}</label>
                        <input type="text" class="form-control" value="{{ $users->last_name }}" name="last_name" id="last_name" >
                        @error('last_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="identity">{{ __('message.identity') }}</label>
                        <input type="number" class="form-control" value="{{ $users->identity }}" name="identity" id="identity" >
                        @error('identity')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">{{ __('message.email') }}</label>
                        <input type="email" class="form-control" value="{{ $users->email }}" name="email" id="email" >
                        @error('email')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label for="password">{{ __('message.password') }}</label>
                        <input type="password" class="form-control" name="password" id="password" >
                        @error('password')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </div> --}}
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="mobile">{{ __('message.mobile') }}</label>
                        <input type="text" class="form-control" value="{{ $users->mobile }}" name="mobile" id="mobile" >
                        @error('mobile')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="birth_date">{{ __('message.dob') }}</label>
                        <input type="date" class="form-control" value="{{ $users->birth_date }}" name="birth_date" id="birth_date" placeholder="Enter date of birthday of User">
                        @error('birth_date')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="fileType">{{ __('message.file type') }}</label>
                        <select name="fileType" value="{{ $users->attachments->first()->type }}" id="fileType" class="form-select form-select-sm" style="width: 100%;">
                            <option value="Image">{{ __('message.image') }}</option>
                            <option value="Video">{{ __('message.video') }}</option>
                            <option value="File">{{ __('message.file') }}</option>
                            <option value="Icon">{{ __('message.icon') }}</option>
                        </select>
                        @error('fileType')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fileUrl">{{__('message.Choose File')}}</label>
                        <input type="file" value="{{ $users->attachments->first()->url }}" class="form-control" name="fileUrl" id="fileUrl" placeholder="Enter url of file">
                        @error('fileUrl')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row">

                <div class="form-group col-md-6">
                    <label for="gender">{{ __('message.gender') }}</label>
                    <select name="gender" id="gender" class="form-select form-select-sm" style="width: 100%;">
                        <option selected> {{ $users->gender }} </option>
                        <option value="Male">{{ __('message.male') }}</option>
                        <option value="Female">{{ __('message.female') }}</option>
                      </select>
                    @error('gender')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="status">{{ __('message.status') }}</label>
                    <select name="status" id="status" class="form-select form-select-sm" style="width: 100%;">
                        <option selected> {{ $users->status }} </option>
                        <option value="Active">{{ __('message.active') }}</option>
                        <option value="InActive">{{ __('message.inActive') }}</option>
                    </select>
                    @error('status')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
                </div>

            </div>

            </div>

              </div>
            </div>


              <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ __('message.edit') }}</button>

                <a href="{{route('users.index')}}" type="submit" class="btn btn-info">{{ __('message.cancel') }}</a>

              </div>
            </form>
          </div>
          <!-- /.card -->


        </div>

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>


@endsection


@section('scripts')


{{-- <script>
     function performStore(){
        let formData = new FormData();

        formData.append('first_name',document.getElementById('first_name').value );
        formData.append('last_name',document.getElementById('last_name').value );
        formData.append('identity',document.getElementById('identity').value );
        formData.append('email',document.getElementById('email').value );
        formData.append('password',document.getElementById('password').value );
        formData.append('mobile',document.getElementById('mobile').value );
        formData.append('birth_date',document.getElementById('birth_date').value );
        formData.append('fileType',document.getElementById('fileType').value );
        formData.append('fileUrl',document.getElementById('fileUrl').files[0] );
        formData.append('gender',document.getElementById('gender').value );
        formData.append('status',document.getElementById('status').value );
        formData.append('address',document.getElementById('address').value );
        formData.append('city_id',document.getElementById('city_id').value );
        // formData.append('role_id',document.getElementById('role_id').value );

        store('/cms/users' , formData);
    }
</script> --}}




{{-- <script>

$(document).on('click' , '#store_btn' , function(e){
    e.preventDefault();
    var formData = new FormData($('#store_form')[0]);

    $.ajax({
        type : 'POST',
        url : '{{ route('users.store') }}',
        enctype : 'multipart/form-data',
        data : formData,

        processData : false,
        contentType : false,
        cache : false,

        success : function(data){
            if(data.icon == true){
                $('#success_msg span').text(data.title);
                $('#success_msg').show()
            }
        },
        error : function(data){

        },
    });
})

</script> --}}



@endsection
