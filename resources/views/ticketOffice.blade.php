@extends('head')
@section('title', 'Tikect Office')
@section('script', 'js/ticketOffice.js')
@section('content')

    <?php
    $date0 = date('Y');
    $date1 = date('Y') - 1;
    $date2 = date('Y') - 2;
    $date3 = date('Y') - 3;
    $date4 = date('Y') - 4;
    ?>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 text-center mt-4">
            <p class="h2 fw-bold">Estadísticas</p>
            <hr class="mt-4 border border-dark border-3 rounded-4 contShadow">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-1 text-top">
            <select class="form-select fw-bold text-white mt-3" id="years">
                <option selected><?php echo $date0; ?></option>
                <option value="<?php echo $date1; ?>"><?php echo $date1; ?></option>
                <option value="<?php echo $date2; ?>"><?php echo $date2; ?></option>
                <option value="<?php echo $date3; ?>"><?php echo $date3; ?></option>
                <option value="<?php echo $date4; ?>"><?php echo $date4; ?></option>
            </select>
        </div>
        <div class="col-11 col-md-8 col-lg-7">
            <canvas id="barChart"></canvas>
        </div>
    </div>
@endsection
