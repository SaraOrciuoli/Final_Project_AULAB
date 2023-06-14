<x-layout>

    {{-- Header --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center p-0 swiper-height">
                <!-- Swiper -->
                <div class="swiper mySwiper" style="--swiper-navigation-color: rgb(209, 194, 134); --swiper-pagination-color: rgb(209, 194, 134);">
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
                <span class="icon-service d-flex align-items-center justify-content-center">
                    <img src="/media/credit-card.gif">
                </span>
                <h3 class="text-lightDark">Carta di credito</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolorem id veritatis necessitatibus
                    deleniti numquam tempora reiciendis assumenda voluptas consequuntur quod aspernatur veniam sapiente,
                    labore nostrum voluptates debitis suscipit ut!</p>
            </div>

            <div class="col-12 col-md-3 text-center">
                <span class="icon-service d-flex align-items-center justify-content-center">
                    <img src="/media/save.gif">
                </span>
                <h3 class="text-lightDark">Risparmiare</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolorem id veritatis necessitatibus
                    deleniti numquam tempora reiciendis assumenda voluptas consequuntur quod aspernatur veniam sapiente,
                    labore nostrum voluptates debitis suscipit ut!</p>
            </div>

            <div class="col-12 col-md-3 text-center">
                <span class="icon-service d-flex align-items-center justify-content-center">
                    <img src="/media/truck-white.gif">
                </span>
                <h3 class="text-lightDark">Consegna veloce</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolorem id veritatis necessitatibus
                    deleniti numquam tempora reiciendis assumenda voluptas consequuntur quod aspernatur veniam sapiente,
                    labore nostrum voluptates debitis suscipit ut!</p>
            </div>

        </div>
    </div>

    {{-- Sezione articoli --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h2 class="text-lightDark">Articoli recenti</h2>
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
                        @for ($i = 0; $i < 4; $i++)
                        <x-swiper_slide_testimonial/>
                        @endfor
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sezione counter --}}

    <section class="container-fluid bg-counter target_counter">
        <div class="row align-items-center justify-content-center vh-45">
            <div class="col-12">
                
            </div>
            <div class="col-12 col-md-2 container_counter">
                <div class="box text-center">
                    <span class="icon-service">
                        <i class="fa-regular fa-eye fa-2xl text-white"></i>
                    </span>
                    <span class="fs-2 text-lightDark numbers">0</span>
                    <p class="text-testimonial">VISUALIZZAZIONI</p>
                </div>
            </div>

            <div class="col-12 col-md-2 container_counter">
                <div class="box text-center">
                    <span class="icon-service">
                        <i class="fa-solid fa-cart-shopping fa-2xl text-white"></i>
                    </span>
                    <span class="fs-2 text-lightDark numbers">0</span>
                    <p class="text-testimonial">CLIENTI FELICI</p>
                </div>
            </div>

            <div class="col-12 col-md-2 container_counter">
                <div class="box text-center">
                    <span class="icon-service">
                        <i class="fa-solid fa-shop fa-2xl text-white"></i>
                    </span>
                    <span class="fs-2 text-lightDark numbers">0</span>
                    <p class="text-testimonial">TUTTI I PRODOTTI</p>
                </div>
            </div>

            <div class="col-12 col-md-2 container_counter">
                <div class="box text-center">
                    <span class="icon-service">
                        <i class="fa-regular fa-clock fa-2xl text-white"></i>
                    </span>
                    <span class="fs-2 text-lightDark numbers">0</span>
                    <p class="text-testimonial">ORE SPESE</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Lavora con noi --}}

    <section class="container-fluid bg-acc">
        <div class="row justify-content-center align-items-center p-5">
            <div class="col-12 col-md-5 text-start">
                <h3 class="text-lightDark">La nostra storia:</h3>
                <p class="text-testimonial">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit praesentium obcaecati tenetur voluptas placeat? Provident, sapiente! Et eius autem soluta, minima quis qui, similique earum, accusantium ullam aspernatur voluptas excepturi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nulla repellendus voluptatibus ipsa numquam distinctio illum at quaerat autem nam consequatur in eveniet doloribus architecto nobis, reiciendis voluptate pariatur! Cum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste quisquam inventore blanditiis. Inventore nam rem vero dolores voluptas numquam laudantium odit sapiente, dolor et est neque quasi reiciendis saepe laborum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam doloremque doloribus, facilis deserunt tempore rem amet provident natus asperiores facere eveniet saepe nobis deleniti tenetur ullam quisquam qui obcaecati culpa. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste omnis, eum odio autem error blanditiis hic ea eaque ut saepe ducimus soluta incidunt quasi illum non molestiae quisquam, quibusdam porro?</p>
            </div>
            <div class="col-12 col-md-5 text-center">
                <h3 class="fs-2 text-lightDark">Lavora con Noi!</h3>
                <p class="text-testimonial">Vuoi diventare nostro revisore? Manda la tua richiesta!</p>
                <a href="{{route('become_revisor')}}" class="btn-candidate">Invia la richiesta</a>
            </div>
        </div>
    </section>

</x-layout>
