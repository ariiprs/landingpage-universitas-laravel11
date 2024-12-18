@extends('layouts.app')

@section('content')
    <div id="main" class="max-w-[1280px] w-full flex flex-col gap-[70px] mx-auto px-[75px] min-h-screen">

            <section id="entertainment-news" class="mx-auto flex w-full flex-col items-center gap-[30px] mt-[50px]">
                <h1 class="max-w-[378px] text-center text-[36px] font-bold leading-[45px]">Explore Our Entertainment News</h1>
                <div class="grid w-full grid-cols-3 gap-[30px] focus:ring-maga-orange">
                    <a href="#">
                        <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                            <div class="relative flex">
                                <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                                    <span class="text-center text-xs font-bold">ENTERTAINMENT</span>
                                </div>
                                <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                    <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-1.png' ) }}" alt="" />
                                </div>
                            </div>
                            <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                                <h2 class="text-balance text-lg font-bold">Beberapa artis ini merayakan ultah di tengah hutan raya</h2>
                                <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                            <div class="relative flex">
                                <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                                    <span class="text-center text-xs font-bold">POLITIC</span>
                                </div>
                                <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                    <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-2.png' ) }}" alt="" />
                                </div>
                            </div>
                            <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                                <h2 class="text-balance text-lg font-bold">Terjadi demo pada ibu kota jakarta membuat macet parah</h2>
                                <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                            <div class="relative flex">
                                <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                                    <span class="text-center text-xs font-bold">SPORT</span>
                                </div>
                                <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                    <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-3.png' ) }}" alt="" />
                                </div>
                            </div>
                            <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                                <h2 class="text-balance text-lg font-bold">Bersepeda dapat membuat diri menjadi lebih baik lagi</h2>
                                <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                            <div class="relative flex">
                                <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                                    <span class="text-center text-xs font-bold">SPORT</span>
                                </div>
                                <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                    <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-4.png' ) }}" alt="" />
                                </div>
                            </div>
                            <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                                <h2 class="text-balance text-lg font-bold">Bersepeda dapat membuat diri menjadi lebih baik lagi</h2>
                                <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                            <div class="relative flex">
                                <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                                    <span class="text-center text-xs font-bold">ENTERNAINMENT</span>
                                </div>
                                <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                    <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-5.png' ) }}" alt="" />
                                </div>
                            </div>
                            <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                                <h2 class="text-balance text-lg font-bold">Beberapa artis ini merayakan ultah di tengah hutan raya</h2>
                                <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                            <div class="relative flex">
                                <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                                    <span class="text-center text-xs font-bold">POLITIC</span>
                                </div>
                                <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                    <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-6.png' ) }}" alt="" />
                                </div>
                            </div>
                            <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                                <h2 class="text-balance text-lg font-bold">Terjadi demo pada ibu kota jakarta membuat macet parah</h2>
                                <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
                            </div>
                        </div>
                    </a>
                </div>
            </section>

</div>
@endsection