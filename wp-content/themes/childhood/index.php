        <?php get_header(); ?>
        <div class="mainslider glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'slider',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true,
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>

                            <li style="background-image: url('<?php the_field('slider_img');  ?>" class="glide__slide">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7 offset-1">
                                            <h2
                                            style="
                                                <?php
                                                    $color = get_field('slider_text_color'); 
                                                    if ($color == 'white') {
                                                        ?>
                                                        color: #fff;
                                                        <?php
                                                    } else {
                                                        ?>
                                                        color: #000;
                                                        <?php
                                                    }
                                                ?>
                                                "
                                            class="slider__title"><?php the_title(); ?></h2>
                                            <?php
                                                $btn = get_field('slider_btn'); 
                                                if ($btn == 'on') {
                                                    ?>
                                                    <a href="<?php the_field('slider_link'); ?>" class="button">Узнать больше</a>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                            <svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.982942 13.3923L12.2253 24.631C12.7186 25.123 13.5179 25.123 14.0124 24.631C14.5057 24.1389 14.5057 23.3397 14.0124 22.8476L3.66178 12.5007L14.0112 2.15378C14.5045 1.66172 14.5045 0.862477 14.0112 0.369169C13.5179 -0.122894 12.7174 -0.122894 12.2241 0.369169L0.981696 11.6077C0.495966 12.0947 0.495966 12.9065 0.982942 13.3923Z" fill="white"/>
                                            </svg>
                                        </button>
                                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                            <svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.0171 11.6077L2.77467 0.369029C2.28137 -0.123032 1.48213 -0.123032 0.987571 0.369029C0.494263 0.861093 0.494264 1.66033 0.987572 2.15239L11.3382 12.4993L0.98882 22.8462C0.495512 23.3383 0.495512 24.1375 0.98882 24.6308C1.48213 25.1229 2.28261 25.1229 2.77592 24.6308L14.0183 13.3923C14.504 12.9053 14.504 12.0935 14.0171 11.6077Z" fill="white"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </li>

                            <?php
                        }

                        wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
        
        <div class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-1">
                        <div class="about__img">
                            <img src="<?php the_field('about_img'); ?>" alt="про компанию">
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 col-xl-5 offset-xl-1">
                        <h1 class="title underlined"><?php the_field('about_title'); ?></h1>
                        <div class="about__text">
                        <?php the_field('about_descr'); ?>  
                        </div>
                        <a href="#" class="button">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="question">
            <div class="question__text">
                Есть вопросы? Напишите нам!
            </div>
            <div id="reply" class="minibutton">Написать</div>
            <div class="question__close">&times</div>
        </div>
        
        <div class="reply">
            <div class="reply__body">
                <div class="reply__title">
                    Оставьте ваш вопрос здесь
                </div>
                <div>
                    <?php echo do_shortcode('[contact-form-7 id="130" title="Форма вопроса"]'); ?>
                    <svg class="lds-spinner" width="65px"  height="65px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;"><g transform="rotate(0 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(30 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(60 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(90 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(120 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(150 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(180 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(210 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(240 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(270 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(300 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(330 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
                        </rect>
                      </g>
                    </svg>
        
                    <svg class="confirm ldt-bounce-in" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="38px" height="38px" viewBox="0 0 448.8 448.8" style="enable-background:new 0 0 448.8 448.8; color: green" xml:space="preserve"
                    ><g><g>
                        <polygon fill="green" points="142.8,323.85 35.7,216.75 0,252.45 142.8,395.25 448.8,89.25 413.1,53.55 		"/>
                    </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
               
        
                    <svg class="reject ldt-bounce-in " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="圖層_1" x="0px" y="0px" viewBox="0 0 100 100" style="transform-origin: 50px 50px 0px; width: 40px;" xml:space="preserve"><g style="transform-origin: 50px 50px 0px;"><g style="transform-origin: 50px 50px 0px; transform: scale(1);"><g class="ld ldt-bounce-in" style="transform-origin: 50px 50px 0px; animation-duration: 1.7s; animation-delay: 0s; animation-direction: normal;"><g><style type="text/css" style="transform-origin: 50px 50px 0px;">.st0{fill:#333333;} .st1{fill:#FFFFFF;} .st2{fill:#849B87;} .st3{fill:#FFFFFF;stroke:#333333;stroke-width:6;stroke-miterlimit:10;} .st4{fill:#CCCCCC;} .st5{fill:#ABBD81;} .st6{fill:#E0E0E0;} .st7{fill:#77A4BD;} .st8{fill:#E15B64;} .st9{fill:#FFFFFF;stroke:#333333;stroke-width:12;stroke-miterlimit:10;} .st10{fill:#666666;} .st11{fill-rule:evenodd;clip-rule:evenodd;fill:#666666;} .st12{fill:none;stroke:#E15B64;stroke-width:16;stroke-miterlimit:10;} .st13{fill:none;stroke:#849B87;stroke-width:16;stroke-miterlimit:10;} .st14{fill:none;stroke:#E15B64;stroke-width:22;stroke-miterlimit:10;} .st15{fill:none;stroke:#849B87;stroke-width:22;stroke-miterlimit:10;} .st16{fill:#A0C8D7;} .st17{fill:none;stroke:#E0E0E0;stroke-width:6;stroke-miterlimit:10;} .st18{fill:none;stroke:#E0E0E0;stroke-width:6;stroke-miterlimit:10;stroke-dasharray:7.5147,8.5882;} .st19{fill:#FFFFFF;stroke:#E15B64;stroke-width:6;stroke-miterlimit:10;} .st20{fill:#FFFFFF;stroke:#ABBD81;stroke-width:6;stroke-miterlimit:10;} .st21{fill:#E0E0E0;stroke:#B3B3B3;stroke-width:4;stroke-miterlimit:10;} .st22{fill:#E0E0E0;stroke:#ABBD81;stroke-width:4;stroke-miterlimit:10;} .st23{fill:#E0E0E0;stroke:#E15B64;stroke-width:4;stroke-miterlimit:10;} .st24{fill:none;stroke:#B3B3B3;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;} .st25{fill:#FFFFFF;stroke:#666666;stroke-width:6;stroke-miterlimit:10;} .st26{fill:#FFFFFF;stroke:#666666;stroke-width:8;stroke-miterlimit:10;} .st27{fill:none;stroke:#F47E60;stroke-width:19;stroke-linecap:round;stroke-miterlimit:10;} .st28{fill:none;stroke:#F47E60;stroke-width:9;stroke-linecap:round;stroke-miterlimit:10;} .st29{fill:none;stroke:#F47E60;stroke-width:14;stroke-linecap:round;stroke-miterlimit:10;} .st30{fill:none;stroke:#F47E60;stroke-width:10.2857;stroke-linecap:round;stroke-miterlimit:10;} .st31{fill:url(#SVGID_1_);} .st32{fill:url(#SVGID_2_);}</style><g style="transform-origin: 50px 50px 0px;"><path class="st8" d="M69.863,19.947L50,39.81L30.137,19.946c-2.809-2.809-7.379-2.809-10.189,0s-2.809,7.38,0,10.189l19.863,19.863 L19.948,69.862c-2.809,2.809-2.809,7.38,0,10.189s7.379,2.809,10.189,0L50,60.188l19.863,19.863c2.809,2.809,7.379,2.809,10.189,0 s2.809-7.38,0-10.189L60.189,49.998l19.863-19.863c2.809-2.809,2.809-7.38,0-10.189S72.673,17.138,69.863,19.947z" fill="rgb(225, 91, 100)" style="fill: rgb(225, 91, 100);"/></g><metadata xmlns:d="https://loading.io/stock/" style="transform-origin: 50px 50px 0px;">
                        <d:name style="transform-origin: 50px 50px 0px;">cross</d:name>
                        <d:tags style="transform-origin: 50px 50px 0px;">times,delete,clear,remove,error,forbid,deny,negative,drop,refuse,reject,cross,form</d:tags>
                        <d:license style="transform-origin: 50px 50px 0px;">cc0</d:license>
                        <d:slug style="transform-origin: 50px 50px 0px;">gsd528</d:slug>
                        </metadata></g></g></g></g><style type="text/css" style="transform-origin: 50px 50px 0px;">
                        </style>
                    </svg>
                    
                    <div class="reply__close">&times</div>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>