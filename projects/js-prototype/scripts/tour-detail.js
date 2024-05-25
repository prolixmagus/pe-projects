import { tours } from './data.js'
import { generateList } from './find-a-guide.js'

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
          ${renderGuideDetails(tour.guide.info)}
        </ul>
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
  const sectionId = event.target.closest('section').getAttribute('id');
  const foundTour = getTourById(tours, sectionId)
  renderDetailPage(foundTour);
}

function attachDetailEventListener() {
  window.addEventListener('click', (event) => {
    if (event.target.matches('[data-set="detail"]') ) {
      event.preventDefault();
      handleRenderTourDetail(event, tours);
    }
  })
}

export {
  attachDetailEventListener
}