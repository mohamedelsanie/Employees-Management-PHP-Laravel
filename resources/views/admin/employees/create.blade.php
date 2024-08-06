<x-admin-layout>
    <x-slot name="header">
        <div class="page-header mb-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('admin/common.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.employees.index') }}">{{ __('admin/employees.index.title') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('admin/employees.create.create') }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <a href="{{ route('admin.employees.index') }}" class="btn btn-primary btn-sm scroll-click">{{ __('admin/employees.show.back') }}</a>
                </div>
            </div>
        </div>
    </x-slot>
    @php
        $field = 'media';
        $visa1 = 'visa_one';
        $visa2 = 'visa_two';
        $visa3 = 'visa_three';
        $visa4 = 'visa_four';
        $visa5 = 'visa_five';
    @endphp
    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="clearfix mb-10">
                    <div class="pull-left">
                        <h4 class="text-blue h4">{{ __('admin/employees.create.create') }}</h4>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                <form action="{{ route('admin.employees.store') }}" enctype="multipart/form-data" method="post" class="mt-6 space-y-6">
                    @csrf

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-8 mb-30">

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.name_ar') }}</label>
                                <div class="col-sm-12 col-md-12">
                                    <input name="name_ar" placeholder="{{ __('admin/employees.fields.name_ar') }}" value="{{ old('name_ar') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('name_ar') border border-danger @enderror" type="text"/>
                                    @error('name_ar')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.name_en') }}</label>
                                <div class="col-sm-12 col-md-12">
                                    <input name="name_en" placeholder="{{ __('admin/employees.fields.name_en') }}" value="{{ old('name_en') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('name_en') border border-danger @enderror" type="text"/>
                                    @error('name_en')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>


                            <div class="card card-box custom mb-10" id="accordionWork">
                                <div class="card-header" data-toggle="collapse" href="#collapseWork">
                                    <a class="card-title">
                                        {{ __('admin/employees.fields.persional_info') }}
                                    </a>
                                </div>
                                <div id="collapseWork" class="card-body show" data-parent="#accordionWork" >

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.persional_num') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="persional_num" placeholder="{{ __('admin/employees.fields.persional_num') }}" value="{{ old('persional_num') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('persional_num') border border-danger @enderror" type="text"/>
                                            @error('persional_num')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.job_pos') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="job_pos" placeholder="{{ __('admin/employees.fields.job_pos') }}" value="{{ old('job_pos') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('job_pos') border border-danger @enderror" type="text"/>
                                            @error('job_pos')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.passport_num') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="passport_num" placeholder="{{ __('admin/employees.fields.passport_num') }}" value="{{ old('passport_num') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('passport_num') border border-danger @enderror" type="text"/>
                                            @error('passport_num')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.nationality') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="nationality" placeholder="{{ __('admin/employees.fields.nationality') }}" value="{{ old('nationality') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('nationality') border border-danger @enderror" type="text"/>
                                            @error('nationality')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.birthplace') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="birthplace" placeholder="{{ __('admin/employees.fields.birthplace') }}" value="{{ old('birthplace') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('birthplace') border border-danger @enderror" type="text"/>
                                            @error('birthplace')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.passposrt_releasedate') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="passposrt_releasedate" placeholder="{{ __('admin/employees.fields.passposrt_releasedate') }}" value="{{ old('passposrt_releasedate') }}" class="date-picker border-gray-300 rounded-md shadow-sm form-control @error('passposrt_releasedate') border border-danger @enderror" type="text"/>
                                            @error('passposrt_releasedate')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.passport_expirationdate') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="passport_expirationdate" placeholder="{{ __('admin/employees.fields.passport_expirationdate') }}" value="{{ old('passport_expirationdate') }}" class="date-picker border-gray-300 rounded-md shadow-sm form-control @error('passport_expirationdate') border border-danger @enderror" type="text"/>
                                            @error('passport_expirationdate')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.pasport_type') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <select name="pasport_type" id="pasport_type" class="border-gray-300 rounded-md shadow-sm custom-select col-12 @error('pasport_type') border border-danger @enderror">
                                                <option  @if(old('pasport_type') == '') selected @endif>{{ __('admin/employees.fields.choose') }}</option>
                                                <option value="normal" @if(old('pasport_type') == 'normal') selected @endif>{{ __('admin/employees.fields.normal') }}</option>
                                                <option value="private" @if(old('pasport_type') == 'private') selected @endif>{{ __('admin/employees.fields.private') }}</option>
                                                <option value="diplomatic" @if(old('pasport_type') == 'diplomatic') selected @endif>{{ __('admin/employees.fields.diplomatic') }}</option>
                                             </select>
                                            @error('pasport_type')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.gender') }}</label>

                                        <div class="col-sm-12 col-md-12  @error('gender') border border-danger @enderror">
                                            <input type="radio" id="male" name="gender" value="male" @if(old('gender') == 'male')  checked="checked" @endif>
                                            <label for="male">{{ __('admin/employees.fields.male') }}</label><br>
                                            <input type="radio" id="female" name="gender" value="female" @if(old('gender') == 'female')  checked="checked" @endif>
                                            <label for="female">{{ __('admin/employees.fields.female') }}</label><br>
                                            @error('gender')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="card card-box custom mb-10" id="accordionContact">
                                <div class="card-header" data-toggle="collapse" href="#collapseContact">
                                    <a class="card-title">
                                        {{ __('admin/employees.fields.contact') }}
                                    </a>
                                </div>
                                <div id="collapseContact" class="card-body show" data-parent="#accordionContact" >

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.mobile_num') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="mobile_num" placeholder="{{ __('admin/employees.fields.mobile_num') }}" value="{{ old('mobile_num') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('mobile_num') border border-danger @enderror" type="text"/>
                                            @error('mobile_num')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.phone_num') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="phone_num" placeholder="{{ __('admin/employees.fields.phone_num') }}" value="{{ old('phone_num') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('phone_num') border border-danger @enderror" type="text"/>
                                            @error('phone_num')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.sos_phone_num') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="sos_phone_num" placeholder="{{ __('admin/employees.fields.sos_phone_num') }}" value="{{ old('sos_phone_num') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('sos_phone_num') border border-danger @enderror" type="text"/>
                                            @error('sos_phone_num')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.kinship') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="kinship" placeholder="{{ __('admin/employees.fields.kinship') }}" value="{{ old('kinship') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('kinship') border border-danger @enderror" type="text"/>
                                            @error('kinship')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.email') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="email" placeholder="{{ __('admin/employees.fields.email') }}" value="{{ old('email') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('email') border border-danger @enderror" type="text"/>
                                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                </div>
                            </div>


                            <div class="card card-box custom mb-10" id="accordionAdress">
                                <div class="card-header" data-toggle="collapse" href="#collapseAdress">
                                    <a class="card-title">
                                        {{ __('admin/employees.fields.adress') }}
                                    </a>
                                </div>
                                <div id="collapseAdress" class="card-body show" data-parent="#accordionAdress" >

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.apartment') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="apartment" placeholder="{{ __('admin/employees.fields.apartment') }}" value="{{ old('apartment') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('apartment') border border-danger @enderror" type="text"/>
                                            @error('apartment')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.building') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="building" placeholder="{{ __('admin/employees.fields.building') }}" value="{{ old('building') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('building') border border-danger @enderror" type="text"/>
                                            @error('building')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.streat') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="streat" placeholder="{{ __('admin/employees.fields.streat') }}" value="{{ old('streat') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('streat') border border-danger @enderror" type="text"/>
                                            @error('streat')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.complex') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="complex" placeholder="{{ __('admin/employees.fields.complex') }}" value="{{ old('complex') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('complex') border border-danger @enderror" type="text"/>
                                            @error('complex')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.region') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="region" placeholder="{{ __('admin/employees.fields.region') }}" value="{{ old('region') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('region') border border-danger @enderror" type="text"/>
                                            @error('region')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                </div>
                            </div>


                            <div class="card card-box custom mb-10" id="accordionBank">
                                <div class="card-header" data-toggle="collapse" href="#collapseBank">
                                    <a class="card-title">
                                        {{ __('admin/employees.fields.bank') }}
                                    </a>
                                </div>
                                <div id="collapseBank" class="card-body show" data-parent="#accordionBank" >

                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="table table-bordered" id="bank_table" style="border: 0;">
                                                <div class="tr">
                                                    <div class="td" colspan="2"><button type="button" class="btn btn-success btn-sm add_bank" style="background: green;"><span class="fa fa-plus"></span> {{ __('admin/employees.fields.add_bank') }} </button></div>
                                                    <br>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="card card-box custom mb-10" id="accordionVisas">
                                    <div class="card-header" data-toggle="collapse" href="#collapseVisas">
                                        <a class="card-title">
                                            {{ __('admin/employees.fields.visas') }}
                                        </a>
                                    </div>
                                    <div id="collapseVisas" class="card-body show" data-parent="#accordionVisas" >

                                        <div class="form-group row">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="table table-bordered" id="visa_table" style="border: 0;">
                                                    <div class="tr">
                                                        <div class="td" colspan="2"><button type="button" class="btn btn-success btn-sm add_visa" style="background: green;"><span class="fa fa-plus"></span> {{ __('admin/employees.fields.add_visa') }} </button></div>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            <div class="card card-box custom mb-10" id="accordionWwork">
                                <div class="card-header" data-toggle="collapse" href="#collapseWwork">
                                    <a class="card-title">
                                        {{ __('admin/employees.fields.work') }}
                                    </a>
                                </div>
                                <div id="collapseWwork" class="card-body show" data-parent="#accordionWwork" >

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.work_type') }}</label>

                                        <div class="col-sm-12 col-md-12">
                                            <select name="work_type" id="work_type" class="border-gray-300 rounded-md shadow-sm custom-select col-12 @error('work_type') border border-danger @enderror">
                                                <option  @if(old('work_type') == '') selected @endif>{{ __('admin/employees.fields.choose') }}</option>
                                                <option value="military" @if(old('work_type') == 'military') selected @endif>{{ __('admin/employees.fields.military') }}</option>
                                                <option value="civilian" @if(old('work_type') == 'civilian') selected @endif>{{ __('admin/employees.fields.civilian') }}</option>
                                            </select>
                                            @error('work_type')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.work_place') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="work_place" placeholder="{{ __('admin/employees.fields.work_place') }}" value="{{ old('work_place') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('work_place') border border-danger @enderror" type="text"/>
                                            @error('work_place')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.job_number') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="job_number" placeholder="{{ __('admin/employees.fields.job_number') }}" value="{{ old('job_number') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('job_number') border border-danger @enderror" type="text"/>
                                            @error('job_number')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.job_title') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="job_title" placeholder="{{ __('admin/employees.fields.job_title') }}" value="{{ old('job_title') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('job_title') border border-danger @enderror" type="text"/>
                                            @error('job_title')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.work_section') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="work_section" placeholder="{{ __('admin/employees.fields.work_section') }}" value="{{ old('work_section') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('work_section') border border-danger @enderror" type="text"/>
                                            @error('work_section')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.line_manger_name') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="line_manger_name" placeholder="{{ __('admin/employees.fields.line_manger_name') }}" value="{{ old('line_manger_name') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('line_manger_name') border border-danger @enderror" type="text"/>
                                            @error('line_manger_name')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card card-box custom mb-10" id="accordionSizes">
                                <div class="card-header" data-toggle="collapse" href="#collapseSizes">
                                    <a class="card-title">
                                        {{ __('admin/employees.fields.sizes') }}
                                    </a>
                                </div>
                                <div id="collapseSizes" class="card-body show" data-parent="#accordionSizes" >

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.tshirt_size') }}</label>

                                        <div class="col-sm-12 col-md-12">
                                            <select name="tshirt_size" id="tshirt_size" class="border-gray-300 rounded-md shadow-sm custom-select col-12 @error('tshirt_size') border border-danger @enderror">
                                                <option  @if(old('tshirt_size') == '') selected @endif>{{ __('admin/employees.fields.choose') }}</option>
                                                <option value="xs" @if(old('tshirt_size') == 'xs') selected @endif>{{ __('admin/employees.fields.xs') }}</option>
                                                <option value="s" @if(old('tshirt_size') == 's') selected @endif>{{ __('admin/employees.fields.s') }}</option>
                                                <option value="m" @if(old('tshirt_size') == 'm') selected @endif>{{ __('admin/employees.fields.m') }}</option>
                                                <option value="l" @if(old('tshirt_size') == 'l') selected @endif>{{ __('admin/employees.fields.l') }}</option>
                                                <option value="xl" @if(old('tshirt_size') == 'xl') selected @endif>{{ __('admin/employees.fields.xl') }}</option>
                                                <option value="2xl" @if(old('tshirt_size') == '2xl') selected @endif>{{ __('admin/employees.fields.2xl') }}</option>
                                                <option value="3xl" @if(old('tshirt_size') == '3xl') selected @endif>{{ __('admin/employees.fields.3xl') }}</option>
                                                <option value="4xl" @if(old('tshirt_size') == '4xl') selected @endif>{{ __('admin/employees.fields.4xl') }}</option>
                                                <option value="5xl" @if(old('tshirt_size') == '5xl') selected @endif>{{ __('admin/employees.fields.5xl') }}</option>
                                            </select>
                                            @error('tshirt_size')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.shoe_size') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="shoe_size" placeholder="{{ __('admin/employees.fields.shoe_size') }}" value="{{ old('shoe_size') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('shoe_size') border border-danger @enderror" type="text"/>
                                            @error('shoe_size')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                </div>
                            </div>



                            <div class="card card-box custom mb-10" id="accordionAttachments">
                                <div class="card-header" data-toggle="collapse" href="#collapseAttachments">
                                    <a class="card-title">
                                        {{ __('admin/employees.fields.attachments') }}
                                    </a>
                                </div>
                                <div id="collapseAttachments" class="card-body show" data-parent="#accordionAttachments" >

                                    <div class="form-group row">
                                        <p class="col-sm-12 col-md-12 col-form-label">
                                            {{ __('admin/employees.fields.atachments_ex') }}
                                        </p>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.passport_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="passport_file" placeholder="{{ __('admin/employees.fields.passport_file') }}" value="{{ old('passport_file') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('passport_file') border border-danger @enderror" type="file"/>
                                            @error('passport_file')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.smart_id_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="smart_id_file" placeholder="{{ __('admin/employees.fields.smart_id_file') }}" value="{{ old('smart_id_file') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('smart_id_file') border border-danger @enderror" type="file"/>
                                            @error('smart_id_file')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.salary_print_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="salary_print_file" placeholder="{{ __('admin/employees.fields.salary_print_file') }}" value="{{ old('salary_print_file') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('salary_print_file') border border-danger @enderror" type="file"/>
                                            @error('salary_print_file')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.bank_report_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="bank_report_file" placeholder="{{ __('admin/employees.fields.bank_report_file') }}" value="{{ old('bank_report_file') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('bank_report_file') border border-danger @enderror" type="file"/>
                                            @error('bank_report_file')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.cv_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="cv_file" placeholder="{{ __('admin/employees.fields.cv_file') }}" value="{{ old('cv_file') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('cv_file') border border-danger @enderror" type="file"/>
                                            @error('cv_file')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.other_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="other_file" placeholder="{{ __('admin/employees.fields.other_file') }}" value="{{ old('other_file') }}" class="border-gray-300 rounded-md shadow-sm form-control @error('other_file') border border-danger @enderror" type="file"/>
                                            @error('other_file')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>



                    <div class="col-sm-12 col-md-4 mb-30">
                            <div class="card card-box custom mb-10" id="accordionImage">
                                <div class="card-header" data-toggle="collapse" href="#collapseImage">
                                    <a class="card-title">
                                        {{ __('admin/employees.fields.personal_picture') }}
                                    </a>
                                </div>
                                <div id="collapseImage" class="card-body show pb-0" data-parent="#accordionImage" aria-expanded="true">
                                    <div class="form-group row" id="user_image_field_{{$field}}">
                                        <div class="col-sm-6 col-md-6 hidden">
                                            <input name="personal_picture" id="user_image_{{$field}}" placeholder="personal_picture" value="{{ old('personal_picture') }}" class="hidden form-control @error('personal_picture') border border-danger @enderror" type="text"/>
                                            @error('personal_picture')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            {{--@livewire('admin.media-upload')--}}
                                            <div class="image_preview" style="float: left; margin-right: 20px;"></div>
                                            <div class="clearfix"></div>
                                            <div class="block">
                                                <a href="#" class="btn-block" data-toggle="modal" data-target=".media_uploader_{{$field}}" type="button">{{ __('admin/employees.fields.media') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card card-box custom mb-10" id="accordionMandate">
                                <div class="card-header" data-toggle="collapse" href="#collapseMandate">
                                    <a class="card-title">
                                        {{ __('admin/employees.fields.mandate_st') }}
                                    </a>
                                </div>
                                <div id="collapseMandate" class="card-body show" data-parent="#accordionMandate" >

                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-12">
                                            <select name="mandate_type" id="mandate_type" class="border-gray-300 rounded-md shadow-sm custom-select col-12 @error('mandate_type') border border-danger @enderror">
                                                <option  @if(old('mandate_type') == '') selected @endif>{{ __('admin/employees.fields.choose') }}</option>
                                                <option value="not" @if(old('mandate_type') == 'not') selected @endif>{{ __('admin/employees.fields.not') }}</option>
                                                <option value="mandate" @if(old('mandate_type') == 'mandate') selected @endif>{{ __('admin/employees.fields.mandate') }}</option>
                                            </select>
                                            @error('mandate_type')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="form-group row mandate_startdate">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.mandate_startdate') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="mandate_startdate" placeholder="{{ __('admin/employees.fields.mandate_startdate') }}" value="{{ old('mandate_startdate') }}" class="date-picker border-gray-300 rounded-md shadow-sm form-control @error('mandate_startdate') border border-danger @enderror" type="text"/>
                                            @error('mandate_startdate')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="form-group row mandate_enddate">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.mandate_enddate') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="mandate_enddate" placeholder="{{ __('admin/employees.fields.mandate_enddate') }}" value="{{ old('mandate_enddate') }}" class="date-picker border-gray-300 rounded-md shadow-sm form-control @error('mandate_enddate') border border-danger @enderror" type="text"/>
                                            @error('mandate_enddate')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card card-box custom mb-10" id="accordionStatus">
                                <div class="card-header" data-toggle="collapse" href="#collapseStatus">
                                    <a class="card-title">{{ __('admin/employees.fields.category') }}
                                    </a>
                                </div>
                                <div id="collapseStatus" class="card-body show" data-parent="#accordionStatus" >

                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-12">

                                            <select name="category" class="border-gray-300 rounded-md shadow-sm custom-select col-12 @error('category') border border-danger @enderror">
                                                <option @if(old('category') == '') selected @endif>{{ __('admin/employees.fields.choose') }}</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" @if($category->id == old('category')) selected @endif>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-10">
                            <button class="btn btn-primary bg-gray-800" type="submit">{{ __('admin/employees.fields.create') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="user_image_modal_{{$field}}">
        <livewire:admin.media-box :field="$field" />
    </div>

    <div id="user_image_modal_{{$visa1}}">
        <livewire:admin.media-box :field="$visa1" />
    </div>

    <div id="user_image_modal_{{$visa2}}">
        <livewire:admin.media-box :field="$visa2" />
    </div>

    <div id="user_image_modal_{{$visa3}}">
        <livewire:admin.media-box :field="$visa3" />
    </div>

    <div id="user_image_modal_{{$visa4}}">
        <livewire:admin.media-box :field="$visa4" />
    </div>

    <div id="user_image_modal_{{$visa5}}">
        <livewire:admin.media-box :field="$visa5" />
    </div>


    @section('scripts')
        <script>
            $('#user_image_modal_{{$field}} #gallery_{{$field}} a.image_ch').click(function(){
                $('#user_image_field_{{$field}} #user_image_{{$field}}').val($(this).data('image'));
                var value = $("#user_image_{{$field}}").val();
                $("#user_image_field_{{$field}} .image_preview").html('<a class="cursor-pointer remove_img"><i class="fa fa-times-circle text-gray-700 text-2x1 float-left"></i><img src="'+value+'" width="100" /></a>');

                $("#user_image_field_{{$field}} .image_preview a.remove_img").click(function(){
                    $('#user_image_field_{{$field}} #user_image_{{$field}}').val('');
                    $("#user_image_field_{{$field}} .image_preview a.remove_img").remove();
                });
                //$('.media_uploader').modal('hide');
            });

            $('#user_image_modal_{{$visa1}} #gallery_{{$visa1}} a.image_ch').click(function(){
                $('#user_image_field_{{$visa1}} #user_image_{{$visa1}}').val($(this).data('image'));
                var value = $("#user_image_{{$visa1}}").val();
                $("#user_image_field_{{$visa1}} .image_preview").html('<a class="cursor-pointer remove_img"><i class="fa fa-times-circle text-gray-700 text-2x1 float-left"></i><img src="'+value+'" width="100" /></a>');

                $("#user_image_field_{{$visa1}} .image_preview a.remove_img").click(function(){
                    $('#user_image_field_{{$visa1}} #user_image_{{$visa1}}').val('');
                    $("#user_image_field_{{$visa1}} .image_preview a.remove_img").remove();
                });
            });

            $('#user_image_modal_{{$visa2}} #gallery_{{$visa2}} a.image_ch').click(function(){
                $('#user_image_field_{{$visa2}} #user_image_{{$visa2}}').val($(this).data('image'));
                var value = $("#user_image_{{$visa2}}").val();
                $("#user_image_field_{{$visa2}} .image_preview").html('<a class="cursor-pointer remove_img"><i class="fa fa-times-circle text-gray-700 text-2x1 float-left"></i><img src="'+value+'" width="100" /></a>');

                $("#user_image_field_{{$visa2}} .image_preview a.remove_img").click(function(){
                    $('#user_image_field_{{$visa2}} #user_image_{{$visa2}}').val('');
                    $("#user_image_field_{{$visa2}} .image_preview a.remove_img").remove();
                });
            });

            $('#user_image_modal_{{$visa3}} #gallery_{{$visa3}} a.image_ch').click(function(){
                $('#user_image_field_{{$visa3}} #user_image_{{$visa3}}').val($(this).data('image'));
                var value = $("#user_image_{{$visa3}}").val();
                $("#user_image_field_{{$visa3}} .image_preview").html('<a class="cursor-pointer remove_img"><i class="fa fa-times-circle text-gray-700 text-2x1 float-left"></i><img src="'+value+'" width="100" /></a>');

                $("#user_image_field_{{$visa3}} .image_preview a.remove_img").click(function(){
                    $('#user_image_field_{{$visa3}} #user_image_{{$visa3}}').val('');
                    $("#user_image_field_{{$visa3}} .image_preview a.remove_img").remove();
                });
            });

            $('#user_image_modal_{{$visa4}} #gallery_{{$visa4}} a.image_ch').click(function(){
                $('#user_image_field_{{$visa4}} #user_image_{{$visa4}}').val($(this).data('image'));
                var value = $("#user_image_{{$visa4}}").val();
                $("#user_image_field_{{$visa4}} .image_preview").html('<a class="cursor-pointer remove_img"><i class="fa fa-times-circle text-gray-700 text-2x1 float-left"></i><img src="'+value+'" width="100" /></a>');

                $("#user_image_field_{{$visa4}} .image_preview a.remove_img").click(function(){
                    $('#user_image_field_{{$visa4}} #user_image_{{$visa4}}').val('');
                    $("#user_image_field_{{$visa4}} .image_preview a.remove_img").remove();
                });
            });

            $('#user_image_modal_{{$visa5}} #gallery_{{$visa5}} a.image_ch').click(function(){
                $('#user_image_field_{{$visa5}} #user_image_{{$visa5}}').val($(this).data('image'));
                var value = $("#user_image_{{$visa5}}").val();
                $("#user_image_field_{{$visa5}} .image_preview").html('<a class="cursor-pointer remove_img"><i class="fa fa-times-circle text-gray-700 text-2x1 float-left"></i><img src="'+value+'" width="100" /></a>');

                $("#user_image_field_{{$visa5}} .image_preview a.remove_img").click(function(){
                    $('#user_image_field_{{$visa5}} #user_image_{{$visa5}}').val('');
                    $("#user_image_field_{{$visa5}} .image_preview a.remove_img").remove();
                });
            });

            $('.mandate_startdate').hide();
            $('.mandate_enddate').hide();
            $("#mandate_type").change(function() {
                if ($(this).val() === 'mandate'){
                    $('.mandate_startdate').show();
                    $('.mandate_enddate').show();
                } else {
                    $('.mandate_startdate').hide();
                    $('.mandate_enddate').hide();
                }
            });



            var bank_count = 0;
            $(document).on('click', '#bank_table .add_bank', function(){
                var bank_html = '';
                bank_html += '<div class="hidden">'+bank_count+++'</div>';
                bank_html += '<div class="tr"><div class="card card-box custom mb-10" id="accordion_bank_'+bank_count+'"><div class="card-header" data-toggle="collapse" href="#collapse_bank_'+bank_count+'"><a class="card-title">{{ __('admin/employees.fields.bank_sec') }} <span></span></a></div><div id="collapse_bank_'+bank_count+'" class="card-body show" data-parent="#accordion_bank_'+bank_count+'" >';
                bank_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.bank_name') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><input name="bank_name[]" placeholder="{{ __('admin/employees.fields.bank_name') }}" value="{{ old('bank_name') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                bank_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.account_num') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><input name="account_num[]" placeholder="{{ __('admin/employees.fields.account_num') }}" value="{{ old('account_num') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                bank_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.iban_num') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><input name="iban_num[]" placeholder="{{ __('admin/employees.fields.iban_num') }}" value="{{ old('iban_num') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                bank_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.branch') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><input name="branch[]" placeholder="{{ __('admin/employees.fields.branch') }}" value="{{ old('branch') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                bank_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.swift_code') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><input name="swift_code[]" placeholder="{{ __('admin/employees.fields.swift_code') }}" value="{{ old('swift_code') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                bank_html += '<div class="td"><button type="button" class="btn btn-danger btn-sm bank_remove" style="background: red;"><span class="fa fa-minus"></span></button></div>';
                bank_html += '</div></div>';
                $('#bank_table').append(bank_html);
            });

            $(document).on('click', '.bank_remove', function(){
                $(this).closest('div.tr').remove();
                bank_count--;
                $('#bank_table .hidden').text('');
            });


            var visa_count = 0;
            $(document).on('click', '#visa_table .add_visa', function(){

                var visa_html = '';
                visa_html += '<div class="hidden">'+visa_count+++'</div>';
                visa_html += '<div class="tr"><div class="card card-box custom mb-10" id="accordion_bank_'+visa_count+'"><div class="card-header" data-toggle="collapse" href="#collapse_bank_'+visa_count+'"><a class="card-title">{{ __('admin/employees.fields.visa_sec') }} <span></span></a></div><div id="collapse_bank_'+visa_count+'" class="card-body show" data-parent="#accordion_bank_'+visa_count+'" >';
                if(visa_count == 1) {
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_type') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><select name="visa_type[]" id="visa_type_'+visa_count+'" class="border-gray-300 rounded-md shadow-sm custom-select col-12"><option  @if(old('visa_type') == '') selected @endif>{{ __('admin/employees.fields.none') }}</option><option value="schengen" @if(old('visa_type') == 'schengen') selected @endif>{{ __('admin/employees.fields.schengen') }}</option><option value="british" @if(old('visa_type') == 'british') selected @endif>{{ __('admin/employees.fields.british') }}</option><option value="usa" @if(old('visa_type') == 'usa') selected @endif>{{ __('admin/employees.fields.usa') }}</option><option value="other" @if(old('visa_type') == 'other') selected @endif>{{ __('admin/employees.fields.other') }}</option></select></div></div>';
                    visa_html += '<div class="td visa_other_'+visa_count+' hidden"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_other') }}</label></div>   <div class="td visa_other_'+visa_count+' hidden"><div class="col-sm-12 col-md-12"><input name="visa_other[]" placeholder="{{ __('admin/employees.fields.visa_other') }}" value="{{ old('visa_other') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                }else if(visa_count == 2){
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_type') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><select name="visa_type[]" id="visa_type_'+visa_count+'" class="border-gray-300 rounded-md shadow-sm custom-select col-12"><option  @if(old('visa_type') == '') selected @endif>{{ __('admin/employees.fields.none') }}</option><option value="schengen" @if(old('visa_type') == 'schengen') selected @endif>{{ __('admin/employees.fields.schengen') }}</option><option value="british" @if(old('visa_type') == 'british') selected @endif>{{ __('admin/employees.fields.british') }}</option><option value="usa" @if(old('visa_type') == 'usa') selected @endif>{{ __('admin/employees.fields.usa') }}</option><option value="other" @if(old('visa_type') == 'other') selected @endif>{{ __('admin/employees.fields.other') }}</option></select></div></div>';
                    visa_html += '<div class="td visa_other_'+visa_count+' hidden"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_other') }}</label></div>   <div class="td visa_other_'+visa_count+' hidden"><div class="col-sm-12 col-md-12"><input name="visa_other[]" placeholder="{{ __('admin/employees.fields.visa_other') }}" value="{{ old('visa_other') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                }else if(visa_count == 3){
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_type') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><select name="visa_type[]" id="visa_type_'+visa_count+'" class="border-gray-300 rounded-md shadow-sm custom-select col-12"><option  @if(old('visa_type') == '') selected @endif>{{ __('admin/employees.fields.none') }}</option><option value="schengen" @if(old('visa_type') == 'schengen') selected @endif>{{ __('admin/employees.fields.schengen') }}</option><option value="british" @if(old('visa_type') == 'british') selected @endif>{{ __('admin/employees.fields.british') }}</option><option value="usa" @if(old('visa_type') == 'usa') selected @endif>{{ __('admin/employees.fields.usa') }}</option><option value="other" @if(old('visa_type') == 'other') selected @endif>{{ __('admin/employees.fields.other') }}</option></select></div></div>';
                    visa_html += '<div class="td visa_other_'+visa_count+' hidden"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_other') }}</label></div>   <div class="td visa_other_'+visa_count+' hidden"><div class="col-sm-12 col-md-12"><input name="visa_other[]" placeholder="{{ __('admin/employees.fields.visa_other') }}" value="{{ old('visa_other') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                }else if(visa_count == 4){
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_type') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><select name="visa_type[]" id="visa_type_'+visa_count+'" class="border-gray-300 rounded-md shadow-sm custom-select col-12"><option  @if(old('visa_type') == '') selected @endif>{{ __('admin/employees.fields.none') }}</option><option value="schengen" @if(old('visa_type') == 'schengen') selected @endif>{{ __('admin/employees.fields.schengen') }}</option><option value="british" @if(old('visa_type') == 'british') selected @endif>{{ __('admin/employees.fields.british') }}</option><option value="usa" @if(old('visa_type') == 'usa') selected @endif>{{ __('admin/employees.fields.usa') }}</option><option value="other" @if(old('visa_type') == 'other') selected @endif>{{ __('admin/employees.fields.other') }}</option></select></div></div>';
                    visa_html += '<div class="td visa_other_'+visa_count+' hidden"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_other') }}</label></div>   <div class="td visa_other_'+visa_count+' hidden"><div class="col-sm-12 col-md-12"><input name="visa_other[]" placeholder="{{ __('admin/employees.fields.visa_other') }}" value="{{ old('visa_other') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                }else if(visa_count == 5){
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_type') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><select name="visa_type[]" id="visa_type_'+visa_count+'" class="border-gray-300 rounded-md shadow-sm custom-select col-12"><option  @if(old('visa_type') == '') selected @endif>{{ __('admin/employees.fields.none') }}</option><option value="schengen" @if(old('visa_type') == 'schengen') selected @endif>{{ __('admin/employees.fields.schengen') }}</option><option value="british" @if(old('visa_type') == 'british') selected @endif>{{ __('admin/employees.fields.british') }}</option><option value="usa" @if(old('visa_type') == 'usa') selected @endif>{{ __('admin/employees.fields.usa') }}</option><option value="other" @if(old('visa_type') == 'other') selected @endif>{{ __('admin/employees.fields.other') }}</option></select></div></div>';
                    visa_html += '<div class="td visa_other_'+visa_count+' hidden"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_other') }}</label></div>   <div class="td visa_other_'+visa_count+' hidden"><div class="col-sm-12 col-md-12"><input name="visa_other[]" placeholder="{{ __('admin/employees.fields.visa_other') }}" value="{{ old('visa_other') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                }

                visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_releasedate') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><input name="visa_releasedate[]" placeholder="{{ __('admin/employees.fields.visa_releasedate') }}" value="{{ old('visa_releasedate') }}" class="date-picker2 border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_expirationdate') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><input name="visa_expirationdate[]" placeholder="{{ __('admin/employees.fields.visa_expirationdate') }}" value="{{ old('visa_expirationdate') }}" class="date-picker2 border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.notes') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"><input name="notes[]" placeholder="{{ __('admin/employees.fields.notes') }}" value="{{ old('notes') }}" class="border-gray-300 rounded-md shadow-sm form-control" type="text"/> </div></div>';
                if(visa_count == 1){
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_image') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"> <div class="form-group row" id="user_image_field_{{$visa1}}"><div class="col-sm-6 col-md-6 hidden"><input name="visa_image[]" id="user_image_{{$visa1}}" placeholder="visa_image" value="{{ old('visa_image') }}" class="hidden form-control" type="text"/></div><div class="col-sm-12 col-md-12"><div class="image_preview" style="float: left; margin-right: 20px;"></div><div class="clearfix"></div><div class="block"><a href="#" class="btn-block" data-toggle="modal" data-target=".media_uploader_{{$visa1}}" type="button">{{ __('admin/employees.fields.media') }}</a></div></div></div></div></div>';
                }else if(visa_count == 2){
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_image') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"> <div class="form-group row" id="user_image_field_{{$visa2}}"><div class="col-sm-6 col-md-6 hidden"><input name="visa_image[]" id="user_image_{{$visa2}}" placeholder="visa_image" value="{{ old('visa_image') }}" class="hidden form-control" type="text"/></div><div class="col-sm-12 col-md-12"><div class="image_preview" style="float: left; margin-right: 20px;"></div><div class="clearfix"></div><div class="block"><a href="#" class="btn-block" data-toggle="modal" data-target=".media_uploader_{{$visa2}}" type="button">{{ __('admin/employees.fields.media') }}</a></div></div></div></div></div>';
                }else if(visa_count == 3){
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_image') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"> <div class="form-group row" id="user_image_field_{{$visa3}}"><div class="col-sm-6 col-md-6 hidden"><input name="visa_image[]" id="user_image_{{$visa3}}" placeholder="visa_image" value="{{ old('visa_image') }}" class="hidden form-control" type="text"/></div><div class="col-sm-12 col-md-12"><div class="image_preview" style="float: left; margin-right: 20px;"></div><div class="clearfix"></div><div class="block"><a href="#" class="btn-block" data-toggle="modal" data-target=".media_uploader_{{$visa3}}" type="button">{{ __('admin/employees.fields.media') }}</a></div></div></div></div></div>';
                }else if(visa_count == 4){
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_image') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"> <div class="form-group row" id="user_image_field_{{$visa4}}"><div class="col-sm-6 col-md-6 hidden"><input name="visa_image[]" id="user_image_{{$visa4}}" placeholder="visa_image" value="{{ old('visa_image') }}" class="hidden form-control" type="text"/></div><div class="col-sm-12 col-md-12"><div class="image_preview" style="float: left; margin-right: 20px;"></div><div class="clearfix"></div><div class="block"><a href="#" class="btn-block" data-toggle="modal" data-target=".media_uploader_{{$visa4}}" type="button">{{ __('admin/employees.fields.media') }}</a></div></div></div></div></div>';
                }else if(visa_count == 5){
                    visa_html += '<div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_image') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"> <div class="form-group row" id="user_image_field_{{$visa5}}"><div class="col-sm-6 col-md-6 hidden"><input name="visa_image[]" id="user_image_{{$visa5}}" placeholder="visa_image" value="{{ old('visa_image') }}" class="hidden form-control" type="text"/></div><div class="col-sm-12 col-md-12"><div class="image_preview" style="float: left; margin-right: 20px;"></div><div class="clearfix"></div><div class="block"><a href="#" class="btn-block" data-toggle="modal" data-target=".media_uploader_{{$visa5}}" type="button">{{ __('admin/employees.fields.media') }}</a></div></div></div></div></div>';
                }
                visa_html += '<div class="td"><button type="button" class="btn btn-danger btn-sm visa_remove" style="background: red;"><span class="fa fa-minus"></span></button></div>';
                visa_html += '</div></div>';
                $('#visa_table').append(visa_html);


                $(".date-picker2").datepicker({
                    language: "en",
                    autoClose: true,
                    dateFormat: "dd/mm/yyyy",
                });
                $("#visa_type_1").change(function() { if ($(this).val() === 'other'){ $('.visa_other_1').show(); } else { $('.visa_other_1').hide(); } });

                $("#visa_type_2").change(function() { if ($(this).val() === 'other'){ $('.visa_other_2').show(); } else { $('.visa_other_2').hide(); } });

                $("#visa_type_3").change(function() { if ($(this).val() === 'other'){ $('.visa_other_3').show(); } else { $('.visa_other_3').hide(); } });

                $("#visa_type_4").change(function() { if ($(this).val() === 'other'){ $('.visa_other_4').show(); } else { $('.visa_other_4').hide(); } });

                $("#visa_type_5").change(function() { if ($(this).val() === 'other'){ $('.visa_other_5').show(); } else { $('.visa_other_5').hide(); } });

            });

            $(document).on('click', '.visa_remove', function(){
                $(this).closest('div.tr').remove();
                visa_count--;
                $('#visa_table .hidden').text('');
            });

        </script>
    @endsection
    @section('page_title'){{ __('admin/employees.create.title_tag') }}@endsection
</x-admin-layout>
