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

  const tripCards = filteredTourData.map((tour) => {
  	const tripData = tripsList.find((trip) => trip.tourId === tour.id)
  	return `
  	<section class='confirmed-trips' data-id='${tour.id}'>
    	<section class='trip-content'>
 	   	<inner-column>
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
			      	<h3>${tour.location}</h3>
			      </li>
			      <li>
			      	<h3>${tour.guide.name}</h3>
			      </li>
			      <li>
			      	<h3>${tripData.startDate} - ${tripData.endDate}</h3>
			      </li>
			   </ul>
			</inner-column>
		</section>
		<section>
			<inner-column>
				<ul class='further-actions'>
			      <button type='button' data-action='view-detail'>More Details</button>
			      <button type='button' data-action='cancel'>Cancel Trip</button>
			  	</ul>
			</inner-column>
		</section>
	</section>
  		`}).join('');
	
	attachDetailEventListener();

	main.innerHTML += tripCards;
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

export {
	getTripsListView
}