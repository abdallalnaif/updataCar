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

                            <h3 class="card-title"> {{__('create_edit.assets')}}</h3>
                        </div>


                        <!-- /.card-header -->



                        <!-- form start -->
                        <form>


                            <div class="card-body">



                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="email">{{ __('create_edit.email') }}</label>
                                            <input type="email" class="form-control" name='email' id="email" value="{{ $assets->email }}" placeholder="{{ __('create_edit.email') }}">
                                            {{-- <textarea name="discrption" id="discrption" cols="30" rows="10"></textarea> --}}

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="discrption">{{ __('create_edit.discrption') }}</label>
                                            <input type="text" class="form-control" name='discrption' id="discrption" value="{{ $assets->discrption }}" placeholder="{{ __('create_edit.Enter Discrption') }}">
                                            {{-- <textarea name="discrption" id="discrption" cols="30" rows="10"></textarea> --}}

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="count">{{ __('create_edit.count') }}</label>
                                            <input type="number" class="form-control" name='count' id="count" value="{{ $assets->count }}"placeholder="{{ __('create_edit.count') }}">
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label>{{ __('create_edit.stutas') }}</label>
                                            <select class="form-control select2 select2-hidden-accessible" value="{{ $assets->status }}"  name="status"  id='status'>
                                                <option value="Active">{{ __('create_edit.active') }}</option>
                                                <option value="Inactive">{{ __('create_edit.Inactive') }}</option>
                                            </select>


                                        </div>


                                    </div>




                                    </div>




                                </div>











                            <div class="card-footer">



                                <button type="button" onclick=" performUpdate({{  $assets->id }})" class="btn btn-primary">{{ __('create_edit.Update') }}</button>
                                <a href="{{ route('assets.index')}}" type="submit" class="btn btn-info">{{ __('create_edit.Cancel') }}</a>

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
        fromData.append('email',document.getElementById('email').value);
        fromData.append('discrption',document.getElementById('discrption').value);
        fromData.append('count',document.getElementById('count').value);
        fromData.append('status',document.getElementById('status').value);
        storeRoute('/cms/assets_update/'+id , fromData)
    }

</script>

@endsection




