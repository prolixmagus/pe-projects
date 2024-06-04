import { tours } from './data.js'
import { getTourById, attachDetailEventListener } from './tour-detail.js'
import { getCurrentUserData, getUserData } from './login.js'

function getConfirmedToursList() {
	const currentUser = getCurrentUserData();
	const userData = getUserData(currentUser.username);
	const tripsList = userData.confirmedTours || [];
	return tripsList;
}

function renderTripCards(tripsList, tours) {
	const main = document.querySelector('main');
	main.innerHTML = ``;

	//since the data is key-value pairs, need to use .some() instead of .includes()

	const filteredTourData = tours.filter((tour) => {
			return tripsList.some((trip) => trip.tourId === tour.id);
	});

	//filter is for retrieving multiple tours that meet a condition
	//find is to get the specific data for tha tour
	if (filteredTourData.length === 0) {
		main.innerHTML += `
		<section class='confirmed-trips'>
			<inner-column>
				<h2>No trips booked!</h2>
				<button type='button' data-link='search'>Search Tours</button>
			</inner-column>
		</section>
		`
	} else {
   	const tripCards = filteredTourData.map((tour) => {
  		const tripData = tripsList.find((trip) => trip.tourId === tour.id)
  		return `
		  	<section class='confirmed-trips' data-id='${tour.id}'>
		  		<inner-column>
			    	<section class='trip-content'>
				    	<div>
					      <figure>
					        <picture>
					          <img src='${tour.photo}'>
					        </picture>
					      </figure>
					      <ul class='trip-details'>
						      <li>
						      	<h2>${tour.title}</h2>
						      </li>
						      <li>
						      	<h3 class='subtitle'>${tour.location}</h3>
						      </li>
						      <li>
						      	<h3 class='subtitle'>${tour.guide.name}</h3>
						      </li>
						      <li>
						      	<h3>${tripData.startDate} -- ${tripData.endDate}</h3>
						      </li>
						   </ul>
						 </div>
						 <ul class='further-actions'>
							<button type='button' data-action='view-detail'>More Details</button>
				 			<button type='button' data-action='cancel-trip'>Cancel Trip</button>
						</ul>
					</section>
				</inner-column>
			</section>
		  		`}).join('');
	
			attachDetailEventListener();

			main.innerHTML += tripCards;
	}
}

function getTripsListView(container) {
	const main = document.querySelector('main');
  	container.innerHTML = ``

  	container.innerHTML += `
  	<section>
  		<inner-column>
  			<h2>Booked Trips</h2>
  		</inner-column>
  	</section>
  	`
  	renderTripCards(getConfirmedToursList(), tours);
}

function deleteTrip(tripId) {
	const currentUser = getCurrentUserData();
	const userData = getUserData(currentUser.username);
	let tripsList = userData.confirmedTours
		const filteredArray = tripsList.filter((trip) => trip.tourId != tripId);
		userData.confirmedTours = filteredArray;
		localStorage.setItem(userData.username, JSON.stringify(userData))
}

export {
	getTripsListView,
	deleteTrip,
	renderTripCards,
	getConfirmedToursList
}