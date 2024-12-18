@extends('layouts.app')

@section('content')

        <section id="hero-section" class="relative w-full overflow-hidden flex mx-auto mt-[30px]">
            <div class="swiper-hero w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide relative">
                        <div class="w-full h-[550px] overflow-hidden shrink-0">
                            <img src="{{ asset ('assets/images/thumbnails/hero-background.png') }}" class="w-full h-full object-cover object-top" alt="thumbnails" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                        <div class="absolute flex bottom-0 left-0 right-0 items-center justify-between mx-auto max-w-[1280px] px-[75px] pb-[40px]">
                            <div class="flex flex-col gap-[10px] text-white">
                                <p>Featured</p>
                                <div class="w-[507px]">
                                    <a href="#" class="font-bold text-[36px] leading-[45px] hover:underline transition-all duration-300">Generation Z Prefer Remote Working Than Big Salary</a>
                                </div>
                                <p>12 Jun, 2024 • Business</p>
                            </div>
                            <div class="flex gap-4">
                                <button type="button" id="prev-button" class="prev-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset ('assets/images/icons/arrow-left.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                                <button type="button" id="next-button" class="next-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset ('assets/images/icons/arrow-right.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide relative">
                        <div class="w-full h-[550px] overflow-hidden shrink-0">
                            <img src="{{ asset ('assets/images/thumbnails/hero-background-2.png') }}" class="w-full h-full object-cover object-top" alt="thumbnails" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                        <div class="absolute flex bottom-0 left-0 right-0 items-center justify-between mx-auto max-w-[1280px] px-[75px] pb-[40px]">
                            <div class="flex flex-col gap-[10px] text-white">
                                <p>Featured</p>
                                <div class="w-[507px]">
                                    <a href="#" class="font-bold text-[36px] leading-[45px] hover:underline transition-all duration-300">Generation Z Prefer Remote Working Than Big Salary</a>
                                </div>
                                <p>12 Jun, 2024 • Business</p>
                            </div>
                            <div class="flex gap-4">
                                <button type="button" id="prev-button" class="prev-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset ('assets/images/icons/arrow-left.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                                <button type="button" id="next-button" class="next-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset ('assets/images/icons/arrow-right.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide relative">
                        <div class="w-full h-[550px] overflow-hidden shrink-0">
                            <img src="{{ asset ('assets/images/thumbnails/hero-background-3.png') }}" class="w-full h-full object-cover object-top" alt="thumbnails" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                        <div class="absolute flex bottom-0 left-0 right-0 items-center justify-between mx-auto max-w-[1280px] px-[75px] pb-[40px]">
                            <div class="flex flex-col gap-[10px] text-white">
                                <p>Featured</p>
                                <div class="w-[507px]">
                                    <a href="#" class="font-bold text-[36px] leading-[45px] hover:underline transition-all duration-300">Generation Z Prefer Remote Working Than Big Salary</a>
                                </div>
                                <p>12 Jun, 2024 • Business</p>
                            </div>
                            <div class="flex gap-4">
                                <button type="button" id="prev-button" class="prev-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset ('assets/images/icons/arrow-left.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                                <button type="button" id="next-button" class="next-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset ('assets/images/icons/arrow-right.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="partnership" class="mx-auto mt-[5px] flex max-h-[346px] w-full max-w-[1130px] flex-col items-center gap-[30px]">
            <div class="grid grid-cols-6">
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center  rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-1.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Junior Parrito</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">3,492 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
                    >
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-2.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Sabrina Juli</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">312 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
                    >
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-3.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Ijan Malawi</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">44 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-4.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Rita Putria</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">15,398 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
                    >
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-5.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Shayna Xin</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">3,492 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
                    >
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-6.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Dhi Pakao</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">223 News</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section id="hot-news" class="mx-auto mt-[70px] flex max-h-[457px] w-full max-w-[1130px] flex-col items-center gap-[30px]">
            <div class="flex max-h-[78px] w-full items-center justify-between">
                <h1 class="max-w-[259px] text-balance text-[26px] font-bold">Berita terkini untuk anda</h1>
                <div class="max-h-[37px] max-w-[117px] rounded-full bg-[#FFECE1]">
                    <p class="px-[18px] py-2 text-center text-sm font-bold text-maga-orange">UP TO DATE</p>
                </div>
            </div>
            <div class="grid max-h-[349px] w-full grid-cols-3 gap-[30px] focus:ring-maga-orange">
                <a href="">
                    <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="relative flex">
                            <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                                <span class="text-center text-xs font-bold">SPORT</span>
                            </div>
                            <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-1.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                            <h2 class="text-balance text-lg font-bold">Bersepeda dapat membuat diri menjadi lebih baik lagi</h2>
                            <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="relative flex">
                            <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                                <span class="text-center text-xs font-bold">ENTERNAINMENT</span>
                            </div>
                            <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-2.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                            <h2 class="text-balance text-lg font-bold">Beberapa artis ini merayakan ultah di tengah hutan raya</h2>
                            <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="relative flex">
                            <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                                <span class="text-center text-xs font-bold">POLITIC</span>
                            </div>
                            <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-3.jpg') }}" alt="" />
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

        <section id="best-authors" class="mx-auto mt-[70px] flex max-h-[346px] w-full max-w-[1130px] flex-col items-center gap-[30px]">
            <div class="flex max-w-[526px] flex-col items-center">
                <div class="rounded-full bg-[#FFECE1] px-[18px] py-2">
                    <p class="text-sm font-bold text-maga-orange">BEST AUTHORS</p>
                </div>
                <h2 class="text-balance text-center text-[26px] font-bold">Rektorat Universitas</h2>
                <p>Berkomitmen untuk meningkatkan kualitas Pendidikan</p>
            </div>

            <div class="grid grid-cols-6 gap-[10px]">
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-1.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Junior Parrito</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">3,492 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
                    >
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-2.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Sabrina Juli</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">312 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
                    >
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-3.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Ijan Malawi</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">44 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
                    >
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-4.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Rita Putria</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">15,398 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
                    >
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-5.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Shayna Xin</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">3,492 News</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
                    >
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ asset ('assets/images/photos/profile-6.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Dhi Pakao</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">223 News</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>


        <section id="for-you-entertainment" class="max-w-[1130px] mx-auto mt-[70px]">
            <div class="flex flex-col">
                <h1 class="font-bold text-[26px] leading-[39px]">
                    Pengumuman
                </h1>
                <p>Dapatkan pengumuman terbaru</p>
            </div>

            <div class="mt-[30px] max-h-[424px] flex justify-between">
                <div class="relative overflow-hidden rounded-[20px] border">
                    <div class="h-full w-full max-w-[635px]">
                        <img src="{{ asset ('assets/images/thumbnails/image 5.jpg') }}" alt="" class="w-full object-cover" />
                    </div>
                    <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(0,0,0,0)_0%,rgba(0,0,0,0.9)_100%)]"></div>
                    <div class="text-white space-y-[10px] absolute bottom-[30px] left-[30px]">
                        <p>Featured</p>
                        <a href="">
                            <h1 class="font-bold text-[30px] leading-9 hover:underline pr-[30px]">Rela Tampil Menarik Depan Wanita, Pria Ini Jadi Bahan Bicaraan</h1>
                        </a>
                        <p>12 Jun, 2024</p>
                    </div>
                </div>

                <div class="relative" id="custom-scrollbar">
                    <div class="max-w-[475px] space-y-[20px] pr-4 max-h-[424px] overflow-auto" id="custom-scrollbar">
                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/image 4.jpg') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Bikin house party tanpa biaya mahal, begini tipsnya!</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/image 3.jpg') }}" alt="" class="h-full w-full object-cover" />
                                </div>

                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Gaya pakaian pernikahan artis ini beneran unik</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/image 2.jpg') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Tips bersepeda bareng pasangan baru, makin seru!</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/image 4.jpg') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Bikin house party tanpa biaya mahal, begini tipsnya!</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/image 3.jpg') }}" alt="" class="h-full w-full object-cover" />
                                </div>

                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Gaya pakaian pernikahan artis ini beneran unik</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/image 2.jpg') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Tips bersepeda bareng pasangan baru, makin seru!</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <div class="w-full h-[100px]"></div>
                    </div>
                    <div class="pr-4 absolute bottom-0 w-full h-[100px]">
                        <div class="w-full h-full bg-[linear-gradient(360deg,#FFFFFF_16%,rgba(255,255,255,0.19)_100%)]"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="for-you-business" class="max-w-[1130px] mx-auto mt-[70px]">
            <div class="flex justify-between items-center">
                <h1 class="font-bold text-[26px] leading-[39px]">
                    Latest For You
                    <br />
                    in Business
                </h1>
                <a href="">
                    <div class="py-3 px-[22px] border border-[#EEF0F7] rounded-full font-semibold">Explore All</div>
                </a>
            </div>

            <div class="mt-[30px] max-h-[424px] flex justify-between">
                <div class="relative overflow-hidden rounded-[20px] border">
                    <div class="h-full w-full max-w-[635px]">
                        <img src="{{ asset ('assets/images/thumbnails/thumbnail-8.png') }}" alt="" class="w-full object-cover" />
                    </div>
                    <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(0,0,0,0)_0%,rgba(0,0,0,0.9)_100%)]"></div>
                    <div class="text-white space-y-[10px] absolute bottom-[30px] left-[30px]">
                        <p>Featured</p>
                        <a href="">
                            <h1 class="font-bold text-[30px] leading-9 hover:underline pr-[30px]">Perusahaan Asal Bandung Telah Bantu Lebih Dari 1 Juta Siswa</h1>
                        </a>
                        <p>12 Jun, 2024</p>
                    </div>
                </div>

                <div class="relative" id="custom-scrollbar">
                    <div class="max-w-[475px] space-y-[20px] pr-4 max-h-[424px] overflow-auto" id="custom-scrollbar">
                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-9.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Angga telah launching office space special edition</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-10.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>

                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Pembelian rumah saat ini tanpa perlu down payment</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-11.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Tips trading ala generation Z bikin kita sukses untung</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-9.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Angga telah launching office space special edition</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-10.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>

                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Pembelian rumah saat ini tanpa perlu down payment</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-11.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Tips trading ala generation Z bikin kita sukses untung</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <div class="w-full h-[100px]"></div>
                    </div>
                    <div class="pr-4 absolute bottom-0 w-full h-[100px]">
                        <div class="w-full h-full bg-[linear-gradient(360deg,#FFFFFF_16%,rgba(255,255,255,0.19)_100%)]"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="for-you-automative" class="max-w-[1130px] mx-auto mt-[70px] mb-[72px]">
            <div class="flex justify-between items-center">
                <h1 class="font-bold text-[26px] leading-[39px]">
                    Latest For You
                    <br />
                    in Automative
                </h1>
                <a href="">
                    <div class="py-3 px-[22px] border border-[#EEF0F7] rounded-full font-semibold">Explore All</div>
                </a>
            </div>

            <div class="mt-[30px] max-h-[424px] flex justify-between">
                <div class="relative overflow-hidden rounded-[20px] border">
                    <div class="h-full w-full max-w-[635px]">
                        <img src="{{ asset ('assets/images/thumbnails/thumbnail-12.png') }}" alt="" class="w-full object-cover" />
                    </div>
                    <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(0,0,0,0)_0%,rgba(0,0,0,0.9)_100%)]"></div>
                    <div class="text-white space-y-[10px] absolute bottom-[30px] left-[30px]">
                        <p>Featured</p>
                        <a href="">
                            <h1 class="font-bold text-[30px] leading-9 hover:underline pr-[30px]">Angga Machine Telah Membagikan Ribuan Tractor Kepada Petani</h1>
                        </a>
                        <p>12 Jun, 2024</p>
                    </div>
                </div>

                <div class="relative" id="custom-scrollbar">
                    <div class="max-w-[475px] space-y-[20px] pr-4 max-h-[424px] overflow-auto" id="custom-scrollbar">
                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-13.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Tersedia lebih dari 10,000 charger di area kota Bandung</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-14.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>

                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Porscha merilis mesin baru bertenaga 5,000 power</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-15.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Tesla memperbarui teknologi self driving lebih akurat</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-13.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Tersedia lebih dari 10,000 charger di area kota Bandung</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-14.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>

                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Porscha merilis mesin baru bertenaga 5,000 power</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ asset ('assets/images/thumbnails/thumbnail-15.png') }}" alt="" class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">Tesla memperbarui teknologi self driving lebih akurat</h1>
                                    <p class="text-[#A3A6AE] text-sm">12 Jun, 2024</p>
                                </div>
                            </div>
                        </a>

                        <div class="w-full h-[100px]"></div>
                    </div>
                    <div class="pr-4 absolute bottom-0 w-full h-[100px]">
                        <div class="w-full h-full bg-[linear-gradient(360deg,#FFFFFF_16%,rgba(255,255,255,0.19)_100%)]"></div>
                    </div>
                </div>
            </div>
        </section>

@endsection
