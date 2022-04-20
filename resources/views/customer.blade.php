@extends('layouts.admin')

@section('title', 'customer')
@section('main-content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Customer Table</h4>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="example_length"><label>Show <select
                                                name="example_length" aria-controls="example"
                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                class="form-control form-control-sm" placeholder=""
                                                aria-controls="example"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example" class="table table-striped table-bordered dataTable"
                                        style="width: 100%;" role="grid" aria-describedby="example_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" style="width: 152px;" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" style="width: 233px;"
                                                    aria-label="Position: activate to sort column ascending">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" style="width: 111px;"
                                                    aria-label="Office: activate to sort column ascending">Username</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" style="width: 50px;"
                                                    aria-label="Age: activate to sort column ascending">SSN</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" style="width: 105px;"
                                                    aria-label="Start date: activate to sort column ascending">Address
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $item->name}}</td>
                                                    <td>{{ $item->email}}</td>
                                                    <td>{{ $item->username}}</td>
                                                    <td>{{ $item->ssn}}</td>
                                                    <td>{{ $item->address}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Email</th>
                                                <th rowspan="1" colspan="1">Username</th>
                                                <th rowspan="1" colspan="1">SSN</th>
                                                <th rowspan="1" colspan="1">Address</th>
                                                {{-- <th rowspan="1" colspan="1">Salary</th> --}}
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing
                                        1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="example_previous"><a
                                                    href="#" aria-controls="example" data-dt-idx="0" tabindex="0"
                                                    class="page-link">Prev</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="example"
                                                    data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                                    data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                                    data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                                    data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                                    data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                                    data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                            <li class="paginate_button page-item next" id="example_next"><a href="#"
                                                    aria-controls="example" data-dt-idx="7" tabindex="0"
                                                    class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
