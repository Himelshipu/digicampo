@extends('layouts.layout')
@section('content')

        <!-- visual/banner of the page -->
        <section class="visual">
            <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                <div class="centered">
                    <div class="container">
                        <div class="visual-text visual-center">
                            <h1 class="visual-title visual-sub-title"> What We Do</h1>
                            <div class="breadcrumb-block">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                                    <li class="breadcrumb-item"><a href="index.html">  What We Do </a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/visual/banner of the page -->
        <!-- main content wrapper -->
        <div class="content-wrapper">
            <section class="content-block">
                <div class="container text-center">
                    <div class="heading bottom-space">
                        <h2>Dream. <span>Create.</span> Deliver</h2>
                    </div>
                    <div class="description">
                        <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
                    </div>
                </div>
            </section>
            <section class="content-block p-0">
                <div class="container-fluid">
                    <div class="content-slot alternate-block">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                                    <img src="{{asset('template/img/img-09.jpg')}}" alt="images" style="width: 865.647px; height: 578px; margin-top: 0px; margin-left: -95.8237px;">
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="text-wrap">
                                    <h3>Digital experts working for you.</h3>
                                    <p>Chapter too parties its letters nor. Cheerful but whatever ladyship disposed yet judgment. Lasted answer oppose to ye months no esteem.</p>
                                    <p>Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile. Looked person sister result mr to. Replied demands charmed do viewing ye colonel to so.</p>
                                    <p>Decisively inquietude he advantages insensible at oh continuing unaffected of. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                                    <img src="{{asset('template/img/img-10.jpg')}}" alt="images" style="width: 779.468px; height: 521px; margin-top: 0px; margin-left: -52.734px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Bring a perfectionist.</h3>
                                    <p>New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. </p>
                                    <p>See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating.</p>
                                    <p>Decisively inquietude he advantages insensible at oh continuing unaffected of. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                                    <img src="{{asset('template/img/img-11.jpg')}}" alt="images" style="width: 780.281px; height: 521px; margin-top: 0px; margin-left: -53.1404px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Leave no stone unterned.</h3>
                                    <p>New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. </p>
                                    <p>See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating.</p>
                                    <p>Decisively inquietude he advantages insensible at oh continuing unaffected of. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55" style="background-position: 50% -4.96406px;">
                <div class="container">
                    <div class="inner-wrapper">
                        <h3 class="block-top-heading text-white">BEST EVER DESIGN</h3>
                        <h2 class="text-white">Thinking of joing a winning team?</h2>
                        <div class="btn-container">
                            <a href="#" class="btn btn-primary">VIEW VACANCIES</a>
                        </div>
                    </div>
                </div>
            </section>
            @include('sponsor')
        </div>
        <!--/main content wrapper -->

@endsection
