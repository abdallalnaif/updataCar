@extends('cms.parent')



@section('styles')

@endsection

@section('titel','Create Country')
@section('mainTitel' ,'Create Country')
@section('subTitel', 'Create Country')



@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">

                            <h3 class="card-title">CONSTRUCTION A NEW COUNTRIES</h3>
                        </div>


                        <!-- /.card-header -->



                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                <label for="name">Country Name</label>
                                <input type="text" class="form-control" name='name' id="name" placeholder="Enter Name Of Country" >
                                </div>
                                <div class="form-group">
                                <label for="code">Country Code</label>
                                <input type="text" class="form-control" name='code' id="code" placeholder="Enter Code Of Country">
                                </div>

                            <div class="card-footer">
                                <button type="button" onclick=" performStore()" class="btn btn-primary">Store</button>

                                <a href="{{ route('countries.index')}}" type="submit" class="btn btn-info">Cancel</a>
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
        fromData.append('code',document.getElementById('code').value);
        store('/cms/countries' , fromData)
    }

</script>

@endsection




