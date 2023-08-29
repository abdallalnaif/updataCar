@extends('cms.parent')



@section('styles')

@endsection

@section('titel','Admins')
@section('mainTitel' ,'Data off Admin')
@section('subTitel', 'SHOW ADMAIS')



@section('content')

    <div class="container-fluid">

            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h3  class="card-title">
                            <a type="button"  class="btn btn-info"  href="{{ route('catchreceipts.create') }}">
                                {{__('index.catch receipts')}}
                            </a>
                        </h3>



                        <a href="{{ route('TrashCatchReceipts') }}" type="button" class="btn btn-success">
                            <i class="fas fa-solid fa-trash nav-icon"></i>

                        </a>


                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{__('index.ID')}}</th>
                                <th>{{__('index.discrption')}}</th>
                                <th>{{__('index.data')}}</th>
                                <th>{{__('index.price')}}</th>
                                <th>{{__('index.sitting')}}</th>

                            </tr>
                        </thead>
                            <tbody>

                                @foreach ($catchreceipts as $catchreceipt)

                                    <tr>

                                        <td>{{ $catchreceipt->id }}</td>
                                        <td>{{ $catchreceipt->discrption ?? ""  }}</td>
                                        <td>{{ $catchreceipt->date ?? "" }}</td>
                                        <td>{{ $catchreceipt->price ?? "" }} $</td>


                                        <td >
                                            <button type="button" onclick=" performDestroy({{ $catchreceipt->id }} , this) " class="btn btn-danger">{{ __('index.Delete') }}</button>
                                            <a href="{{ route('catchreceipts.edit' , $catchreceipt->id) }}" type="button" class="btn btn-success">{{ __('index.Edit') }}</a>
                                            {{-- <button type="button" class="btn btn-info">Show</button> --}}

                                        </td>
                                    </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>

                    <div class="container-fluid">
                        <div class="col">

                        {{ $catchreceipts->links() }}

                        </div>


                    </div>

                </div>

            </div>

    </div>


@endsection

@section('scripts')



<script>


    function performDestroy(id , reference){


        confirmDestroy('/cms/catchreceipts/'+id , reference)

    }

</script>
@endsection

