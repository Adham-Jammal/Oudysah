@extends('app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('main')
{{-- Hero --}}
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
    data-aos-delay="1500">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <img class="hero-logo lozad" data-src="{{ asset('img/logo.png') }}" alt="logo">
                <h2> عـيـنٌ أمـعـنـت<span>فـأبـدعـــت </span></h2>
                <p> شغف التصوير وصناعة المحتوى صنعت خبرة لأكثر من 5 سنوات باستوديو عديسة للانتاج الفني ، حيث نوثق اللحظة
                    والحدث بدقة وجودة ذات رؤية ورسالة ملهمة, تعكس أهداف عملائنا ونحقق رؤيتهم, يميزنا سرعة الاداء والدقة
                    و
                    نساعدك بأفكار تصوير وتصميم أبداعية . </p>
                <a href="https://wa.me/966558442139" class="btn-get-started">احجز الآن</a>
            </div>
        </div>
    </div>
    <div class="arrow">
        <a href="#vision_message"><i class="bi bi-chevron-down"></i></a>
    </div>
</section>
{{-- Message & Vision --}}
<section id="vision_message" class="message-vision">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-content" data-aos="fade-up" data-aos-duration="1000">
                <div class="vision">
                    <i class="bi bi-quote icon"></i>
                    <h2>الرؤية</h2>
                    <p>
                        أن نكون الاختيار الأول للأفراد و المؤسسات حيث مع كل صورة نحكي قصة تعبر عن واقعها بجودة
                        قياسية ودقة عالية .. هدفنا الابتكار و التطوير المستمر لعملنا للوصول إلى هدف يليق بكم .
                    </p>
                </div>
            </div>

            <div class="col-md-6 image-content" data-aos="fade-down" data-aos-duration="1000">
                <img class="lozad" data-src="{{ asset('img/vision.png') }}" alt="camera">
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 image-content" data-aos="fade-down" data-aos-duration="1000">
                <img class="lozad" data-src="{{ asset('img/message.png') }}" alt="camera">
            </div>

            <div class="col-md-6 text-content" data-aos="fade-up" data-aos-duration="1000">
                <div class="message">
                    <i class="bi bi-quote icon"></i>
                    <h2>الرسالة</h2>
                    <p> تقديم أفكار إبداعية تمزج ما بين الاحترافية والتميز و الالتزام والتجديد ، نعلو بمعايير التصوير و
                        التصميم حتى نكون من الملهمين الأوائل بالمملكة وأن نصنع محتوى ولقطات مطابقة للواقع
                        ُتحاكي ا¤حداث .. تجمعنا قيم و أهداف سامية و نعمل لرضاكم و ما يليق بذائقتكم الرائعة ،
                        ّ يحفّزنا الايمان و التحدي لتقديم لحظاتكم الجميلة بكل تفرد و إختلاف . </p>
                </div>
            </div>
        </div>

    </div>
</section>
{{-- Advantages --}}
<section id="advantages" class="advantages">
    <div class="container">
        <div class="cards">
            <div class="advantage-card card-1" data-aos="fade-up" data-aos-duration="1000">
                <h2>قيمنا <i class="bi bi-stars"></i> </h2>
                <hr>
                <p>عملنا العنصر المميز احترافنا و العاطفة و الحماس والتحفيز لكل بداية تصوير نمتاز بها</p>
            </div>
            <div class="advantage-card card-2" data-aos="fade-up" data-aos-duration="1500">
                <h2>نتميز <i class="bi bi-trophy-fill"></i> </h2>
                <hr>
                <p>باحترام الوقت والتعامل المرن</p>
            </div>
            <div class="advantage-card card-3" data-aos="fade-up" data-aos-duration="2000">
                <h2>اهتمامنا <i class="bi bi-people-fill"></i> </h2>
                <hr>
                <p>نحترم آراء العميل ونلبي احتياجاته</p>
            </div>
        </div>
    </div>
</section>
{{-- Services --}}
<section class="services company-advantages" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-content">
                <div class="content">
                    <h2>الخدمات التي نقدمها
                        <br>
                        <span class="main-color">بجــــــــــــودة عــــــــــــالية</span>
                    </h2>
                    <ul>
                        <li data-aos="fade-up" data-aos-duration="1000"><i class="bi bi-camera-reels"></i> الإنــتــاج
                            الــفــنــي </li>
                        <li data-aos="fade-up" data-aos-duration="1000"><i class="bi bi-film"></i> صــنــاعــة الأفــلام
                            الــدعائــيــة </li>
                        <li data-aos="fade-up" data-aos-duration="1000"><i class="bi bi-person-video2"></i> تــوثــيــق
                            الــفعــالــيــات والــمــنــاســبــات الــخاصــة والــعــامة </li>
                        <li data-aos="fade-up" data-aos-duration="1000"><i class="bi bi-box-seam"></i> تــصــويــر
                            الــمــنــتجــات </li>
                        <li data-aos="fade-up" data-aos-duration="1000"><i class="bi bi-camera"></i> التــصــويــر
                            الــفــوتــوغــرافــي </li>
                        <li data-aos="fade-up" data-aos-duration="1000"><i class="bi bi-play-btn"></i> الــمــوشــن
                            جــرافــيــك </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 image-content" data-aos="zoom-in" data-aos-duration="1000">
                <img data-src="{{ asset('img/logo.png') }}" class="lozad" alt="logo">
            </div>
        </div>
    </div>
</section>
{{-- Portfolio --}}
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>معرض أعمالنا</h2>
            <p>
                نفتخر بعرض أعمالنا
                التي نعتز بها , والتي تمكّنا من خلالهامن نيل رضى العشرات من العملاء.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <ul id="portfolio-flters">
                    @foreach ($galleries as $key => $item)


                    <li data-filter=".filter-{{$item->id}} " @if(!$key) class="filter-active" @endif>
                        {{$item->title_Ar}} </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach ($galleries as $key => $item)

            @foreach(json_decode($item->image, true) as $image)

            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->id}}">
                <div class="portfolio-wrap">
                    <img data-src="{{ Voyager::image($image) }}" class="img-fluid lozad" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>التصوير الفوتوغرافي </h4> --}}
                        {{-- <p>وصف الصورة</p> --}}
                    </div>
                    <div class="portfolio-links">
                        <a href="{{ Voyager::image($image) }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="{{$item->title_Ar}} "><i class="bi bi-search"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

            @php
            $arr = explode("\n",str_replace("\"","'",$item->description_Ar)) ;
            @endphp

            @foreach ($arr as $video)

            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->id}}">
                <div class="portfolio-wrap video">
                    {!! $video !!}
                </div>
            </div>

            @endforeach
            @endforeach


        </div>
    </div>



{{-- Customers --}}
<section class="gallery" id="customers">
    <div class="container">
        <div class="section-title">
            <h2>عملاؤنا المميزون </h2>
            <p>انضم إلينا لتكون بين قائمة أفضل العملاء</p>
        </div>
        <div class="images partners-slider owl-carousel owl-drag owl-theme">
            @foreach(json_decode($data->success_partners, true) as $image)
            <img class="lozad" data-src="{{ Voyager::image($image) }}" alt="partner-image">

            @endforeach

        </div>
    </div>
</section>
<style>
    .video:hover::before {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        height: 0px;
        width: 0px;
    }
</style>
@stop