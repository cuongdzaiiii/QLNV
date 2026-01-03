@extends('layouts.app')

@section('title', 'Dashboard')
@section('page_heading', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    <div class="bg-white rounded-xl p-4 shadow">
        <div class="text-sm text-gray-500">Nhân viên</div>
        <div class="text-2xl font-bold mt-1">—</div>
    </div>

    <div class="bg-white rounded-xl p-4 shadow">
        <div class="text-sm text-gray-500">Phòng ban</div>
        <div class="text-2xl font-bold mt-1">—</div>
    </div>

    <div class="bg-white rounded-xl p-4 shadow">
        <div class="text-sm text-gray-500">Chấm công tháng</div>
        <div class="text-2xl font-bold mt-1">—</div>
    </div>

    <div class="bg-white rounded-xl p-4 shadow">
        <div class="text-sm text-gray-500">Quỹ lương tháng</div>
        <div class="text-2xl font-bold mt-1">—</div>
    </div>
</div>

<div class="bg-white rounded-xl p-4 shadow mt-4">
    <div class="font-semibold mb-2">Hoạt động gần đây</div>
    <div class="text-gray-500 text-sm">Chưa có dữ liệu.</div>
</div>
@endsection
