@extends('cms.parent')



@section('styles')

@endsection

@section('titel','Update admins')
@section('mainTitel' ,'Update admins')
@section('subTitel', 'Update admins')



@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">

                            <h3 class="card-title">Another Expenses</h3>
                        </div>


                        <!-- /.card-header -->



                        <!-- form start -->
                        <form>

                            <div class="card-body">



                                <div class="row">


                                    <div class="form-group col-md-6">

                                        <label for="name">{{__('create_edit.name')}}</label>
                                        <input type="text" class="form-control" name='name' id="name"    value="{{ $anotherexpenses->name }}"  placeholder="{{ __('create_edit.Enter Name') }}" >

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="discrption">{{ __('create_edit.discrption') }}</label>
                                        <input type="text" class="form-control" name='discrption' id="discrption"  value="{{ $anotherexpenses->discrption }}" placeholder="{{ __('create_edit.Enter Discrption') }}">
                                        {{-- <textarea name="discrption" id="discrption" cols="30" rows="10"></textarea> --}}

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="date">{{ __('create_edit.data') }}</label>
                                        <input type="date" class="form-control" name='date' value="{{ $anotherexpenses->date }}" id="date">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="price">{{ __('create_edit.price') }}</label>
                                        <input type="number" class="form-control" name='price' id="price" value="{{ $anotherexpenses->price }}" placeholder="{{ __('create_edit.Enter Price') }}">
                                    </div>

                                </div>





                            </div>











                        <div class="card-footer">






                        <div class="card-footer">


                                <button type="button" onclick=" performUpdate({{  $anotherexpenses->id }})" class="btn btn-primary">{{ __('create_edit.Update') }}</button>
                                <a href="{{ route('anotherexpenses.index')}}" type="submit" class="btn btn-info">{{ __('create_edit.Cancel') }}</a>

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
        fromData.append('discrption',document.getElementById('discrption').value);
        fromData.append('date',document.getElementById('date').value);
        fromData.append('price',document.getElementById('price').value);
        storeRoute('/cms/anotherexpenses_update/'+id , fromData)
    }

</script>

@endsection




