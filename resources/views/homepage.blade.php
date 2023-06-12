<x-layout>

    <div class="container-fluid header">
        <div class="row">
            <div class="col-12 text-center">
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

    <div class="container">
        <div class="row justify-content-evenly">
            @foreach ($announcements as $announcement)
                <x-card_announcement :announcement="$announcement" />
            @endforeach
        </div>
    </div>

</x-layout>
