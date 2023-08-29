@extends('cms.parent')

@section('title' , 'Show Admin')

@section('main_title' , 'Show Admin')

@section('sub_title' , 'Show Admin')


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
            <div class="card-header">
              <h3 class="card-title">Show Data of Admin</h3>
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
                        <label for="name">Name of Admin</label>
                        <input type="text" class="form-control" disabled value="{{ $admins->user->name }}" name="name" id="name" placeholder="Enter Name of Admin">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="identity">identity of Admin</label>
                        <input type="number" class="form-control" disabled value="{{ $admins->user->identity }}" name="identity" id="identity" placeholder="Enter identity of Admin">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">Email of Admin</label>
                        <input type="email" class="form-control" disabled value="{{ $admins->email }}" name="email" id="email" placeholder="Enter Name of Admin">
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Name of Admin">
                    </div> --}}
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="mobile">Mobile of Admin</label>
                        <input type="text" class="form-control" disabled value="{{ $admins->user->mobile }}" name="mobile" id="mobile" placeholder="Enter Name of Admin">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="address"> Address of Admin</label>
                        <input type="text" class="form-control" disabled value="{{ $admins->user->address }}" name="address" id="address" placeholder="Enter Name of Admin">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="dob">Date of Bitrh</label>
                        <input type="date" class="form-control" disabled value="{{ $admins->user->dob }}" name="dob" id="dob" placeholder="Enter date of birthday of Admin">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fileType">File Type</label>
                        <select name="fileType" id="fileType" class="form-select form-select-sm" style="width: 100%;">
                            <option value="Image">Image</option>
                            <option value="Video">Video</option>
                            <option value="File">File</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fileUrl"> Choose File</label>
                        <input type="file" class="form-control" name="fileUrl" id="fileUrl" placeholder="Enter url of file">
                    </div>
                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" disabled class="form-select form-select-sm" style="width: 100%;">
                          <option selected> {{ $admins->user->gender }} </option>
    
                          <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
    
                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <select name="status" id="status" disabled class="form-select form-select-sm" style="width: 100%;">
                          <option selected> {{ $admins->user->status }} </option>
    
                          <option value="Active">Active</option>
                            <option value="Inactive">In Active</option>
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

                <a href="{{route('admins.index')}}" type="submit" class="btn btn-info">Cancel</a>

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

@endsection
