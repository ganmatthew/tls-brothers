<div class="timeline-section">
   <div class="timeline-background d-flex flex-column align-items-center justify-content-center">
      <h1>371 years in the making</h1>
      <p>Learn about the origins of the Lasallian mission from where it all started, and how it made its way to the Philippines.</p>
      <button type="button" class="open-button" onclick="toggleTimeline()">View</button>
   </div>
</div>
<!-- Hidden initially -->
<div class="timeline-modal" id="timelineModal">
   <!--Close button-->
   <button onclick="toggleTimeline()" class="timeline-close material-icons">close</button>
   <!--Title-->
   <div class="timeline-title">
      <h1>
         <span class="title-top">HISTORY OF</span><br>
         <span class="title-bottom">THE DE LA SALLE BROTHERS</span>
      </h1>
   </div>
   <!--Timeline proper-->
   <div class="card-container">
         <div class="timeline-card">
            <img src="assets/timeline/dls_Canon_Hotelbg-2.jpg"></img>
            <div class="text-container">
               <h2>1651</h2>
               <p>A man named John Baptist de La Salle was born on April 30, 1651 in Reims, Champagne, France. Being born into a noble family, he was able to attain higher education that was difficult to acquire at the time due to high poverty rates. De La Salle dreamed of and eventually became a priest.</p>
            </div>
         </div>
         <div class="timeline-card">
            <img src="assets/timeline/dls_Canon_Hotelbg-2.jpg"></img>
            <div class="text-container">
               <h2>1679</h2>
               <p>John Baptist de La Salle encountered Adrian Nyel, a layman who aims to provide schooling for the poor, while working with the Sisters of the Child Jesus. After hearing Nyel’s intentions and his request for help, De La Salle pursued to be involved in the education for the poor which ended up become his life's work.</p>
            </div>
         </div>
         <div class="timeline-card">
            <img src="assets/timeline/dls_Canon_Hotelbg-2.jpg"></img>
            <div class="text-container">
               <h2>1680-1682</h2>
               <p>De La Salle took steps in order to train a small group of teachers that lacked purpose and leadership. He invited them to eat at his home and eventually brought them to live with him. Due to the disturbed feelings of his family, he and his fellow teachers moved to a poor part of the city.</p>
            </div>
         </div>
         <div class="timeline-card">
            <img src="assets/timeline/dls_Canon_Hotelbg-2.jpg"></img>
            <div class="text-container">
               <h2>1683</h2>
               <p>The teaching community under De La Salle’s guidance started to become more formalized. Around this time, De La Salle started to call this community “Brothers.” To be fully in one with his Brothers, he distributed all his wealth to the poor during a winter famine.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   let navbar = document.getElementById('navbar');
   let timelineModal = document.getElementById('timelineModal');
   let starLogo = document.getElementById('nav-logo');
   
   let logoType = 0;

   function toggleLogo() {
      if (logoType == 0) {
         logoType++;
         starLogo.src = "assets/tls-logo-star-green.png"
      } else {
         logoType--;
         starLogo.src = "assets/tls-logo-star-white.png"
      }
   }

   function toggleTimeline() {
      toggleLogo();
      navbar.classList.toggle("timeline-mode");
      timelineModal.classList.toggle("visible");
      if (timelineModal.classList.contains("visible")) {
         document.body.style.overflow = "hidden";
      } else {
         document.body.style.overflow = "scroll";
      }
   }
</script>