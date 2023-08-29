@extends('cms.parent')



@section('styles')

@endsection

@section('titel','Cities')
@section('mainTitel' ,'Data off Cities')
@section('subTitel', 'SHOW Cities')



@section('content')

    <div class="container-fluid">

            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title"> Cities Table</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cities</th>
                                <th>Street</th>
                                <th>Country</th>

                            </tr>
                        </thead>
                            <tbody>

                                @foreach ($cities as $city)

                                    <tr>

                                        <td>{{ $city->id }}</td>
                                        <td>{{ $city->name }}</td>
                                        <td>{{ $city->street }}</td>
                                        <td >
                                            <span class="badge bg-success">
                                                {{ $city->country->name }}</td>
                                            </span>
                                        <td>

                                            <button type="button" onclick=" performDestroy({{ $city->id }} , this) " class="btn btn-danger">Delete</button>
                                            <a href="{{ route('cities.edit' , $city->id) }}" type="button" class="btn btn-success">Edit</a>
                                            {{-- <button type="button" class="btn btn-info">Show</button> --}}

                                        </td>
                                    </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>

                    <div class="container-fluid">
                        <div class="col">

                            {{ $cities->links() }}

                        </div>


                    </div>

                </div>

            </div>

    </div>


@endsection

@section('scripts')



<script>


    function performDestroy(id , reference){


        confirmDestroy('/cms/cities/'+id , reference)

    }

</script>
@endsection

