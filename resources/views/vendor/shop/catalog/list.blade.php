@extends('shop::base')

@section('aimeos_header')
    <?= $aiheader['locale/select'] ?? '' ?>
    <?= $aiheader['basket/mini'] ?? '' ?>
    <?= $aiheader['catalog/filter'] ?? '' ?>
    <?= $aiheader['catalog/search'] ?? '' ?>
    <?= $aiheader['catalog/tree'] ?? '' ?>
    <?= $aiheader['catalog/price'] ?? '' ?>
    <?= $aiheader['catalog/supplier'] ?? '' ?>
    <?= $aiheader['catalog/attribute'] ?? '' ?>
    <?= $aiheader['catalog/lists'] ?? '' ?>
@stop

@section('aimeos_head')
    
    <?= $aibody['basket/mini'] ?? '' ?>
    <?= $aibody['locale/select'] ?? '' ?>
@stop

@section('aimeos_nav')
@stop

@section('aimeos_body')
    <div class="row">
        <div class="col-md-3">
            <?= $aibody['catalog/filter'] ?>
        </div>
        <div class="col-md-9">
        @include('index')
        </div>
        <div class="col-md-12">
            <?= $aibody['catalog/lists'] ?>
        </div>
    </div>

    
@stop
