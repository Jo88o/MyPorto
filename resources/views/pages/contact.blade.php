    <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="d-flex justify-content-center">
                            @foreach ($contact as $elem)
                            <iframe name="map" src="{{$elem->map}}" frameborder="0"></iframe>
                            <div style="width: 30px">{{-- cette div sert a mettre de l'espace --}}</div>
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('img/MG.png')}}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title" name="titre">{{$elem->titre}}</h5>
                                    <p class="card-text" name="phone">{{$elem->phone}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <br>
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate" action="/Mail-Sender" method="POST">
                        @csrf
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2  m-2">
                                    <label>Nom</label>
                                    <input name="name" class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2  m-2">
                                    <label>Email</label>
                                    <input name="email" class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2  m-2">
                                    <label>Numéro de Téléphone</label>
                                    <input name="phone" class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2 border m-2">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group">
                            <button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Envoyer</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>