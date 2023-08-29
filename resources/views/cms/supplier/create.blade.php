@extends('cms.parent')

@section('title' , 'Create Admin')

@section('main_title' , 'Create Admin')

@section('sub_title' , 'Create Admin')


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
              <h3 class="card-title">{{ __('message.Add New Admin') }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">


                <div class="row">
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                        <label>City</label>
                        <select class="form-control select2" id="city_id" name="city_id"  style="width: 100%;">
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>

                            @endforeach

                        </select>
                        </div>
                    </div> --}}


                    {{-- <div class="col-md-6">
                        <div class="form-group">
                        <label>Role NAme</label>
                        <select class="form-control select2" id="role_id" name="role_id"  style="width: 100%;">
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>

                            @endforeach

                        </select>
                        </div>
                    </div> --}}

                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="name">{{ __('message.name') }}</label>
                        <input type="text" class="form-control" name="name" id="name" >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="identity">{{ __('message.identity') }}</label>
                        <input type="number" class="form-control" name="identity" id="identity" >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">{{ __('message.email') }}</label>
                        <input type="email" class="form-control" name="email" id="email" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">{{ __('message.password') }}</label>
                        <input type="password" class="form-control" name="password" id="password" >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="mobile">{{ __('message.mobile') }}</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="address">{{ __('message.address') }}</label>
                        <input type="text" class="form-control" name="address" id="address" >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="dob">{{ __('message.dob') }}</label>
                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter date of birthday of Admin">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fileType">{{ __('message.file type') }}</label>
                        <select name="fileType" id="fileType" class="form-select form-select-sm" style="width: 100%;">
                            <option value="Image">{{ __('message.image') }}</option>
                            <option value="Video">{{ __('message.video') }}</option>
                            <option value="File">{{ __('message.file') }}</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fileUrl">{{__('message.Choose File')}}</label>
                        <input type="file" class="form-control" name="fileUrl" id="fileUrl" placeholder="Enter url of file">
                    </div>
                </div>

                <div class="row">

                <div class="form-group col-md-6">
                    <label for="gender">{{ __('message.gender') }}</label>
                    <select name="gender" id="gender" class="form-select form-select-sm" style="width: 100%;">
                        <option value="Male">{{ __('message.male') }}</option>
                        <option value="Female">{{ __('message.female') }}</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="status">{{ __('message.status') }}</label>
                    <select name="status" id="status" class="form-select form-select-sm" style="width: 100%;">
                        <option value="Active">{{ __('message.active') }}</option>
                        <option value="Inactive">{{ __('message.inactive') }}</option>
                    </select>
                </div>

            </div>

            </div>

              </div>
              <!-- /.card-body -->

{{--
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Languages</label>
                    <select class="form-control select2" id="language_id" name="language_id[]"  style="width: 100%;">
                        @foreach ($languages as $language)
                        <option value="{{ $language->id }}">{{ $language->name }}</option>

                        @endforeach

                    </select>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                    <label>language level</label>
                    <select class="form-control select2" id="level" name="level"  style="width: 100%;">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    </div>
                </div> --}}

            </div>


              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">{{ __('message.store') }}</button>

                <a href="{{route('admins.index')}}" type="submit" class="btn btn-info">{{ __('message.cancel') }}</a>

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

<script>
     function performStore(){
        let formData = new FormData();

        formData.append('name',document.getElementById('name').value );
        formData.append('identity',document.getElementById('identity').value );
        formData.append('email',document.getElementById('email').value );
        formData.append('password',document.getElementById('password').value );
        formData.append('mobile',document.getElementById('mobile').value );
        formData.append('address',document.getElementById('address').value );
        formData.append('dob',document.getElementById('dob').value );
        formData.append('fileType',document.getElementById('fileType').value );
        formData.append('fileUrl',document.getElementById('fileUrl').files[0] );
        formData.append('gender',document.getElementById('gender').value );
        formData.append('status',document.getElementById('status').value );
       
        // formData.append('city_id',document.getElementById('city_id').value );
        // formData.append('role_id',document.getElementById('role_id').value );

        store('/cms/admins' , formData);
    }
</script>

@endsection
