<!-- start container -->
<div class="container">
    <!-- start row -->
    <div class="row">
        <!-- start col-lg-10 -->
        <div class="col-lg-12 mx-auto">
            <!-- start home-title -->
            <div class="home-title">
                <h4>Piemont Consulting Bt.</h4>
                <h1 style="font-weight: 300;">{{ trans('site.home-title') }}</h1>
            </div>
            <!-- end home-title -->
            <!-- start home-social -->
            <div class="about-button d-flex justify-content-center">
                <a href="{{ route('pages.documents') }}" style="font-size: 1.2rem;">@guest{{ trans('site.client-login') }} @else {{ trans('site.documents') }} @endguest</a>
            </div>
            <!-- end home-social -->
        </div>
        <!-- end col-lg-10 -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->

