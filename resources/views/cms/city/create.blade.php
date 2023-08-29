@extends('cms.parent')



@section('styles')

@endsection

@section('titel','cities Country')
@section('mainTitel' ,'cities Country')
@section('subTitel', 'cities Country')



@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">

                            <h3 class="card-title">CONSTRUCTION A NEW City</h3>
                        </div>


                        <!-- /.card-header -->



                        <!-- form start -->
                        <form>


                            <div class="card-body">


                                    <div class="form-group col-md-6">

                                        <label>Select Country</label>
                                        <select class="form-control select2 select2-hidden-accessible"  name="country_id"  id='country_id' style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">

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
                                            <input type="text" class="form-control" name='name' id="name" placeholder="Enter Name Of City" >

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="street">Street</label>
                                            <input type="text" class="form-control" name='street' id="street" placeholder="Enter Address">
                                        </div>


                                    </div>
                                </div>


                            <div class="card-footer">
                                <button type="button" onclick=" performStore()" class="btn btn-primary">Store</button>

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


    function performStore(){

        let fromData = new FormData();
        fromData.append('name',document.getElementById('name').value);
        fromData.append('street',document.getElementById('street').value);
        fromData.append('country_id',document.getElementById('country_id').value);
        store('/cms/cities' , fromData)
    }

</script>

@endsection




