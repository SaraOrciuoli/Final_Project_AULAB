<x-layout>

    {{-- Header --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center p-0">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/media/salotto.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/salotto2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/salotto3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/salotto5.jpg" />
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
                <a href="#" class="learn-more  button">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Dettagli</span>
                </a>
            </div>

        </div>
    </div>






    <div class="container">
        <div class="row justify-content-evenly">
            @foreach ($announcements as $announcement)
                <x-card_announcement :announcement="$announcement" />
            @endforeach
        </div>
    </div>

</x-layout>
