<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Ines Armada Bras</title>
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box}body{  padding-top: 70px;font-family:Lato,sans-serif;font-weight:300;color:#747704}h1,h2,h3{text-transform:uppercase}p{ color:#6f9f75}.text-muted{color:#bcbbbb}.text-thin{font-weight:100}.container hr{height:10px;border:0;box-shadow:inset 0 10px 10px -10px rgba(0,0,0,.5)}.logo{margin-top:20px}.logo img{max-height:100px;height:100%}.title-super{font-size:60px}.subtitle{color:#6f9f75}.images img{border:1px solid #6f9f75}footer{text-align:right;flex-direction:column;vertical-align:text-bottom}@media only screen and (max-width:500px){.logo img{max-height:80px;height:100%;margin-top:10px}} ul {list-style-type: none;} .bg1 {background-color: #6f9f75;} .textbg1 {color:white}.textbg1 a{color:white;text-decoration: underline}.textbg1 small {color:white}.bg2 {background-color: #1D8267;}.textbg2 p,em{color:white}.textbg2 a{color:white;text-decoration: underline}
        </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-thin" href="#">INÊS ARMADA BRÁS</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Webdesign <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#nanodegree">Nanodegree Projects</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#general">General</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#newspapers">Newspapers & More </a>
                    </li>
                    <li><a href="http://inesarmadabras.portfoliobox.net/artwork-banners">Artwork & Banners</a>
                    </li>
                    <li><a href="https://inesarmadabras.portfoliobox.net/outrosprojectos">Other Worlds</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="https://drive.google.com/open?id=0B-LnqCYP1RM3Q1ZCM2tGcGJHWlk">CV (pdf)</a>
                    </li>
                    <li><a href="http://inesarmadabras.6te.net">WebSite</a>
                    </li>
    </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <!-- CONTAINER: START-->
        <header class="row">

            <div align="right" class="titles col-md-12 text-right text-uppercase">
                <h1 class="title-super text-thin">Inês Armada Brás</h1>
                <h3 class="subtitle">Portfolio</h3>
            </div>
        </header>

    </div>
    <div class="bg1 textbg1">
        <div id="intro" class="container">
            <section class="row">
                <div class="col-md-12">
                    <h2 class="text-muted">Intro</h2>

                    <article>
                        <h4 class="text-center">This is my portfolio.
Since 2014 I have been developing my knowledge of web and graphic designer.
Here are some of my work: one developed for commercial purposes, others for particular projects or online courses and many ... merely experiences, just for fun.<br><strong>This site is still under construction.</strong> Some links will redirect to my old pages. Sorry for bothering you. It will be fixed ASAP.
                    </h4>
                        <br>

                    </article>
                    <article>
                        <h3 class="text-thin">About me:</h3>
                        <ul>
                            <li> Organizer @ <a href="http://gdglisbon.xyz">Google Developer Group Lisboa (GDGLx)</a> </li>
                            <li> Voluntary Trainer & President of the supervisory board @ <a href="http://rato-adcc.pt/index.php/pt/rato-adcc/quem-somos">Rato-ADCC</a> </li>
                            <li>Voluntary Work @ Refood da Misericórdia</li>
                            <li>Freelancer Graphic Designer</li>
                        </ul>

                        <h4 align="right">+info <small>(only PT, for now)</small>: <a href="inesarmadabras.6te.net">inesarmadabras.6te.net</a></h4>

                    </article>
                </div>
            </section>
        </div>
    </div>
    <?php require($DOCUMENT_ROOT . "nanodegree.html"); ?>

    <!--END CONTAINER-->
    <div class="bg2 textbg2">
        <div id="general" class="container">
            <section class="row">
                <div class="col-md-12">
                 <br> <br>
                    <h2 class="text-muted">Other Projects</h2>
                </div>
            </section>
            <section class="projects row text-center">
                <!--cada row tem 12 colunas -->
                <article class="col-md-4">
                    <img class="images img-responsive" src="images/f1.png" alt="My Site" data-toggle="modal" data-target="#project1">
                    <h3 class="textbg1 imgtitle">My Site</h3>
                    <p><a href="http://inesarmadabras.6te.net/">inesarmadabras.6te.net</a>
                    </p>
                </article>
                <article class="col-md-4">
                    <img class="images img-responsive" src="images/f2.png" alt="The Others" data-toggle="modal" data-target="#project2">
                    <h3 class="textbg1 imgtitle">The Others</h3>
                    <p><a href="http://osoutros.rato-adcc.pt">osoutros.rato-adcc.pt</a>
                    </p>
                </article>
                <article class="col-md-4">
                    <img class="images img-responsive" src="images/f9.png" alt="Lista I" data-toggle="modal" data-target="#projecti">
                    <h3 class="textbg1 imgtitle">Lista I - É tempo de mudar</h3>
                    <p><a href="http://listai.eu5.org/">listai.eu5.org/</a>
                    </p>
                </article>
            </section>
            <section class="projects row text-center">
                <!--cada row tem 12 colunas -->
                <article class="col-md-4">
                    <img class="images img-responsive" src="images/f10.png" alt="One Template" data-toggle="modal" data-target="#projectone">
                    <h3 class="textbg1 imgtitle">One Template</h3>
                    <p><a href="http://inesarmadabras.portfoliobox.net/jornaispublicaes">inesarmadabras.portfoliobox.net</a>
                    </p>
                </article>

                <article class="col-md-4">
                    <img class="images img-responsive" src="images/f11.png" alt="OldWebsite" data-toggle="modal" data-target="#projectold">
                    <h3 class="textbg1 imgtitle">My Old Website (2013-2016)</h3>
                    <p><a href="http://inesarmadabras.6te.net/old/">inesarmadabras.6te.net/old</a>
                    </p>
                </article>

            </section>
        </div>
    </div>

    <!-- CONTAINER: END-->
    <!-- Modal Project 1-->
    <div class="modal fade" id="project1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">My Website.</h4>
                </div>
                <div class="modal-body">
                    <img class="img-responsive" src="images/f1.png" alt="My Site">
                    <br>It's only in Portuguese (sorry) but you can download my CV in english.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="http://inesarmadabras.6te.net/" class="btn btn-default">Go</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Project 2-->
    <div class="modal fade" id="project2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel2">The Others</h4>
                </div>
                <div class="modal-body">
                    <img class="img-responsive" src="images/f2.png" alt="The Others">
                    <br>I collaborated on an HTML5-based educational web app (digital book), under the project "The Others". This project aimed the creation of an online toolkit in the field of Human Rights Education from a long term role playing game.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="http://osoutros.rato-adcc.pt" class="btn btn-default">Go</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Project i-->
    <div class="modal fade" id="projecti" tabindex="-1" role="dialog" aria-labelledby="myModalLabeli" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabeli">Lista I</h4>
                </div>
                <div class="modal-body">
                    <img class="img-responsive" src="images/f9.png" alt="listai">
                    <br>Developed under the election campaign for the ISEL Student Association. I did the logo, posters, did the editing of all images and graphics components for the campaign.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="http://listai.eu5.org/" class="btn btn-default">Go</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Project one-->
    <div class="modal fade" id="projectone" tabindex="-1" role="dialog" aria-labelledby="myModalLabelone" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabelone">ONE Template</h4>
                </div>
                <div class="modal-body">
                    <img class="img-responsive" src="images/f10_2.png" alt="one">
                    <br>(under construction)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Project Old-->
    <div class="modal fade" id="projectold" tabindex="-1" role="dialog" aria-labelledby="myModalLabelold" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabelold">My (Old) Website</h4>
                </div>
                <div class="modal-body">
                    <img class="img-responsive" src="images/f11.png" alt="one">
                    <br>Just my old personal website.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="http://inesarmadabras.6te.net/old" class="btn btn-default">Go</a>
                </div>
            </div>
        </div>
    </div>

    <div id="newspapers" class="container">
        <section class="row">
            <div class="col-md-12">
            <br><br>
                <h2 class="text-muted">Newspapers & +</h2>
                <span class="tag tag-primary">Adobe InDesign</span>
                <span class="tag tag-default">Adobe Photoshop</span>
            </div>
        </section>
        <br>
        <section class="row  text-center">
            <div class="col-md-12">
                <article class="col-md-4">
                    <img class="images img-responsive" src="images/f3.png" alt="Newspapers" data-toggle="modal" data-target="#project3">
                    <h3 class="imgtitle">ISELeaks / Ignobil</h3>
                    <p><a href="http://inesarmadabras.portfoliobox.net/jornaispublicaes">inesarmadabras.portfoliobox.net</a>
                    </p>
                </article>
            </div>
        </section>
    </div>

    <!-- Modal Project 3-->
    <div class="modal fade" id="project3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel3">Newspapers & +</h4>
                </div>
                <div class="modal-body">
                    <img class="img-responsive" src="images/f3.png" alt="newspapers">
                    <br>I am responsible for the design and promotion on social networks of a small independent academic journal, which has the support of students, alumni, teachers and employees of the ISEL, in which I am student. Available in physical and digital support, with over 150,000 views on blogspot and 300 prints per edition.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="http://inesarmadabras.portfoliobox.net/jornaispublicaes" class="btn btn-default">Go</a>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="container">
        <hr>
        <section class="row">
            <div class="col-md-12">
                <h2 class="text-muted">Contacts</h2>
            </div>
        </section>
        <section class="row">
            <div class="col-md-12 list-group">
                <a href="http://bit.ly/227L9AN" class="list-group-item">LinkedIn</a>
                <a href="mailto:ines.armada.bras@gmail.com" class="list-group-item">ines.armada.bras@gmail.com</a>
                <a href="http://twitter.com/@InesArmadaBras" class="list-group-item">Twitter</a>
                <a href="http://github.com/inesarmadabras/" class="list-group-item">Github</a>
            </div>
        </section>
    </div>

    <div class="bg1 textbg1">
        <footer class="container">
            <p><em>Google Developer Group Lisboa Organizer | Tutor at Rato-ADCC | Web-designer & More</em>
            </p>
            <p><em>Follow me on Twitter  <a href="twiter.com/@InesArmadaBras">@InesArmadaBras</a> or <a href="http://bit.ly/227L9AN">LinkedIn</a>   |  <a href="inesarmadabras.6te.net">inesarmadabras.6te.net</a> </em>
            </p>
        </footer>
    </div>
    <!--end max container-->

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Lato:100,300']
            }
        });
    </script>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>