<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">

    <!-- Title Page-->
    <title>Patient Create</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
</head>

<body style="direction: rtl">
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins text-center">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title font-weight-bold" style="font-size: 30px">ادخال المرضى</h2>
                <form method="post" action="{{ route('patient.store') }}">
                    @csrf
                    <div class="row row-space">
                        <div class="col">
                            <div class="input-group">
                                <label class="label font-weight-bold" style="font-size: 19px;">اسم المريض</label>
                                <input class="input--style-4" type="text" name="patient_name" @error('patient_name') is-invalid @enderror @if($errors->has('patient_name')) value="{{ old('patient_name') }}" @endif>
                                @error('patient_name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <label class="label font-weight-bold" style="font-size: 19px;">عنوان المريض</label>
                                <input class="input--style-4" type="text" name="patient_address" @error('patient_address') is-invalid @enderror @if($errors->has('patient_address')) value="{{ old('patient_address') }}" @endif>
                                @error('patient_address')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-12">
                            <div class="input-group">
                                <label class="label font-weight-bold" style="font-size: 19px;">الجنس</label>
                                <div class="rs-select2 js-select-simple select--no-search" style="width: 548px;">
                                    <select name="gender" @error('gender') is-invalid @enderror @if($errors->has('gender')) value="{{ old('gender') }}" @endif>
                                        <option disabled="disabled" selected="selected">الجنس</option>
                                        <option value="1">ذكر</option>
                                        <option value="2">أنثى</option>
                                        <option value="0">لم يحدد</option>
                                    </select>
                                    @error('gender')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label font-weight-bold" style="font-size: 19px;">الهاتف</label>
                                    <input class="input--style-4" type="text" name="phone" @error('phone') is-invalid @enderror @if($errors->has('phone')) value="{{ old('phone') }}" @endif>
                                    @error('phone')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label font-weight-bold" style="font-size: 19px;">العمر</label>
                                    <input class="input--style-4" type="text" name="age" @error('age') is-invalid @enderror @if($errors->has('age')) value="{{ old('age') }}" @endif>
                                    @error('age')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">ادخال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- Vendor JS-->
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendor/datepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/datepicker/daterangepicker.js') }}"></script>

<!-- Main JS-->
<script src="{{ asset('js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
