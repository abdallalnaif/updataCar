@extends('cms.parent')



@section('styles')

@endsection

@section('titel','Countries')
@section('mainTitel' ,'Data off Countries')
@section('subTitel', 'SHOW COUNTRIES')



@section('content')

    <div class="container-fluid">

            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title"> Countries Table</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Country</th>
                                <th>CountryCode</th>
                                <th>Cities</th>
                                <th>Sitting</th>

                            </tr>
                        </thead>
                            <tbody>

                                @foreach ($countries as $country)

                                    <tr>

                                        <td>{{ $country->id }}</td>
                                        <td>{{ $country->name }}</td>
                                        <td>{{ $country->code }}</td>
                                        <td>
                                            <span class="badge bg-success">
                                                {{ $country->cities_count}} - cities
                                            </span>
                                        </td>
                                        <td>

                                            <button type="button" onclick=" performDestroy({{ $country->id }} , this) " class="btn btn-danger">Delete</button>
                                            <a href="{{ route('countries.edit' , $country->id) }}" type="button" class="btn btn-success">Edit</a>
                                            <button type="button" class="btn btn-info">Show</button>

                                        </td>
                                    </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>

                    <div class="container-fluid">
                        <div class="col">

                            {{ $countries->links() }}

                        </div>


                    </div>

                </div>

            </div>

    </div>


@endsection

@section('scripts')



<script>


    function performDestroy(id , reference){


        confirmDestroy('/cms/countries/'+id , reference)

    }

</script>
@endsection

