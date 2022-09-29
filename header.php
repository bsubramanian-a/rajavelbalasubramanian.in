<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Rajavel Balasubramanian</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,500,500i,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata:400,700&amp;display=swap">    
</head>
<body class="body_bg vh-100">
    <div class="d-none chat-box p-4">
        <div class="close-c mb-1" onClick="toggleChat()"></div>
        <div class="text-center mb-3">
            <p class="text-white-50 p-bot mb-1">Not sure where to start?</p>
            <p class="text-white h-bot">Let’s have a zoom call</p>
        </div>
        <div class="mb-3">
            <p class="text-white-50 h-name mb-1">Your name*</p>
            <input class="text-white p-2 w-100 c_input" type="text" />
        </div>
        <div class="mb-4">
            <p class="text-white-50 h-name mb-1">Your email*</p>
            <input class="text-white p-2 w-100 c_input" type="email" />
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <button class="p-1 pe-3 d-flex justify-content-center align-items-center contact-btn" type="button">
                <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.svg" style="width: 36px;" />Let's Discuss</button>
            </div>
        </div>
    </div>
    <div class="chat_bot rounded-circle" onClick="toggleChat()"></div>
    <nav class="navbar navbar-light navbar-expand-md py-md-3 py-2 nav-bg">
        <div class="container"><a class="navbar-brand d-flex align-items-center d-block d-md-none" href="#">
                <div class="w-100 rounded-circle d-flex justify-content-between justify-content-lg-center align-items-center">
                    <div class="rounded-circle d-flex justify-content-center align-items-center m_tc"><div class="img_theme" onClick="toggleTheme()" ></div>
                </div>
            </a><a class="navbar-brand d-flex align-items-center d-block d-md-none" href="#"><span class="name">rajavelbalasubramanian.in</span></a><button data-bs-toggle="collapse" class="navbar-toggler p-0 border-0" data-bs-target="#navcol-3"><span class="visually-hidden border-0">Toggle navigation</span><span class="navbar-toggler-icon menu_bg"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto d-flex align-items-start align-items-md-center">
                    <li class="nav-item px-xl-5 px-lg-4 px-md-3 px-0 pt-3 pb-1 pt-md-0 pb-md-0"><a class="nav-link active active_link" href="#">Home</a></li>
                    <li class="nav-item px-xl-5 px-lg-4 px-md-3 px-0 py-1 py-md-0"><a class="nav-link inactive_link" href="#">About</a></li>
                    <li class="nav-item px-xl-5 px-lg-4 px-md-3 px-0 py-1 py-md-0"><a class="nav-link inactive_link" href="#">Work</a></li>
                    <li class="nav-item px-xl-5 px-lg-4 px-md-3 px-0 pt-1 pb-2 py-md-0 pt-md-0"><a class="nav-link inactive_link" href="#">Blog</a></li>
                    <li class="nav-item px-xl-5 px-lg-4 px-md-3 px-0 py-1 py-md-0"><button class="btn btn-primary btn_hire" type="button">Hire Me</button></li>
                    <li class="nav-item nav-item px-xl-5 px-lg-4 px-md-3 px-0 py-1 py-md-0 d-none d-md-block">
                        <div class="the_me rounded-circle d-flex justify-content-center align-items-center"><button class="btn btn-primary rounded-circle btn_theme d-flex justify-content-center align-items-center" type="button"><div class="img_theme" onClick="toggleTheme()"></button></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="container">
            <div class="row">
                <div class="col col-12 position-relative order-2 margin-div"><div class="position-absolute d-none d-lg-block h-100 head_img"></div>
                    <div class="main_pad">
                        <h1 class="text-white h_h mb-3 text-center text-lg-start">Hey! I am</h1>
                        <h1 class="h_h mb-3 text-center text-lg-start">Rajavel Balasubramaian</h1>
                        <p class="text-white-50 p_h mb-4 text-center text-lg-start">Currently exploring Javascript, React JS, React Native<br>based technologies.</p>
                        <div class="d-none d-sm-flex justify-content-center justify-content-lg-start align-items-center gap-4">
                            <button class="btn btn-primary btn_h-hire" type="button">Hire Me</button>
                            <button class="btn btn-primary btn_download text-white" type="button">Download Resume</button>
                        </div>
                        <div class="row gap-3 d-sm-none">
                            <div class="col col-12 d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary btn_h-hire" type="button">Hire Me</button>
                            </div>
                            <div class="col col-12 d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary btn_download text-white" type="button">Download Resume</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center justify-content-lg-start align-items-center">
                            <div class="line_b mt-4 mb-5"></div>
                        </div>
                        <div>
                            <div class="row d-sm-none">
                                <div class="col col-12 d-flex gap-xl-3 gap-sm-2 gap-1 d-flex justify-content-center justify-content-lg-start align-items-center">
                                    <a class="px-3 py-3 rounded-circle link" href="https://www.linkedin.com/in/bsubbu/"><div class="link-linkedin"></div></a>
                                    <a class="px-3 py-3 rounded-circle link" href="https://www.freelancer.com/u/crtvecode"><div class="link-freelancer"></div></a>
                                    <a class="px-3 py-3 rounded-circle link" href="#"><div class="link-upwork"></div></a>
                                    <a class="px-3 py-3 rounded-circle link" href="#"><div class="link-bitbucket"></div></a>
                                </div>
                                <div class="col d-flex gap-3 d-flex justify-content-center justify-content-lg-start align-items-center">
                                    <a class="px-3 py-3 rounded-circle link" href="#"><div class="link-codepen"></div></a>
                                    <a class="px-3 py-3 rounded-circle link" href="https://github.com/bsubramanian-a"><div class="link-github"></div></a>
                                    <a class="px-3 py-3 rounded-circle link" href="rajavel@crtvecode.in"><div class="link-email"></div></a>
                                </div>
                            </div>
                            <div class="d-none d-sm-flex gap-sm-2 gap-1 justify-content-center justify-content-lg-start align-items-center">
                                <a class="px-3 py-3 rounded-circle link" href="https://www.linkedin.com/in/bsubbu/"><div class="link-linkedin"></div></a>
                                <a class="px-3 py-3 rounded-circle link" href="https://www.freelancer.com/u/crtvecode"><div class="link-freelancer"></div></a>
                                <a class="px-3 py-3 rounded-circle link" href="#"><div class="link-upwork"></div></a>
                                <a class="px-3 py-3 rounded-circle link" href="#"><div class="link-bitbucket"></div></a>
                                <a class="px-3 py-3 rounded-circle link" href="#"><div class="link-codepen"></div></a>
                                <a class="px-3 py-3 rounded-circle link" href="https://github.com/bsubramanian-a"><div class="link-github"></div></a>
                                <a class="px-3 py-3 rounded-circle link" href="#"><div class="link-email"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 d-block d-lg-none order-1 div-margin"><div class="img-mheader"></div>
            </div>
        </div>
    </header>