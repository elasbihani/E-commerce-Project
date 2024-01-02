@extends('layouts.customer')


@section('title')
    Pain & Gain
@endsection


@section('content')
    <div class="container-fluid back-about ">
        <div class="container-fluid ">
            <p>MORE ABOUT</p>
            <h2><strong>Get to Know Us</strong></h2>
        </div>
    </div>


    <div class="py-2">
        <div class="container  d-flex align-items-center justify-content-around p-4">
            <div class=" triangleright shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false"></div>
            <h3 style="font-size: ; font-weight:bolder; padding:5px;"data-aos="fade-right" data-aos-duration="1000"
                data-aos-once="false">Welcome to energrip!</h3>
            <div class="triangleleft shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false"></div>
        </div>

        <div class="container p-4">
            <h3 style="font-size: 13px; text-align:center;  padding:5px;"data-aos="fade-right" data-aos-duration="1000"
                data-aos-once="false">We are a team of passionate Street Workout enthusiasts on a mission to create the best
                products for your workout sessions and bring like-minded people together from around the world! We work
                closely with professional athletes and world champions to meticulously develop our products and provide you
                with the finest tools to reach your goals. We're thrilled to have you join our active community and be part
                of the global movement!</h3>
        </div>
    </div>


    <div class="container-fluid py-5 my-2  aboutMedia">
        <img src="{{ asset('images/videoAbout.webp') }}" alt="video">
        <button id="play"><i class="fa fa-play"></i></button>

        <div class="modal">
            <div class="modal_container">
                <i id="close"class="fas fa-times"></i>
                <div class="iframe_container">
                    <iframe width="853" height="480"
                        src="https://www.youtube.com/embed/H9OckXwGESc?list=TLGGgynNg7B-pggyMjEwMjAyMw"
                        title="GORNATION | Our Team" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>



    <div class="py-2">
        <div class="container  d-flex align-items-center justify-content-around p-4">
            <div class=" triangleright shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false"></div>
            <h3 style="font-size: ; font-weight:bolder; padding:5px;"data-aos="fade-right" data-aos-duration="1000"
                data-aos-once="false">gallery</h3>
            <div class="triangleleft shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false"></div>
        </div>
    </div>

    <div class="container galerie" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false">
        <div class="main-img">
            <img src="https://images.pexels.com/photos/264109/pexels-photo-264109.jpeg?cs=srgb&dl=baby-children-cute-264109.jpg&fm=jpg"
                id="current">
        </div>
        <div class="images">
            <img
                src="https://images.pexels.com/photos/35537/child-children-girl-happy.jpg?cs=srgb&dl=adorable-beautiful-boy-35537.jpg&fm=jpg">
            <img
                src="https://images.pexels.com/photos/708440/pexels-photo-708440.jpeg?cs=srgb&dl=beard-bonding-community-708440.jpg&fm=jpg">
            <img
                src="https://images.pexels.com/photos/35188/child-childrens-baby-children-s.jpg?cs=srgb&dl=boy-brother-child-35188.jpg&fm=jpg">
            <img
                src="https://images.pexels.com/photos/670720/pexels-photo-670720.jpeg?cs=srgb&dl=alone-clouds-golden-hour-670720.jpg&fm=jpg">
            <img
                src="https://images.pexels.com/photos/35537/child-children-girl-happy.jpg?cs=srgb&dl=adorable-beautiful-boy-35537.jpg&fm=jpg">
            <img
                src="https://images.pexels.com/photos/708440/pexels-photo-708440.jpeg?cs=srgb&dl=beard-bonding-community-708440.jpg&fm=jpg">
            <img
                src="https://images.pexels.com/photos/35188/child-childrens-baby-children-s.jpg?cs=srgb&dl=boy-brother-child-35188.jpg&fm=jpg">
            <img
                src="https://images.pexels.com/photos/670720/pexels-photo-670720.jpeg?cs=srgb&dl=alone-clouds-golden-hour-670720.jpg&fm=jpg">

        </div>
    </div>

    <div class="py-2 my-5">
        <div class="container  d-flex align-items-center justify-content-around p-4">
            <div class=" triangleright shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false"></div>
            <h3 style="font-size: ; font-weight:bolder; padding:5px;"data-aos="fade-right" data-aos-duration="1000"
                data-aos-once="false">Our team</h3>
            <div class="triangleleft shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false"></div>
        </div>
    </div>

    <div class="container d-flex team">
        <div class="py-3 content" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false">
            <p>We're a young, dynamic team of passionate athletes who want to make a difference in the world of Street Workout. At our offices in Münster, Germany, we work together every day to realize our vision. What we have in common is a love of sport, good food & a willingness to give it our all.</p>
        </div>
        <div class="py-3 imgTeam" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false">
            <img src="{{asset('images/about1.webp')}}" alt="about1">
        </div>
    </div>


    <div class="py-2 my-5">
        <div class="container  d-flex align-items-center justify-content-around p-4">
            <div class=" triangleright shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false"></div>
            <h3 style="font-size: ; font-weight:bolder; padding:5px;"data-aos="fade-right" data-aos-duration="1000"
                data-aos-once="false">Our products</h3>
            <div class="triangleleft shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false"></div>
        </div>
    </div>

    <div class="container d-flex team">
         <div class="py-3 imgTeam justify-content-end" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false">
            <img src="{{asset('images/about2.webp')}}" alt="about1">
        </div><div class="py-3 content" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false">
            <p>The ENERGRIP story began with the fact that in 2023, there was virtually no quality sportswear available. Even today, most products are born from the desire of the community and the team to improve current products on the market or adapt them to Street Workout. That's why product development is carried out in collaboration with athletes of all levels, to offer you the best possible equipment for your training.</p>
            <a href="/">FIND OUT NOW</a>
        </div>

    </div>




    <script>
        /* ================ START PAGE ABOUT========================*/


        const Play = document.querySelector('#play'),
            Close = document.querySelector('#close'),
            Modal = document.querySelector('.modal');

        Play.addEventListener('click', () => {
            Modal.classList.add('show');
        });

        Close.addEventListener('click', () => {
            Modal.classList.remove('show');
        });



        /*galerie */
        var main_img = document.querySelector('#current');

        var images = document.querySelectorAll('.images img');

        images.forEach(img => img.addEventListener('click', imgClick));

        function imgClick(e) {
            images.forEach(img => (img.style.opacity = 1));

            main_img.classList.add('fadeIn');

            setTimeout(() => main_img.classList.remove('fadeIn'), 500);

            main_img.src = e.target.src;

            e.target.style.opacity = 0.6;
        }

        console.log()


        /* ================ END PAGE ABOUT========================*/
    </script>
@endsection
