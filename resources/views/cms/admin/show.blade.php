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
            <div class="card-header ">
              <h3 class="card-title">{{ __('message.show') }} {{ __('message.Admin') }}</h3>
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

                    <td>
                        <img class="img-circle img-bordered-sm"

                        @if($admins->user->attachment )
                        src="{{asset('storage/Image/admin/'.$admins->user->attachment->fileUrl)}}"
                        @else
                        src=""
                        @endif
                        width="150" height="150" alt="User Image">
                      </td>

                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="name">{{ __('message.name') }}</label>
                        <input type="text" class="form-control" disabled value="{{ $admins->user->name }}" name="name" id="name" >
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="identity">{{ __('message.identity') }}</label>
                        <input type="number" class="form-control" disabled value="{{ $admins->user->identity }}" name="identity" id="identity" >
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">{{ __('message.email') }}</label>
                        <input type="email" class="form-control" disabled value="{{ $admins->email }}" name="email" id="email" >
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label for="password">{{ __('message.password') }}</label>
                        <input type="password" class="form-control" value="{{ $admins->password }}" name="password" id="password" >
                    </div> --}}
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="mobile">{{ __('message.mobile') }}</label>
                        <input type="text" class="form-control" disabled value="{{ $admins->user->mobile }}" name="mobile" id="mobile" >
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                      <label for="address">{{ __('message.address') }}</label>
                        <input type="text" class="form-control" disabled value="{{ $admins->user->address }}" name="address" id="address" >
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="dob">{{ __('message.dob') }}</label>
                        <input type="date" class="form-control" name="dob" disabled value="{{ $admins->user->dob }}" id="dob" placeholder="Enter date of birthday of Admin">
                    </div>

                </div>

                <div class="row">

                <div class="form-group col-md-6">
                    <label for="gender">{{ __('message.gender') }}</label>
                    <input type="text" class="form-control" name="dob" disabled value="{{ $admins->user->gender }}" id="dob" placeholder="Enter date of birthday of Admin">
                </div>


            </div>

            <div class="row">


                <div class="form-group col-md-6">
                    <label for="status">{{ __('message.status') }}</label>
                    <input type="text" class="form-control" name="dob" disabled value="{{ $admins->user->status }}" id="dob" placeholder="Enter date of birthday of Admin">
{{--
                    <select name="status" id="status" disabled value="{{ $admins->user->status }}" class="form-select form-select-sm" style="width: 100%;">
                        <option value="Active">{{ __('message.active') }}</option>
                        <option value="Inactive">{{ __('message.inActive') }}</option>
                    </select> --}}
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


