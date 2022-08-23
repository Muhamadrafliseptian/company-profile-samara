@extends('user.app')

@section('title', 'About Us')

@section('content')
    <section id="introduction" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Introduction</h2>
                <h3><span>Let Us Introduce</span></h3>
            </div>
            <div class="text-start">
                As an enterprise, Integrasia Utama has followed the life cycle of an organization, from a startup
                company back in 2001 to the enterprise with feet firmly planted on the Geospatial (Mapping and GIS),
                Tracking Platform, and IoT Solution. Our dedicated teams of engineers and response units have made this
                achievement possible.
                <br>
                <br>
                ur core business in remote sensing & digital mapping are providing solutions & consulting services to
                our customers. We have developed the vector based map to support the geospatial user to be able to
                utilize ONE SPIRIT MAP data with scaling at 1: 5.000 with high level information such as street names,
                point of interest, etc. The base map is meaningless without Application and Solution that can bring the
                value of the data
            </div>
        </div>
        </div>
    </section>

    <section id="ecospirit" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3><span>Introducing ONE SPIRIT ECOSYSTEM</span></h3>
            </div>
            <img src="{{ asset('assets/img/eco.png') }}" class="img-fluid rounded mx-auto d-block" alt="...">
            <div class="text-start">
                <p><b><span style="color: black;">One Spirit Eco System </span></b></p>
                <p>The widespread use of online commerce, tracking, ride sharing and applications in Indonesia clearly
                    demonstrates the Indonesians’s passion to harness the power of technology. It underlines the spirit
                    to secure progress and introduce new technology. In return, it leads to a significant growth of
                    application and software production across the nation.
                    <br>
                    <br>
                    The growth of startups and enterprise-scale developers in technology transformation has inspired a
                    next generation of software developers. This generation of digital nomads believes that the future
                    belongs to the hands of those with the clear understanding on how to tap these new opportunities.
                    <br>
                    <br>
                    Integrasia Utama has the mission to harness this formidable force for greater good. Since day one,
                    Integrasia Utama has a vision to build pool of Indonesian talents to present one platform accessible
                    to all produced commercial software. With each software contributing to its specific purposes, the
                    whole system will be able to respond to most of the challenges in the business world.
                    <br>
                    <br>
                    Integrasia Utama simply calls it Integrasia Data Model (IDM). IDM envisions integrated platform of
                    produced software. IDM improves efficiency from square one, allowing customers to enjoy the full
                    benefit of enterprise-wide solutions in a more affordable way.
                    <br>
                    <br>
                    The ecosystem is developed using Open Platform with IDM (Integrasia Data Model) as a core of process
                    and database model using Geospatial (Map) and Tracking technology. This platform will enable
                    integration with other startup companies’ product or other software products (ERP system), This
                    concept is in line with our vision of Integration Brings Value.
                </p>
                <p><b><span style="color: black;">IDM (Integrasia Data Model) </span></b></p>
                <p> IDM (Integrasia Data Model) is an Open Standard database Structure and Database Model supporting the
                    Industry to accelerate the development of their system to manage business. By using this standard
                    open Database Structure and Data Base Model, the application (software) can be simpler and more
                    flexible to be integrated with other applications (software).
                </p>
                <p><b><span style="color: black;">Geospatial (One Spirit Map)</span></b></p>
                <p> Platform that contain map and geospatial engine to enabler our partners, startup company and
                    development community to integrated geospatial into their solution and application.
                </p>
                <p><b><span style="color: black;">Tracking</span></b></p>
                <p> Platform that enables collecting real time data from Mobile phone, personal GPS tracking and other
                    tracking device to be integrated Geospatial (map) and with others system.
                </p>
                <p><b><span style="color: black;">IOT Platform</span></b></p>
                <p> Our solution focus on IOT to enabler and speed up adoption of Industry 4.0 in companies.
                </p>
                <p><b><span style="color: black;">Application program interface (API)</span></b></p>
                <p> Application program interface (API) is a set of routines, protocols, and tools for building software
                    applications. An API specifies how software components should interact. Sample Apps and Integration
                    Model is the simple application as the model on how to utilize One Spirit Eco System API. Enabling
                    our API will able to integrated with others solution.
                </p>
            </div>

        </div>

        </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="aboutus" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                <h3><span>Find Out More About Integrasia</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    @if (empty($visi_misi))
                        <div class="alert alert-danger">
                            Visi Misi Belum Tersedia
                        </div>
                    @else
                        {!! $visi_misi->visi !!}
                        {!! $visi_misi->misi !!}
                    @endif
                </div>
            </div>

        </div>
    </section>
    <br>
    <br>

    <section id="aboutus" class="about section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Milestone</h2>
            </div>
            <img src="{{ asset('assets/img/milestone.png') }}" data-aos="fade-right" data-aos-delay="100"
                style="box-shadow: 2px 4px 50px rgb(208, 208, 208);" class="img-fluid rounded mx-auto d-block w-50"
                alt="...">
            <!-- End Milestone Section -->
        </div>
    </section>
    <br>
    <br>
    <div class="section-title">
        <h2>Partners</h2>
        <h3><span>Check our Partners</span></h3>
    </div>
    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                @forelse($data_partnert as $data)
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="{{ url('study_case') }}">
                            <img src="{{ url('/storage/' . $data->parnert_logo) }}" class="img-fluid">
                        </a>
                    </div>
                @empty
                    <div class="col-md-12 d-flex align-items-center justify-content-center text-center text-center">
                        <i>
                            <b>
                                " DATA SAAT INI BELUM TERSEDIA "
                            </b>
                        </i>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
