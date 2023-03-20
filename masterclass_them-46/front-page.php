<?php
/*
Template Name: Home template
Template Post Type: post, page, product
*/

//

get_header();
?>
        <section class="sec1">
            <div class="b-log">
                <a style="z-index: 1;" class="logo logo-mobile" href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-img.png" alt="">
                </a>
                <a class="btn-logo" href="#courses">New masterclass</a>
            </div>      
           <h1 class="t1">Sometimes you need inspiration. This time you need to f*cking get to work.</h1>
           <div class="t2">Welcome to my self-proclaimed masterclasses</div>
           <div class="block">
                <div class="col">
                    <h4 class="t3 first"> For 10 years I’ve been working with advertising, marketing, tech agencies as a creative, 
                        experience director and pitcher. Clients in every field, from startups to giants all over 
                        the world. Some were the sweetest souls, some were nightmares. I’ve collaborated with 
                        independent strategists, sales, conceptors, designers, illustrators,
                    </h4>
                </div>
                <div class="col" style="margin: 0 20px;">
                    <h4 class="t3 second">
                        copywriters, producers, photographers, directors, developers, content creators, influencers, 
                        social media managers, PR, you name it. I too, got an MA in design and have done countless of 
                        summits, conferences, certifications and online tutorials. You know what I realized? the lazier 
                        we are, the more space we have to be creative.
                    </h4>
                </div>
                <div class="col">
                    <h4 class="t3 third">
                        Throughout the years I’ve gathered the industry’s know-hows and designed frameworks to swiftly
                        tackle new projects, reduce unnecessary stress and get the job done. 
                        clients included  <a href="" style="color: #7F8364;">LVMH, Maserati,
                        Audi, smets, Charlotte beaude, ooofer</a> and many more.  You’ll find these formulas and files here.
                        Packed, condensed, effective.
                    </h4>
                </div>
           </div>
        </section>
        <section id="courses" class="sec2-slider">
            <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a class="cursor-learnrmore" href="<?php the_permalink( 3414 ); ?>">
                            <div class="block">
                                
                                <img class="img-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/hover-slide1-home.png" alt="">
                            </div>
                            <div class="content-slider">
                                    <div class="i1 df jb ttl">
                                        <div class="left-side">
                                            <ul class="sec2-top-left-menu">
                                                <li class="head-li">8 hours of content</li>
                                                <li>videos</li>
                                                <li>templates</li>
                                                <li>miro board</li>
                                                <li>exercises</li>
                                                <li>resources</li>
                                            </ul>
                                        </div>
                                        <div class="right-side">
                                            <div class="t1">
                                                (Re)align your brand, save time and thousands in bad briefings, find the right talents
                                                and avoid back-and-forth circuit of tiresome feedback.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="i2 df jb">
                                        <div class="t2-left">for entrepreneurs and startups</div>
                                        <div class="t2-right">masterclass 01</div>
                                    </div>
                                    <div class="title-slider"><?php echo get_the_title( 3414 ); ?></div>
                                    <div class="i3 df jb">
                                        <a class="btn-slider" href="">Early bird offer</a>
                                        <div class="t4">All new</div>
                                    </div>
                                </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="cursor-learnrmore" href="<?php the_permalink( 3421 ); ?>">
                            <div class="block">
                                
                                <img class="img-slide" style="opacity: 1;" src="<?php echo get_template_directory_uri(); ?>/assets/img/hover-slide2-home.png" alt="">
                            </div>
                            <div class="content-slider">
                                    <div class="i1 df jb ttl">
                                        <div class="left-side">
                                            <ul>
                                                <li class="head-li">8 hours of content</li>
                                                <li>videos</li>
                                                <li>templates</li>
                                                <li>resources</li>
                                            </ul>
                                        </div>
                                        <div class="right-side">
                                            <div class="t1">
                                                Everything you need to know to produce your own photoshoot and be 
                                                your own photographer, without any technical knowledge whatsoever.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="i2 df jb">
                                        <div class="t2-left">for entrepreneurs and startups</div>
                                        <div class="t2-right">Masterclass 02</div>
                                    </div>
                                    <div class="title-slider"><?php echo get_the_title( 3421 ); ?></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next slider-btn-next add-brown"></div>
                <div class="swiper-button-prev slider-btn-prev remove-brown"></div>
            </div>
                    
            </div>
        </section>
        <section class="sec3">
            <div class="container">
                <div class="block">
                    <div class="left-side">
                        <div class="t1">1:1 consultancy</div>
                        <a href="<?php echo home_url(); ?>/product-page/">
                        <div class="t2 cursor-learnrmore">
                            Scared to launch or feeling stuck? Sometimes an external look at your project might just do the trick. 
                            In my humble opinion, consultancy is a perfect mix between having a coach and an extra set of hands. 
                            I want you to feel confident in your project and also enjoy the journey. Otherwise why are we even
                            doing this, right?
                            </div><div class="t2 cursor-learnrmore">
                            Here to challenge you. Let’s go deep into the details, help you find creative ideas and give you
                            proper expert advice to minimize risks. As a designer and art director, I will tell you exactly 
                            how to improve your brand identity, your product, your website, your app. As a creative consultant, 
                            we’ll brainstorm on how to make your next campaign a success.
                        </div>
                        </a>
                    </div>
                    <div class="right-side">
                        <div class="breadcrumb">
                            <a href="<?php echo home_url(); ?>/blog/"><span>Blog</span></a>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-breadcrumb-arrow.svg" alt="">
                            <a href="<?php echo home_url(); ?>/blog/nomad-working-from-uluwatu-bali-dream-place-for-a-work-life-balance/"><span>Travel tips and nomadism</span></a>
                        </div>
                        <div class="block-blog">
                            <a href="<?php echo home_url(); ?>/blog/nomad-working-from-uluwatu-bali-dream-place-for-a-work-life-balance/">
                                <div class="banner-block cursor-readmore">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-blog.png" alt="">
                                    <img class="icon-top-left" src="<?php echo get_template_directory_uri(); ?>/assets/img/MostPopular.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <a href="<?php echo home_url(); ?>/blog/nomad-working-from-uluwatu-bali-dream-place-for-a-work-life-balance/">
                            <div class="t1">6 months Nomad working from Uluwatu, Bali: dream place for a work-life balance</div>
                        </a>
                        <div class="blog-panel" style="display: flex; align-items: center;">
                            <div class="tt2">06.06</div>
                            <span class="tag-blog">Design</span>
                            <span class="tag-blog">Money</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4">
            <div class="container">
                <div class="block">
		   <div class="container-fs my-form">
			<div class="t1">Once in a while I send hilarious emails with insightful tips. Curious?</div>
		       <?php echo do_shortcode('[contact-form-7 id="2001" title="Newletter Subscription Footer"]'); ?>
                   </div>
                </div>
            </div>
        </section>
        <div class="cookie_modal">
        	<div class="cookie_confirm">
            	<div class="cookie_content">
            		<div class="content_ttl">Cookies</div>
                	<div class="content_cnt">This website uses cookies to collect and analyse information on site performance and usage, to provide social media features to enhance and customise content and advertisement. <a>Decline</a>
                    </div>
            	</div>
            	<div class="btn_confirm">
                	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector 6.png">
            	</div>
            </div>
        </div>
        </div>

<?php
get_footer('main-f');