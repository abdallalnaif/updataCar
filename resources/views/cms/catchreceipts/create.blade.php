@extends('cms.parent')



@section('styles')

@endsection

@section('titel','create_edit Another Expenses')
@section('mainTitel' ,'create_edit Another Expenses')
@section('subTitel', 'create_edit Another Expenses')



@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">

                            <h3 class="card-title"> {{__('create_edit.catch receipts')}}</h3>
                        </div>


                        <!-- /.card-header -->



                        <!-- form start -->
                        <form>


                            <div class="card-body">



                                    <div class="row">


                                        <div class="form-group col-md-6">
                                            <label for="discrption">{{ __('create_edit.discrption') }}</label>
                                            <input type="text" class="form-control" name='discrption' id="discrption"  placeholder="{{ __('create_edit.Enter Discrption') }}">
                                            {{-- <textarea name="discrption" id="discrption" cols="30" rows="10"></textarea> --}}

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="date">{{ __('create_edit.data') }}</label>
                                            <input type="date" class="form-control" name='date' id="date">
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label for="price">{{ __('create_edit.price') }}</label>
                                            <input type="number" class="form-control" name='price' id="price" placeholder="{{ __('create_edit.Enter Price') }}">
                                        </div>


                                    </div>





                                </div>











                            <div class="card-footer">




                                <button type="button" onclick=" performStore()" class="btn btn-primary">{{ __('create_edit.Store') }}</button>

                                <a href="{{ route('catchreceipts.index')}}" type="submit" class="btn btn-info">{{ __('create_edit.Cancel') }}</a>
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
        fromData.append('discrption',document.getElementById('discrption').value);
        fromData.append('date',document.getElementById('date').value);
        fromData.append('price',document.getElementById('price').value);
        store('/cms/catchreceipts' , fromData)
    }

</script>

@endsection




