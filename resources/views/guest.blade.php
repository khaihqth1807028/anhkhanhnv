@extends('layouts.app')
@section('content')






    <div class="container" style="margin: auto;text-align: center">
        <?php if (session('errorPermission')){ ?>
        <div class="alert alert-warning" role="alert">
            <?php echo session('errorPermission') ?>
        </div>
        <?php }
        ?>
    </div>







@endsection
