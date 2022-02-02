@extends('blog.template.layout')
@section('titulo')
<h1>PROGRAMACION CLIENTE SERVIDOR</h1>

@endsection

@section('contenido')
     
      <!-- Testimonials Section -->
      <div class="testimonials-container">
         <div class="container">
            <div class="row">
               <div class="col-md-12 wow fadeInUp">
                  <div class="title-un-icon"><i class="fa ion-quote"></i></div>
                  <h3 class="title-un">--- INGENIERÍA EN SOFTWARE ---</h3>
                  <div id="owl-slide" class="testimonials owl-carousel">
                     <div class="testimonial">
                        <p> El propósito de la página es principalmente informativo, el contenido se enfoca a la asignatura de Programación Cliente - Servidor</p>
                        <div class="client">
                           <div class="client-info">
                              <div class="client-name">
                                 Marco Hernández
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial">
                        <p>El aprendizaje que llevaremos a cabo en el transcurso del cuatrimestre escolar, será plasmado en esta página web</p>
                        <div class="client">
                           <div class="client-info">
                              <div class="client-name">
                                 Estefanía Chavez
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Testimonials Section -->
      <!-- Portfolio Section -->
      <div class="container-about-portfolio">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">NUESTRO PROYECTO</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-heart-outline"></i></div>
                  <p class="title-un-des">Con la finalidad de conocer los alcances del uso de laravel y blade, se desarrollo la siguiente página web con la finalidad de informar acerca de su funcionamiento</p>
               </div>
            </div>
         </div>
      </div>
      <div class="gallery-portfolio-container">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <nav class="port-filter m-port-filter">
                     <ul>
                        <li class="active"><a href="#" data-filter="*">TODO</a></li>
                        <li><a href="#" data-filter=".photography">Mapas</a></li>
                        <li><a href="#" data-filter=".webdesign">Web design</a></li>
              
                        <li><a href="#" data-filter=".illustration ">Codigo </a></li>
                        
                     </ul>
                  </nav>
                  <div class="classic-portfolio col-3-portfolio portfolio gallery-portfolio shortc-mp">
                     <div class="project-item applications illustration">
                        <div class="project-image">
                           <img src="images/gallery/i4.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="#">VISUAL CODE</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#"> </a></li>
                                       <li><a href="#"> </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item illustration  webdesign">
                        <div class="project-image">
                           <img src="images/gallery/i5.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="{{route('contacto')}}">Contacto</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#"></a></li>
                                       <li><a href="#"></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item webdesign branding applications photography">
                        <div class="project-image">
                           <img src="images/gallery/i6.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="{{route('unidades')}}">Mapa conceptual</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#"></a></li>
                                       <li><a href="#"></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item webdesign illustration  ">
                        <div class="project-image">
                           <img src="images/gallery/i7.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="{{route('personal')}}">Acerca de nosotros</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#">  </a></li>
                                       <li><a href="#">  </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item webdesign">
                        <div class="project-image">
                           <img src="images/gallery/i1.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="#">Inicio</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#">  </a></li>
                                       <li><a href="#">  </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item applications photography">
                        <div class="project-image">
                           <img src="images/gallery/i2.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="#">Unidad 1</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#"> </a></li>
                                       <li><a href="#"> </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Portfolio Section nwesletter -->
      
      <!-- Footer area 
      <div class="footer-area-container">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="footer-widget">
                     <a href="index.html"><img class="footer-logo" src="images/logo.png" alt="Enfold"></a>
                     <p>Dow wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. Duis autem vel eum iriure dolor in hendrerit.</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget widget_nav_menu">
                     <h4 class="footer-widget-title">Get In Touch</h4>
                     <p>Caecenas wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
                     <div> <i class="ion-ios-location-outline"></i> Moonshine St. 14/05 Light City
                        <br>
                        <i class="ion-ios-telephone-outline"></i> 00 (123) 456 78 90
                        <br>
                        <i class="ion-paper-airplane"></i> <a href="first.last@email.com"> first.last@email.com</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget widget_nav_menu">
                     <h4 class="footer-widget-title">LINKS</h4>
                     <ul>
                        <li class="menu-item"><a href="#"> Brand Creation  </a></li>
                        <li class="menu-item"><a href="#"> Press inquiries</a></li>
                        <li class="menu-item"><a href="#"> Corporate Identity </a></li>
                        <li class="menu-item"><a href="#"> Company Analysis </a></li>
                        <li class="menu-item"><a href="#"> Creative homepage </a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget">
                     <h4 class="footer-widget-title">Flickr stream</h4>
                     <ul id="cbox" class="popup-gallery flickr-thumbs"></ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      End Footer area -->
@endsection