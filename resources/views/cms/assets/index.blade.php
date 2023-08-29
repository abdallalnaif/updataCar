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
                            <a type="button"  class="btn btn-info"  href="{{ route('assets.create') }}">
                                {{__('index.assets')}}
                            </a>
                        </h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{__('index.ID')}}</th>
                                <th>{{__('index.email')}}</th>
                                <th>{{__('index.discrption')}}</th>
                                <th>{{__('index.count')}}</th>
                                <th>{{__('index.stutas')}}</th>
                                <th>{{__('index.sitting')}}</th>

                            </tr>
                        </thead>
                            <tbody>

                                @foreach ($assets as $asset)

                                    <tr>

                                        <td>{{ $asset->id }}</td>
                                        <td>{{ $asset->email ?? ""  }}</td>
                                        <td>{{ $asset->discrption ?? "" }}</td>
                                        <td>{{ $asset->count ?? "" }}</td>
                                        <td>{{ $asset->status ?? "" }}</td>


                                        <td >
                                            <button type="button" onclick=" performDestroy({{ $asset->id }} , this) " class="btn btn-danger">{{ __('index.Delete') }}</button>
                                            <a href="{{ route('assets.edit' , $asset->id) }}" type="button" class="btn btn-success">{{ __('index.Edit') }}</a>
                                            {{-- <button type="button" class="btn btn-info">Show</button> --}}

                                        </td>
                                    </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>

                    <div class="container-fluid">
                        <div class="col">

                        {{ $assets->links() }}

                        </div>


                    </div>

                </div>

            </div>

    </div>


@endsection

@section('scripts')



<script>


    function performDestroy(id , reference){


        confirmDestroy('/cms/assets/'+id , reference)

    }

</script>
@endsection

