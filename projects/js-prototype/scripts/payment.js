import { getCurrentUserData, getUserData } from './login.js'
import { tours } from './data.js'
import { getTourById } from './tour-detail.js'

function renderPaymentView(tour, userData) {
	const main = document.querySelector('main');
	main.innerHTML = ``
	main.innerHTML += `<section class='receipt' data-id ='${tour.id}'</section>`;
	const guests = userData.searchData.guests || 1;
	const startDate = userData.searchData.startDate || 'N/A';
	const endDate = userData.searchData.endDate || 'N/A';
	const price = parseFloat(tour.price.replace('$', ''));
	const receipt = document.querySelector('.receipt');
	receipt.innerHTML += `
		<section class='payment-details'>
			<inner-column>
				<h2>Payment Details</h2>
				<ul>
					<li>
						<h3><strong>Tour Name</strong></h3>
						<h4>${tour.title}</h4>
					</li>
					<li>
						<h3><strong>Location</strong></h3>
						<h4>${tour.location}</h4>
					</li>
					<li>
						<h3><strong>Guide Name</strong></h3>
						<h4>${tour.guide.name}</h4>
					</li>
					<li>
						<h3><strong>Tour Dates</strong></h3>
						<h4>${startDate} - ${endDate}</h4>
					</li>
					<li>
						<h3><strong>Guests</strong></h3>
						<h4>${guests}</h4>
					</li>
					<li>
						<h3><strong>Price Per Person</strong></h3>
						<h4>$${price}</h4>
					</li>
				</ul>
			</inner-column>
		</section>
		<section class='disclaimer'>
			<inner-column>
				<h2>Disclaimer</h2>
				<p><strong>Please have all required travel documents ready, as well as required vaccines.</strong></p>
				<p>If you have any speciic requests, dietary restrictions, or questions about your trip, you can message your guide after confirming the booking</p>
			</inner-column>
		</section>
		<section class='total-payment'>
			<inner-column>
				<h2>Total: $${calculatePayment(guests, price)}</h2>
				<button type='button' data-action='confirm-booking'>Confirm booking</button>
			</inner-column>
		</section>
	`

}

function calculatePayment(guests, price) {
	guests = guests || 1;
	const totalPayment = parseFloat(guests) * price;
	return totalPayment.toFixed(2);
}

function renderConfirmationSection(tour) {
	const receipt = document.querySelector('.receipt');
	receipt.innerHTML += `
	<section class='confirmation'>
		<inner-column>
			<h2>Booking Complete!</h2>
			<p>Enjoy your trip!</p>
			<ul class='further-actions'>
				<li>
					<button type='button'>View Your Trips</button>
				</li>
				<li>
					<button type='button'>Message Guide</button>
				</li>
			</ul>
		</inner-column>
	</section>
	`
}

function handleRenderConfirmationSection(event, tours) {
    const sectionId = event.target.closest('section[data-id]').getAttribute('data-id');
    const foundTour = getTourById(tours, sectionId);
    saveConfirmedTrip(sectionId);
    renderConfirmationSection();
}

function saveConfirmedTrip(tourId) {
	const currentUser = getCurrentUserData();
	const userData = getUserData(currentUser.username);
	userData.confirmedTrips = userData.confirmedTrips || [];
	userData.confirmedTrips.push(tourId);
	localStorage.setItem(userData.username, JSON.stringify(userData));
}

function handleRenderPaymentView(event, tours) {
	const sectionId = event.target.closest('section[data-id]').getAttribute('data-id');
	const foundTour = getTourById(tours, sectionId);
	const currentUserData = getCurrentUserData('currentUser');
	renderPaymentView(foundTour, currentUserData);
}

window.addEventListener('click', (event) => {
	if (event.target.matches('[data-action="book-tour"]')) {
		event.preventDefault();
      handleRenderPaymentView(event, tours);
   }

   if (event.target.matches('[data-action="confirm-booking"]')) {
		event.preventDefault();
      handleRenderConfirmationSection(event, tours);
   }
})


export {
	handleRenderPaymentView
}