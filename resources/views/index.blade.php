@extends('layouts.index')
@section('content')
    <div class="wrapper">
        <div class="nav">
            <div class="logo">
                <a href="#home"><img src="https://erakomp.oss-ap-southeast-5.aliyuncs.com/assets/img/erakomp_logo.png"
                        alt="" width="60" height="60"></a>
            </div>
            <div class="links">
                <a href="/index" class="mainlink">Home</a>

                <a href="/gallery">Gallery</a>
                <a href="/video">Testimony</a>
                <a href="/career">Career</a>


            </div>
        </div>

        <!-- LANDING PAGE -->

        <div class="landing" id="landing">
            <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
                <h1 style="font-size: 50px; color:#3d4747;">WELCOME TO <span
                        style="color:dodgerblue;font-size: 8vw">Erakomp</span> </h1>
                <h3 style="text-align:justify;color:#3d4747;">Where you meet your IT needs</h3>
                <div class="btn">
                    <a href="https://www.erakomp.co.id/">Visit Erakomp</a>
                </div>
            </div>
            <div class="landingImage2" data-aos="fade-down" data-aos-duration="2000">
                <img src="https://image.freepik.com/free-vector/people-waving-hand-illustration-concept_52683-29825.jpg"
                    alt="" width="300" height="300">
            </div>
        </div>

        <!-- ABOUT SECTION -->


        <div class="landing" id="home" style="margin-top: -5%;">
            <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
                <h1 style="font-size: 35px; text-align: center;"> <span style="color:dodgerblue;font-size: 3vw">PT.
                        Erakomp Infonusa</span> </h1>
                <h3 style="text-align: justify;">PT. Erakomp Infonusa has been established since 1988 as an IT company.
                    We are leading in an IT company providing all technology solution, business, goverment and private
                    use. We exist to 474 districts representing 86% of total districts in Indonesia. As we strive to
                    excel in customer service excellence by providing real time solutions and wide product offering.</p>
                    <p>Dynamic improvements are implace to provide both in the sales and after sales service. We pride
                        ourselves in after sales service by offering 3 years warranty and one-to-one replacement, among
                        many other extra perks and benefits that customer may enjoy by shopping with us.
                </h3>

            </div>
            <div class="landingImage" data-aos="fade-down" data-aos-duration="2000">
                <img src="https://cdn.erakomp.co.id/assets/Loby%20Erakomp2.png" alt="" width="500" height="300">
            </div>
        </div>

        <!-- INFO SECTION -->

        <div class="infoSection" id="services">
            <div class="infoHeader" data-aos="fade-up" data-aos-duration="1000">
                <h1 style="color:#2f8be0">Our Services </h1>
            </div>
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <img src="https://erakomp.oss-ap-southeast-5.aliyuncs.com/compro/img/MobileApp.png"
                        class="cardoneImg" alt="" data-aos="fade-up" data-aos-duration="1100">
                    <div class="cardbgone"></div>

                    <div class="cardContent">
                        <br>
                        <i class="fas fa-id-badge" style="font-size:30px; margin-left: 43%; color:#3d4747;"></i>

                        <h2 style="text-align: center;">ISO COMPLIANT
                        </h2>
                        <p style="text-align: justify;">We are ISO and OSAS certified since 2004 and has won numerous
                            awards and accolades over the years.</p>

                    </div>
                </div>
                <div class="card two" data-aos="fade-up" data-aos-duration="1300">
                    <img src="https://erakomp.oss-ap-southeast-5.aliyuncs.com/compro/img/learn.png" class="cardtwoImg"
                        alt="" data-aos="fade-up" data-aos-duration="1200">
                    <div class="cardbgtwo"></div>
                    <div class="cardContent">
                        <br>
                        <i class="fas fa-sitemap" style="font-size:30px; margin-left: 43%; color:#3d4747;"></i>

                        <h2 style="text-align: center;">PHYSICAL STORAGE SOLUTION
                        </h2>
                        <p style="text-align: justify;">For Enterprises seeking physical storage solution onsite within
                            their office premises, we are the go-to experts. We help to consult on the most cost
                            efficient solution, build, maintain and service your physical storage and server.</p>

                    </div>
                </div>
                <div class="card three" data-aos="fade-up" data-aos-duration="1600">
                    <img src="https://erakomp.oss-ap-southeast-5.aliyuncs.com/compro/img/videocall.png"
                        class="cardthreeImg" alt="" data-aos="fade-up" data-aos-duration="1300">
                    <div class="cardbgone"></div>
                    <div class="cardContent">
                        <br>
                        <i class="fas fa-download" style="font-size:30px; margin-left:43%; color:#3d4747;"></i>

                        <h2 style="text-align: center;">MANAGED IT SERVICES</h2>
                        <p style="text-align: justify;">Streamline your IT services to increase productivity and
                            efficiency within the workplace with our specialized solutions catered to safe cost up to
                            60%.</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="infoSection" style="margin-top:10%; color:#3d4747;">
        <p></p>
        <div class="infoCards">
            <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                <img src="https://cdn.erakomp.co.id/assets/img/4643369.png" class="cardoneImg" alt="" data-aos="fade-up"
                    data-aos-duration="1100">
                <div class="cardbgone"></div>
                <div class="cardContent">
                    <br>
                    <i class="fas fa-users" style="font-size:30px; margin-left:43%; color:#3d4747;"></i>

                    <h2 style="text-align: center;">DEDICATED & PROFESSIONAL SALES
                    </h2>
                    <p style="text-align: justify;">Our team delivers for every sectors from government to corporate and
                        retail. Our professional and dedicated sales people will assist you in seamless integration and
                        after sales.</p>

                </div>
            </div>
            <div class="card two" data-aos="fade-up" data-aos-duration="1300">
                <img src="https://cdn.erakomp.co.id/assets/img/28416.png" class="cardtwoImg" alt="" data-aos="fade-up"
                    data-aos-duration="1200" height="180">
                <div class="cardbgtwo"></div>
                <div class="cardContent">
                    <br>
                    <i class="fas fa-wifi" style="font-size:30px; margin-left: 43%; color:#3d4747;"></i>

                    <h2 style="text-align: center;">NETWORK SOLUTIONS
                    </h2>
                    <p style="text-align: justify;">We are the leading expert in any network solutionsincluding TCP/IP
                        and star topology build up supported by the most advanced technology in cabling and fiber optic.
                    </p>

                </div>
            </div>
            <div class="card three" data-aos="fade-up" data-aos-duration="1600">
                <img src="https://cdn.erakomp.co.id/assets/img/2514.png" class="cardthreeImg" alt="" data-aos="fade-up"
                    data-aos-duration="1300" height="180" width="180">
                <div class="cardbgone"></div>
                <div class="cardContent">
                    <br>
                    <i class="fas fa-info" style="font-size:30px; margin-left: 43%; color:#3d4747;"></i>

                    <h2 style="text-align: center;">SUPPORT CONSULTING
                    </h2>
                    <p style="text-align: justify;">We understand that not everyone is adept in IT. We are here for you
                        to be consulted and provide solution from the simplest troubleshooting to the most complex
                        configuration. Our trusted service centre had been appointed by international brands to be the
                        authorized service point in Indonesia

                    </p>

                </div>
            </div>
        </div>

    </div>
    </div>

    </div>


    <!-- ABOUT SECTION -->

    <div class="about" id="mission" style="margin-top: 0%;">
        <p></p>
        <div class="aboutText" data-aos="fade-up" data-aos-duration="1000">
            <h1 style="color:#3d4747;">Get To know <br> <span style="color:#2f8be0;font-size:3vw">Our Mission</span>
            </h1>
            <img src="https://image.freepik.com/free-vector/plagiarism-concept-having-idea-stolen_23-2148704330.jpg"
                alt="" style="width: 350px; height:350px; margin-top:20%;">
        </div>
        <div class="aboutList" data-aos="fade-left" data-aos-duration="1000">
            <ol>
                <li>
                    <span>&#128077;</span>
                    <p><strong>To be the leader in IT Solution Company delivering the highest quality, innovation, and
                            customer services.</strong></p>
                </li>

            </ol>
        </div>
    </div>




    <!-- ABOUT SECTION -->

    <div class="about" id="vision">
        <div class="aboutText" data-aos="fade-up" data-aos-duration="1000">
            <h1 style="color:#3d4747;">Get To Know <br> <span style="color:#2f8be0;font-size:3vw">Our Vision</span>
            </h1>
            <img src="https://image.freepik.com/free-vector/partners-doing-jigsaw-puzzle-flat-illustration_74855-5277.jpg"
                alt="" style="width: 350px; height:350px; margin-top:25%;">
        </div>
        <div class="aboutList" data-aos="fade-left" data-aos-duration="1000">
            <ol>
                <li>
                    <span>&#128077;</span>
                    <p><strong>To provide compelling value by delivering managed services and end-to-end hardware to
                            software and to enhance operational efficiency and cost benefit.</strong></p>
                </li>

            </ol>

        </div>
    </div>



    <!-- <div class="banner">
            <div class="bannerText" data-aos="fade-right" data-aos-duration="1000">
                <h1>Download the HealthCare App Today. <br> <span style="font-size:1.6vw;font-weight:normal"  class="bannerInnerText">
                    Stay Updated and get all your medical needs taken care of!
                </span> </h1>
                <a href="#"> <img src="img/AndroidPNG.png" alt=""> </a>
                <a href="#"> <img src="img/iosPNG.png" alt=""> </a>
            </div>
            <div class="bannerImg" data-aos="fade-up" data-aos-duration="1000">
                <img src="img/MobileApp.png" alt="">
            </div>
        </div>-->

    <div class="footer">
        <h2 style="color:#3d4747;font-size:14px;">&#169; PT. Erakomp Infonusa. All Right Reserved.</h2>
        <div class="footerlinks">
            <a href="https://www.facebook.com/erakomp.co.id/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/erakomp" class="fa fa-twitter"></a>
            <a href="https://www.linkedin.com/in/erakompinfonusa/" class="fa fa-linkedin"></a>
            <a href="https://www.youtube.com/channel/UCfuOPCONEg-BPwQI5cMWwig" class="fa fa-youtube"></a>
            <a href="https://www.instagram.com/erakomp/" class="fa fa-instagram"></a>
        </div>
    </div>

    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img
            src="https://img.icons8.com/clouds/100/000000/up.png" /></button>


    
@endsection