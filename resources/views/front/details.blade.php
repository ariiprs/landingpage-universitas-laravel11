@extends('layouts.app')

@section('content')

    <section id="Header" class="w-[770px] mt-[30px] text-center mx-auto flex flex-col gap-y-4">
      <p class="text-[#A3A6AE]">12 Jun, 2024 • Business</p>
      <h1 class="font-bold text-[46px] leading-[60px]">Peternak Jakarta Menggunakan Bantuan A.I Prexpeliangga</h1>
      <div class="flex items-center mx-auto gap-x-[70px]">
        <div class="flex gap-3 items-center">
          <div class="w-10 h-10 shrink-0 overflow-hidden flex justify-center items-center rounded-full">
            <img src="{{ asset ('assets/images/photos/profile-7.png' ) }}" alt="image" class="object-cover w-full h-full" />
          </div>
          <div>
            <h5 class="font-semibold text-start text-sm leading-[21px]">Rita Putria</h5>
            <p class="text-xs leading-[18px] text-[#A3A6AE]">Sr Programmer</p>
          </div>
        </div>
        <div class="flex gap-1 items-center">
          <div class="flex gap-[1px] items-center">
            <img src="{{ asset ('assets/images/icons/star.svg' ) }}" alt="icon" class="w-4 h-4 shrink-0" />
            <img src="{{ asset ('assets/images/icons/star.svg' ) }}" alt="icon" class="w-4 h-4 shrink-0" />
            <img src="{{ asset ('assets/images/icons/star.svg' ) }}" alt="icon" class="w-4 h-4 shrink-0" />
            <img src="{{ asset ('assets/images/icons/star.svg' ) }}" alt="icon" class="w-4 h-4 shrink-0" />
            <img src="{{ asset ('assets/images/icons/star.svg' ) }}" alt="icon" class="w-4 h-4 shrink-0" />
          </div>
          <strong class="font-semibold text-xs leading-[18px]">(12,490)</strong>
        </div>
      </div>
    </section>
    <section id="HeroPhoto" class="h-[500px] flex justify-center items-center overflow-hidden w-full mt-[50px]">
      <img src="{{ asset ('assets/images/thumbnails/hero-chicken.png' ) }}" alt="image" class="object-cover w-full h-full" />
    </section>
    <section id="ContainerArticle" class="max-w-[1130px] mx-auto flex gap-20 mt-[50px]">
      <article>
        <p>
          I‘ll be real. I held out on AI as long as I could. I was convinced it was going to be humanity’s downfall from the first time my phone had
          the audacity to tell me I actually meant to say, “I have no ducking idea” — but desperate times call for desperate.
        </p>
        <p>
          Want to teach a course about real estate investing? Fantastic, but make sure you have experience as a real estate investor. Want to teach
          hair stylists how to successfully open their own salons? Do it. But you should have opened your own salon first.
        </p>
        <h3>So you should have known</h3>
        <p>
          I launched my first digital course without any prior experience in the niche I was teaching about. In my hurry to
          <a href="#">establish myself as an expert</a>, I overlooked the importance of having hands-on experience. Can you guess how this turned out?
          Yep, my first course was a total flop:
        </p>
        <ul>
          <li>
            <p>
              <strong>Credibility:</strong>
              To build trust with your future students, you need to show them that you're the real deal. Having actual experience in the subject
              matter is the first step to gaining their confidence.
            </p>
          </li>
        </ul>
        <ul>
          <li>
            <p>
              <strong>Effective Teaching:</strong>
              When you have demonstrated experience, your teaching becomes more powerful. You can relate to the challenges your students might face
              and provide practical, real-world solutions for them.
            </p>
          </li>
        </ul>
        <div>
          <img src="{{ asset ('assets/images/thumbnails/article1.png' ) }}" alt="image" />
        </div>
        <h3>What SEO Experts Recommend</h3>
        <p>
          For marketers, this means that previously high-ranking content may be outranked by a rich Reddit or Quora thread on the same topic. As a
          result, it’s becoming increasingly important for businesses to establish a presence on these community-aggregated sites to stay connected to
          users.
        </p>
        <ul>
          <li>
            <p>
              <strong>Credibility:</strong>
              To build trust with your future students, you need to show them that you're the real deal. Having actual experience in the subject
              matter is the first step to gaining their confidence.
            </p>
          </li>
        </ul>
        <p>
          Published on both offline and online marketing materials, these claims boasted investment strategies that were powered by ‘expert AI-driven
          forecasts’ and that would ‘turn your data into an unfair investing advantage.’ One of them even claimed to be ‘the first regulated AI
          financial advisor.’
        </p>
      </article>
      <div class="side-bar flex flex-col w-[300px] shrink-0 gap-10">
        <div class="ads flex flex-col gap-3 w-full">
          <a href="#">
            <div class="flex justify-center items-center overflow-hidden w-[300px] h-[300px] rounded-2xl">
              <img src="{{ asset ('assets/images/thumbnails/banner1.png' ) }}" alt="image" class="object-cover w-full h-full" />
            </div>
          </a>
          <div class="flex items-center gap-1">
            <p class="font-medium text-sm leading-[21px] text-[#A3A6AE]">Our Advertisement</p>
            <a href="#">
              <img src="{{ asset ('assets/images/icons/our-advirtesement.svg' ) }}" alt="icon" class="w-[18px] h-[18px] shrink-0" />
            </a>
          </div>
        </div>
        <div class="more-for-author flex flex-col gap-4">
          <p class="font-bold">More From Author</p>
          <a href="#" class="card">
            <div class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[14px] flex gap-4 hover:ring-2 hover:ring-maga-orange transition-all duration-300">
              <div class="w-[70px] h-[70px] flex shrink-0 justify-center items-center overflow-hidden rounded-2xl">
                <img src="{{ asset ('assets/images/thumbnails/thumbnail-1.png' ) }}" alt="image" class="w-full h-full object-cover" />
              </div>
              <div class="flex flex-col gap-[6px]">
                <p class="line-clamp-2 font-bold">Gaya pakaian pernikahan artis Lorem, ipsum dolor.</p>
                <p class="text-xs leading-[18px] text-[#A3A6AE]">12 Jun, 2024 • Entertainment</p>
              </div>
            </div>
          </a>
          <a href="#" class="card">
            <div class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[14px] flex gap-4 hover:ring-2 hover:ring-maga-orange transition-all duration-300">
              <div class="w-[70px] h-[70px] flex shrink-0 justify-center items-center overflow-hidden rounded-2xl">
                <img src="{{ asset ('assets/images/thumbnails/thumbnail-3.png' ) }}" alt="image" class="w-full h-full object-cover" />
              </div>
              <div class="flex flex-col gap-[6px]">
                <p class="line-clamp-2 font-bold">Gaya pakaian pernikahan artis Lorem, ipsum dolor.</p>
                <p class="text-xs leading-[18px] text-[#A3A6AE]">12 Jun, 2024 • Entertainment</p>
              </div>
            </div>
          </a>
          <a href="#" class="card">
            <div class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[14px] flex gap-4 hover:ring-2 hover:ring-maga-orange transition-all duration-300">
              <div class="w-[70px] h-[70px] flex shrink-0 overflow-hidden rounded-2xl">
                <img src="{{ asset ('assets/images/thumbnails/thumbnail-2.jpg' ) }}" alt="image" class="w-full h-full object-cover" />
              </div>
              <div class="flex flex-col gap-[6px]">
                <p class="line-clamp-2 font-bold">Gaya pakaian pernikahan artis Lorem, ipsum dolor.</p>
                <p class="text-xs leading-[18px] text-[#A3A6AE]">12 Jun, 2024 • Entertainment</p>
              </div>
            </div>
          </a>
        </div>
        <div class="ads flex flex-col gap-3 w-full">
          <a href="#">
            <div class="flex justify-center items-center overflow-hidden w-[300px] h-[300px] rounded-2xl">
              <img src="{{ asset ('assets/images/thumbnails/banner2.png' ) }}" alt="image" class="object-cover w-full h-full" />
            </div>
          </a>
          <div class="flex items-center gap-1">
            <p class="font-medium text-sm leading-[21px] text-[#A3A6AE]">Our Advertisement</p>
            <a href="#">
              <img src="{{ asset ('assets/images/icons/our-advirtesement.svg' ) }}" alt="icon" class="w-[18px] h-[18px] shrink-0" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="Advertisement" class="mx-auto mt-[70px] flex max-h-[153px] w-full max-w-[900px] flex-col gap-3">
      <a href="">
        <div class="h-[120px] w-full overflow-hidden rounded-2xl">
          <img class="h-full w-full object-contain" src="{{ asset ('assets/images/thumbnails/bannerads-author.jpg' ) }}" alt="" />
        </div>
      </a>
      <div class="flex items-center gap-1">
        <p class="text-sm font-[500px] text-[#A3A6AE]">Our Advertisement</p>
        <div class="h-[18px] w-[18px] shrink-0 overflow-hidden">
          <img class="h-full w-full object-contain" src="{{ asset ('assets/images/icons/message-question-gray.svg' ) }}" alt="" />
        </div>
      </div>
    </section>
    <section id="OtherNewsYou" class="mx-auto mt-[70px] w-full bg-[#F9F9FC]">
      <div class="flex flex-col mx-auto items-center gap-[30px] py-[50px] max-w-[1130px]">
        <div class="flex w-full items-center justify-between">
          <h1 class="w-[260px] text-balance text-[26px] font-bold">Other News You Might Be Interested</h1>
          <div class="max-h-[37px] max-w-[117px] rounded-full bg-[#FFECE1]">
            <p class="px-[18px] py-2 text-center text-sm font-bold text-maga-orange">UP TO DATE</p>
          </div>
        </div>
        <div class="grid max-h-[349px] w-full grid-cols-3 gap-[30px] focus:ring-maga-orange">
          <a href="">
            <div
              class="flex max-w-[357px] bg-white flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
            >
              <div class="relative flex">
                <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                  <span class="text-center text-xs font-bold">SPORT</span>
                </div>
                <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                  <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-1.jpg' ) }}" alt="" />
                </div>
              </div>
              <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                <h2 class="text-balance text-lg font-bold">Bersepeda dapat membuat diri menjadi lebih baik lagi</h2>
                <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
              </div>
            </div>
          </a>
          <a href="">
            <div
              class="flex bg-white max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
            >
              <div class="relative flex">
                <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                  <span class="text-center text-xs font-bold">ENTERNAINMENT</span>
                </div>
                <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                  <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-2.jpg' ) }}" alt="" />
                </div>
              </div>
              <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                <h2 class="text-balance text-lg font-bold">Beberapa artis ini merayakan ultah di tengah hutan raya</h2>
                <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
              </div>
            </div>
          </a>
          <a href="">
            <div
              class="flex bg-white max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange"
            >
              <div class="relative flex">
                <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                  <span class="text-center text-xs font-bold">POLITIC</span>
                </div>
                <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                  <img class="h-full w-full object-cover" src="{{ asset ('assets/images/thumbnails/thumbnail-3.jpg' ) }}" alt="" />
                </div>
              </div>
              <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                <h2 class="text-balance text-lg font-bold">Terjadi demo pada ibu kota jakarta membuat macet parah</h2>
                <p class="text-sm text-[#A3A6AE]">12 Jun, 2024</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

@endsection