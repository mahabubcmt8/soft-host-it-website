<style>
    /* Show the dropdown menu on hover */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0; /* Adjust this if needed */
        }

        /* Add some margin or padding if the submenu appears too close */
        .dropdown-menu {
            margin-top: 0.5rem; /* Adjust this value if needed */
            transition: all 0.3s ease;
        }
        .dropdown-divider{
            margin: 0 !important;
        }

</style>
<div id="menu">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <div class="navbar-brand">
                    <img src="{{ asset('frontend/images/soft-hoost-it-logo.svg') }}" class="default" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software" alt="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">
                    <img src="{{ asset('frontend/images/soft-hoost-it-logo-white.svg') }}" class="hover" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software" alt="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('frontend.index') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.product') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Product</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('frontend.domain') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Domain</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('frontend.hosting') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Hosting</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('frontend.web.design') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Website Design & Development</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('frontend.sms.marketing') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">SMS Marketing</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('frontend.logo') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Logo Design</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-bs-toggle="dropdown" aria-expanded="false">Software</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('frontend.software') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">All Software</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="https://amarhisab.com/" target="_blank" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Amarhisab</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="https://babsaye.com/" target="_blank" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Babsaye</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="https://bhisab.com/" target="_blank" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Bhisab</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="https://t-hisab.com/" target="_blank" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Thisab</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="https://amarhisab.com/smsoft/" target="_blank" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Student/Madrasha Management</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="https://softhostit.com/pos/" target="_blank" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Account Billing Inventory Software</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.payment') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Payment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.career') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Career</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('frontend.about') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">About Us</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('frontend.team') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Team</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('frontend.contact_us') }}" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>

                    <img src="{{ asset('frontend/images/whatsapp.svg') }}" width="30px" style="margin-right: 10px;"
                    alt="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software"
                    title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">
                    <span style="margin-right: 30px; color: var(--color1)" class="header-contact">
                        Contact Us <br>
                        <a href="https://wa.me/1723883106" target="_blank" style="text-decoration: none; color: var(--color1)" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">+880 1723-883106</a>
                    </span>
                    <a href="{{ route('frontend.login') }}" class="header-login-btn" title="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">
                        Login
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
