<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="home.css"> -->
    <link rel="icon" type="image/png" href="upnlogo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Spada Wimaya | Home</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}

body{
    background-color: rgb(245, 245, 245);
    overflow-x: hidden;
}

.navbar{
    position: fixed;
    top: 0%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    background: linear-gradient(190deg,#03045e,#023e8a,#0077b6);
    z-index: 2;
    align-items: center;
}

.leftnav{
    padding: 18px;
    align-items: center;
}

.leftnav a{
    display: inline-block;
    padding: 10px 30px;
    text-decoration: none;
    color: white;
    border-radius: 10px;
    transition: 0.2s;
}

.leftnav a:hover{
    /* background-color: #00000026; */
    filter: drop-shadow(1px 1px 10px rgb(253, 253, 253));
    transform: scale(1.05);
    transition: 0.2s;
}

.rrightnav{
    display: flex;
}

.navlogo{
    transform: translateY(16px);
    align-items: center;
    margin-right: 20px;
}
.navlogo button{
    align-items: center;
    border: none;
    background: none;
    transition: 0.3s;
}
.navlogo button:active{
    transform: rotateY(360deg);
    transition: 0.3s;
}
.navlogo button:hover{
    filter: drop-shadow(1px 1px 10px rgba(255, 201, 76, 0.55));
    transition: 0.3s;
    /* transform: scale(1.05); */
}

.rightnav{
    display: flex;
    background-color: white;
    align-items: center;
}

.navmore i{
    padding: 26px;
    font-size: 28px;
    cursor: pointer;
    transition: 0.5s ease;
    transform: rotateZ(0deg);
}

.navmore.rotate i{
    transform: rotateZ(360deg);
    transition: 0.5s ease;
}


.moremenu{
    transform: translateX(100%);
    height: 100%;
    position: fixed;
    width: 300px;
    top: 0%;
    right: 0%;
    background: linear-gradient(#0077b6,#023e8a);
    padding-top: 100px;
    z-index: 1;
    padding-left: 20px;
    padding-right: 20px;
}

.moremenu.on{
    transform: translateX(0);
    transition: 0.5s;
}

.moremenu{
    transition: 0.5s;
}

.moremenu.log .lastmenu{
    transform: translateY(200px);
    transition: 0.5s;
}

.moremenu.log .logsure{
    opacity: 1;
    visibility: visible;
    transition: 0.5s;
}




.morehead{
    text-align: center;
    color: white;
    margin-bottom: 50px;
    width: 100%;
    overflow: hidden;
}
.morehead i{
    font-size: 150px;
    /* border: solid 2px white;
    border-radius: 50%; */
    
}

.menumore{
    display: inline;
    padding: 10px 0px;
    text-align: center;
    color: white;
    font-size: 16px;
    width: 100%;
}

.menumore i{
    margin-right: 5px;
}

.menumore a{
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-decoration: none;
    width: 100%;
    padding: 8px 20px;
    background-color: rgba(195, 195, 195, 0.255);
    border-radius: 5px;
    transition: 0.2s;
    font-size: 12px;
}

.menumore a:hover{
    background-color: rgba(165, 165, 165, 0.255);
    transition: 0.2s;
}

.menumore div{
    margin-top: 20px;
}

.lastmenu{
    position: absolute;
    
    text-align: center;
    width: 100%;
    right: 0%;
    bottom: 0%;
    margin-bottom: 40px;
    font-size: 16px;
    transition: 0.5s;
    
}


.lastmenu span{
    font-size: 12px;
    padding: 10px 50px;
    background-color: white;
    color: black;
    text-decoration: none;
    align-items: center;
    border-radius: 10px;
    transition: 0.2s;
    cursor: pointer;
}

.lastmenu i{
    transform: translateY(2px);
    margin-right: 5px;
    cursor: pointer;
}

.lastmenu span:hover{
    background-color: black;
    color: white;
    transition: 0.2s;
}

.logsure{
    position: static;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.146);
    text-align: center;
    border-radius: 10px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(35px);
    transition: 0.2s;
}

.logtitle span{
    font-size: 12px;
    font-weight: 600;
    cursor: default;
    color: white;
}

.logsureopt{
    margin-top: 10px;
    display: flex;
    justify-content: space-around;
    text-align: center;
    margin-left: 30px;
    margin-right: 30px;;
}

.logsureopt span{
    font-size: 12px;
    text-decoration: none;
    color: white;
    cursor: pointer;
}

.logsureopt a{
    font-size: 12px;
    text-decoration: none;
    color: rgb(255, 74, 74);
}

.logsureopt a:hover{
    color: rgb(230, 96, 96);
}

.header{
    position: relative;
    margin-top: 2em;
    background: linear-gradient(135deg,#95999e,#dee2e6,#e9ecef);
    height: 18em;
}

.headertitle{
    padding-top: 120px;
    text-align: center;
    width: 100%;
    animation: appear 1s ease;
}

@keyframes appear{
    0%{
        transform: translateY(30px);
        opacity: 0%;
    }
    100%{
        transform: translateY(0px);
        opacity: 100%;
    }
}

.headertitle h2{
    font-size: 30px;
    color: rgb(43, 43, 43);
}

.container{
    position: relative;
    padding: 20px 50px;
    width: 100%;
}
/* 
.latestassgn{
    overflow: hidden;
} */

.assgnlist a{
    text-decoration: none;
}
.assgnlist{
    display: flex;
    justify-content: space-between;
    align-items: center;
    
}



.assgncont{
    background-color: white;
    border-radius: 10px;
    display: flex;
    width: 22em;
    align-items: center;
    filter: drop-shadow(3px 3px rgba(0, 0, 0, 0.19));
    height: 100px;
    border: solid 2px rgba(0, 0, 0, 0.19);
    transition: 0.2s;
    
}

.assgncont:hover{
    background-color: #e7f2f8;
    transition: 0.2s;
}

.assgncont:active{
    transition: 0.1s;
    filter: none;
    transform: translate(3px,3px);
}

.assgntitle h2{
    font-size: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    color: rgb(57, 57, 57);
}



.assgnicon i{
    background-color: var(--accent-color);
    font-size: 28px;
    color: rgb(49, 49, 49);
    padding: 15px;
    margin: 20px;
    border-radius: 50px;
}

.assgnname{
    margin: 10px 0;
}

.assgndue{
    font-size: 13px;
    font-weight: 100;
    color: rgb(105, 105, 105);
}

.assgntitlename{
    font-size: 14px;
    color: rgb(18, 18, 18);
}

.assgndesc{
    margin-top: 1px;
    font-size: 12px;
    font-weight: 500;
    color: rgb(18, 18, 18);
}



.assgnarrow i{
    background-color:rgba(0, 0, 0, 0.393);
    padding: 5px;
    font-size: 30px;
    font-weight: 700;
    border-radius: 50%;
    color: white;
    visibility: hidde;
    transition: 0.2s;
    cursor: pointer;
}

.assgnarrow i:hover{
    background-color: rgb(83, 83, 83);
    transition: 0.2s;
}

.tomorrow{
    margin-top: 40px;
    width: 100%;
    position: relative;
}

.tomorrowtitle{
    cursor: default;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    color: rgb(57, 57, 57);
}

.tomorrowtitle i{
    font-size: 24px;
    margin-right: 5px;
    transform: translateY(-1px);
}

.tomorrowtitle h2{
    font-size: 20px;
}

.tomorrowcourse a{
    text-decoration: none;
}

.tomorrowdesc{
    background-color: white;
    width: 270px;
    border-radius: 10px;
    border: solid 4px #0077b6;
    height: 250px;
    transform: translateY(-8px);
    transition: 0.5s;
}

.tomorrowdesc:hover{
    border: solid 4px #00669d;
    transition: 0.2s;
    .tomorrowdesctitle{
        background-color: #00669d;
        transition: 0.2s;
    }
    
}

.tomorrowdesctitle{
    background-color: #0077b6;
    padding: 15px 20px;
    border-radius: 5px 5px 0px 0px;
    text-align: center;
    color: white;
}

.tomorrowdescinfo{
    padding: 20px 20px 30px 30px;
    font-size: 15px;
    font-weight: 600;
}

.tomorrowdescinfo li{
    color: rgb(70, 70, 70);
}

.tomorrowdescinfo p{
    margin-left: 20px;
    font-size: 13px;
    color: rgb(97, 97, 97);
    font-weight: 500;
    margin-bottom: 6px;
}

.tomorrowinfo{
    display: flex;
    align-items: center;
}

.tomorrowinfo a{
    text-decoration: none;
}

.tomorrowcourse{
    margin-left: 20px;
    width: 100%;
}


.tomcourse{
    position: relative;
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    background-color: white;
    border: solid 2px rgba(0, 0, 0, 0.333);
    border-radius: 12px;
    width: 100%;
    justify-content: space-between;
    transition: 0.2s;
}

.tomcourse:hover{
    background-color: #eaf4fd;
    transition: 0.2s;
}

.tomcourse:last-child{
    margin-bottom: 20px;
}

.lefttom{
    display: flex;
    align-items: center;
}

.tomicon i{
    font-size: 20px;
    align-items: center;
    color: black;
    padding: 12px;
    background-color: var(--accent-color);
    border-radius: 50%;
    margin: 10px;

}

.tomtitlename{
    font-size: 14px;
    color: rgb(43, 43, 43);
}

.tominfo{
    font-size: 12px;
    color: rgb(98, 98, 98);
    font-weight: 500;
}

.righttom{
    text-align: center;
    width: 145px;
    margin-right: 15px;
    font-size: 14px;
    text-transform: uppercase;
    background-color: #4a9fcd;
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
}

.courses{
    margin-top: 30px;
    width: 100%;
    overflow: hidden;
    margin-bottom: 30px;
}

.courseheader{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.coursetitle{
    display: flex;
    align-items: center;
    color: rgb(57, 57, 57);
}

.coursetitle i{
    font-size: 24px;
    margin-right: 5px;
}

.coursetitle h2{
    font-size: 20px;
}

.arrowcourse{
    margin-right: 10px;
}

.arrowcourse i{
    background-color: rgb(151, 151, 151);
    padding: 8px;
    font-size: 24px;
    color: white;
    margin-left:2px;
    cursor: pointer;
    transition: 0.2s;
}
.arrowcourse button{
    border: none;
}
.arrowcourse button:active{
    transform: scale(0.95);
    transition: 0.1s;
}

.arrowcourse i:hover{
    background-color: rgb(94, 94, 94);
    transition: 0.2s;
}

.coursecont{
    width: 100%;
    margin-top: 20px;
    display: flex;
    transition: 0.5s;
    transform: translateY(0px);
}


.coursecont a{
    text-decoration: none;
}

.coursefill{
    background-color: white;
    margin-right: 20px;
    width: 250px;
    height: 220px;
    border-radius: 10px;
    border: solid 2px rgba(0, 0, 0, 0.19);
    filter: drop-shadow(3px 3px rgba(0, 0, 0, 0.19));
    transition: 0.5s;
}

.coursefill:hover{
    background-color: #eaf4fd;
    transition: 0.2s;
}

.coursehead{
    padding: 20px;
    align-items: center;
    text-align: center;
}

.courseicon i{
    color: black;
    background-color: var(--accent-color);
    padding: 20px;
    font-size: 24px;
    border-radius: 50%;
    margin-bottom: 10px;
}


.coursename h3{
    font-size: 18px;
    color: rgb(34, 34, 34);
}

.coursename p{
    margin-top: 5px;
    font-size: 14px;
    color: rgb(101, 101, 101);
    font-weight: 400;
}






    </style>
</head>
<body>
    <div class="navbar">
        <div class="leftnav">
            <a href="">Home</a>
            <a href="">Courses</a>
            <a href="">Timeline</a>
            <a href="">Calendar</a>
            <a href="">Your Files</a>
        </div>
        <div class="rrightnav">
            <div class="navlogo">
                <button>
                    <img src="upnlogo.png" alt="" width="45">
                </button>
            </div>
            <div class="rightnav" id="morebtn">
                <div class="navmore" id="navmore">
                    <i class='bx bx-menu' id="btnchange"></i>
                </div>
            </div>

        </div>
    </div>
    <div class="moremenu" id="moremenu">
        <div class="morehead">
            <i class='bx bxs-user-circle' ></i>
            
            <h2><?= $_GET["username"] ?></h2>
            <p>123240145</p>
        </div>
        <div class="menumore">
            <div class="account">
                <a href=""><i class='bx bxs-user' ></i>
                Account</a>
            </div>
            <div class="jadwal">
                <a href=""><i class='bx bxs-calendar' ></i>
                Jadwal Kuliah</a>
            </div>
            <div class="ukt">
                <a href=""><i class='bx bxs-wallet' ></i>
                Pembayaran UKT</a>
            </div>
            <div class="settings">
                <a href=""><i class='bx bxs-cog' ></i>
                Settings</a>
            </div>
        </div>
        <div class="lastmenu" id="logout">
            <span><i class='bx bx-log-out' ></i>
                Log Out</span>
        </div>

        <div class="logsure">
            <div class="logtitle">
                <span>Are You Sure?</span>
            </div>
            <div class="logsureopt">
                <span id="nolog">No</span>
                <a href="hehe.php">Yes</a>
            </div>
        </div>
    </div>

    <div class="header">
        <div class="headertitle">
            <h2>Welcome back, <?= $_GET["username"] ?>.</h2>
            <p>You have 0 assignment(s) to do.</p>
        </div>
    </div>
    <!-- <svg style="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="linear-gradient(135deg,#95999e,#dee2e6,#e9ecef);" fill-opacity="1" d="M0,96L60,80C120,64,240,32,360,32C480,32,600,64,720,90.7C840,117,960,139,1080,138.7C1200,139,1320,117,1380,106.7L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> -->
    <div class="container">
        <div class="latestassgn">
            <div class="assgntitle">
                <h2>Here is Your Latest Assignment(s)</h2>
            </div>
            <div class="assgnlist">
                <a href="">
                    <div class="assgncont 1">
                        <div class="assgnicon" style="--accent-color:#f7d9c4">
                            <i class='bx bxs-file' ></i>
                        </div>
                        <div class="assgnname">
                            <div class="assgndue">
                                <h4>Due Thursday, 13 March 2025</h4>
                            </div>
                            <div class="assgntitlename">
                                <h3>Kalkulus Lanjut</h3>
                            </div>
                            <div class="assgndesc">
                                <p>Tugas Integral.</p>
                            </div>
                        </div>
                    </div>

                </a>

                <a href="">
                    <div class="assgncont 2">
                        <div class="assgnicon" style="--accent-color:#c6def1">
                            <i class='bx bxs-file'></i>
                        </div>
                        <div class="assgnname">
                            <div class="assgndue">
                                <h4>Due Saturday, 15 March 2025</h4>
                            </div>
                            <div class="assgntitlename">
                                <h3>Prak. Algo Lanjut</h3>
                            </div>
                            <div class="assgndesc">
                                <p>Latihan Responsi.</p>
                            </div>
                        </div>
                    </div>

                </a>

                <a href="">
                    <div class="assgncont 3">
                        <div class="assgnicon" style="--accent-color:#c9e4de">
                            <i class='bx bxs-file' ></i>
                        </div>
                        <div class="assgnname">
                            <div class="assgndue">
                                <h4>Due Tuesday, 18 March 2025</h4>
                            </div>
                            <div class="assgntitlename">
                                <h3>Matriks dan Vektor</h3>
                            </div>
                            <div class="assgndesc">
                                <p>Matriks ordo 3x3.</p>
                            </div>
                        </div>
                    </div>

                </a>
                <a href="assignments.html" target="_self">
                    <div class="assgnarrow">
                        <i class='bx bx-chevron-right' ></i>
                    </div>
                </a>
            </div>
            
        </div>

        <div class="tomorrow">
            <div class="tomorrowtitle">
                <i class='bx bxs-calendar' ></i>
                <h2>Tomorrow's Schedule</h2>
            </div>
            <div class="tomorrowinfo">
                <a href="">
                    <div class="tomorrowdesc">
                        <div class="tomorrowdesctitle">
                            <h3>Monday</h3>
                        </div>
                        <div class="tomorrowdescinfo">
                            <li>Olahraga</li>
                            <p>(06.30 - 07.20)</p>
                            <li>Jaringan Komputer</li>
                            <p>(12.00-14.30)</p>
                            <li>Bahasa Inggris</li>
                            <p>(14.30-16.30)</p>
                        </div>
                    </div>
                </a>

                <div class="tomorrowcourse">
                    <a href="">
                        <div class="tomcourse 1" style="--accent-color:#dbcdf0">
                            <div class="lefttom">
                                <div class="tomicon">
                                    <i class='bx bxs-book'></i>
                                </div>
                                <div class="tomtitle">
                                    <div class="tomtitlename">
                                        <h3>Olahraga</h3>
                                    </div>
                                    <div class="tominfo">
                                        <p>4/16</p>
                                    </div>
                                </div>
                            </div>
                            <div class="righttom">
                                <h5>25% Complete</h5>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="tomcourse 2" style="--accent-color:#e2cfc4">
                            <div class="lefttom">
                                <div class="tomicon">
                                    <i class='bx bxs-book'></i>
                                </div>
                                <div class="tomtitle">
                                    <div class="tomtitlename">
                                        <h3>Jaringan Komputer</h3>
                                    </div>
                                    <div class="tominfo">
                                        <p>5/16</p>
                                    </div>
                                </div>
                            </div>
                            <div class="righttom">
                                <h5>31,25% Complete</h5>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="tomcourse 3" style="--accent-color:#faedcb">
                            <div class="lefttom">
                                <div class="tomicon">
                                    <i class='bx bxs-book'></i>
                                </div>
                                <div class="tomtitle">
                                    <div class="tomtitlename">
                                        <h3>Bahasa Inggris</h3>
                                    </div>
                                    <div class="tominfo">
                                        <p>3/16</p>
                                    </div>
                                </div>
                            </div>
                            <div class="righttom">
                                <h5>18,75% Complete</h5>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
        
        <div class="courses">
            <div class="courseheader">
                <div class="coursetitle">
                    <i class='bx bxs-book-open'></i>
                    <h2>
                        Check on Your Course(s)
                    </h2>
                </div>
                <div class="arrowcourse">
                    <button>
                        <i class='bx bxs-chevron-left' id="courseleft"></i>
                    </button>
                    <button>
                        <i class='bx bxs-chevron-right' id="courseright"></i>
                    </button>
                </div>
            </div>
            <div class="coursecont" id="coursecont">
                <a href="">
                    <div class="coursefill 1" style="--accent-color:#c9e4de">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Algoritma Pemrograman</h3>
                                <p>Mangaras Yanu F S.T., M.Eng.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="coursefill 2" style="--accent-color:#f2c6de">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Bahasa Inggris</h3>
                                <p>Rahayu Rizky S.Pd., Mpd</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="coursefill 3" style="--accent-color:#e2cfc4">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Statistika</h3>
                                <p>Agus Sasmito Aribowo S.Kom., M.Cs., Ph.D</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="coursefill 4" style="--accent-color:#c6def1">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Sistem dan Teknologi Informasi</h3>
                                <p>Yuli Fauziah S.T., M.T.</p>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="">
                    <div class="coursefill 5" style="--accent-color:#f9c6c9">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Jaringan Komputer</h3>
                                <p>Rifki Indra P S.Kom., M.Eng.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="coursefill 5" style="--accent-color:#dbcdf0">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Matriks dan Ruang Vektor</h3>
                                <p>Budi Santosa S.Si., M.T.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="coursefill 5" style="--accent-color:#e2e2df">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Kalkulus Lanjut</h3>
                                <p>Ahmad Taufiq Akbar S.Si., M.Cs.</p>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="">
                    <div class="coursefill 5" style="--accent-color:#faedcb">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Olahraga II</h3>
                                <p>Wahyu Wibowo Eko Y. S.Pd., M.M., M.Or.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="coursefill 5" style="--accent-color:#f2c6de">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Praktikum Algoritma Pemrograman</h3>
                                <p>Agus Sasmito Aribowo S.Kom., M.Cs., Ph.D</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="coursefill 5" style="--accent-color:#d2d2cf">
                        <div class="coursehead">
                            <div class="courseicon">
                                <i class='bx bxs-book-open'></i>
                            </div>
                            <div class="coursename">
                                <h3>Praktikum Jaringan Komputer</h3>
                                <p>Riza Prapascatama Agusdin S.Kom., M.IM.</p>
                            </div>
                        </div>
                    </div>
                </a>
                
            </div>
        </div>
    </div>
    



</body>
<script src="home.js"></script>
</html>