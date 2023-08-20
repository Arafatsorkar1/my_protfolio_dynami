<footer class="footer">
    <div class="footer-content">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <div class="footer-logo-wrap">

                        </div>
                        <p class="footer-about-text"></p>


                    </div>
                </div>



                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="footer-title">Links</h6>
                        <ul class="footer-links">
                            <li><a href="{{route('home.home')}}">Home</a></li>
                            <li><a href="{{route('about.about')}}">About</a></li>
                            <li><a href="{{route('education.education')}}">Education</a></li>
                            <li><a href="{{route('service.service')}}">Services</a></li>
                            <li><a href="{{route('portfolio.portfolio')}}">Portfolio</a></li>
                            <li><a href="{{route('contact.add')}}">Contact</a></li>
                            <!-- <li><a href="#">Blog</a></li> -->
                        </ul>
                    </div>
                </div>




                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="footer-title">Help</h6>
                        <ul class="footer-links">
                            <li><a href="{{route('service.service')}}">Team</a></li>
                            <li><a href="{{route('contact.add')}}">404</a></li>
                            <li><a href="{{route('education.education')}}">Terms</a></li>
                        </ul>
                    </div>
                </div>

                @php
                    $footers=\App\Models\Footer::all();
                @endphp

                @foreach($footers as $footer)

                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="footer-widget sm-margin-0">
                        <h6 class="footer-title">Contact Info</h6>
                        <ul class="footer-contact-info">
                            <li><i class="fa fa-map">&nbsp;{{$footer->addressLink}}</i></li>
                            <li><i class="fa fa-phone">&nbsp;{{$footer->mobileLink}}</i></li>
{{--                            <li><i class="fa fa-mobile"></i>01516051551</li>--}}
                            <li><i class="fa fa-envelope">&nbsp;{{$footer->emailLink}}</i></li>
                            <!-- <li><i class="fa fa-fax"></i>+02 - 123 456 78 00</li> -->
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <div class="copyright-wrap">
        <div class="container">
            <p class="copyright-text text-center">Copyright @2023-{{date('y')}} </p>
        </div>
    </div>
</footer>


<div id="preloader">
    <div id="loader"></div>
</div>


<a href="#" class="scroll-top-btn" data-scroll-goto="1">
    <span class="fa fa-angle-up"></span>
</a>
