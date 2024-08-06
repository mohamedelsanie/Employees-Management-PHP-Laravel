<x-admin-layout>
    <x-slot name="header">
        <div class="page-header mb-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('admin/common.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.employees.index') }}">{{ __('admin/employees.index.title') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('admin/employees.show.show') }}<code>{{ $data->name_ar }}</code></li>
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
                        <h4 class="text-blue h4">{{ __('admin/employees.edit.edit') }} </h4>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-8 mb-30">


                            <div class="form-group row">
                                <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.name_ar') }}</label>
                                <div class="col-sm-12 col-md-12">
                                    {{ $data->name_ar }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.name_en') }}</label>
                                <div class="col-sm-12 col-md-12">
                                    {{ $data->name_en }}
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
                                            {{ $data->persional_num }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.job_pos') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->job_pos }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.passport_num') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->passport_num }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.nationality') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->nationality }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.birthplace') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->birthplace }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.passposrt_releasedate') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->passposrt_releasedate }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.passport_expirationdate') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->passport_expirationdate }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.pasport_type') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            @if($data->pasport_type == 'normal')
                                                <p>عادى</p>
                                            @elseif($data->pasport_type == 'private')
                                                <p>خاص</p>
                                            @elseif($data->pasport_type == 'diplomatic')
                                                <p>دبلوماسى</p>
                                            @else
                                                <p>عادى</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.gender') }}</label>

                                        <div class="col-sm-12 col-md-12">
                                            @if($data->gender == 'male')
                                                <p>ذكر</p>
                                            @elseif($data->gender == 'female')
                                                <p>انثى</p>
                                            @endif
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
                                            {{ $data->mobile_num }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.phone_num') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->phone_num }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.sos_phone_num') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->sos_phone_num }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.kinship') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->kinship }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.email') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->email }}
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
                                            {{ $data->apartment }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.building') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->building }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.streat') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->streat }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.complex') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->complex }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.region') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->region }}
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

                                                @foreach($banks as $key => $bank)
                                                    <div class="tr"><div class="card card-box custom mb-10" id="accordion_bank_{{ $key }}"><div class="card-header" data-toggle="collapse" href="#collapse_bank_{{ $key }}"><a class="card-title">{{ __('admin/employees.fields.bank_sec') }} <span></span></a></div><div id="collapse_bank_{{ $key }}" class="card-body show" data-parent="#accordion_bank_{{ $key }}" >
                                                        <div class="td">

                                                            <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.bank_name') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $bank[0] }} </div></div>
                                                            <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.account_num') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $bank[1] }}</div></div>
                                                            <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.iban_num') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $bank[2] }} </div></div>
                                                            <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.branch') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $bank[3] }}</div></div>
                                                            <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.swift_code') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $bank[4] }}</div></div>
                                                            </div></div>
                                                        </div>
                                                    </div>
                                                @endforeach
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


                                                @foreach($visas as $key => $visa)
                                                    <div class="tr"><div class="card card-box custom mb-10" id="accordion_bank_{{ $key }}"><div class="card-header" data-toggle="collapse" href="#collapse_bank_{{ $key }}"><a class="card-title">{{ __('admin/employees.fields.visa_sec') }} <span></span></a></div><div id="collapse_bank_{{ $key }}" class="card-body show" data-parent="#accordion_bank_{{ $key }}" >
                                                                @if($visa[0] != 'other')
                                                                <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_type') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $visa[0] }}</div></div>
                                                                @endif
                                                                @if($visa[0] == 'other')
                                                                    <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_other') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $visa[5] }} </div></div>
                                                                @endif
                                                                <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_releasedate') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $visa[1] }} </div></div>
                                                                <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_expirationdate') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $visa[2] }} </div></div>
                                                                <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.notes') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12">{{ $visa[3] }} </div></div>

                                                                <div class="td"><label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.visa_image') }}</label></div>   <div class="td"><div class="col-sm-12 col-md-12"> <div class="image_preview" style="float: left; margin-right: 20px;">@if($visa[4])<img src="{{ $visa[4] }}" width="100" />@endif</div><div class="clearfix"></div></div></div></div></div>

                                                            </div>
                                                @endforeach
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
                                           @if($data->work_type == 'military')
                                               <p>عسكرى</p>
                                            @elseif($data->work_type == 'civilian')
                                               <p>مدنى</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.work_place') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->work_place }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.job_number') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->job_number }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.job_title') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->job_title }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.work_section') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->work_section }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.line_manger_name') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->line_manger_name }}
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

                                            @if($data->tshirt_size == 'xs')
                                                <p>مقاس صغير جداً</p>
                                            @elseif($data->tshirt_size == 's')
                                                <p>مقاس صغير</p>
                                            @elseif($data->tshirt_size == 'm')
                                                <p>مقاس متوسط</p>
                                            @elseif($data->tshirt_size == 'l')
                                                <p>مقاس كبير</p>
                                            @elseif($data->tshirt_size == 'xl')
                                                <p>مقاس كبير 1x</p>
                                            @elseif($data->tshirt_size == '2xl')
                                                <p>مقاس كبير 2x</p>
                                            @elseif($data->tshirt_size == '3xl')
                                                <p>مقاس كبير 3x</p>
                                            @elseif($data->tshirt_size == '4xl')
                                                <p>مقاس كبير 4x</p>
                                            @elseif($data->tshirt_size == '5xl')
                                                <p>مقاس كبير 5x</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.shoe_size') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->shoe_size }}
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
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.passport_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            @if($data->passport_file != '')
                                            <div class="file_uploaded">
                                                <a class="btn btn-primary" href="{{ url('passport_file/'.$data->passport_file) }}">File</a>
                                            </div>
                                            @else
                                                <p>لم يتم رفع ملف</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.smart_id_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            @if($data->smart_id_file != '')
                                                <div class="file_uploaded">
                                                    <a class="btn btn-primary" href="{{ url('smart_id_file/'.$data->smart_id_file) }}">File</a>
                                                </div>
                                            @else
                                                <p>لم يتم رفع ملف</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.salary_print_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            @if($data->salary_print_file != '')
                                                <div class="file_uploaded">
                                                    <a class="btn btn-primary" href="{{ url('salary_print_file/'.$data->salary_print_file) }}">File</a>
                                                </div>
                                            @else
                                                <p>لم يتم رفع ملف</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.bank_report_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            @if($data->bank_report_file != '')
                                                <div class="file_uploaded">
                                                    <a class="btn btn-primary" href="{{ url('bank_report_file/'.$data->bank_report_file) }}">File</a>
                                                </div>
                                            @else
                                                <p>لم يتم رفع ملف</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.cv_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            @if($data->cv_file != '')
                                                <div class="file_uploaded">
                                                    <a class="btn btn-primary" href="{{ url('cv_file/'.$data->cv_file) }}">File</a>
                                                </div>
                                            @else
                                                <p>لم يتم رفع ملف</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.other_file') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            @if($data->other_file != '')
                                                <div class="file_uploaded">
                                                    <a class="btn btn-primary" href="{{ url('other_file/'.$data->other_file) }}">File</a>
                                                </div>
                                            @else
                                                <p>لم يتم رفع ملف</p>
                                            @endif
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

                                        <div class="col-sm-12 col-md-12">
                                            {{--@livewire('admin.media-upload')--}}
                                            <div class="image_preview" style="float: left; margin-right: 20px;">
                                                @if($data->personal_picture)
                                                    <img src="{{ $data->personal_picture }}" width="100" />
                                                @endif
                                            </div>
                                            <div class="clearfix"></div>
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
                                            @if($data->mandate_type == 'mandate')
                                                <p>منتدب</p>
                                                @else
                                                <p>غير منتدب</p>
                                            @endif
                                        </div>
                                    </div>

                                    @if($data->mandate_type == 'mandate')
                                    <div class="form-group row mandate_startdate">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.mandate_startdate') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->mandate_startdate }}
                                        </div>
                                    </div>


                                    <div class="form-group row mandate_enddate">
                                        <label class="col-sm-12 col-md-12 col-form-label">{{ __('admin/employees.fields.mandate_enddate') }}</label>
                                        <div class="col-sm-12 col-md-12">
                                            {{ $data->mandate_enddate }}
                                        </div>
                                    </div>
                                    @endif

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

                                            {{ $category->name }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
            </div>
        </div>
    </div>



    @section('scripts')
        <script>
        </script>
    @endsection
    @section('page_title'){{  __('admin/employees.edit.title_tag',['name' => $data->name_ar]) }}@endsection
</x-admin-layout>
