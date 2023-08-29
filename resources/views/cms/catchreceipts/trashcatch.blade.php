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

                    <div class="card-header row">

                        <h3 class="pl-3">

                            <a href="{{ route('catchreceipts.index') }}" type="button" class="btn btn-info">

                                {{__('index.back')}}

                            </a>

                        </h3>

                        <h3>

                            <a href="{{ route('restoreALL') }}" type="button" class="btn btn-info">

                                {{__('index.returnAllData')}}

                            </a>

                        </h3>





                    </div>


                    @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                    @endif

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
                                        <td>{{ $catchreceipt->price ?? "" }}</td>


                                        <td >



                                            <a href="{{ route('restore' , $catchreceipt->id) }}" type="button" class="btn btn-success">{{ __('index.restore') }}</a>
                                            <a href="{{ route('foceDeleteElement' , $catchreceipt->id) }}" type="button" class="btn btn-danger">{{ __('index.foceDeleteElement') }}</a>
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


@endsection

