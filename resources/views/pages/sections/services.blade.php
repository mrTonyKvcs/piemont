<!-- start container -->
<div class="container">
    <!-- start row -->
    <div class="row justify-content-center">
        <!-- start col-lg-12 -->
        <div class="col-lg-12">
            <!-- start title -->
            <div class="title">
                <h2 class="text-white">Piemont</h2>
                <h3>{{ trans('site.services') }}</h3>
            </div>
            <!-- end title -->
            <!-- start title-text -->
            <div class="title-text">
                <p>{{ trans('site.services-text') }}</p>
            </div>
            <!-- end title-text -->
        </div>
        <!-- end col-lg-12 -->

        <!-- start col-lg-4 -->
        @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <!-- start service -->
                <div class="service justify-content-center bg-white" style="min-height: 265px;">
                    <!-- start service-icon -->
                    <div class="service-icon">
                        <img width="70" height="70" src="{{ $service['svg_path'] }}">
                    </div>
                    <!-- end service-icon -->
                    <!-- start service-title -->
                    <div class="service-title">
                        <h5 class="text-center">{{ $service['name'] }}</h5>
                    </div>
                    <!-- end service-title -->
                    <!-- start service-text -->
                    {{--<div class="service-text">--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sollicitudin, erat nec malesuada imperdiet</p>--}}
                    {{--</div>--}}
                    <!-- end service-text -->
                    <!-- start service-button -->
                    {{--<div class="service-button">--}}
                        {{--<a href="#">More Details</a>--}}
                    {{--</div>--}}
                    <!-- end service-button -->
                </div>
                <!-- end service -->
            </div>
        @endforeach
        <!-- end col-lg-4 -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->

