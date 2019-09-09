﻿<?php
$address = 'https://'.$_SERVER['SERVER_NAME'].'/mebleksiezyk';

$template_start_head = '
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Krzysztof Baraniecki and Andrzej Mazurkiewicz - webyou.pl">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="'.$address.'/build/main.css'.'">

    
    // <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
';

$template_end_head = '
    <link rel="apple-touch-icon" sizes="180x180" href="'.$address.'/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="'.$address.'/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="'.$address.'/images/favicon-16x16.png">
    <link rel="mask-icon" href="'.$address.'/images/safari-pinned-tab.svg" color="#e1a1e1">
    <meta name="msapplication-TileColor" content="#e1a1e1">
    <meta name="theme-color" content="#ffffff">
</head>
';

$template_start_body = '

';
$template_end_body = '
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="'.$address.'/js/main.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</body>
';

$nav_menu = '
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="" src="images/logo/ksiezyk-meble-logo-vector.svg">
        </a>
        <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills w-100 justify-content-around">
                <li class="nav-item">
                    <a class="nav-link" href="#onas">O nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#na-wymiar">Na wymiar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#uslugi">Usługi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galeria">Realizacje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Kontakt</a>
                </li>
            </ul>
    </div>
    </div>
</nav>
';

$logo_svg = '
<svg width="270" height="240" xmlns="http://www.w3.org/2000/svg">
 <metadata id="metadata8">image/svg+xml</metadata>

 <g>
  <rect fill="none" id="canvas_background" height="242" width="272" y="-1" x="-1"/>
 </g>
 <g>
  <g id="g10" transform="matrix(1.3333333,0,0,-1.3333333,0,793.7008) ">
   <g id="g12">
    <path fill="#ffffff" fill-rule="evenodd" d="m104.207932,482.35019l0,18.8988c1.2461,-0.3019 14.8898,-9.0595 15.5639,-10.0051c-0.6792,-1.0029 -14.8414,-8.6959 -15.5639,-8.8937zm48.9149,52.9066l0,-29.203c-0.3748,-3.5986 -2.4389,-3.5898 -6.1566,-5.6889l-26.4872,-15.0163c-21.1042,-11.815 -16.1192,-12.0418 -27.1885,-5.7628l-26.3086,14.8241c-2.9943,1.688 -5.9579,3.465 -8.9768,5.1046c-5.6344,3.0594 -7.4126,3.6782 -7.9001,6.6558l0,12.8664l0,42.5755c0.3574,4.0437 2.8666,4.2424 6.3669,6.2717l44.0302,24.8953c2.5665,0.8246 7.0308,-2.4965 9.4649,-3.8758l35.2057,-20.0087c2.2576,-1.2631 7.38,-3.2411 7.8925,-5.8187l0.0576,-27.8192zm-69.6668,-44.0129l15.5636,10.0051l0,-18.8988c-2.5432,1.2781 -5.3373,3.0098 -7.7984,4.4302l-7.7652,4.4635zm44.4682,4.4467l0,22.2338c1.4179,1.262 18.51,11.124 20.0106,11.488l0,-22.6049c-6.2753,-3.5592 -13.4345,-7.7854 -20.0106,-11.1169zm-72.2608,33.7218c1.4749,-0.4037 14.063,-7.9747 17.5317,-9.8904c0.442,-0.2438 0.7847,-0.4521 1.1634,-0.6897l1.3155,-0.9079l0,-22.2338l-19.9927,11.1489l-0.0179,22.5729zm48.9149,-0.7413l18.2365,-10.6109l-0.0786,-21.9989l-15.4182,9.7801c-1.7674,1.1722 -2.7243,1.1067 -2.7742,3.5286l0.0345,19.3011zm-23.6715,-32.6789l-0.0445,22.303l18.1363,10.4125l0.023,-20.8205l-18.1148,-11.895zm23.6715,61.2124l40.4618,-22.852l-9.832,-5.9247c-3.2159,-1.7569 -6.8037,-3.7661 -9.8779,-5.7702c-6.2807,4.0943 -13.3035,7.6136 -19.5174,11.3247c-1.5094,0.9017 -1.1554,0.5204 -1.2682,2.0713l0.0337,21.1509zm-26.3083,-34.5492c-2.9259,1.9222 -6.7374,3.9955 -9.8929,5.7595l-9.7492,5.8149c1.5497,1.3468 27.5941,15.8837 30.1306,17.3022c2.0265,1.1335 8.6388,5.235 10.2611,5.6726l0,-22.2338c-0.0663,-0.0592 -0.1786,-0.0521 -0.2109,-0.1641l-0.8776,-0.6112c-0.4524,-0.2897 -0.8898,-0.5465 -1.3898,-0.8214l-18.2713,-10.7187zm26.3083,63.0834l43.382,-24.4126l-0.0255,-22.2789c-2.0752,0.4967 -11.6529,6.3939 -14.3376,7.8962l-28.7762,16.4435c-0.7322,1.1942 -0.2427,19.3978 -0.2427,22.3518zm-48.8403,-46.8227l-0.0746,22.3651l21.4764,12.2453c2.9058,1.6773 20.302,11.8344 21.8798,12.2123l0,-22.2342l-43.2816,-24.5885z" id="path14"/>
    <path fill="#ffffff" fill-rule="nonzero" d="m2.149832,463.40539l4.2174,0l0,-2.3706c1.512,1.8241 3.3134,2.7391 5.4054,2.7391c1.1101,0 2.075,-0.2288 2.8899,-0.6863c0.8198,-0.4572 1.4891,-1.1492 2.0081,-2.0755c0.7642,0.9263 1.5897,1.6183 2.4712,2.0755c0.8816,0.4575 1.8239,0.6863 2.8279,0.6863c1.2722,0 2.3488,-0.2568 3.2357,-0.7756c0.8813,-0.5187 1.5395,-1.2773 1.9746,-2.2813c0.3178,-0.7364 0.4746,-1.9361 0.4746,-3.5926l0,-11.09l-4.5859,0l0,9.913c0,1.7235 -0.1559,2.8335 -0.474,3.3302c-0.424,0.6528 -1.0822,0.9816 -1.9635,0.9816c-0.6415,0 -1.2495,-0.195 -1.8187,-0.5856c-0.5633,-0.396 -0.976,-0.9709 -1.2272,-1.7238c-0.2508,-0.7588 -0.3736,-1.9522 -0.3736,-3.5867l0,-8.3287l-4.5856,0l0,9.5054c0,1.6849 -0.0839,2.7782 -0.2455,3.2635c-0.1615,0.491 -0.4127,0.8592 -0.7585,1.0987c-0.3404,0.2401 -0.809,0.3572 -1.3947,0.3572c-0.7083,0 -1.3441,-0.1894 -1.908,-0.5689c-0.5686,-0.385 -0.9703,-0.9315 -1.2157,-1.6512c-0.2455,-0.7194 -0.3683,-1.9134 -0.3683,-3.5756l0,-8.4291l-4.5856,0l0,17.371zm38.6502,-11.882l4.5856,-0.7696c-0.586,-1.679 -1.5177,-2.9566 -2.7839,-3.8378c-1.2717,-0.876 -2.8616,-1.3167 -4.764,-1.3167c-3.0177,0 -5.2548,0.9876 -6.6994,2.9622c-1.1435,1.5843 -1.7183,3.5815 -1.7183,5.9967c0,2.8783 0.7531,5.1378 2.2535,6.7668c1.5007,1.6342 3.403,2.4489 5.7013,2.4489c2.577,0 4.6134,-0.8535 6.1084,-2.5608c1.4893,-1.7071 2.2037,-4.3232 2.1365,-7.8486l-11.4806,0c0.0337,-1.3612 0.4017,-2.4211 1.1106,-3.1796c0.7027,-0.7586 1.584,-1.1381 2.6328,-1.1381c0.7195,0 1.3218,0.1953 1.8074,0.5859c0.491,0.39 0.8589,1.0207 1.1101,1.8907zm0.2675,4.6525c-0.0331,1.3334 -0.3736,2.3485 -1.0261,3.0404c-0.6528,0.6974 -1.4451,1.0429 -2.382,1.0429c-0.9986,0 -1.8243,-0.3682 -2.4769,-1.0987c-0.6528,-0.7308 -0.9705,-1.7294 -0.9595,-2.9846l6.8445,0zm6.6192,-10.1415l0,23.9649l4.5853,0l0,-8.6468c1.4171,1.6121 3.0907,2.4214 5.0318,2.4214c2.1144,0 3.8605,-0.7645 5.2436,-2.2984c1.3835,-1.5341 2.0755,-3.7377 2.0755,-6.6103c0,-2.9676 -0.703,-5.2552 -2.1147,-6.8616c-1.4113,-1.601 -3.1291,-2.4043 -5.1429,-2.4043c-0.9932,0 -1.9692,0.2565 -2.9344,0.7645c-0.9652,0.513 -1.796,1.2492 -2.4933,2.2201l0,-2.5495l-4.2509,0zm4.5184,9.0204c0,-1.8017 0.2846,-3.1408 0.8536,-3.9997c0.7976,-1.2271 1.8521,-1.8411 3.1739,-1.8411c1.0157,0 1.8802,0.4354 2.5997,1.3054c0.7137,0.8705 1.0709,2.2424 1.0709,4.1113c0,1.9916 -0.3626,3.4254 -1.082,4.3064c-0.7194,0.8816 -1.6401,1.3221 -2.7669,1.3221c-1.1044,0 -2.0191,-0.4294 -2.7502,-1.2883c-0.731,-0.8592 -1.099,-2.1646 -1.099,-3.9161zm14.6407,-9.0204l0,23.9649l4.585,0l0,-23.9649l-4.585,0zm17.8535,5.489l4.5856,-0.7696c-0.5857,-1.679 -1.5174,-2.9566 -2.7837,-3.8378c-1.2719,-0.876 -2.8618,-1.3167 -4.7639,-1.3167c-3.018,0 -5.2551,0.9876 -6.6994,2.9622c-1.1437,1.5843 -1.7186,3.5815 -1.7186,5.9967c0,2.8783 0.7532,5.1378 2.2538,6.7668c1.5007,1.6342 3.4027,2.4489 5.7013,2.4489c2.577,0 4.6131,-0.8535 6.1084,-2.5608c1.4891,-1.7071 2.2034,-4.3232 2.1362,-7.8486l-11.4803,0c0.0334,-1.3612 0.4017,-2.4211 1.1103,-3.1796c0.703,-0.7586 1.584,-1.1381 2.6328,-1.1381c0.7195,0 1.3221,0.1953 1.8074,0.5859c0.491,0.39 0.8592,1.0207 1.1101,1.8907zm0.2675,4.6525c-0.0331,1.3334 -0.3736,2.3485 -1.0261,3.0404c-0.6525,0.6974 -1.4448,1.0429 -2.3817,1.0429c-0.9986,0 -1.8243,-0.3682 -2.4772,-1.0987c-0.6525,-0.7308 -0.9705,-1.7294 -0.9595,-2.9846l6.8445,0zm15.9293,-10.1415l0,23.9649l2.9455,0l0,-13.6502l6.9619,7.0563l3.8041,0l-6.6268,-6.4539l7.2966,-10.9171l-3.6258,0l-5.7682,8.8753l-2.0418,-1.986l0,-6.8893l-2.9455,0zm14.0667,5.1879l2.9117,0.4689c0.1619,-1.1662 0.6191,-2.0585 1.3666,-2.6836c0.7478,-0.619 1.7963,-0.9314 3.1349,-0.9314c1.3555,0 2.3598,0.2732 3.0183,0.8254c0.6528,0.5468 0.9816,1.194 0.9816,1.9361c0,0.6636 -0.2956,1.1877 -0.8813,1.5673c-0.413,0.2622 -1.417,0.5913 -3.0121,0.9986c-2.1534,0.5411 -3.6431,1.0097 -4.4798,1.4057c-0.8309,0.4017 -1.4616,0.9485 -1.8907,1.6512c-0.4298,0.6973 -0.6472,1.4726 -0.6472,2.3204c0,0.7753 0.1783,1.4896 0.5298,2.1478c0.3569,0.6582 0.8368,1.2051 1.4448,1.6399c0.4572,0.3348 1.0823,0.6194 1.8686,0.8538c0.7923,0.2341 1.6348,0.3515 2.5384,0.3515c1.361,0 2.5549,-0.1953 3.581,-0.5913c1.0324,-0.3906 1.791,-0.9264 2.2819,-1.5957c0.485,-0.6752 0.8255,-1.5729 1.0097,-2.7l-2.8788,-0.4016c-0.1282,0.9037 -0.5074,1.612 -1.1322,2.1197c-0.625,0.5077 -1.506,0.7586 -2.6498,0.7586c-1.3445,0 -2.3094,-0.2228 -2.8837,-0.6693c-0.5749,-0.4462 -0.8651,-0.9703 -0.8651,-1.5673c0,-0.3795 0.1176,-0.7253 0.3571,-1.0323c0.2398,-0.3121 0.6137,-0.5743 1.1271,-0.7807c0.2956,-0.1114 1.1545,-0.3625 2.594,-0.7532c2.0749,-0.5522 3.5254,-1.0094 4.3509,-1.3609c0.8257,-0.3515 1.4729,-0.8705 1.9414,-1.5398c0.474,-0.6749 0.7084,-1.5117 0.7084,-2.5157c0,-0.9765 -0.2846,-1.8967 -0.8592,-2.7612c-0.5743,-0.8646 -1.4,-1.5344 -2.4766,-2.0084c-1.0823,-0.4742 -2.304,-0.7084 -3.6649,-0.7084c-2.2539,0 -3.9776,0.4686 -5.1602,1.4004c-1.1826,0.9368 -1.9358,2.3204 -2.2646,4.1555zm16.4202,15.4299l0,3.3471l2.9455,0l0,-3.3471l-2.9455,0zm0,-20.6178l0,17.371l2.9455,0l0,-17.371l-2.9455,0zm17.7979,5.6231l3.0459,-0.4017c-0.4743,-1.7683 -1.3612,-3.1462 -2.6553,-4.1224c-1.2943,-0.9763 -2.9454,-1.467 -4.9592,-1.467c-2.5324,0 -4.5408,0.7807 -6.0247,2.3426c-1.484,1.5565 -2.2255,3.7488 -2.2255,6.5659c0,2.912 0.7475,5.1766 2.2476,6.7833c1.5006,1.6123 3.4475,2.4157 5.8408,2.4157c2.315,0 4.2063,-0.7866 5.6732,-2.3655c1.467,-1.5786 2.2034,-3.7987 2.2034,-6.6603c0,-0.1732 -0.005,-0.4354 -0.0164,-0.7812l-12.9365,0c0.1117,-1.9024 0.6471,-3.3636 1.6177,-4.3733c0.9649,-1.0097 2.1753,-1.5174 3.6204,-1.5174c1.0766,0 1.997,0.2843 2.7556,0.8535c0.7642,0.5689 1.3666,1.4783 1.813,2.7278zm-9.6395,4.7194l9.673,0c-0.1284,1.4612 -0.502,2.5548 -1.1101,3.2856c-0.9317,1.1322 -2.1475,1.7011 -3.6371,1.7011c-1.3501,0 -2.4823,-0.4519 -3.403,-1.3556c-0.9147,-0.9036 -1.4224,-2.114 -1.5228,-3.6311zm7.6201,-10.3425c-0.625,-0.3793 -1.1044,-0.8535 -1.4505,-1.4111c-0.3401,-0.5635 -0.513,-1.1327 -0.513,-1.707c0,-0.4575 0.1227,-0.8479 0.3736,-1.1603c0.2511,-0.3183 0.6582,-0.4745 1.222,-0.4745c0.2509,0 0.5074,0.0338 0.7696,0.106c0.2565,0.0729 0.4966,0.1676 0.714,0.2846l0,-2.0976c-0.7922,-0.379 -1.5284,-0.5686 -2.2147,-0.5686c-0.5522,0 -1.0377,0.0776 -1.4502,0.2344c-0.4127,0.1616 -0.7588,0.379 -1.0377,0.6582c-0.2733,0.273 -0.4797,0.5967 -0.6137,0.9539c-0.1395,0.3625 -0.2064,0.7475 -0.2064,1.1602c0,0.6973 0.1953,1.4003 0.5859,2.103c0.3963,0.703 0.9485,1.3385 1.6679,1.9188l2.1532,0zm5.7433,0l0,2.3989l11.0004,12.6964c-1.2495,-0.0672 -2.3485,-0.1006 -3.2967,-0.1006l-7.0344,0l0,2.3763l14.1579,0l0,-1.9355l-9.4161,-11.0118l-1.802,-2.0474c1.3221,0.1119 2.5605,0.1678 3.7153,0.1678l8.0382,0l0,-2.5441l-15.3626,0zm6.1415,19.5134l0,3.6482l3.6485,0l0,-3.6482l-3.6485,0zm10.5296,-26.1907l-0.3345,2.7224c0.6472,-0.1729 1.205,-0.2622 1.6847,-0.2622c0.6582,0 1.1826,0.1114 1.5732,0.3294c0.3957,0.2174 0.7194,0.5241 0.9706,0.9147c0.1842,0.2957 0.4853,1.0261 0.898,2.198c0.0558,0.1616 0.1397,0.4017 0.2622,0.7194l-6.5934,17.4266l3.1459,0l3.6261,-10.0299c0.4739,-1.2662 0.8923,-2.605 1.2662,-4.011c0.3405,1.3224 0.7421,2.6277 1.2104,3.9107l3.7043,10.1302l2.9395,0l-6.5653,-17.6721c-0.7089,-1.9023 -1.2611,-3.2076 -1.6568,-3.9271c-0.5247,-0.9649 -1.1271,-1.6738 -1.802,-2.1257c-0.6806,-0.4518 -1.4893,-0.6746 -2.4267,-0.6746c-0.569,0 -1.2051,0.1168 -1.9024,0.3512zm15.3941,6.6773l0,23.9649l2.9455,0l0,-13.6502l6.9619,7.0563l3.8041,0l-6.6271,-6.4539l7.2966,-10.9171l-3.6258,0l-5.7679,8.8753l-2.0418,-1.986l0,-6.8893l-2.9455,0z" id="path16"/>
    <path fill="#ffffff" fill-rule="nonzero" d="m22.978032,422.87449l0,8.7057l3.2867,0c0.578,0 1.0197,-0.0286 1.3258,-0.0833c0.4269,-0.0709 0.786,-0.2066 1.0758,-0.4051c0.2899,-0.2007 0.5227,-0.4799 0.699,-0.839c0.1763,-0.3586 0.2636,-0.7538 0.2636,-1.1855c0,-0.7378 -0.2353,-1.364 -0.707,-1.8742c-0.4702,-0.5128 -1.3235,-0.7682 -2.556,-0.7682l-2.2328,0l0,-3.5504l-1.1551,0zm1.1551,4.5717l2.2493,0c0.7458,0 1.2724,0.1378 1.5868,0.4153c0.3118,0.2778 0.4677,0.667 0.4677,1.1715c0,0.3626 -0.0907,0.6744 -0.2752,0.934c-0.1843,0.2597 -0.4275,0.4318 -0.728,0.5151c-0.1941,0.0505 -0.5527,0.0768 -1.0734,0.0768l-2.2272,0l0,-3.1127zm7.6204,-4.5717l3.3397,8.7057l1.2663,0l3.5444,-8.7057l-1.311,0l-1.0074,2.6385l-3.6661,0l-0.9439,-2.6385l-1.222,0zm2.5047,3.5747l2.9664,0l-0.9076,2.4132c-0.2736,0.7339 -0.4802,1.3396 -0.6245,1.8181c-0.1194,-0.5675 -0.2792,-1.1248 -0.4799,-1.6761l-0.9544,-2.5552zm8.7037,-0.7781l1.0826,0.0973c0.0504,-0.4377 0.1698,-0.7966 0.3583,-1.0783c0.1885,-0.2792 0.4802,-0.5063 0.8753,-0.6809c0.3952,-0.1721 0.8413,-0.2594 1.3354,-0.2594c0.44,0 0.8269,0.0652 1.1634,0.1967c0.3362,0.1321 0.5859,0.3118 0.75,0.5412c0.1641,0.2287 0.2469,0.4782 0.2469,0.7452c0,0.2718 -0.0788,0.5094 -0.237,0.7135c-0.1581,0.2027 -0.4195,0.373 -0.7843,0.5128c-0.233,0.089 -0.7495,0.231 -1.5503,0.4235c-0.8002,0.1927 -1.3595,0.373 -1.6795,0.5431c-0.4156,0.2188 -0.724,0.4904 -0.9264,0.813c-0.2049,0.3217 -0.3061,0.6848 -0.3061,1.0839c0,0.4417 0.1256,0.8533 0.3747,1.2345c0.2498,0.3827 0.6123,0.6727 1.0922,0.8711c0.4785,0.1984 1.0114,0.2979 1.5976,0.2979c0.6441,0 1.2133,-0.1037 1.7062,-0.3121c0.4921,-0.2069 0.8711,-0.5125 1.1364,-0.9181c0.2653,-0.4034 0.4073,-0.8612 0.4278,-1.3717l-1.1064,-0.0853c-0.0587,0.549 -0.2594,0.9646 -0.6021,1.2441c-0.3424,0.2815 -0.8492,0.4218 -1.5177,0.4218c-0.6973,0 -1.2058,-0.1281 -1.5241,-0.383c-0.3178,-0.2554 -0.4777,-0.5638 -0.4777,-0.9241c0,-0.3123 0.1134,-0.5697 0.3379,-0.7721c0.2231,-0.2007 0.8008,-0.4096 1.7371,-0.6202c0.9357,-0.2126 1.5783,-0.3972 1.9267,-0.5553c0.5046,-0.2328 0.8799,-0.5267 1.1208,-0.8856c0.2409,-0.3569 0.3609,-0.7676 0.3609,-1.2339c0,-0.4643 -0.1321,-0.8977 -0.3975,-1.3076c-0.2653,-0.4091 -0.6443,-0.7274 -1.1406,-0.9542c-0.4964,-0.227 -1.0539,-0.3404 -1.6759,-0.3404c-0.7863,0 -1.4448,0.1156 -1.9757,0.3444c-0.5329,0.2293 -0.9485,0.5737 -1.2504,1.0358c-0.3039,0.4598 -0.462,0.9805 -0.4785,1.5624zm10.4247,-0.3245l1.0335,0.142c0.0284,-0.6664 0.152,-1.1225 0.3731,-1.37c0.2205,-0.2449 0.5289,-0.3688 0.9198,-0.3688c0.2877,0 0.5366,0.0669 0.7455,0.199c0.2089,0.1332 0.3552,0.3135 0.4337,0.5406c0.0791,0.227 0.1174,0.5918 0.1174,1.0905l0,6.0003l1.1551,0l0,-5.9317c0,-0.7274 -0.0867,-1.2907 -0.263,-1.6918c-0.1764,-0.3991 -0.4539,-0.7035 -0.8374,-0.9141c-0.3804,-0.2089 -0.8286,-0.3141 -1.3414,-0.3141c-0.7639,0 -1.3475,0.2188 -1.7526,0.6588c-0.4057,0.4399 -0.6001,1.0922 -0.5837,1.9593zm8.2301,-2.4721l3.3398,8.7057l1.2663,0l3.5444,-8.7057l-1.311,0l-1.0075,2.6385l-3.666,0l-0.9439,-2.6385l-1.2221,0zm2.5047,3.5747l2.9668,0l-0.908,2.4132c-0.2735,0.7339 -0.4802,1.3396 -0.6244,1.8181c-0.1191,-0.5675 -0.2793,-1.1248 -0.4799,-1.6761l-0.9545,-2.5552zm17.161,-3.5747l0,7.6844l-2.8695,0l0,1.0213l6.8935,0l0,-1.0213l-2.8695,0l0,-7.6844l-1.1545,0zm9.237,0l-2.2916,8.7057l1.1951,0l1.3054,-5.7087c0.142,-0.5978 0.2676,-1.1914 0.3747,-1.779c0.2293,0.9281 0.3626,1.463 0.4017,1.605l1.6449,5.8827l1.3884,0l1.2484,-4.4076c0.3061,-1.0941 0.5329,-2.1217 0.6786,-3.0801c0.1157,0.5494 0.2636,1.1795 0.4439,1.8907l1.3601,5.597l1.1568,0l-2.3831,-8.7057l-1.1208,0l-1.8255,6.6328c-0.1542,0.5553 -0.2472,0.8957 -0.2815,1.0213c-0.0995,-0.3974 -0.1885,-0.7379 -0.2659,-1.0196l-1.8255,-6.6345l-1.2041,0zm12.143,4.2375c0,1.4428 0.3895,2.5733 1.165,3.3905c0.7765,0.8164 1.7774,1.2237 3.0056,1.2237c0.8042,0 1.5276,-0.1927 2.1742,-0.5754c0.6443,-0.383 1.137,-0.9184 1.4751,-1.605c0.3388,-0.6851 0.5086,-1.4629 0.5086,-2.3323c0,-0.8819 -0.178,-1.6719 -0.5346,-2.3675c-0.3569,-0.6971 -0.8615,-1.2237 -1.5137,-1.5803c-0.6546,-0.3586 -1.3601,-0.5372 -2.1158,-0.5372c-0.8206,0 -1.552,0.199 -2.1986,0.5941c-0.6448,0.3952 -1.1347,0.934 -1.4672,1.6189c-0.3328,0.6831 -0.4986,1.4065 -0.4986,2.1705zm1.1917,-0.0204c0,-1.048 0.2818,-1.8726 0.845,-2.4741c0.5635,-0.6018 1.2705,-0.904 2.1217,-0.904c0.8672,0 1.5784,0.3039 2.1399,0.9119c0.5593,0.6075 0.8391,1.4712 0.8391,2.5898c0,0.7069 -0.1199,1.3254 -0.3592,1.8521c-0.2389,0.5267 -0.5893,0.9363 -1.0497,1.2263c-0.462,0.2897 -0.9782,0.4357 -1.5519,0.4357c-0.8147,0 -1.516,-0.2798 -2.1036,-0.8391c-0.5879,-0.5593 -0.8813,-1.4916 -0.8813,-2.7986zm11.1645,-4.2171l0,8.7057l3.858,0c0.7764,0 1.366,-0.0793 1.7691,-0.2352c0.4034,-0.1559 0.7257,-0.4318 0.9666,-0.8269c0.2415,-0.3952 0.3608,-0.8328 0.3608,-1.311c0,-0.618 -0.2006,-1.139 -0.6,-1.5625c-0.3992,-0.4232 -1.0148,-0.6908 -1.8499,-0.8067c0.3061,-0.1454 0.5371,-0.2914 0.6947,-0.4334c0.3365,-0.3079 0.6548,-0.6948 0.9528,-1.1591l1.5054,-2.3709l-1.4385,0l-1.1512,1.8116c-0.3345,0.5247 -0.612,0.9241 -0.8286,1.2016c-0.2188,0.2775 -0.4138,0.4703 -0.5859,0.582c-0.1701,0.1094 -0.3464,0.1862 -0.525,0.231c-0.1298,0.0261 -0.3421,0.0402 -0.64,0.0402l-1.3332,0l0,-3.8664l-1.1551,0zm1.1551,4.8637l2.4719,0c0.5266,0 0.9362,0.0547 1.2319,0.1641c0.2962,0.1071 0.521,0.2817 0.6727,0.5227c0.1544,0.239 0.231,0.4986 0.231,0.7804c0,0.4113 -0.1477,0.7517 -0.4456,1.017c-0.2979,0.2654 -0.7682,0.3969 -1.41,0.3969l-2.7519,0l0,-2.8811zm9.4295,-4.8637l0,1.0638l4.458,5.5812c0.3201,0.3928 0.6205,0.7395 0.9063,1.0394l-4.8541,0l0,1.0213l6.2255,0l0,-1.0213l-4.8898,-6.0386l-0.5227,-0.6245l5.5587,0l0,-1.0213l-6.8819,0zm10.6662,0l0,8.7057l6.2858,0l0,-1.0213l-5.1307,0l0,-2.6753l4.8025,0l0,-1.0211l-4.8025,0l0,-2.9667l5.3374,0l0,-1.0213l-6.4925,0zm10.5945,0l0,8.7057l1.1837,0l4.5675,-6.8332l0,6.8332l1.1061,0l0,-8.7057l-1.1835,0l-4.5674,6.8329l0,-6.8329l-1.1064,0zm11.5086,0l0,8.7057l1.1552,0l0,-8.7057l-1.1552,0zm4.7509,0l3.3398,8.7057l1.2662,0l3.5445,-8.7057l-1.3111,0l-1.0071,2.6385l-3.6663,0l-0.944,-2.6385l-1.222,0zm2.5047,3.5747l2.9667,0l-0.9079,2.4132c-0.2735,0.7339 -0.4799,1.3396 -0.6245,1.8181c-0.119,-0.5675 -0.2792,-1.1248 -0.4799,-1.6761l-0.9544,-2.5552z" id="path18"/>
   </g>
  </g>
 </g>
</svg>
';
?>



