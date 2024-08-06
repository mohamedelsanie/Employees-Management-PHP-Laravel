<x-admin-layout>
    <x-slot name="header">
        <div class="page-header mb-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('admin/common.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">{{ __('admin/categories.index.title') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('admin/categories.edit.edit') }}<code>{{ $data->name }}</code></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm scroll-click">{{ __('admin/categories.show.back') }}</a>
                </div>
            </div>
        </div>
    </x-slot>
    @php $field = 'media'; @endphp
    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="clearfix mb-10">
                    <div class="pull-left">
                        <h4 class="text-blue h4">{{ __('admin/categories.edit.edit') }} </h4>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                <form action="{{ route('admin.categories.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12 mb-30">

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/categories.fields.name') }}</label>
                                <div class="col-sm-12 col-md-12">
                                    <input name="name" placeholder="{{ __('admin/categories.fields.name') }}" value="{{ $data->name }}" class="border-gray-300 rounded-md shadow-sm form-control @error('name') border border-danger @enderror" type="text"/>
                                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-10">
                            <button class="btn btn-primary bg-gray-800" type="submit">{{ __('admin/categories.fields.update') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('page_title'){{  __('admin/categories.edit.title_tag',['name' => $data->name]) }}@endsection
</x-admin-layout>
