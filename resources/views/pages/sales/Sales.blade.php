@extends('main')
@section('style')
    @yield('salesStyle')
@endsection
@section('navItem')
<div class="items" style="position: relative; left:0 auto; font-size: medium; display: inline-block;">
    <ul class="nav nav-tab">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Oders</a>
            <div class="dropdown-menu dropdown-menu-dark">
                <a class="dropdown-item" href="{{ url('/sales') }}">Quotations</a>
                <a class="dropdown-item" href="#">Orders</a>
                {{-- <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item" href="#">Sales Teams</a>
                <a class="dropdown-item" href="#">Customers</a>
            </div>
        </li>
    </ul>
</div>
@endsection
@section('content')
    @yield('salesBlade')
    <i class="fas fa-clock"></i>
@endsection
