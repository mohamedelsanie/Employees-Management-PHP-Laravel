<x-admin-layout>
    <x-slot name="header">
        <div class="page-header mb-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">{{ __('admin/common.home')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('admin/employees.index.title') }}
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    @if(AdminCan('user-create'))
                    <a href="{{ route('admin.employees.create') }}" class="btn btn-primary btn-sm scroll-click"><i class="fa fa-plus"></i> {{ __('admin/employees.index.create') }}</a>
                    @endif
                    @if(AdminCan('user-forcedelete'))
                    <a href="{{ route('admin.employees.archive') }}" class="btn btn-primary btn-sm scroll-click">{{ __('admin/employees.index.archive') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="clearfix mb-10">
                            <div class="pull-left">
                                <h4 class="text-blue h4">{{ __('admin/employees.index.title') }}</h4>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                    </div>

                </div>
                <table class="table table nowrap table-bordered table-striped no-footer dtr-inline" id="employees-table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('admin/common.table.employees_name_ar') }}</th>
                        <th scope="col">{{ __('admin/common.table.employees_name_en') }}</th>
                        <th scope="col">{{ __('admin/common.table.employees_job_pos') }}</th>
                        <th scope="col">{{ __('admin/common.table.employees_nationality') }}</th>
                        <th scope="col">{{ __('admin/common.table.acions') }}</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- delete --}}
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <form id="DelForm" action="{{ route('admin.employees.delete','') }}" method="get">

                <div class="modal-content">

                    <div class="modal-body">
                        @csrf
                        <div class="p-6">
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('admin/common.messages.delete_title2') }}
                            </h2>


                        </div>
                        <div class="form-group">
                            <p>{{ __('admin/common.messages.delete_desc') }}</p>
                            @csrf
                            <input type="hidden" name="id" id="id">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" style="background-color: #17a2b8 !important;" data-dismiss="modal">{{ __('admin/common.messages.cancel') }}</button>
                        <button type="submit" class="btn btn-danger" style="background-color: #dc3545 !important;">{{ __('admin/common.messages.confirm_delete') }} </button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{-- delete --}}
    @push('styles')
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/styles/datatables.min.css') }}" />--}}
      <style>
          .dataTables_wrapper .dataTables_processing {position: absolute;top: 44%;left: 50%;width: 30%;height: 40px;margin-left: -10%;text-align: center;font-size: 1.2em;background: #142127;border: 0;line-height: 41px;color: #fff;}
          th.sorting,th.sorting_asc,th.sorting_desc {cursor: pointer;}
          .dataTables_filter input[type="search"],.dataTables_length select {width: auto;display: inline-block;}
          .dataTables_filter input[type="search"]{border-radius: 0.375rem;}
          .dataTables_filter {text-align: left;}
          .pagination {float: left;}
          table td .action_link {font-size: 18px;margin-left: 10px;}
      </style>
    @endpush
    @push('javascript')
    <script type="text/javascript">
        $(function() {
            var table = $('#employees-table').DataTable({
                order: [ [1, 'asc'] ],
                language: {
                    'url' : "{{ asset('assets/admin/vendors/scripts/ar/datatables.json') }}",
                },
                processing: true,
                serverSide: true,
                ajax: "{{ Route('admin.employees.all') }}",
                columns: [{
                    data: 'id',
                    name: 'id',
                    orderable: false,
                    searchable: false
                },
                    {
                        data: 'name_ar',
                        name: 'name_ar'
                    },
                    {
                        data: 'name_en',
                        name: 'name_en'
                    },
                    {
                        data: 'job_pos',
                        name: 'job_pos'
                    },
                    {
                        data: 'nationality',
                        name: 'nationality'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
        $('#employees-table tbody').on('click', '#deleteBtn', function(argument) {
            var id = $(this).attr("data-id");
            console.log(id);
            $('#deletemodal #id').val(id);
            $('#DelForm').attr('action', "employees/"+id+"/delete");
        })
    </script>
    @endpush

    @section('page_title'){{ __('admin/employees.index.title_tag') }}@endsection
</x-admin-layout>
