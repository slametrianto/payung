  <div class="col-md-5">
                                <img src="<?php echo base_url(); ?>assets/foto/fot.jpg"  alt="intro">
                            </div>

                            <div class="col-md-7">
                                <div class="intro-description">
                                    <h2>About  Us</h2>
                                    <p>
                                <span>
                                            <!-- <i class="fa fa-star"></i> -->
                                            </span> PT Payung Anak Bangsa adalah perusahaan yang bergerak dibidang Software Developer. sebagai konsultan IT yang berpengalaman dapat memberikan solusi yang tepat segala macam 
                                            kendala pengaturan sistem IT anda. Kami akan memberikan saran dan masukkan dalam penerapan sistem anda sehingga
                                            dapat meningkatkan kinerja bisnis anda. Kami memiliki tenaga profesional yang ahli dan berpengalaman dibidangnya.
                                    </p>

                                   <!--  <a href="<?php echo base_url("profil"); ?>" class="btn btn-slategray">
                                        Read More</a> --> <!-- /more button -->
                                </div> <!-- end of /.intro-description -->
                            </div>
                        </div>
                    </div> <!-- end of /.container -->
                </section> 
                <!--  end of intro section -->


                <!--  begin feature section  -->
                <section class="bg-white feature">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="feature-content text-center">
                                    <div class="feature-icon-box">
                                        <div class="feature-icon center-block">
                                            <i class="fa fa-laptop"></i>
                                        </div>
                                    </div> <!--  end of /.feature-icon-box  -->
                                    <div class="feature-info">
                                        <h3 class="feature-heading">Sejarah Singkat</h3>
                                        <p class="feature-description">
                                          PT Payung Anak Bangsa adalah perusahaan yang bergerak dibidang Software Developer. sebagai konsultan IT yang berpengalaman dapat memberikan solusi yang tepat segala macam 
                                            kendala pengaturan sistem IT anda. Kami akan memberikan saran dan masukkan dalam penerapan sistem anda sehingga
                                            dapat meningkatkan kinerja bisnis anda. Kami memiliki tenaga profesional yang ahli dan berpengalaman dibidangnya
                                        </p>  
                                    </div> 
                                </div> 
                            </div>

                            <!-- <div class="col-md-3">
                                <div class="feature-content text-center">
                                    <div class="feature-icon-box">
                                        <div class="feature-icon center-block">
                                            <i class="fa fa-eye"></i>
                                        </div>
                                    </div> 
                                    <div class="feature-info">
                                        <h3 class="feature-heading">Sifat  &amp; Karakteristik</h3>
                                        <p class="feature-description">
                                           Panti Asuhan Ecclesia adalah Yayasan khusus diperuntukkan bagi anak-anak yatim piatu, anak-anak terlantar akibat perceraian orang tua, anak-anak terlantar korban bencana alam, sebatang kara, ditolak keluarganya dan kemiskinan
                                        </p>  
                                    </div> 
                                </div> 
                            </div> -->

                            <div class="col-md-3">
                                <div class="feature-content text-center">
                                    <div class="feature-icon-box">
                                        <div class="feature-icon center-block">
                                            <i class="fa fa-thumbs-o-up"></i>
                                        </div>
                                    </div> <!--  end of /.feature-icon-box  -->
                                    <div class="feature-info">
                                        <h3 class="feature-heading">VISI</h3>
                                        <p class="feature-description">
                                        Menjadi perusahaan teknologi informasi berskala nasional terkemuka yang dikenal sebagai mitra yang dapat menyediakan solusi teknologi informasi 
                                        terbaik untuk masyarakat Indonesia pada umumnya dan perusahaan-perusahaan pada khususnya.
                                        </p>  
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-md-4">
                                <div class="feature-content text-center">
                                    <div class="feature-icon-box">
                                        <div class="feature-icon center-block">
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div> 
                                    <div class="feature-info">
                                        <h3 class="feature-heading">MISI</h3>
                                        <p class="feature-description">
                                          Menjadi perusahaan teknologi informasi yang mampu mendorong kemajuan industri teknologi informasi.   
                                        </p>  
                                    </div> 
                                </div> 
                            </div>

                        </div>
                    </div> 
                </section>  
                


                 <!-- begin portfolio section  -->
                 <!-- <section class="bg-light-gray">
                    <div class="container">

                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">News Article</h2>
                                    <p class="section-sub-title">
                                        Berita Seputar &amp; Panti Ecclesia
                                    </p> 
                                </div>
                            </div>
                        </div> 

                        <div class="portfolio-item-list">
                            <div class="row">
                     <?php foreach($article as $data){ ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="portfolio-item">
                                        <div class="item-image">
                                            <a src="<?php echo base_url(); ?>assets/foto/<?php echo $data["foto"]; ?>" width="600" height="300"  alt="<?php echo $data["title"]; ?>">
                                                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $data["foto"]; ?>" width="600" height="300"  alt="<?php echo $data["title"]; ?>">
                                                <div><span><i class="fa fa-plus"></i></span></div>
                                            </a>
                                        </div>

                                        <div class="item-description">
                                            <div class="row"> 
                                                <div class="col-xs-6">
                                                  
                                                    <span class="item-name"> <a href="<?php echo base_url(); ?>article/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $data['id_article']).'-'.$data['title'])); ?>" class="text-capitalize ">
                                                         <font color="black"><strong><u><?php echo $data["title"]; ?></u></strong></font>
                                                    </a>     
                                                    </br>
                                                       <?php echo word_limiter($data["description"],10); ?>    
                                                        

                                                    </span>
                                              
                                                       <a class="btn btn-primary" href="<?php echo base_url(); ?>article/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $data['id_article']).'-'.$data['title'])); ?>" class="text-capitalize ">
                                                         <font color="gray"><font size="2" color="white">Selengkapnya<span><i class="fa fa-angle-double-right"></i> </span></font>
                                                    </a>    
                                                </div>
                                                <div class="col-xs-6">
                                                    <span class="like">
                                                        <i class="fa fa-heart-o"></i>
                                                       <?php echo $data["author"]; ?> on  <?php echo $data["date_post"]; ?>
                                                    </span>
                                                </div>

                                            </div>
                                        </div> 
                                            
                                    </div> 
                                </div><?php } ?>

                                

                            </div>
                        </div> 
                            
                    </div>
                </section>   -->


                <!--   end of portfolio section  -->
                <!-- begin twitter-feed section -->
                
                <!-- <section class="twit-feed">
                    <div class="twit-feed-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div id="twit" class="owl-carousel owl theme">
                                 <?php foreach($khotbah as $khotbah){ ?>
                                        <div class="item text-center">
                                            <div class="twit-content">
                                                <div class="twit-icon">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                                <h3 class="text-capitalize"><?php 
                                                    echo $khotbah["judul"];
                                                ?></h3>
                                                <p>
                                                    <?php 
                                                    echo $khotbah["nas"];
                                                ?> <br/>
                                                   <?php 
                                                    echo $khotbah["ringkasan"];
                                                ?>
                                               <img src="<?php echo base_url();?>assets/foto/<?php echo $khotbah["foto"];?>" width="60" height="60" onError="this.onerror=null;this.src='<?php echo base_url();?>assets/foto/alkitab.jpg';" width="60" height="60" />
                                                </p>
                                            </div>
                                        </div>
                                      <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>  -->

      <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo base_url(); ?>assets/foto/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section>


                <!--  begin testimonial section  -->

                <section class="bg-light-gray">
                    <div class="container">

                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">Testimoni</h2>
                                    <p class="section-sub-title">
                                        Pengunjung Website Ecclesia
                                    </p> <!-- /.section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.headline -->

                        <div id="client-speech" class="owl-carousel owl-theme"> 
                            <div class="item">
                                <div class="row"><?php foreach($faqs as $faq){  ?>
                                     <div class="col-md-6">
                                        <div class="client-box">
                                            <div class="about-client">
                                                <img src="<?php echo base_url(); ?>assets/foto/peduli.png" alt="client1" width="120" heigth="120">
                                                <p class="client-intro">  </p>
                                            </div> <!-- end of /.about-client -->
                                            <div class="main-speech">
                                                <p>
                                                   <?php echo $faq["name"]." - ".$faq["date_sent"]; ?></p>
                                                   <?php echo word_limiter($faq["message"],5); ?>
                                                </p>
                                            </p>
                                            </div> <!-- end of /.main-speech  -->
                                        </div> <!-- end of /.client-box -->
                                    </div><?php }?>
                                </div>
                            </div>
                            
                        </div> <!-- end of /#client-speech  /.owl-carousel -->

                    </div> <!-- end of .container -->
                </section> 