@extends('main')
@section('navItem')
<div class="items" style="position: relative; left:0 auto; font-size: medium; display: inline-block;">
    <ul class="nav nav-tab">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu dropdown-menu-dark">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Action</a>
            </div>
        </li>
    </ul>
</div>
@endsection
@section('content')
    <h1>hello</h1>
    <i class="fas fa-clock"></i>
@endsection
