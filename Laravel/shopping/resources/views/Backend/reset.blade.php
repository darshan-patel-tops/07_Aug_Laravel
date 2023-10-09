@extends('layouts.app')



@section('kuchbhi')


<div class="mt-3 mb-3 col-md-6">
<center>

    <form action="" method="POST">



        <input type="hidden" name="token" value="{{ $token }}">
        <input type="password" name="password" class="form-control ">
        <button type="submit" class="btn btn-primary">Reset Password</button>
@csrf
    </form>
</center>
</div>


@endsection
