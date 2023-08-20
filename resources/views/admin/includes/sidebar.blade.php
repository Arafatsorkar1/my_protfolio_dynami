<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{route('dashboard')}}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>

                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark"  aria-expanded="false">
                       <span class="hide-menu">Home Section</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('home.add')}}">Add Home</a></li>
                        <li><a href="{{route('home.manage')}}">Manage Home </a></li>
                    </ul>
                </li>



                <li>
                    <a class="has-arrow waves-effect waves-dark"  aria-expanded="false">
                        <span class="hide-menu">About Section </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('about.add')}}">Add About </a></li>
                        <li><a href="{{route('about.manage')}}">Manage About </a></li>
                    </ul>
                </li>


                <li>
                    <a class="has-arrow waves-effect waves-dark"  aria-expanded="false">
                        <span class="hide-menu">Footer  Section </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('footer.add')}}">Add Footer </a></li>
                        <li><a href="{{route('footer.manage')}}">Manage Footer </a></li>
                    </ul>
                </li>



                <li>

                    <a class="has-arrow waves-effect waves-dark"  aria-expanded="false">
                        <span class="hide-menu">Education Section</span>
                    </a>

                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('education.add')}}">Add Education </a></li>
                        <li><a href="{{route('education.manage')}}">Manage Education</a></li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark"  aria-expanded="false">
                        <span class="hide-menu">Services Section</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('service.add')}}">Add Services</a></li>
                        <li><a href="{{route('service.manage')}}">Manage Services</a></li>

                    </ul>
                </li>


                <li>
                    <a class="has-arrow waves-effect waves-dark"  aria-expanded="false">
                        <span class="hide-menu">Portfolio Section</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('portfolio.add')}}">Add Portfolio </a></li>
                        <li><a href="{{route('portfolio.manage')}}">Manage Portfolio</a></li>

                    </ul>
                </li>



                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <span class="hide-menu">Contact Section</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('contact.manage')}}">Manage Contact </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
