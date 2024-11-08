<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="../User/Profile.css">
    <link rel="stylesheet" href="Responsive.css">

    <!-- ===== ===== Remix Font Icons Cdn ===== ===== -->
    <link rel="stylesheet" href="fonts/remixicon.css">
</head>

<body>
    <!-- ===== ===== Body Main-Background ===== ===== -->
    <span class="main_bg"></span>


    <!-- ===== ===== Main-Container ===== ===== -->
    <div class="container">

        <!-- ===== ===== Header/Navbar ===== ===== -->
        <header>
            <div class="brandLogo">
                <span>Leave Me Now</span>
            </div>
        </header>


        <!-- ===== ===== User Main-Profile ===== ===== -->
        <section class="userProfile card">
            <div class="profile">
                <figure><img src="About.jpg" alt="profile" width="250px" height="250px"></figure>
            </div>
        </section>


        <!-- ===== ===== Work & Skills Section ===== ===== -->
        <section class="work_skills card">

            <!-- ===== ===== Work Contaienr ===== ===== -->
            <div class="work">
                <h1 class="heading">work</h1>
                <div class="primary">
                    <h1>Tanjung Priuk</h1>
                    <span>Primary</span>
                    <p>Jalan Kampung Muara Bahari</p>
                </div>

                <div class="secondary">
                    <h1>Purworejo<br> Bayan</h1>
                    <span>Secondary</span>
                    <p>Mbatoh<br> Kleben</p>
                </div>
            </div>

            <!-- ===== ===== Skills Contaienr ===== ===== -->
            <div class="skills">
                <h1 class="heading">Skills</h1>
                <ul>
                    <li style="--i:0">Progaming</li>
                    <li style="--i:1">Gamer</li>
                    <li style="--i:2">Sleep</li>
                    <li style="--i:3">Video Editing</li>
                </ul>
            </div>
        </section>


        <!-- ===== ===== User Details Sections ===== ===== -->
        <section class="userDetails card">
            <div class="userName">
                <h1 class="name">LMAO</h1>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                    <span>Jakarta Utara,Tanjung Priuk</span>
                </div>
                <p>Gamer Dan Editor Jedag Jedug</p>
            </div>

            <div class="rank">
                <h1 class="heading">Kemampuan</h1>
                <span>8,6</span>
                <div class="rating">
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate underrate"></i>
                </div>
            </div>

            <div class="btns">
                <ul>
                    <li class="sendMsg">
                        <i class="ri-chat-4-fill ri"></i>
                        <a href="Feedback.php">Send Message</a>
                    </li>

                    <li class="sendMsg active">
                        <i class="ri-check-fill ri"></i>
                        <a href="Profile.php">Contacts</a>
                    </li>

                    <li class="sendMsg">
                        <a href="/../Project PHP/Home.php">Back To Menu</a>
                    </li>
                </ul>
            </div>
        </section>


        <!-- ===== ===== Timeline & About Sections ===== ===== -->
        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>About</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading">Informasi Kontak</h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">No Telepon:</h1>
                        <span class="info">+62 851 6183 8595</span>
                    </li>

                    <li class="address">
                        <h1 class="label">Alamat:</h1>
                        <span class="info">Jakarta Utara Kmp Muara Bahari</span>
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <span class="info">leavemenow.29@gmail.com</span>
                    </li>

                    <li class="site">
                        <h1 class="label">Nama Game</h1>
                        <span class="info">Leave Me Now</span>
                    </li>
                </ul>
            </div>

            <div class="basic_info">
                <h1 class="heading">Preman Exp</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">Birthday:</h1>
                        <span class="info">29 - November - 2002</span>
                    </li>

                    <li class="sex">
                        <h1 class="label">Jenis Kelamin:</h1>
                        <span class="info">Tidak Diketahui</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>

</body>

</html>