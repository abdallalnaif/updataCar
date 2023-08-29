@extends('cms.parent')

@section('title' , 'Edit Car')

@section('main_title' , 'Edit Car')

@section('sub_title' , 'Edit Car')


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
              <h3 class="card-title">Edit Car</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">


                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                        <label>Employee</label>
                        <select class="form-control select2" id="employee_id" name="employee_id"  style="width: 100%;">
                            @foreach ($employees as $employee)
                            <option @if ($employee->id==$cars->employee_id) selected @endif value="{{$employee->id}}">{{$employee->name}}</option>

                            @endforeach

                        </select>
                        </div>
                    </div>


                     <div class="col-md-6">
                        <div class="form-group">
                        <label>Investor</label>
                        <select class="form-control select2" id="investor_id" name="investor_id"  style="width: 100%;">
                            @foreach ($investors as $investor)
                            <option @if ($investor->id==$cars->investor_id) selected @endif value="{{$investor->id}}">{{$investor->name}}</option>

                            @endforeach

                        </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="type_car">Type Car</label>
                        <input type="text" value="{{ $cars->type_car }}" class="form-control" name="type_car" id="type_car" >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="car_license">Car License</label>
                        <input type="text" value="{{ $cars->car_license }}" class="form-control" name="car_license" id="car_license" >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="status">status</label>
                        <input type="text" value="{{ $cars->status }}" class="form-control" name="status" id="status" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rental_price">Price</label>
                        <input type="number" value="{{ $cars->rental_price }}" class="form-control" name="rental_price" id="rental_price" >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="gear_type">Gear Type</label>
                        <select name="gear_type" id="gear_type" class="form-select form-select-sm" style="width: 100%;">
                            <option selected>{{$cars->gear_type}}</option>
                            <option value="auto">Auto</option>
                            <option value="manual">Manual</option>
                        </select>
                    </div>

                </div>






            </div>

            </div>

              </div>


            </div>


              <div class="card-footer">
                <button type="button" onclick="performUpdate({{ $cars->id }})" class="btn btn-primary">Update</button>

                <a href="{{route('cars.index')}}" type="submit" class="btn btn-info">{{ __('message.cancel') }}</a>

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
     function performUpdate(id){
        let formData = new FormData();

        formData.append('type_car',document.getElementById('type_car').value );
        formData.append('car_license',document.getElementById('car_license').value );
        formData.append('status',document.getElementById('status').value );
        formData.append('rental_price',document.getElementById('rental_price').value );
        formData.append('gear_type',document.getElementById('gear_type').value );
        formData.append('employee_id',document.getElementById('employee_id').value );
        formData.append('investor_id',document.getElementById('investor_id').value );

        storeRoute('/cms/cars-update' , formData);
    }
</script>

@endsection
