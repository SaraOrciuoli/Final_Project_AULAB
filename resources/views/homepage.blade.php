<x-layout>

    {{-- Header --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center p-0 swiper-height">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/media/salotto.jpg" class="object-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/salotto2.jpg" class="object-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/salotto3.jpg" class="object-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/salotto5.jpg" class="object-fit" />
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>

    {{-- main --}}

    {{-- Service --}}

    <div class="container-fluid bg-sec">
        <div class="row p-5 justify-content-evenly">

            <div class="col-12 col-md-3 text-center">
                <span class="icon-service">
                    <i class="fa-regular fa-credit-card fa-2xl text-white"></i>
                </span>
                <h3>Carta di credito</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolorem id veritatis necessitatibus
                    deleniti numquam tempora reiciendis assumenda voluptas consequuntur quod aspernatur veniam sapiente,
                    labore nostrum voluptates debitis suscipit ut!</p>
                <a href="#" class="learn-more button">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Dettagli</span>
                </a>
            </div>

            <div class="col-12 col-md-3 text-center">
                <span class="icon-service">
                    <i class="fa-solid fa-wallet fa-2xl text-white"></i>
                </span>
                <h3>Risparmiare</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolorem id veritatis necessitatibus
                    deleniti numquam tempora reiciendis assumenda voluptas consequuntur quod aspernatur veniam sapiente,
                    labore nostrum voluptates debitis suscipit ut!</p>
                <a href="#" class="learn-more button">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Dettagli</span>
                </a>
            </div>

            <div class="col-12 col-md-3 text-center">
                <span class="icon-service">
                    <i class="fa-solid fa-truck fa-2xl text-white"></i>
                </span>
                <h3>Consegna gratuita</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolorem id veritatis necessitatibus
                    deleniti numquam tempora reiciendis assumenda voluptas consequuntur quod aspernatur veniam sapiente,
                    labore nostrum voluptates debitis suscipit ut!</p>
                <a href="#" class="learn-more button">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Dettagli</span>
                </a>
            </div>

        </div>
    </div>

    {{-- Sezione articoli --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h2>Articoli recenti</h2>
            </div>
        </div>
    </div>

    {{-- Cards --}}

    <div class="container">
        <div class="row justify-content-evenly">
            @foreach ($announcements as $announcement)
                <x-card_announcement :announcement="$announcement" />
            @endforeach
        </div>
    </div>


    {{-- Testimonial --}}

    <section class="container-fluid bg-sec mt-4 p-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h6 class="text-testimonial">TESTIMONI</h6>
                <h4 class="text-acc">CLIENTI SODDISFATTI</h4>
            </div>
        </div>
        {{-- carousel testimonial --}}
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="swiper swiper-test2 height"
                    style="--swiper-navigation-color: rgb(209, 194, 134); --swiper-pagination-color: rgb(209, 194, 134);">
                    <div class="swiper-wrapper mt-3">
                        <div class="swiper-slide">
                            <div class="card border-0 bg-transparent d-flex align-items-center card-test">
                                <img src="/media/salotto.jpg" class="card-img-top img-testimonial">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-acc">Nome utente</h5>
                                    <p class="card-text mb-4 p-testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsa corporis nesciunt delectus voluptates ducimus totam assumenda eius."</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0 bg-transparent d-flex align-items-center card-test">
                                <img src="/media/salotto.jpg" class="card-img-top img-testimonial">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-acc">Nome utente</h5>
                                    <p class="card-text mb-4 p-testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsa corporis nesciunt delectus voluptates ducimus totam assumenda eius."</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0 bg-transparent d-flex align-items-center card-test">
                                <img src="/media/salotto.jpg" class="card-img-top img-testimonial">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-acc">Nome utente</h5>
                                    <p class="card-text mb-4 p-testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsa corporis nesciunt delectus voluptates ducimus totam assumenda eius."</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0 bg-transparent d-flex align-items-center card-test">
                                <img src="/media/salotto.jpg" class="card-img-top img-testimonial">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-acc">Nome utente</h5>
                                    <p class="card-text mb-4 p-testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsa corporis nesciunt delectus voluptates ducimus totam assumenda eius."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sezione counter --}}

    <section class="container-fluid bg-counter">
        <div class="row align-items-center justify-content-center vh-45">
            <div class="col-12 col-md-2">
                <div class="box text-center">
                    <span class="icon-service">
                        <i class="fa-regular fa-eye fa-2xl text-white"></i>
                    </span>
                    <span class="fs-2">100</span>
                    <p class="text-testimonial">VISUALIZZAZIONI</p>
                </div>
            </div>

            <div class="col-12 col-md-2">
                <div class="box text-center">
                    <span class="icon-service">
                        <i class="fa-solid fa-cart-shopping fa-2xl text-white"></i>
                    </span>
                    <span class="fs-2">100</span>
                    <p class="text-testimonial">CLIENTI FELICI</p>
                </div>
            </div>

            <div class="col-12 col-md-2">
                <div class="box text-center">
                    <span class="icon-service">
                        <i class="fa-solid fa-shop fa-2xl text-white"></i>
                    </span>
                    <span class="fs-2">100</span>
                    <p class="text-testimonial">TUTTI I PRODOTTI</p>
                </div>
            </div>

            <div class="col-12 col-md-2">
                <div class="box text-center">
                    <span class="icon-service">
                        <i class="fa-regular fa-clock fa-2xl text-white"></i>
                    </span>
                    <span class="fs-2">100</span>
                    <p class="text-testimonial">ORE SPESE</p>
                </div>
            </div>
        </div>
    </section>

</x-layout>
