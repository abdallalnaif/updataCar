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
                            <a type="button"  class="btn btn-info"  href="{{ route('anotherexpenses.create') }}">
                                {{__('index.Another Expenses')}}
                            </a>
                        </h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{__('index.ID')}}</th>
                                <th>{{__('index.name')}}</th>
                                <th>{{__('index.discrption')}}</th>
                                <th>{{__('index.data')}}</th>
                                <th>{{__('index.price')}}</th>
                                <th>{{__('index.sitting')}}</th>

                            </tr>
                        </thead>
                            <tbody>

                                @foreach ($anotherexpenses as $anotherexpense)

                                    <tr>

                                        <td>{{ $anotherexpense->id }}</td>
                                        <td>{{ $anotherexpense->name ?? "" }}</td>
                                        <td>{{ $anotherexpense->discrption ?? ""  }}</td>
                                        <td>{{ $anotherexpense->date ?? "" }}</td>
                                        <td>{{ $anotherexpense->price ?? "" }}</td>


                                        <td >
                                            <button type="button" onclick=" performDestroy({{ $anotherexpense->id }} , this) " class="btn btn-danger">{{ __('index.Delete') }}</button>
                                            <a href="{{ route('anotherexpenses.edit' , $anotherexpense->id) }}" type="button" class="btn btn-success">{{ __('index.Edit') }}</a>
                                            {{-- <button type="button" class="btn btn-info">Show</button> --}}

                                        </td>
                                    </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>

                    <div class="container-fluid">
                        <div class="col">

                            {{ $anotherexpenses->links() }}

                        </div>


                    </div>

                </div>

            </div>

    </div>


@endsection

@section('scripts')



<script>


    function performDestroy(id , reference){


        confirmDestroy('/cms/anotherexpenses/'+id , reference)

    }

</script>
@endsection

