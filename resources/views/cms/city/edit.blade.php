@extends('cms.parent')



@section('styles')

@endsection

@section('titel','Update Country')
@section('mainTitel' ,'Edit Country')
@section('subTitel', 'Edit Country')



@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">

                            <h3 class="card-title">EDIT DATA OFF COUNTRY</h3>
                        </div>


                        <!-- /.card-header -->



                        <!-- form start -->
                        <form>
                            <div class="card-body">

                                <div class="form-group col-md-6">

                                    <label>Select Country</label>
                                    <select class="form-control select2 select2-hidden-accessible"  name="country_id"  id='country_id' >
                                        <option selected>{{ $cities->country->name }}</option>

                                        @foreach ($countries as $country )
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach

                                    </select>

                                </div>



                            </div>


                            <div class="card-body">

                                <div class="row">


                                    <div class="form-group col-md-6">

                                        <label for="name">City Name</label>
                                        <input type="text" class="form-control" name='name' id="name" value="{{ $cities->name }}" placeholder="Enter Name Of City" >

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="street">Street</label>
                                        <input type="text" class="form-control" name='street' id="street"  value="{{ $cities->street }}" placeholder="Enter Address">
                                    </div>


                                </div>
                            </div>




                            <div class="card-footer">
                                <button type="button" onclick=" performUpdate({{  $cities->id }})"  class="btn btn-primary">Update</button>

                                <a href="{{ route('cities.index')}}" type="submit" class="btn btn-info">Cancel</a>
                            </div>





                        </form>

                    </div>

                </div>

            </div>

        </div>
    </section>



@endsection


@section('scripts')


<script>


    function performUpdate(id){

        let fromData = new FormData();
        fromData.append('name',document.getElementById('name').value);
        fromData.append('street',document.getElementById('street').value);
        fromData.append('country_id',document.getElementById('country_id').value);
        storeRoute('/cms/cities_update/'+id , fromData)
    }

</script>
@endsection




