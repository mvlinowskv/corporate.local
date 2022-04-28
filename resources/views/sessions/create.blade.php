@extends('base')

@section('base-box-log')
<div class="pt-5 container-backgroud background-cover container-backgrond-city background-fixed d-flex align-items-center">
    <div class="bg-white color-black w-50 mx-auto h-max-content bg-section-circle bg-section-circle-bottom-right px-5">
    <h1 class="text-right py-3 pr-0 font-weight-light big-size-font color-black mx-auto">Login</h1>
    
    <form method="POST" action="/" class="w-75 ml-auto">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group text-right">
            <button style="cursor:pointer" type="submit" class="btn btn-dark w-50 p-2 my-3">Login</button>
        </div>

    </form>
    </div>
</div>

@endsection