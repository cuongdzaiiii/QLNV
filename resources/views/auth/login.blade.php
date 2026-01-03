@extends('layouts.app')

@section('title', 'Đăng nhập')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">
            Đăng nhập hệ thống
        </h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                <input type="email" name="email"
                       class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300"
                       required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">Mật khẩu</label>
                <input type="password" name="password"
                       class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300"
                       required>
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold">
                Đăng nhập
            </button>
        </form>
    </div>
</div>
@endsection
