@extends('layout.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="py-3 text-center">Halaman Profile</h1>
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ auth()->user()->email }}</td>
        </tr>
    </table>
</div>
@endsection