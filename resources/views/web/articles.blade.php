@extends('web.layout')
@section('content')

<!-- start artical  -->
    <!-- start section  -->
    <section>
        <div class="container">
            <div class="title-latest-articles" data-aos="fade-up">
                <h1>أحدث المقالات</h1>
            </div>
            <article class="all-latest-articles all-latest-articles-custem">
            @foreach($articless as $articles)
                <div class="card" data-aos="fade-up">
                    <img src="{{asset('images/'.$articles->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="">{{$articles->title}}</a>      
                        </h5>
                        <p class="card-text"> {{$articles->message}}</p>
                        <a href="#" class="btn btn-primary">إقرأ المزيد</a>
                    </div>
                </div>
                @endforeach
                
            </article>
        </div>
    </section>

    <!-- start appointment-booking -->
    <section>
        <div class="bg-appointment-booking">
            <div class="container">
                <div class="contact-info">
                    <article>
                        <div class="call-phone" data-aos="fade-left">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>اتصل بنا الآن</p>
                            <a href="">0567-670707</a>
                        </div>
                    </article>
                    <article>
                        <div class="call-phone" data-aos="fade-up">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>فلسطين - غزة -خان يونس</p>
                            <a href="">خان يونس - دولار السنية -مقابل شاورما سنابل</a>
                        </div>
                    </article>
                    <article>
                        <div class="call-phone" data-aos="fade-up">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <p>ساعات العمل</p>
                            <a href="">السبت – الخميس: ٣:٣٠ – ٩:٣٠</a>
                        </div>
                    </article>
                    <article>
                        <div class="call-phone" data-aos="fade-right">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <p>إحجز موعد</p>
                            <a href="">عبر الإنترنت أو عبر الهاتف</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
