import { generateList } from './find-a-guide.js'
const tours = [
  {
    id: 'a1',
    title: `LA Ice Cream Tour`,
    photo: 'images/landscape.jpg',
    rating: '★★★★★',
    teaser: `This is a one sentence teaser.`,
    description: `Explore the sweetest spots in Los Angeles with the LA Ice Cream Tour, a delightful journey through the city's best and most unique ice cream parlors. Perfect for ice cream enthusiasts and families alike, this tour offers a chance to savor a variety of flavors, from classic favorites to innovative concoctions.`,
    itinerary: {
      intro: `There is so much for us to do! First, you will go to Salt&Straw where they have a special "fragrance enhancer" to make your ice cream shine - one spray for 25 cents! Then there's McConnell's fine Fine Ice Creams. Their vegan flavors are to die for!`,
      schedule: `<ol><li>Walk around.</li><li>Eat ice cream</li></ol>`
    },
    length: '3 hours',
    start: '01/01/2024',
    end: '05/30/2024',
    location: 'Los Angeles, California, USA',
    price: '$35.00',
    guide: {
      name: 'Mathdaniel Squirrel',
      languages: ['English', 'Swahili', 'Japanese'],
      education: 'English University of English',
      expertise: ['History', 'Math', 'Cooking'],
      maritalStatus: 'Forever Alone',
      pronouns: ['They', 'He']
    }
  },
  {
    id: 'a2',
    title: `Haunted Pizza Crawl`,
    photo: 'images/landscape.jpg',
    rating: '★★★★',
    teaser: `A spooky, cheesy adventure!`,
    description: `Join us for a haunted tour through the city's most ghostly pizzerias. Taste the most terrifyingly delicious slices while learning about the haunted history of each location.`,
    itinerary: {
      intro: `We will visit five haunted pizzerias, each with its own spooky story and unique pizza.`,
      schedule: `<ol><li>Ghostly Pizzeria</li><li>Phantom Slice</li><li>Spooky Crust</li></ol>`
    },
    length: '4 hours',
    start: '01/01/2024',
    end: '05/30/2024',
    location: 'Wichita, Kansas, USA',
    price: '$50.00',
    guide: {
      name: 'Ghoulish Gary',
      languages: ['English', 'French', 'Latin'],
      education: 'Transylvania Culinary Institute',
      expertise: ['Paranormal Activity', 'Pizza Making', 'Storytelling'],
      maritalStatus: 'Mysterious',
      pronouns: ['He', 'Him']
    }
  },
  {
    id: 'a3',
    title: `UFO Spotting Safari`,
    photo: 'images/landscape.jpg',
    rating: '★★★',
    teaser: `An out-of-this-world experience!`,
    description: `Venture into the desert for a UFO spotting adventure. Learn about famous UFO sightings and enjoy some cosmic snacks under the stars.`,
    itinerary: {
      intro: `We will drive out to the best UFO spotting locations, equipped with high-tech equipment.`,
      schedule: `<ol><li>Desert Stargazing</li><li>UFO Watch</li><li>Cosmic Snacks</li></ol>`
    },
    length: '6 hours',
    start: '06/01/2024',
    end: '12/31/2024',
    location: 'Tokyo, Japan',
    price: '$75.00',
    guide: {
      name: 'Alien Alex',
      languages: ['English', 'Japanese', 'Binary'],
      education: 'Intergalactic University',
      expertise: ['Astronomy', 'Extraterrestrial Life', 'Snacking'],
      maritalStatus: 'Single',
      pronouns: ['They', 'Them']
    }
  },
  {
    id: 'a4',
    title: `Mystery Bookshop Hop`,
    photo: 'images/landscape.jpg',
    rating: '★★★★★',
    teaser: `For the bookworm with a sense of adventure.`,
    description: `Visit the city's coziest and most mysterious bookshops. Discover hidden literary gems and participate in a live mystery game.`,
    itinerary: {
      intro: `Our tour will take you to five unique bookshops, each with its own charm and secrets.`,
      schedule: `<ol><li>Hidden Nook Books</li><li>Mystery Manor</li><li>Secret Stories</li></ol>`
    },
    length: '3 hours',
    start: '06/01/2024',
    end: '12/31/2024',
    location: 'Amsterdam, Netherlands',
    price: '$40.00',
    guide: {
      name: 'Detective Dan',
      languages: ['English', 'Spanish', 'Dutch'],
      education: 'Sherlock Holmes Academy',
      expertise: ['Mystery Novels', 'Detective Work', 'Tea Brewing'],
      maritalStatus: 'In a Relationship',
      pronouns: ['He', 'Him']
    }
  },
  {
    id: 'a5',
    title: `Underwater Basket Weaving Expedition`,
    photo: 'images/landscape.jpg',
    rating: '★★★★★',
    teaser: `A wet and wild crafting experience!`,
    description: `Dive into the art of underwater basket weaving. Perfect for those who love crafting and water activities.`,
    itinerary: {
      intro: `We will provide all necessary equipment and instruction.`,
      schedule: `<ol><li>Intro to Basket Weaving</li><li>Diving Session</li><li>Weaving Underwater</li></ol>`
    },
    length: '5 hours',
    start: '06/01/2024',
    end: '12/31/2024',
    location: 'Toronto, Canada',
    price: '$60.00',
    guide: {
      name: 'Aqua Amy',
      languages: ['English', 'Dolphinese', 'French'],
      education: 'Marine Craft Academy',
      expertise: ['Basket Weaving', 'Scuba Diving', 'Marine Biology'],
      maritalStatus: 'Married',
      pronouns: ['She', 'Her']
    }
  },
  {
    id: 'a6',
    title: `Invisible Art Gallery Tour`,
    photo: 'images/landscape.jpg',
    rating: '★★',
    teaser: `See what can't be seen!`,
    description: `Explore the world's only invisible art gallery. Appreciate the unseen masterpieces with guided audio descriptions.`,
    itinerary: {
      intro: 'We will guide you through several rooms of invisible art.',
      schedule: `<ol><li>Room of the Unknown</li><li>Gallery of the Unseen</li><li>Invisible Masterpieces</li></ol>`
    },
    length: '2 hours',
    start: '06/01/2024',
    end: '12/31/2024',
    location: 'BangKok, Thailand',
    price: '$25.00',
    guide: {
      name: 'Imaginary Irene',
      languages: ['English', 'Thai', 'Imaginary Communication'],
      education: 'Invisible Arts Academy',
      expertise: ['Art Critique', 'Imaginary Art', 'Guided Meditation'],
      maritalStatus: 'Imaginary Partner',
      pronouns: ['She', 'Her']
    }
  },
  {
    id: 'a7',
    title: `Time Traveler's Tea Party`,
    photo: 'images/landscape.jpg',
    rating: '★★★★★',
    teaser: `Tea through the ages!`,
    description: `Join a tea party that transcends time. Sample teas from different eras and learn about their historical significance.`,
    itinerary: {
      intro: `We will visit different time periods through our themed tea rooms.`,
      schedule: `<ol><li>Medieval Tea Room</li><li>Victorian Tea Room</li><li>Future Tea Room</li></ol>`
    },
    length: '3 hours',
    start: '08/01/2024',
    end: '12/31/2024',
    location: 'Berlin, Germany',
    price: '$45.00',
    guide: {
      name: 'Chrono Chris',
      languages: ['English', 'German', 'Future Speak'],
      education: 'Time Traveler\'s Academy',
      expertise: ['History', 'Tea Brewing', 'Time Travel'],
      maritalStatus: 'Complicated',
      pronouns: ['He', 'Him']
    }
  },
  {
    id: 'a8',
    title: `Extreme Ironing Adventure`,
    photo: 'images/landscape.jpg',
    rating: '★★★',
    teaser: `Press your clothes in extreme places!`,
    description: `Combine the thrill of adventure sports with the practicality of ironing. Press your clothes in the most extreme locations imaginable.`,
    itinerary: {
      intro: `We will travel to various extreme locations for ironing.`,
      schedule: `<ol><li>Mountain Peak Ironing</li><li>Skydiving Ironing</li><li>Underwater Ironing</li></ol>`
    },
    length: '7 hours',
    start: '06/01/2024',
    end: '12/31/2024',
    location: 'Cairo, Egypt',
    price: '$100.00',
    guide: {
      name: 'Extreme Eddie',
      languages: ['English', 'Arabic', 'Ironing Speak'],
      education: 'Extreme Sports Academy',
      expertise: ['Ironing', 'Extreme Sports', 'Travel'],
      maritalStatus: 'Single',
      pronouns: ['He', 'Him']
    }
  }
];
   
function getTourSearchView(container) {
  const main = document.querySelector('main');
  container.innerHTML = ``

  container.innerHTML += `
  <section class='tour-search-page'>
    <inner-column>

      <form class='search'>
        <field>
          <label>Where are you going? (City, State, Country)</label>
          <input id='location' type='text' placeholder='Enter location' required>
        </field>
        <field>
          <label>What do you want to do?</label>
          <input id='activity' type='text' placeholder='Enter an activity'>
        </field>
        <div class='tour-dates'>
          <field class='startDate'>
            <label>From:</label>
            <input id='start-date' type='text' placeholder='mm/dd/yyyy'>
          </field>
          <field class='endDate'>
            <label>To:</label>
            <input id='end-date' type='text' placeholder='mm/dd/yyyy'>
          </field>
        </div>
        <field class='guests'>
          <label>Guests:</label>
          <input id='guests' type='number' placeholder='Enter number of guests'>
        </field>

        <button type='submit' data-set='tour-search'>Search</button>
      </form>
    </inner-column>
  </section>
  <section class='tour-results'>
  </section>
  `

  renderTourCards(tours, main);
  handleSearch(tours);
}

function renderTourCards(tours) {
  const allTours = tours.map((tour) => `
  <section class='tour-card' id='${tour.id}'>
    <inner-column>
      <figure>
        <picture>
          <img src='${tour.photo}'>
        </picture>
        <p>${tour.rating}</p>
      </figure>
      <h2>${tour.title}</h2>
      <h3>${tour.location}</h3>
      <p>${tour.teaser}</p>
      <p>${tour.price}</p>
      <button type='submit' data-set='detail'>Check it out!</button>
    </inner-column>
  </section>
  `).join('');

  const tourResults = document.querySelector('.tour-results')
  // clear each time
  tourResults.innerHTML = ``

  tourResults.innerHTML += allTours;
  if ( !allTours ) {
    tourResults.innerHTML = `
    <section>
      <inner-column>
        <p>No tours match your search!</p>
      </inner-column>
    </section>
    `
  }
}

function getTourResults(tours) {
  const inputStartDate = new Date(document.querySelector('#start-date').value);
  const inputEndDate = new Date(document.querySelector('#end-date').value);
  const inputLocation = document.querySelector('#location').value.toLowerCase();
  const inputActivity = document.querySelector('#activity').value.toLowerCase();

  return tours.filter((tour) => {
    const startDate = new Date(tour.start);
    const endDate = new Date(tour.end);
    const location = tour.location.toLowerCase();
    const activity = tour.description.toLowerCase();

    //if startDate and endDate are not numbers (in this case, objects)
    //creating a range for the dates to fall in

    const startDateMatch = isNaN(inputStartDate) || inputStartDate <= endDate
    const endDateMatch = isNaN(inputStartDate) || inputEndDate >= startDate
    const locationMatch = location.includes(inputLocation);
    const activityMatch = activity.includes(inputActivity);

    return locationMatch && endDateMatch && startDateMatch && activityMatch;
  })

}

// DETAIL PAGE

function getTourById(tours, id) {
  return tours.find((tour) => tour.id === id);
}

function renderDetailPage(tour) {
  const main = document.querySelector('main');
  main.innerHTML = ``
  main.innerHTML += `<section class='tour-detail'></section>`
  const tourDetail = document.querySelector('.tour-detail');
  tourDetail.innerHTML += renderTourDetailCard(tour);
  tourDetail.innerHTML += renderTourGuideCard(tour);
}

function renderTourDetailCard(tour) {
  return `
    <section class='tour-intro'>
      <inner-column>
      <h2>${tour.title}</h2>
      <picture>
        <img src='${tour.photo}'>
      </picture>
      <p>${tour.teaser}</p>
      </inner-column>
    </section>

    <section class='itinerary'>
      <inner-column>
        <h2>Itinerary</h2>
        <p>Length: ${tour.length}</p>
        <p>${tour.itinerary.intro}</p>
        ${tour.itinerary.schedule}
      </inner-column>
    </section>
    `
}

function renderTourGuideCard(tour) {
  return `
    <section class='guide'>
      <inner-column>
        <h2>Meet Your Guide</h2>

        <section class='guide-intro'>
          <div class='temp-icon'>
            <svg viewBox='0 0 10 10'>
              <circle cx='5' cy='5' r='5' />
            </svg>
          </div>
          <h3>${tour.guide.name}</h3>
        </section>

        <ul class='guide-details'>
          <li>
            <h3>Languages</h3>
            <ul>
              ${generateList(tour.guide.languages)}
            </ul>
          </li>
          <li>
            <h3>Languages</h3>
            <ul>
              ${generateList(tour.guide.languages)}
            </ul>
          </li>
          <p>${tour.itinerary.intro}</p>
          ${tour.itinerary.schedule}
      </inner-column>
    </section>
    `
}

function renderGuideDetails(tours){
  const guide = tours.guide
  const guideKeys = guide.Keys()
  guideKeys.forEach((key) => {

  })
}

function handleSearch(event) {
    const filteredTours = getTourResults(tours);
    renderTourCards(filteredTours);
}

function handleRenderTourDetail(event, tours) {
  const sectionId = event.target.closest('section').getAttribute('id');
  const foundTour = getTourById(tours, sectionId)
  renderDetailPage(foundTour);
}

window.addEventListener('click', (event) => {
  if (event.target.matches('[data-set="detail"]') ) {
    event.preventDefault();
    handleRenderTourDetail(event, tours);
  }

  if (event.target.matches('[data-set="tour-search"]') ) {
    event.preventDefault();
    handleSearch(event, tours);

  }
});

export {
  getTourSearchView,
}