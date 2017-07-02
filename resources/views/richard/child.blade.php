
@extends('richard.app')

@section('title', 'Page Title')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <?php echo "test";?>
    {{time()}}
    {{"kkkk"}}
@endsection