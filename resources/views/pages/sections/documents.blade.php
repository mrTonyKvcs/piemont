<section id="portfolio">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-lg-12 -->
            <div class="col-lg-12">
                <!-- start title -->
                <div class="title">
                    <h2>Piemont</h2>
                    <h3>Dokumentumok</h3>
                </div>
                <!-- end title -->
                <!-- start title-text -->
                <div class="title-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <!-- end title-text -->
            </div>
            <!-- end col-lg-12 -->
            <!-- start col-lg-12 -->
            <div class="col-lg-12">
                <!-- start filter -->
                <div class="filter">
                    <ul>
                        <li><button class="filter-item active" data-filter="*">Összes</button></li>
                    </ul>
                </div>
                <!-- end filter -->
            </div>
            <!-- end col-lg-12 -->
            <!-- start col-lg-12 -->
            <div class="col-lg-12">
                <!-- start content -->
                <div id="content" class="row">
                    <!-- start col-lg-4 -->
                    @foreach($documents as $document)
                        <div class="col-lg-6 col-md-6 mix dev">
                            <!-- start project -->
                            <a href="{{ $document->document_path}}" target="_blank">
                                <div class="card">
                                    <div class="card-body text-dark d-flex flex-column flex-lg-row align-items-center justify-content-center">
                                        <p class="mb-0">{{ $document->name }}</p>
                                        <img width="70" height="70" src="/img/icons/download.svg">
                                    </div>
                                </div>
                            </a>
                            <!-- end project -->
                        </div>
                    @endforeach
                    <!-- end col-lg-4 -->
                </div>
                <!-- end content -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    </div>
    
    <!-- end container -->
</section>
