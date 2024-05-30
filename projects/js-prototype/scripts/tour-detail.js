import { tours } from './data.js'
import { generateList, scrollToTop } from './find-a-guide.js'
import { handleRenderPaymentView} from './payment.js'
import { deleteTrip, renderTripCards, getConfirmedToursList } from './trips.js'

function getTourById(tours, id) {
  return tours.find((tour) => tour.id === id);
}

function renderTourDetailView(tour) {
  const main = document.querySelector('main');
  main.innerHTML = ``
  main.innerHTML += `<section class='tour-detail' data-id='${tour.id}'></section>`
  const tourDetail = document.querySelector('.tour-detail');
  tourDetail.innerHTML += renderTourDetailCard(tour);
  tourDetail.innerHTML += renderTourGuideCard(tour);
  scrollToTop();
}

function renderTourDetailCard(tour) {
  return `
    <section class='tour-intro'>
      <inner-column>
      <h2>${tour.title}</h2>
      <picture>
        <img src='${tour.photo}'>
      </picture>
      <p>${tour.rating}</p>
      <p>${tour.teaser}</p>
      </inner-column>
    </section>

    <section class='itinerary' data-id='${tour.id}'>
      <inner-column>
        <h2>Itinerary</h2>
        <p>Length: ${tour.length}</p>
        <p>${tour.itinerary.intro}</p>
        ${tour.itinerary.schedule}
        <button type='button' data-action='book-tour'>Book Tour</button>
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
          ${renderGuideDetails(tour.guide.info)}
        </ul>
        <button type='button' data-action='message-guide'>Message Guide</button>
      </inner-column>
    </section>
    `
}

function renderGuideDetails(info) {
  return info.map((item) => {
    if ( Array.isArray(item.content) ) {
      return `
      <li>
        <h3><strong>${item.header}</strong></h3>
        <ul>
          ${generateList(item.content)}
        </ul>
      </li>
      `
    } else {
      return `
      <li>
        <h3><strong>${item.header}</strong></li>
        <ul>
          <li>${item.content}</li>
        </ul>
      </li>
      `
    }
  }).join('');
}

function handleRenderTourDetail(event, tours) {
  const sectionId = event.target.closest('section[data-id]').getAttribute('data-id');
  const foundTour = getTourById(tours, sectionId)
  renderTourDetailView(foundTour);
}

function attachDetailEventListener() {
  window.addEventListener('click', (event) => {
    if (event.target.matches('[data-action="view-detail"]') ) {
      event.preventDefault();
      handleRenderTourDetail(event, tours);
    }

    if (event.target.matches('[data-action="cancel-trip"]') ) {
      const tripIdToDelete = event.target.closest('section[data-id]').getAttribute('data-id');
      deleteTrip(tripIdToDelete)
      renderTripCards(getConfirmedToursList(), tours);
    }
  })
}

export {
  attachDetailEventListener,
  getTourById,
  renderTourDetailView
}