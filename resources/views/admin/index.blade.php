@extends('admin.layout.masterOfDashboard')




@section('subview')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Products Table : </h6>
        </div>
        <div class="card-body">


            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped text-center " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                    </tfoot>

                    <tbody>
                        @foreach ($allData as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->quantity }}</td>
                            </tr>
                        @endforeach

                    </tbody>



                </table>
            </div>
        </div>
    </div>



@endsection

