@extends('frontend.layouts.app')
@section('content')
<div class="software-description">
    <div class="container">
        <div class="row" style="margin-top: 150px">
            <div class="col-md-12">
                <h1 class="section-title text-center">Our Products</h1>
                <p class="text-center">Online Accounting Billing Inventory Management System <br> Purchase, Sales, Stock, Bill-invoice, SMS, Due Report</p>
            </div>
        </div>
        <div class="row animate__fadeInUp wow" style="margin-bottom: 150px; margin-top: 50px; visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;" data-wow-duration="1s" data-wow-delay="0s" title="Product Purchase Management">
                <div class="col-md-6">
                    <img src="https://design.bhisab.oxhostbd.com/public/uploads/products/20240828070634.png" alt="" width="400px">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h1 class=" mb-4" style="font-family: 'SolaimanLipi', sans-serif; color:#5555A5; font-size: 35px;">
                            <a href="{{ route('frontend.product.xprinter') }}" style="text-decoration: none">
                                Xprinter XP-Q80 Thermal POS Printer
                            </a>
                        </h1>
                        <p style="font-family: 'SolaimanLipi', sans-serif; color:#5555A5; font-size: 28px; line-height: 30px;">
                            <strong>Key Feature:</strong>
                            <span></span></p><ul style="padding-left: 2rem; margin-bottom: 1rem; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;"><li>Model: XP-58IIL</li><li>Brand: Xprinter</li><li>Paper Width: Upto 58mm</li><li>Type: Thermal Print</li></ul>
                            <h3>Price: 6500.00৳</h3>
                            <a href="https://billing.softhostit.com/product-order?product_name=Xprinter XP-Q80 Thermal POS Printer&amp;product_price=6500.00" class="btn btn-primary">Order Now</a>
                        <p></p>
                    </div>
                </div>
            </div>
                                            <div class="row animate__fadeInUp wow" style="margin-bottom: 150px; margin-top: 50px; visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;" data-wow-duration="1s" data-wow-delay="0s" title="Product Purchase Management">
                <div class="col-md-6 d-flex align-items-center ">
                    <div>
                        <h1 class=" mb-4" style="font-family: 'SolaimanLipi', sans-serif; color:#5555A5; font-size: 35px;">
                            <a href="{{ route('frontend.product.posprinter') }}" style="text-decoration: none">
                                XPrinter XP-58IIL Thermal POS Printer
                            </a>
                        </h1>
                        <p style="font-family: 'SolaimanLipi', sans-serif; color:#5555A5; font-size: 28px; line-height: 30px;">
                            <strong>Key Feature:</strong>
                            <span></span></p><ul style="padding-left: 2rem; margin-bottom: 1rem; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;"><li>Model: XP-58IIL</li><li>Brand: Xprinter</li><li>Paper Width: Upto 58mm</li><li>Type: Thermal Print</li></ul>
                            <h3 style="">Price: 4800.00৳</h3>
                            <a href="https://billing.softhostit.com/product-order?product_name=XPrinter XP-58IIL Thermal POS Printer&amp;product_price=4800.00" class="btn btn-primary" style="">Order Now</a>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://design.bhisab.oxhostbd.com/public/uploads/products/20240828070840.crdownload" alt="" width="400px">
                </div>
            </div>

    </div>
</div>
@endsection
