document.addEventListener('DOMContentLoaded', function() {
    const startingTime = document.querySelector('.present-day');
    const offsetPercentage = 20;

    if (startingTime) {
    	const offset = (window.innerWidth / 100) * offsetPercentage;
      const timelineWrapper = document.querySelector('.timeline-wrapper');

      if (timelineWrapper) {
      	 startingTime.scrollIntoView({behavior: 'auto'});

          timelineWrapper.scrollBy({ left: -offset, behavior: 'auto' });

          window.scrollTo({top: window.scrollTo(0, 0)})
      };
    }
});