@extends('layouts.app')


@section('content')
<main id="app_main" class="text-white">

    <div class="jumbotron mb-4"></div>
    <!-- /.jumbotron -->

    <div class="container px-3 py-5 position-relative">

        <div id="current_series" class="position-absolute bg-primary p-3">
            <h2 class="m-0 fw-bold">CURRENT SERIES</h2>
        </div>
        <!-- /#current_series -->

        <div class="row">

            <div class="col-6 col-md-4 col-lg-2" v-for="card in dataCards">
                <CardImg :thumb="card.thumb" :series="card.series"></CardImg>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary rounded-0 d-inline">LOAD MORE</button>
            </div>

        </div>
    </div>
    <!-- /cards -->

    <BannerMain></BannerMain>
    <!-- /.banner_main -->

</main>



@endsection