<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
margin: 0;
padding: 0;
font-family: Arial, sans-serif;
background-color: black
color: white
     }

     header {
display: flex;
justify-content: center;
padding: 20px 0;
background-color: black
     }

     nav ul {
list-style-type: none;
margin: 0;
padding: 0;
display: flex;
gap: 20px;
     }


     nav ul li {
        display: inline;
     }

     nav ul li a {
text-decoration: none;
color: white;
font-weight: bold;
     }

     nav ul li a.active {
        color: orangered
     }

     .intro {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 50px;
        max-width: 1200px;
        margin: 0 auto;
     }

     .intro-text {
        max-width: 500px;
     }

     .intro-text h1 {
        font-size: 2.5em;
        margin: 0;
     }

     .intro-text h1 {
            font-size: 2.5em;
            margin: 0;
        }

        .intro-text p {
            font-size: 1em;
            margin: 10px 0;
        }

        .intro-text .highlight {
            color: #ff9800;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff9800;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }

        .social-links {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .social-links a img {
            width: 24px;
            height: 24px;
        }

        .download {
            display: block;
            margin-top: 20px;
            color: #ff9800;
            text-decoration: none;
            font-weight: bold;
        }

        .intro-image img {
            width: 300px;
            border-radius: 50%;
            border: 5px solid #ff9800;
        }

        .about {
            text-align: center;
            padding: 50px;
            background-color: #2c2f48;
        }

        .about h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #ff9800;
        }

        .about p {
            font-size: 1em;
            line-height: 1.5em;
            max-width: 800px;
            margin: 0 auto;
            padding: 10px 0;
        }

        /* .skills {
            text-align: center;
            padding: 50px;
            background-color: #1f2235;
        }

        .skills h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #ff9800;
        }

        .skill-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .skill-icons img {
            width: 60px;
            height: 60px;
        } */
        .skill {
    display: flex;
    justify-content: space-between;
    padding: 50px;
    background-color: #fff;
    max-width: 1200px;
    margin: 0 auto;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.skill-details {
    flex: 1;
}

.skill-details h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.skill-details p {
    color: #666;
    margin-bottom: 30px;
}

.skill-bar {
    margin-bottom: 20px;
}

.skill-bar label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.bar {
    background-color: #e0e0e0;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 15px;
}

.progress {
    height: 8px;
    border-radius: 10px;
}

.photoshop {
    width: 89%;
    background-color: #fbc531;
}

.illustrator {
    width: 96%;
    background-color: #e84118;
}

.sketch {
    width: 78%;
    background-color: #00a8ff;
}

.skill-icons {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    flex: 1;
    padding-left: 50px;
}

.icon-box {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.icon-box .icon img {
    max-width: 50px;
    margin-bottom: 10px;
}

.icon-box h3 {
    font-size: 16px;
    margin-top: 10px;
}
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
<li><a href="#" class="active">Home</a></li>
<li><a href="#about">Portofolio</a></li>
<li><a href="#skill">skill</a></li>
<li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="intro">
        <div class="intro-text">
            <h1>Hello,<br> I Am Ahmad Fachri</h1>
<p>Graphic Designer || UI UX Designer || Web Devloper</p>
<p>2 Years Experienced <Span class="highlight">Insturktur Palcomtech</Span></p>
<a href="https://wa.me/+6282177099989" class="btn">Let's talk</a>
<div class="social-links">
<a href="https://www.linkedin.com/feed"><img src="img/link.png" alt="LinkedIn"></a>
<a href="https://github.com/FachriGGS"><img src="img/git.png" alt="GitHub"></a>
<a href="https://www.youtube.com/user/its_farr"><img src="img/yt.png" alt="YouTube"></a>
<a href="https://www.instagram.com/itss_mefarr/"><img src="img/ig.webp" alt="Instagram"></a>
</div>


<a href="#" class="download">Lihat currciculum</a>
</div>
<div class="intro-image">
<img src="img/foto.png" alt="Ahmad Fachri">
</div>
    </section>

    {{-- Menambahkan ID about untuk mengarahkan ke section ini --}}
<section class="about" id="about">
<h2>About me</h2>
<p><i>"Teknologi hanyalah alat, positif dan negative tergantung siapa yang menggunakanya!"</i></p>
<p>Saya freashgraduate lulusan manajemen informatika, mampu bekerja secara individu maupun berkolaborasi dengan tim, bekerja dengan cepet
    , up to date terhadap perkembangan teknologi dan informasi, saat ini saya berusia 16 tahun,
    walaupun umur saya tergolong muda, tapi saya sudah memiliki beberapa skill yang dapat diandalkan di era 4.0 saat ini
    grapic design, UI UX design, frontend web design, program office,
    dan beberapa skill editing video seperti adobe premiere pro dan after effect. cek detail saya dibawah
</p>
</section>

 {{-- <section class="skills" id="skill">
<h2>Skill</h2>
<div class="skill-icons">
<img src="img/office.png" alt="Microsoft office">
<img src="img/photoshop.png" alt="Adobe Photoshop">
<img src="img/uxui.webp" alt="UI UX ">

</div>
 </section> --}}

 <section class="skill">
    <section class="skill">
        <div class="skill-details">
            <h2>What My Design Skills Included</h2>
            <p>These are the words we live by in everything we do. Every story we tell, every brand we build, and every interaction we create must not only look beautiful.</p>
            <div class="skill-bar">
                <label>Photoshop</label>
                <div class="bar">
                    <div class="progress photoshop"></div>
                </div>
                <label>Illustrator</label>
                <div class="bar">
                    <div class="progress illustrator"></div>
                </div>
                <label>Sketch</label>
                <div class="bar">
                    <div class="progress sketch"></div>
                </div>
            </div>
        </div>
        <div class="skill-icons">
            <div class="icon-box">
                <div class="icon"><img src="ui-ux-design-icon.png" alt="UI/UX Design"></div>
                <h3>UI/UX Design</h3>
            </div>
            <div class="icon-box">
                <div class="icon"><img src="graphic-design-icon.png" alt="Graphic Design"></div>
                <h3>Graphic Design</h3>
            </div>
            <div class="icon-box">
                <div class="icon"><img src="motion-design-icon.png" alt="Motion Design"></div>
                <h3>Motion Design</h3>
            </div>
            <div class="icon-box">
                <div class="icon"><img src="photo-retouch-icon.png" alt="Photo Retouch"></div>
                <h3>Photo Retouch</h3>
            </div>
        </div>
    </section>

    .skill {
        display: flex;
        justify-content: space-between;
        padding: 50px;
        background-color: #fff;
        max-width: 1200px;
        margin: 0 auto;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    
    .skill-details {
        flex: 1;
    }
    
    .skill-details h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    
    .skill-details p {
        color: #666;
        margin-bottom: 30px;
    }
    
    .skill-bar {
        margin-bottom: 20px;
    }
    
    .skill-bar label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    
    .bar {
        background-color: #e0e0e0;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 15px;
    }
    
    .progress {
        height: 8px;
        border-radius: 10px;
    }
    
    .photoshop {
        width: 89%;
        background-color: #fbc531;
    }
    
    .illustrator {
        width: 96%;
        background-color: #e84118;
    }
    
    .sketch {
        width: 78%;
        background-color: #00a8ff;
    }
    
    .skill-icons {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        flex: 1;
        padding-left: 50px;
    }
    
    .icon-box {
        background-color: #f5f5f5;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .icon-box .icon img {
        max-width: 50px;
        margin-bottom: 10px;
    }
    
    .icon-box h3 {
        font-size: 16px;
        margin-top: 10px;
    }
 </section>
 
</body>
</html>