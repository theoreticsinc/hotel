<div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{ asset('frontend/assets/img/logos/logo-1.png') }}" class="logo-one" alt="Logo">
                    <img src="{{ asset('frontend/assets/img/logos/footer-logo1.png') }}" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('frontend/assets/img/logos/logo-1.png') }}" class="logo-one" alt="Logo">
                            <img src="{{ asset('frontend/assets/img/logos/footer-logo1.png') }}" class="logo-two" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home.index') }}" class="nav-link active">
                                        Home                                         
                                    </a>                                    
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('parking.index') }}" class="nav-link">
                                        Parking
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Repairs 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                1 One
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                2 Two
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                3 Three
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                4 Four
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Services 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services-1.html" class="nav-link">
                                                Services One 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-2.html" class="nav-link">
                                                Services Two 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.html" class="nav-link">
                                                Service Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-1.html" class="nav-link">
                                                Blog Style One 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">
                                                Blog Style Two 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">
                                                Blog Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Rooms
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="room.html" class="nav-link">
                                                Rooms 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-details.html" class="nav-link">
                                                Room Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact
                                    </a>
                                </li>

                                <li class="nav-item-btn">
                                    <a href="#" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                                </li>
                            </ul>

                            <div class="nav-btn">
                                <a href="#" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>