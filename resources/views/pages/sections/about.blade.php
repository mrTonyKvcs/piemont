<!-- start container -->
<div class="container">
    <!-- start row -->
    <div class="row">
        <!-- start col-lg-12 -->
        <div class="col-lg-12">
            <!-- start title -->
            <div class="title">
                <h2>Piemont</h2>
                <h3>{{ trans('site.about') }}</h3>
            </div>
            <!-- end title -->
            <!-- start title-text -->
            <div class="title-text">
            </div>
            <!-- end title-text -->
        </div>
        <!-- end col-lg-12 -->
        <!-- start col-lg-6 -->
        <div class="col-lg-6">
            <!-- start about-media -->
            <div class="about-media">
                <!-- start about-media__image -->
                <div class="about-media__image">
                    <img src="/img/about.jpg" alt="image">
                </div>
                <!-- end about-media__image -->
                <!-- start about-media__video -->
                {{--<div class="about-media__video">--}}
                    {{--<img src="img/about2.jpg" alt="image">--}}
                    {{--<a class="play-button" href="https://www.youtube.com/watch?v=Eku4SjAyqJo"><i class="fas fa-play"></i></a>--}}
                {{--</div>--}}
                <!-- end about-media__video -->
            </div>
            <!-- end about-media -->
        </div>
        <!-- end col-lg-6 -->
        <!-- start col-lg-6 -->
        <div class="col-lg-6">
            <!-- start about-text -->
            <div class="about-text" style="font-size: 1rem;">
                {!! trans('site.about-text') !!}
            </div>
            <!-- end about-text -->
        </div>
        <!-- end col-lg-6 -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->

