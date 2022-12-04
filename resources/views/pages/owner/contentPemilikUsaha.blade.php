@extends("pages.owner.main_owner")

@section('name_page')
    Master User
@endsection

@push('page_owner_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
@endpush

@section('content_owner')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">List User</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4  bg-that-more-light-than-black">
            <div class="card-header py-3  bg-that-more-light-than-black">
                <h6 class="m-0 font-weight-bold text-white">List User</h6>
            </div>
            <div class="card-body text-white">
                <div class="table-responsive">
                    <table class="table table-bordered  bg-that-more-light-than-black" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-white">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-weight-bold text-white">Tiger Nixon</td>
                                <td class="font-weight-bold text-white">System Architect</td>
                                <td class="font-weight-bold text-white">Edinburgh</td>
                                <td class="font-weight-bold text-white">61</td>
                                <td class="font-weight-bold text-white">2011/04/25</td>
                                <td class="font-weight-bold text-white">$320,800</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Garrett Winters</td>
                                <td class="font-weight-bold text-white">Accountant</td>
                                <td class="font-weight-bold text-white">Tokyo</td>
                                <td class="font-weight-bold text-white">63</td>
                                <td class="font-weight-bold text-white">2011/07/25</td>
                                <td class="font-weight-bold text-white">$170,750</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Ashton Cox</td>
                                <td class="font-weight-bold text-white">Junior Technical Author</td>
                                <td class="font-weight-bold text-white">San Francisco</td>
                                <td class="font-weight-bold text-white">66</td>
                                <td class="font-weight-bold text-white">2009/01/12</td>
                                <td class="font-weight-bold text-white">$86,000</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Cedric Kelly</td>
                                <td class="font-weight-bold text-white">Senior Javascript Developer</td>
                                <td class="font-weight-bold text-white">Edinburgh</td>
                                <td class="font-weight-bold text-white">22</td>
                                <td class="font-weight-bold text-white">2012/03/29</td>
                                <td class="font-weight-bold text-white">$433,060</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Airi Satou</td>
                                <td class="font-weight-bold text-white">Accountant</td>
                                <td class="font-weight-bold text-white">Tokyo</td>
                                <td class="font-weight-bold text-white">33</td>
                                <td class="font-weight-bold text-white">2008/11/28</td>
                                <td class="font-weight-bold text-white">$162,700</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Brielle Williamson</td>
                                <td class="font-weight-bold text-white">Integration Specialist</td>
                                <td class="font-weight-bold text-white">New York</td>
                                <td class="font-weight-bold text-white">61</td>
                                <td class="font-weight-bold text-white">2012/12/02</td>
                                <td class="font-weight-bold text-white">$372,000</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Herrod Chandler</td>
                                <td class="font-weight-bold text-white">Sales Assistant</td>
                                <td class="font-weight-bold text-white">San Francisco</td>
                                <td class="font-weight-bold text-white">59</td>
                                <td class="font-weight-bold text-white">2012/08/06</td>
                                <td class="font-weight-bold text-white">$137,500</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Rhona Davidson</td>
                                <td class="font-weight-bold text-white">Integration Specialist</td>
                                <td class="font-weight-bold text-white">Tokyo</td>
                                <td class="font-weight-bold text-white">55</td>
                                <td class="font-weight-bold text-white">2010/10/14</td>
                                <td class="font-weight-bold text-white">$327,900</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Colleen Hurst</td>
                                <td class="font-weight-bold text-white">Javascript Developer</td>
                                <td class="font-weight-bold text-white">San Francisco</td>
                                <td class="font-weight-bold text-white">39</td>
                                <td class="font-weight-bold text-white">2009/09/15</td>
                                <td class="font-weight-bold text-white">$205,500</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Sonya Frost</td>
                                <td class="font-weight-bold text-white">Software Engineer</td>
                                <td class="font-weight-bold text-white">Edinburgh</td>
                                <td class="font-weight-bold text-white">23</td>
                                <td class="font-weight-bold text-white">2008/12/13</td>
                                <td class="font-weight-bold text-white">$103,600</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-white">Jena Gaines</td>
                                <td class="font-weight-bold text-white">Office Manager</td>
                                <td class="font-weight-bold text-white">London</td>
                                <td class="font-weight-bold text-white">30</td>
                                <td class="font-weight-bold text-white">2008/12/19</td>
                                <td class="font-weight-bold text-white">$90,560</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
