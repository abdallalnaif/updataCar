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
                                <div class="form-group">
                                <label for="name">Country Name</label>
                                <input type="text" class="form-control" name='name' id="name" value="{{ $countries->name }}"  placeholder="Enter Name Of Country" >
                                </div>
                                <div class="form-group">
                                <label for="code">Country Code</label>
                                <input type="text" class="form-control" name='code' id="code" value="{{ $countries->code }}"  placeholder="Enter Code Of Country">
                                </div>

                            <div class="card-footer">
                                <button type="button" onclick=" performUpdate({{  $countries->id }})"  class="btn btn-primary">Update</button>

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


    function performUpdate(id){

        let fromData = new FormData();
        fromData.append('name',document.getElementById('name').value);
        fromData.append('code',document.getElementById('code').value);
        storeRoute('/cms/countries_update/'+id , fromData)
    }

</script>
@endsection




