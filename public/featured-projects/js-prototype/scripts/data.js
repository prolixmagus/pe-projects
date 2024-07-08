
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
      info: [
        { 
          header: 'Languages', 
          content: ['English', 'Swahili', 'Japanese'] 
        },
        { 
          header: 'Education', 
          content: 'English University of English' 
        },
        { 
          header: 'Expertise', 
          content: ['History', 'Math', 'Cooking'] 
        },
        { 
          header: 'Marital Status', 
          content: 'Forever Alone' 
        },
        { 
          header: 'Pronouns', 
          content: ['They', 'He'] 
        }
      ]
    }
  },
  {
    id: 'a2',
    title: `Haunted Pizza Crawl`,
    photo: 'images/landscape.jpg',
    rating: '★★★★',
    teaser: `A spooky, cheesy adventure!`,
    description: `Join us for a haunted tour through the city's most ghostly pizzerias. Taste the most terrifyingly delicious slices while learning about the haunted history of each spooky location.`,
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
      info: [
        { 
          header: 'Languages', 
          content: ['English', 'French', 'Latin'] 
        },
        { 
          header: 'Education', 
          content: 'Transylvania Culinary Institute' 
        },
        { 
          header: 'Expertise', 
          content: ['Paranormal Activity', 'Pizza Making', 'Storytelling'] 
        },
        { 
          header: 'Marital Status', 
          content: 'Mysterious' 
        },
        { 
          header: 'Pronouns', 
          content: ['He', 'Him'] 
        }
      ]
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
      info: [
        { 
          header: 'Languages', 
          content: ['English', 'Japanese', 'Binary'] 
        },
        { 
          header: 'Education', 
          content: 'Intergalactic University' 
        },
        { 
          header: 'Expertise', 
          content: ['Astronomy', 'Extraterrestrial Life', 'Snacking'] 
        },
        { 
          header: 'Marital Status', 
          content: 'Single' 
        },
        { 
          header: 'Pronouns', 
          content: ['They', 'Them'] 
        }
      ]
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
      info: [
        { 
          header: 'Languages', 
          content: ['English', 'Spanish', 'Dutch'] 
        },
        { 
          header: 'Education', 
          content: 'Sherlock Holmes Academy' 
        },
        { 
          header: 'Expertise', 
          content: ['Mystery Novels', 'Detective Work', 'Tea Brewing'] 
        },
        { 
          header: 'Marital Status', 
          content: 'In a Relationship' 
        },
        { 
          header: 'Pronouns', 
          content: ['He', 'Him'] 
        }
      ]
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
      info: [
        { 
          header: 'Languages', 
          content: ['English', 'Dolphinese', 'French'] 
        },
        { 
          header: 'Education', 
          content: 'Marine Craft Academy' 
        },
        { 
          header: 'Expertise', 
          content: ['Basket Weaving', 'Scuba Diving', 'Marine Biology'] 
        },
        { 
          header: 'Marital Status', 
          content: 'Married' 
        },
        { 
          header: 'Pronouns', 
          content: ['She', 'Her'] 
        }
      ]
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
      intro: `We will guide you through several rooms of invisible art.`,
      schedule: `<ol><li>Room of the Unknown</li><li>Gallery of the Unseen</li><li>Invisible Masterpieces</li></ol>`
    },
    length: '2 hours',
    start: '06/01/2024',
    end: '12/31/2024',
    location: 'Bangkok, Thailand',
    price: '$25.00',
    guide: {
      name: 'Imaginary Irene',
      info: [
        { 
          header: 'Languages', 
          content: ['English', 'Thai', 'Imaginary Communication'] 
        },
        { 
          header: 'Education', 
          content: 'Invisible Arts Academy' 
        },
        { 
          header: 'Expertise', 
          content: ['Art Critique', 'Imaginary Art', 'Guided Meditation'] 
        },
        { 
          header: 'Marital Status', 
          content: 'Imaginary Partner' 
        },
        { 
          header: 'Pronouns', 
          content: ['She', 'Her'] 
        }
      ]
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
      info: [
        { 
          header: 'Languages', 
          content: ['English', 'German', 'Future Speak'] 
        },
        { 
          header: 'Education', 
          content: 'Time Traveler\'s Academy' 
        },
        { 
          header: 'Expertise', 
          content: ['History', 'Tea Brewing', 'Time Travel'] 
        },
        { 
          header: 'Marital Status', 
          content: 'Complicated' 
        },
        { 
          header: 'Pronouns', 
          content: ['He', 'Him'] 
        }
      ]
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
      info: [
        { 
          header: 'Languages', 
          content: ['English', 'Arabic', 'Ironing Speak'] 
        },
        { 
          header: 'Education', 
          content: 'Extreme Sports Academy' 
        },
        { 
          header: 'Expertise', 
          content: ['Ironing', 'Extreme Sports', 'Travel'] 
        },
        { 
          header: 'Marital Status', 
          content: 'Single' 
        },
        { 
          header: 'Pronouns', 
          content: ['He', 'Him'] 
        }
      ]
    }
  },
  {
    id: 'a9',
    title: 'Desert Safari Adventure',
    photo: 'images/landscape.jpg',
    rating: '★★★★★',
    teaser: 'Experience the thrill of the desert!',
    description: 'Embark on an exhilarating journey through the vast deserts of Egypt. Explore sand dunes, ride camels, and witness breathtaking sunsets.',
    itinerary: {
      intro: 'Discover the wonders of the desert with our expert guides.',
      schedule: '<ol><li>Camel Ride through the Desert</li><li>Sandboarding on Dunes</li><li>Traditional Bedouin Dinner</li></ol>'
    },
    length: '6 hours',
    start: '07/01/2024',
    end: '12/31/2024',
    location: 'Luxor, Egypt',
    price: '$120.00',
    guide: {
      name: 'Desert Dan',
      info: [
        { header: 'Languages', content: ['English', 'Arabic'] },
        { header: 'Education', content: 'Desert Exploration School' },
        { header: 'Expertise', content: ['Desert Travel', 'Camel Riding', 'Sandboarding'] },
        { header: 'Marital Status', content: 'Married' },
        { header: 'Pronouns', content: ['He', 'Him'] }
      ]
    }
  },
  {
    id: 'b1',
    title: 'Nile River Cruise',
    photo: 'images/landscape.jpg',
    rating: '★★★★',
    teaser: 'Sail down the historic Nile River!',
    description: 'Relax and enjoy a leisurely cruise along the iconic Nile River. Experience the beauty of ancient temples, bustling cities, and picturesque landscapes.',
    itinerary: {
      intro: 'Explore Egypt\'s rich history and vibrant culture from the comfort of a luxury cruise ship.',
      schedule: '<ol><li>Visit Luxor and Karnak Temples</li><li>Explore the Valley of the Kings</li><li>Sail to Aswan and visit Philae Temple</li></ol>'
    },
    length: '3 days',
    start: '08/01/2024',
    end: '12/31/2024',
    location: 'Aswan, Egypt',
    price: '$350.00',
    guide: {
      name: 'Nile Nadia',
      info: [
        { header: 'Languages', content: ['English', 'Arabic'] },
        { header: 'Education', content: 'Egyptology Institute' },
        { header: 'Expertise', content: ['History', 'Archaeology', 'Cruise Hosting'] },
        { header: 'Marital Status', content: 'Single' },
        { header: 'Pronouns', content: ['She', 'Her'] }
      ]
    }
  },
];

export {
	tours
}