import { renderSiteHeader, renderView } from "./site-header.js";
import { renderSiteFooter } from "./site-footer.js";
import { state, loadState } from "./state.js";
// import { getTripsListView } from './trips.js'

const main = document.querySelector("main");
const body = document.querySelector("body");

function attachTemplate(template) {
    const main = document.querySelector("main");
    return template(main);
}

function generateList(list) {
    return list.map((item) => `<li>${item}</li>`).join("");
}

function initialize() {
    loadState();
    const main = document.querySelector("main");
    main.innerHTML = "";
    renderSiteHeader(main);
    renderView(state.currentView);
    renderSiteFooter(main);
}

function scrollToTop() {
    window.scrollTo(0, 0);
}

function scrollToBottom() {
    window.scrollTo(0, document.body.scrollHeight);
}

// getTripsListView(main);
// switch out while working on styles for pages to address refresh issue

initialize();

export {
    attachTemplate,
    generateList,
    initialize,
    scrollToTop,
    scrollToBottom,
};
