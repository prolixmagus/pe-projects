import { generateList } from './find-a-guide.js'
import { tours } from './data.js'
import { attachDetailEventListener } from './tour-detail.js'
import { getCurrentUserData } from './login.js'
   
function getTourSearchView(container) {
  const main = document.querySelector('main');
  container.innerHTML = ``

  container.innerHTML += `
  <section class='tour-search-page'>
    <inner-column>

      <form class='search'>
        <field>
          <label>Where are you going?</label>
          <input id='location' type='text' placeholder='Enter location' required>
        </field>
        <field>
          <label>What do you want to do?</label>
          <input id='activity' type='text' placeholder='Enter an activity'>
        </field>
        <field class='guests'>
          <label>Guests:</label>
          <input id='guests' type='number' placeholder='Enter number of guests' min='1'>
        </field>

        <button type='submit' data-set='tour-search'>Search</button>
      </form>
    </inner-column>
  </section>
  <section class='tour-results'>
      <inner-column>
      </inner-column>
  </section>
  `

  renderTourCards(tours, main);
  handleSearch(tours);
  attachSearchEventListener();
}

function renderTourCards(tours) {
  const allTours = tours.map((tour) => `
  <section class='tour-card' data-id='${tour.id}'>
      <figure>
        <picture>
          <img src='${tour.photo}'>
        </picture>
        <p>${tour.rating}</p>
      </figure>
      <h2>${tour.title}</h2>
      <h3 class='subtitle'>${tour.location}</h3>
      <p class='tour-price subtitle'>${tour.price} per person</p>
      <p>${tour.teaser}</p>
      <button type='button' data-action='view-detail'>Let's go!</button>
  </section>
  `).join('');

  const tourResults = document.querySelector('.tour-results inner-column')
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
  attachDetailEventListener();
}

function getTourResults(tours) {
  // const inputStartDate = new Date(document.querySelector('#start-date').value);
  // const inputEndDate = new Date(document.querySelector('#end-date').value);
  const inputLocation = document.querySelector('#location').value.toLowerCase();
  const inputActivity = document.querySelector('#activity').value.toLowerCase();

  return tours.filter((tour) => {
    // const startDate = new Date(tour.start);
    // const endDate = new Date(tour.end);
    const location = tour.location.toLowerCase();
    const activity = tour.description.toLowerCase();

    //creating a range for the dates to fall in or non-opp

    // const startDateMatch = isNaN(inputStartDate) || inputStartDate <= endDate
    // const endDateMatch = isNaN(inputStartDate) || inputEndDate >= startDate
    const locationMatch = location.includes(inputLocation);
    const activityMatch = activity.includes(inputActivity);

    return locationMatch && activityMatch; /* endDateMatch && startDateMatch */
  })

}

function handleGuestInput(guests) {
    const guestField = document.querySelector('.guests');
    let numberOfGuests = parseInt(guests.value);
    if (numberOfGuests >= 1) {
      numberOfGuests = guests.value;
    } else if (numberOfGuests <= 0) {
      guestField.innerHTML = `
          <label>Guests:</label>
          <input id='guests' type='number' placeholder='Enter number of guests' min='1'>
          <p>Minimum of 1 guest</p>
          `
    }
    return numberOfGuests;
}

function handleSearch(event) {
    storeCurrentSearchInformation();
    const filteredTours = getTourResults(tours);
    renderTourCards(filteredTours);
}

function storeCurrentSearchInformation() {
    const currentUserData = getCurrentUserData()
    // const inputStartDate = document.querySelector('#start-date').value;
    // const inputEndDate = document.querySelector('#end-date').value;
    const inputGuests = document.querySelector('#guests');
    const numberOfGuests = handleGuestInput(inputGuests);
    currentUserData['searchData'] = { guests: numberOfGuests }; // startDate: inputStartDate, endDate: inputEndDate,
    localStorage.setItem('currentUser', JSON.stringify(currentUserData));
}

function attachSearchEventListener() {
  window.addEventListener('click', (event) => {
    if (event.target.matches('[data-set="tour-search"]') ) {
      event.preventDefault();
      handleSearch(event, tours);
    }
  });
}

export {
  getTourSearchView,
}

//date fields
        // <div class='tour-dates'>
        //   <field class='startDate'>
        //     <label>From:</label>
        //     <input id='start-date' type='date' placeholder='mm/dd/yyyy'>
        //   </field>
        //   <field class='endDate'>
        //     <label>To:</label>
        //     <input id='end-date' type='date' placeholder='mm/dd/yyyy'>
        //   </field>
        // </div>