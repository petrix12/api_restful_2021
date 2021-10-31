{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}

@php
    /* $message = 'sdfdsf';
    $code = 404;
    return response()->json(['error' => $message, 'code' => $code], $code); */
    $a = 2;
    $b =5;
    $message = 'sdfdsfsf';
    $code = 404;
    echo response()->json(['error' => $message, 'code' => $code], $code);
@endphp


