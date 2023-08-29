@extends('cms.parent')

@section('title' , 'Index Car')

@section('main_title' , 'Index Car')

@section('sub_title' , 'index of Car')


@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <a href="{{route('cars.create')}}" type="submit" class="btn btn-info">Add new car</a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>

                <th>Type Car</th>
                <th>Car license</th>
                <th>Status</th>
                <th>Price</th>
                <th>Emplyee Name</th>


              </tr>
            </thead>
            <tbody>

                @foreach ($cars as $car )
                <tr>
                    <td>{{$car->id}}</td>

                    <td>{{ $car->type_car ?? ""}}</td>
                    <td>{{ $car->car_license }}</td>
                    <td>{{ $car->status ?? ""}}</td>
                    <td>{{ $car->rental_price ?? ""}}</td>

                   <td>{{ $car->employee->user->name }}</td>

                    <td>
                        <div class="btn-group">
                            <a href="{{route('cars.edit' , $car->id )}}" type="button" class="btn btn-info">{{ __('message.edit') }}</a>
                            <button type="button" onclick="performDestroy({{$car->id }} , this)" class="btn btn-danger">{{__('message.delete')}}</button>
                            {{-- <a href="{{route('admins.show' , $admin->id )}}" type="button" class="btn btn-success">{{__('message.show')}}</a> --}}
                        </div>
                      </td>
                  </tr>
                @endforeach




            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        {{ $cars->links() }}
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

        confirmDestroy('/cms/cars/'+id  ,reference );

    }

    </script>
@endsection
