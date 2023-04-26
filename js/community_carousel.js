const communities = [
   {
      'name': "1911 Brothers' Community",
      'image_name': "1911.png",
      'location': "De La Salle University - Manila, Manila",
      'num_brothers': 8,
      'desc': "The Brothers assigned to this community serve in De La Salle University - Manila, De La Salle - College of St. Benilde, De La Salle Santiago Zobel, St Jaime Hilario School - De La Salle Bataan, and De La Salle Araneta University. The community' name came from the foundation year of the first La Salle school in the Philippines. This is also the country's first community of De La Salle Brothers."
   },
   {
      'name': "Bacolod Brothers' Community",
      'image_name': "Bacolod.jpg",
      'location': "Bacolod, Negros Occidental",
      'num_brothers': 9,
      'desc': "The Brothers assigned to this community serve in the University of St. La Salle and St. Joseph School - La Salle."
   },
   {
      'name': "Holy Infancy Brothers' Community",
      'image_name': "HolyInfancy.jpg",
      'location': "La Salle Academy, Iligan, Lanao del Norte",
      'num_brothers': 3,
      'desc': "The Brothers assigned to this community serve in La Salle Academy."
   },
   {
      'name': "Lipa Brothers' Community",
      'image_name': "Lipa.jpg",
      'location': "De La Salle Lipa, Lipa, Batangas",
      'num_brothers': 4,
      'desc': "The Brothers assigned to this community serve in De La Salle Lipa."
   },
   {
      'name': "Ozamiz Brothers' Community",
      'image_name': "Ozamiz.jpeg",
      'location': "La Salle University, Ozamiz, Misamis Occidental",
      'num_brothers': 4,
      'desc': "The Brothers assigned to this community serve in La Salle University - Ozamiz."
   },
   {
      'name': "Residencia de La Salle",
      'image_name': null,
      'location': "De La Salle Medical and Health Sciences Institute, Dasmariñas, Cavite",
      'num_brothers': 10,
      'desc': "The Brothers assigned to this community serve in De La Salle University - Dasmarinas and De La Salle Medical and Health Sciences Institute. This community also houses the retirement facility of the De La Salle Brothers."
   },
   {
      'name': "St. Benilde Brothers' Community",
      'image_name': null,
      'location': "La Salle Green Hills, Mandaluyong",
      'num_brothers': 10,
      'desc': "The Brothers assigned to this community serve in La Salle Green Hills, De La Salle - College of St. Benilde, and La Salle College Antipolo."
   },
   {
      'name': "St. Jaime Hilario Brothers' Community",
      'image_name': null,
      'location': "St. Jaime Hilario School - De La Salle Bataan, Bagac, Bataan",
      'num_brothers': 3,
      'desc': "The Brothers assigned to this community serve in St. Jaime Hilario School - De La Salle Bataan."
   }
]

function getImageAsset(image_path) {
   placeholder_url = "assets/dlsp-placeholder.png"
   comm_image_url = `assets/${image_path}`   
   if (image_path !== null) {
      return comm_image_url;
   }
   return placeholder_url;
}

// Creates a carousel entry with the given parameters
function createCarouselEntry(comm_name, comm_image_path, comm_location, num_brothers, comm_desc) {
   const carouselItem = document.createElement('div');
   carouselItem.classList.add('carousel-item');

   const commCard = document.createElement('div');
   commCard.classList.add('comm_card', 'd-flex', 'flex-wrap', 'justify-content-center', 'align-items-center');

   // Creates the image side of the card
   const cardLeft = document.createElement('div');
   cardLeft.classList.add('card_left', 'col-sm-12');
   const image = document.createElement('img');

   // Checks first if there is an available image, otherwise uses placeholder image
   image.setAttribute('src', getImageAsset(comm_image_path));
   cardLeft.appendChild(image);

   // Creates the text side of the card
   const cardRight = document.createElement('div');
   cardRight.classList.add('card_right', 'col-sm-12', 'col-lg-6');
   const commName = document.createElement('h3');
   commName.setAttribute('id', 'comm-name');
   commName.textContent = comm_name;
   const cardInfo = document.createElement('div');
   cardInfo.classList.add('card_info');
   const commLocation = document.createElement('p');
   commLocation.setAttribute('id', 'comm-location');
   commLocation.innerHTML = '<strong>Location: </strong>' + comm_location;
   const commNumBrothers = document.createElement('p');
   commNumBrothers.setAttribute('id', 'comm-num-brothers');
   commNumBrothers.innerHTML = '<strong>Number of Brothers assigned: </strong>' + num_brothers;
   const commDesc = document.createElement('p');
   commDesc.setAttribute('id', 'comm-desc');
   commDesc.textContent = comm_desc;
   cardInfo.appendChild(commLocation);
   cardInfo.appendChild(commNumBrothers);
   cardRight.appendChild(commName);
   cardRight.appendChild(cardInfo);
   cardRight.appendChild(commDesc);

   // Append the two card sides into the carousel item div
   commCard.appendChild(cardLeft);
   commCard.appendChild(cardRight);
   carouselItem.appendChild(commCard);

   return carouselItem;
}

// Creates a carousel item for every listed community
function populateCarousel() {
   const commCarousel = document.querySelector('#comm-carousel');
   const innerCarousel = commCarousel.querySelector('.carousel .inner');

   let firstItem = null;

   communities.forEach(community => {
      let carouselItem = createCarouselEntry(
         community.name, community.image_name, community.location, community.num_brothers, community.desc
      )
      // Sets the first added community as the active one
      if (!firstItem && carouselItem.classList.contains('carousel-item')) {
         firstItem = carouselItem;
         firstItem.classList.add('active');
      }
      innerCarousel.appendChild(carouselItem);
   });
}

// Only populate the carousel if it is empty
const innerCarousel = document.querySelector('.carousel .inner');
if (innerCarousel.childElementCount < 1) {
   populateCarousel();
}