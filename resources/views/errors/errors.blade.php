@foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
@endforeach
@if(\Session::has('fails'))
    <p class="alert alert-danger">{{\Session::get('fails')}}</p>
@endif