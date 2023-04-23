@extends('pages.sales.Sales')
@section('salesStyle')
    <style>
        .btnSection{
            position: relative;
            padding-left: 20px;
            top: -20px;
        }
        .btnSection i{
            padding-left: 15px;
        }
    </style>
@endsection
@section('salesBlade')
    <div class="btnSection">
        <h6>Quotations</h6>
        <a class="btn btn-primary btn-sm " href="#" role="button">NEW</a>
        <i class="fa fa-download" aria-hidden="true"></i>
    </div>

    <div class="table-responsive-md">
        <table class="table table-striped table-hover table-borderless table-success align-middle">
            <thead class="table-primary">
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                </tr>
            </thead>
                <tbody class="table-group-divider">
                    <tr class="table-dark" >
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                    <tr class="table-dark">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                    <tr class="table-dark">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                    <tr class="table-dark">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                    <tr class="table-dark">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
                <tfoot>

                </tfoot>
        </table>
    </div>

@endsection
