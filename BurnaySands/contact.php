<!-- Contact -->
<head>
    <!--<link href="style.css" rel="stylesheet" type="text/css">-->
		<link href="reviews.css" rel="stylesheet" type="text/css">
</head>
  <div class="contact">
    
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title text-center">
              <div>Clients</div>
              <h1>Reviews</h1>
              <p>Check out the below reviews for our resort</p>
            </div>
              
              <div class="reviews"></div>
            <script>
            const reviews_page_id = 1;
            fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
                document.querySelector(".reviews").innerHTML = data;
                document.querySelector(".reviews .write_review_btn").onclick = event => {
                    event.preventDefault();
                    document.querySelector(".reviews .write_review").style.display = 'block';
                    document.querySelector(".reviews .write_review input[name='name']").focus();
                };
                document.querySelector(".reviews .write_review form").onsubmit = event => {
                    event.preventDefault();
                    fetch("reviews.php?page_id=" + reviews_page_id, {
                        method: 'POST',
                        body: new FormData(document.querySelector(".reviews .write_review form"))
                    }).then(response => response.text()).then(data => {
                        document.querySelector(".reviews .write_review").innerHTML = data;
                    });
                };
            });
            </script>
        </div>
      </div>
    </div>

    <!-- Map -->
    <div class="contact_map_container">
      <div class="map">
        <div id="google_map" class="google_map">
          <div class="map_container">
            <div id="map"></div>
          </div>
        </div>
      </div>

      </section>
                <!--<div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75067.6802005898!2d124.36999020664123!3d8.571081438843954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32555d98cf750a37%3A0xfd2d7c19e47fafaa!2sBURNAY%20SANDS!5e0!3m2!1sen!2sph!4v1636251045912!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>-->

      <!-- Contact Map Content -->
  <!--    <div class="contact_map_content">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <img class="contact_info_logo_1" src="images/burnay1.png" alt="">
          <div class="contact_info_list">
            <ul class="text-center">
              <li>Brgy. Poblacion, Gitagum, Misamis Oriental</li>
              <li>burnaysands@yahoo.com</li>
              <li>0917 717 1166</li>
            </ul>
          </div>
        </div>-->
      </div>
    </div>
  </div>
