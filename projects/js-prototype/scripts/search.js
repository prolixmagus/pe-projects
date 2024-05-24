const tours = [
  {
    title: `LA Ice Cream Tour`,
    photo: 'images/landscape.jpg',
    teaser: `This is a one sentence teaser.`,
    description: `Explore the sweetest spots in Los Angeles with the LA Ice Cream Tour, a delightful journey through the city's best and most unique ice cream parlors. Perfect for ice cream enthusiasts and families alike, this tour offers a chance to savor a variety of flavors, from classic favorites to innovative concoctions.`,
    itinerary: `There is so much for us to do! First, you will go to Salt&Straw where they have a special "fragrance enhancer" to make your ice cream shine - one spray for 25 cents! Then there's McConnell's fine Fine Ice Creams. Their vegan flavors are to die for! <ol><li>Walk around.</li><li>Eat ice cream</li></ol>`,
    tourLength: '3 hours',
    start: '01/01/2024',
    end: '05/30/2024',
    location: 'Los Angeles, California, USA',

    cost: '$35.00',
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
    title: `Haunted Pizza Crawl`,
    photo:'images/landscape.jpg',
    teaser: `A spooky, cheesy adventure!`,
    description: `Join us for a haunted tour through the city's most ghostly pizzerias. Taste the most terrifyingly delicious slices while learning about the haunted history of each location.`,
    itinerary: `We will visit five haunted pizzerias, each with its own spooky story and unique pizza. <ol><li>Ghostly Pizzeria</li><li>Phantom Slice</li><li>Spooky Crust</li></ol>`,
    tourLength: '4 hours',
    start: '01/01/2024',
    end: '05/30/2024',
    location: 'Wichita, Kansas, USA',
    cost: '$50.00',
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
    title: `UFO Spotting Safari`,
    photo: 'images/landscape.jpg',
    teaser: `An out-of-this-world experience!`,
    description: `Venture into the desert for a UFO spotting adventure. Learn about famous UFO sightings and enjoy some cosmic snacks under the stars.`,
    itinerary: `We will drive out to the best UFO spotting locations, equipped with high-tech equipment. <ol><li>Desert Stargazing</li><li>UFO Watch</li><li>Cosmic Snacks</li></ol>`,
    tourLength: '6 hours',
    location: 'Tokyo, Japan',
    start: '06/01/2024',
    end: '12/31/2024',
    cost: '$75.00',
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
    title: `Mystery Bookshop Hop`,
    photo: 'images/landscape.jpg',
    teaser: `For the bookworm with a sense of adventure.`,
    description: `Visit the city's coziest and most mysterious bookshops. Discover hidden literary gems and participate in a live mystery game.`,
    itinerary: `Our tour will take you to five unique bookshops, each with its own charm and secrets. <ol><li>Hidden Nook Books</li><li>Mystery Manor</li><li>Secret Stories</li></ol>`,
    tourLength: '3 hours',
    location: 'Amsterdam, Netherlands',
    start: '06/01/2024',
    end: '12/31/2024',
    cost: '$40.00',
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
    title: `Underwater Basket Weaving Expedition`,
    photo: 'images/landscape.jpg',
    teaser: `A wet and wild crafting experience!`,
    description: `Dive into the art of underwater basket weaving. Perfect for those who love crafting and water activities.`,
    itinerary: `We will provide all necessary equipment and instruction. <ol><li>Intro to Basket Weaving</li><li>Diving Session</li><li>Weaving Underwater</li></ol>`,
    tourLength: '5 hours',
    start: '06/01/2024',
    end: '12/31/2024',
    location: 'Toronto, Canada',
    cost: '$60.00',
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
    title: `Invisible Art Gallery Tour`,
    photo: 'images/landscape.jpg',
    teaser: `See what can't be seen!`,
    description: `Explore the world's only invisible art gallery. Appreciate the unseen masterpieces with guided audio descriptions.`,
    itinerary: `We will guide you through several rooms of invisible art. <ol><li>Room of the Unknown</li><li>Gallery of the Unseen</li><li>Invisible Masterpieces</li></ol>`,
    tourLength: '2 hours',
    start: '06/01/2024',
    end: '12/31/2024',
    location: 'BangKok, Thailand',
    cost: '$25.00',
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
    title: `Time Traveler's Tea Party`,
    photo: 'images/landscape.jpg',
    teaser: `Tea through the ages!`,
    description: `Join a tea party that transcends time. Sample teas from different eras and learn about their historical significance.`,
    itinerary: `We will visit different time periods through our themed tea rooms. <ol><li>Medieval Tea Room</li><li>Victorian Tea Room</li><li>Future Tea Room</li></ol>`,
    tourLength: '3 hours',
    start: '08/01/2024',
    end: '12/31/2024',
    location: 'Berlin, Germany',
    cost: '$45.00',
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
    title: `Extreme Ironing Adventure`,
    photo: 'images/landscape.jpg',
    teaser: `Press your clothes in extreme places!`,
    description: `Combine the thrill of adventure sports with the practicality of ironing. Press your clothes in the most extreme locations imaginable.`,
    itinerary: `We will travel to various extreme locations for ironing. <ol><li>Mountain Peak Ironing</li><li>Skydiving Ironing</li><li>Underwater Ironing</li></ol>`,
    tourLength: '7 hours',
    location: 'Cairo, Egypt',
    cost: '$100.00',
    guide: {
      name: 'Ironing Ivan',
      languages: ['English', 'Egyptian Arabic', 'Laundromat'],
      education: 'Extreme Sports Academy',
      expertise: ['Ironing', 'Extreme Sports', 'Survival Skills'],
      maritalStatus: 'Single',
      pronouns: ['He', 'Him']
    }
  },
  {
    title: `Intergalactic Food Tasting Tour`,
    photo: 'images/landscape.jpg',
    teaser: `A culinary journey through the cosmos!`,
    description: `Taste dishes from across the galaxy. Learn about alien cuisines and enjoy a unique dining experience.`,
    itinerary: `We will visit themed restaurants representing different planets. <ol><li>Martian Delights</li><li>Venusian Veggies</li><li>Jovian Desserts</li></ol>`,
    tourLength: '5 hours',
    location: 'Cairo, Egypt',
    cost: '$80.00',
    guide: {
      name: 'Galactic Gina',
      languages: ['English', 'Martian', 'Egyptian Arabic'],
      education: 'Intergalactic Culinary Institute',
      expertise: ['Cooking', 'Extraterrestrial Cultures', 'Gastronomy'],
      maritalStatus: 'In a Relationship',
      pronouns: ['She', 'Her']
    }
  },
  {
    title: `Magical Unicorn Safari`,
    photo: 'images/landscape.jpg',
    teaser: `A whimsical adventure with mythical creatures.`,
    description: `Join us for a magical safari where you'll encounter unicorns in their natural habitat. Perfect for fantasy lovers and families.`,
    itinerary: `We will journey to the enchanted forest to find unicorns. <ol><li>Unicorn Spotting</li><li>Enchanted Forest Walk</li><li>Magical Picnic</li></ol>`,
    tourLength: '4 hours',
    location: 'Wichita, Kansas, USA',
    cost: '$55.00',
    guide: {
      name: 'Fairy Fiona',
      languages: ['English', 'Elvish', 'Dragon Tongue'],
      education: 'Fantasy Creatures University',
      expertise: ['Mythical Creatures', 'Nature', 'Magic'],
      maritalStatus: 'Single',
      pronouns: ['She', 'Her']
    }
  }
];
   

function getTourSearchView(container) {
  container.innerHTML = ``

  container.innerHTML += `
  <section class='tour-search-page'>
    <inner-column>

      <form class='search'>
        <fieldset>
          <legend>Where are you going? (City, State, Country)</legend>
          <input id='location' type='text' placeholder='Enter location'>
        </fieldset>
        <div class='tour-dates'>
          <fieldset class='arrival'>
            <label>From:</label>
            <input id='arrival' type='text' placeholder='mm/dd/yyyy'>
          </fieldset>
          <fieldset class='departure'>
            <label>To:</label>
            <input id='departure' type='text' placeholder='mm/dd/yyyy'>
          </fieldset>
        </div>
        <fieldset class='guests'>
          <label>Guests:</label>
          <input id='guests' type='number' placeholder='Enter number of guests'>
        </fieldset>

        <button type='submit'>Search</button>
      </form>
    </inner-column>
  </section>
  `
}

function renderTourCards(tours, container) {
  container += `
  <section class='tour-results'>
    <inner-column>
      <figure>
        <picture>
          <img src='${tours.photo}'>
        </picture
      </figure>
      <h2>${tours.}
    </inner-column>


}



export {
  getTourSearchView
}