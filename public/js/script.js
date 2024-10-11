// TYPE ANIMATION
var typed = new Typed(".auto-type", {
    strings: ["Idaman Recruiter", "Favorit Dosen", "Kesayangan HR"],
    typeSpeed: 150,
    backSpeed: 150,
    loop: true
});


// NUMBER COUNTER ANIMATION

function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }

  // animation only played after user enter the viewport

  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateValue(document.getElementById("numcounter1"), 0, 250, 3000);
            animateValue(document.getElementById("numcounter2"), 0, 70, 3000);
            animateValue(document.getElementById("numcounter3"), 0, 90, 3000);
        }
    });
}, options);

const targets = document.querySelectorAll('.numcounter');
targets.forEach(target => observer.observe(target));

  // marquee for tutor
  function initializeSwiper(selector, slidesPerView) {
    return new Swiper(selector, {
        loop: true,
        autoplay: {
            delay: 0,
        },
        speed: 3000,
        slidesPerView: slidesPerView,
    });
}

initializeSwiper('.sample-slider', 3);
initializeSwiper('.mobile-slider', 2);
// flip
initializeSwiper('.step-slider', 1, 'flip');

// agar besar div sama
window.addEventListener('load', function () {
    const cards = document.querySelectorAll('#card-testimoni');
    const services = document.querySelectorAll('#label-service');

    let maxHeight = 0;
    cards.forEach(card => maxHeight = Math.max(maxHeight, card.offsetHeight));
    cards.forEach(card => card.style.height = maxHeight + 'px');

    let maxHeightLabel = 0;
    services.forEach(service => maxHeightLabel = Math.max(maxHeightLabel, service.offsetHeight));
    services.forEach(service => service.style.height = maxHeightLabel + 'px');
});


