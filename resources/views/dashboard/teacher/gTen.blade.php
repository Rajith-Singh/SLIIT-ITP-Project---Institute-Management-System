<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/header-footer.css" />
    <link rel="stylesheet" href="/css/dulaksha.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MicroEye Educational Institute</title>
  </head>
  <body>
      
    <!-- Header Starts -->
    <nav class="navigaation-bar background-dark">
      <h1>
        <a href="/">
          <i class="fas fa-graduation-cap"> </i>MicroEye Educational Institute 
        </a>
      </h1>
      <ul>
        <!-- <li><a href="#">Home</a></li> -->
        <li><a href="publicTable">Timetables</a></li>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Exams</a></li>
        <li><a href="/librarian/libraryHome">Library</a></li>
        <li><a href="#">Q & A</a></li>
        <li><a href="#">Finance</a></li>
        <li>
          <i class="fas fa-bars align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></i>
        </li>  
        @if(Auth::guest())
        @else
        <li class="dropdown">
          <a href="{{url('user/home')}}" class="text-sm text-gray-700 underline">Hi {{Auth::user()->first_name}}</a>        
        </li>
        @endif
        <li><a href="#">|</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
    
    <!-- Header ends -->

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <img src="/images/Micro Eye Logo.png" class="sidebar-logo" alt="">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="fw-bold h3 ms-3">
          Quick Links       
      </div>
        <div class="my-3">
          <ul class="lead">
          <li class="mb-2 ms-4"><a href="publicTable" class="text-decoration-none">Classes Time-Table</a></li>
          <li class="mb-2 ms-4"><a href="studentSchedule" class="text-decoration-none">Student Schedule</a></li>
              
          </ul>
        </div>
      </div>
    </div>
    
<section class="container">
        <center><h1 class="topic">Grade 10 Time-Table</h1></center>
                <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-light-gray">
                                <th class="text-uppercase">Monday</th>
                                <th class="text-uppercase">Tuesday</th>
                                <th class="text-uppercase">Wednesday</th>
                                <th class="text-uppercase">Thursday</th>
                                <th class="text-uppercase">Friday</th>
                                <th class="text-uppercase">Saturday</th>
                                <th class="text-uppercase">Sunday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>
                                    <span class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">English</span>
                                    <div class="margin-10px-top font-size14">3:30pm-5:30pm</div>
                                    <div class="font-size13 text-black">Nadun Athapaththu</div>
                                </td>
                                <td>
                                    <span class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Science</span>
                                    <div class="margin-10px-top font-size14">3:30pm-5:30pm</div>
                                    <div class="font-size13 text-black">Ashan Ilangakon</div>
                                </td>

                                <td>
                                    <span class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">IT</span>
                                    <div class="margin-10px-top font-size14">3:30pm-5:30pm</div>
                                    <div class="font-size13 text-black">Shakila Manoji</div>
                                </td>
                                <td>
                                    <span class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Tamil</span>
                                    <div class="margin-10px-top font-size14">3:30pm-5:30pm</div>
                                    <div class="font-size13 text-black">Munship Shiwaran</div>
                                </td>
                                <td>
                                    <span class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Mathematics</span>
                                    <div class="margin-10px-top font-size14">3:30pm-5:30pm</div>
                                    <div class="font-size13 text-black">Darshana Kumarasinghe</div>
                                </td>
                                <td>
                                    <span class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Sinhala</span>
                                    <div class="margin-10px-top font-size14">8:30am-10:30am</div>
                                    <div class="font-size13 text-black">Upuli Ariyasena</div>
                                </td>
                                <td class="bg-light-gray"></td>
                                
                            </tr>
                            <tr>
                                <td class="bg-light-gray"></td> 
                                <td class="bg-light-gray"></td>
                                <td class="bg-light-gray"></td>
                                <td class="bg-light-gray"></td>
                                <td class="bg-light-gray"></td>   
                                <td class="bg-light-gray"></td>

                                <td>
                                    <span class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">History</span>
                                    <div class="margin-10px-top font-size14">1:30am-3:30am</div>
                                    <div class="font-size13 text-black">Ashoka Vithanage</div>
                                </td>
                                   
                            </tr>

                            

                        </tbody>
                    </table>
                </div>
</section>

<!-- Footer Starts -->
<footer class="footer">
      <div class="footer-container">
        <div class="footer-lists">
          <ul>
            <div class="micro-eye-logo">
              <a href="index.html">
                <img src="/images/Micro Eye Logo.png" alt="" />
              </a>
            </div>
          </ul>
          <ul>
            <li class="list-head">Quick Links</li>
            <li><a href="#">My Pofile</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Timetables</a></li>
          </ul>
          <ul>
            <li class="list-head">Quick Links</li>
            <li><a href="#">My Exams</a></li>
            <li><a href="#">Classes</a></li>
            <li><a href="#">Notices</a></li>
            <li><a href="#">Notifications</a></li>
          </ul>
          <ul>
            <li class="list-head">Sitemap</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Login</a></li>
          </ul>
          <ul>
            <li class="list-head">Contact Us</li>
            <li><a href="#">Micro Eye</a></li>
            <li><a href="#">No:21, 2nd Road</a></li>
            <li><a href="#">Malabe</a></li>
            <li><a href="#">Sri Lanka</a></li>
          </ul>
        </div>
        <div class="divider"></div>
      </div>
    </footer>
    <!-- Footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
    

