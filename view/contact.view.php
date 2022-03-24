        <?php
            include("layout/head.inc.php");
        ?>
    <body>
        <?php
            include("layout/nav.inc.php");
        ?>
        <?php
            include("layout/header.inc.php");
        ?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Vous voulez entrer en contact ? Remplissez le formulaire ci-dessous pour m'envoyer un message et je vous répondrai dans les plus brefs délais !</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" action="contact.add.php" method="post">
                                <div class="form-floating">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Enter votre nom..."  required maxlength="25" />
                                    <label for="name">Nom</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Le nom est obligatoire.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Enter votre email..." required />
                                    <label for="email">Email</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">L'email est obligatoire.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">L'email n'est pas valide.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Enter votre numero de tel..." required pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" />
                                    <label for="phone">Numero tel</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Le tel est obligatoire.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter votre message..." style="height: 12rem" required ></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Le message est obligatoire.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="" type="submit">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
            include("layout/footer.inc.php");
        ?>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
    </body>
</html>
