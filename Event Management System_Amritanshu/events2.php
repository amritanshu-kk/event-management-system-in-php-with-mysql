<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What's On</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/3.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Techfest - Jnanagni </h1><!--event content title-->
                            <p class="definition"><!--event content definition-->
Jnanagni is a techno-cultural fest of Gurukula Kangri University,Haridwar.Here senior year engineering students from faculty of engineering & technology organise the series of events for consecutive three days.
                            </p>
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            </div>
            </div>
<br>
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/1.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Birthday Event </h1><!--event content title-->
                            <p class="definition"><!--event content definition-->
A celebrity from Haridwar have organised this birthday party.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            <br>
            <div class="row"><!--event content-->
                  <section>
                      <div class="container">
                          <div class="col-md-5"><!--image holder with 5 grid column-->
                              <img src="images/4.jpg" class="img-responsive">
                          </div>
                          <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                              <h1 class="title">Haridwar Meeting on 23rd June</h1><!--event content title-->
                              <p class="definition"><!--event content definition-->
Business meeting is being organised for the employees from Patanjali.
                              </p>
                              <hr class="customline2"><!--css modified horizontal line-->
                              <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                              View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                              </button>
                          </div><!--subcontent div-->
                      </div><!--container div-->
                  </section>
              </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            </div>
            </div>
<br>
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/1.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Wedding on 21st june</h1><!--event content title-->
                            <p class="definition"><!--event content definition-->
Most famous & succesful business man Er. Japneet's daughter marriage ceremony
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
