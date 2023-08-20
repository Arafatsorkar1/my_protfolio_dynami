@extends('master.master')

@section('title')
    PortfolioPage
@endsection

@section('body')

    <section class="section my-portfolio pb-minus-70" id="portfolio" data-scroll-index="4">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-lg-7 col-sm-12">
                    <h3 class="section-title">My<span>Portfolio</span></h3>
                    <hr class="section-line-border">
                    <p class="section-sub-line">Here you can see my all projects </p>
                </div>
            </div>

            <div class="text-center">
                <div class="portfolio-filter d-flex align-items-center justify-content-center">
                    <a href="#0" data-gallery-filter=".web">Project</a>
                </div>
            </div>


            <div class="gallery-masonary portfolio-grid row" id="masonaryGallery">
                @foreach($portfolios as $portfolio)
                <div class="col-md-6 col-lg-4 glry-item col-sm-12 web">
                    <div class="portfolio-inner">
                        <img src="{{asset($portfolio->image)}}" alt="Portfolio Img" class="img-fluid portfolio-img">
                        <h6 align="center" class="table-bordered">{{$portfolio->title}}</h6>
                        <div class="details-container">
                            <details>
                                <div>
                                    <p>{{$portfolio->details}}</p>
                                </div>
                            </details>
                            <button id="downloadButton">Download Details</button>
                        </div>
                    </div>
                </div>
                @endforeach












            </div>
        </div>
    </section>



@endsection
