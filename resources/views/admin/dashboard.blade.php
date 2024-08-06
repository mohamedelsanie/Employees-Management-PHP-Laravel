<x-admin-layout>
    <x-slot name="header">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>{{ __('admin/common.dashboard') }}</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">{{ __('admin/common.home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('admin/common.dashboard') }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{ asset('assets/admin/vendors/images/banner-img.png') }}" alt="" />
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
                <b>{{ __('admin/common.messages.admin_hello') }}</b>
                <div class="weight-600 font-30 text-blue">{{ Auth::guard('admin')->user()->name }}</div>
            </h4>
            <p class="font-18 max-width-600">
                {{ __('admin/common.messages.admin_hello_msg') }}
            </p>
        </div>
    </div>
    </div>

    @section('page_title'){{ __('admin/common.title_home') }}@endsection
</x-admin-layout>

