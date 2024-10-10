import { tours } from "./data.js";
import { generateList, scrollToTop } from "./find-a-guide.js";
import { deleteTrip, renderTripCards, getConfirmedToursList } from "./trips.js";
import { getInboxView } from "./site-header.js";

function getTourById(tours, id) {
    return tours.find((tour) => tour.id === id);
}

function renderTourDetailView(tour) {
    const main = document.querySelector("main");
    main.innerHTML = ``;
    main.innerHTML += `
  <section class='tour-detail' data-id='${tour.id}'>
    <inner-column>
    </inner-column>
  </section>`;
    const tourDetail = document.querySelector(".tour-detail inner-column");
    tourDetail.innerHTML += renderTourDetailCard(tour);
    tourDetail.innerHTML += renderTourGuideCard(tour);
    scrollToTop();
}

function renderTourDetailCard(tour) {
    return `
    <section class='tour-card card-detail' data-id='${tour.id}'>
      <h2>${tour.title}</h2>
      <figure>
        <picture>
          <img src='${tour.photo}'>
        </picture>
        <p>${tour.rating}</p>
      </figure>
      <h3 class='subtitle'>${tour.location}</h3>
      <p class='tour-price subtitle'>${tour.price} per person</p>
      <p>${tour.teaser}</p>
    </section>

    <section class='itinerary' data-id='${tour.id}'>
      <h2>Itinerary</h2>
      <p class='subtitle'>Length: ${tour.length}</p>
      <p>${tour.itinerary.intro}</p>
      ${tour.itinerary.schedule}
      <button type='button' data-action='book-tour'>Book Tour</button>
    </section>
    `;
}

function renderTourGuideCard(tour) {
    return `
    <section class='guide'>
      <div class='guide-card'>
        <h2>Meet Your Guide</h2>

        <section class='guide-intro'>
          <div class='temp-icon profile-holder'>
            <svg viewBox='0 0 10 10'>
              <circle cx='5' cy='5' r='5' />
            </svg>
          </div>
          <h3>${tour.guide.name}</h3>
        </section>

        <ul class='guide-details'>
          ${renderGuideDetails(tour.guide.info)}
        </ul>
        <button type='button' data-action='message-guide'>Message</button>
      </div>
    </section>
    `;
}

function renderGuideDetails(info) {
    return info
        .map((item) => {
            if (Array.isArray(item.content)) {
                return `
      <li>
        <h3><strong>${item.header}</strong></h3>
        <ul>
          ${generateList(item.content)}
        </ul>
      </li>
      `;
            } else {
                return `
      <li>
        <h3><strong>${item.header}</strong></li>
        <ul>
          <li>${item.content}</li>
        </ul>
      </li>
      `;
            }
        })
        .join("");
}

function handleRenderTourDetail(event, tours) {
    const sectionId = event.target
        .closest("section[data-id]")
        .getAttribute("data-id");
    const foundTour = getTourById(tours, sectionId);
    renderTourDetailView(foundTour);
}

function attachDetailEventListener() {
    window.addEventListener("click", (event) => {
        if (event.target.matches('[data-action="view-detail"]')) {
            event.preventDefault();
            handleRenderTourDetail(event, tours);
        }

        if (event.target.matches('[data-action="cancel-trip"]')) {
            const tripIdToDelete = event.target
                .closest("section[data-id]")
                .getAttribute("data-id");
            deleteTrip(tripIdToDelete);
            renderTripCards(getConfirmedToursList(), tours);
        }

        if (event.target.matches('[data-action="message-guide"]')) {
            const main = document.querySelector("main");
            getInboxView(main);
        }
    });
}

export { attachDetailEventListener, getTourById, renderTourDetailView };
