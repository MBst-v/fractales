(function() {
  headerAnimation()
  sectionAnimations()

  function headerAnimation() {
    const heroTitle = document.querySelector('.hero__title')
    const heroBottom = document.querySelector('.hero__bottom')
  
    setTimeout(() => {
      heroTitle.classList.add('activated')
      heroBottom.classList.add('activated')
    }, 200);
  }

  function sectionAnimations() {
    const sectionTitles = document.querySelectorAll('.sect__title')
    const cases = document.querySelectorAll('.case-preview')
    const services = document.querySelectorAll('.service')

    window.addEventListener('scroll', () => {
      sectionTitles.forEach(title => {
        if (isInViewport(title)) {
          title.classList.add('loaded')
        }
      })
      cases.forEach(caseItem => {
        if (isInViewport(caseItem)) {
          caseItem.classList.add('loaded')
        }
      })
      services.forEach(service => {
        if (isInViewport(service)) {
          service.classList.add('loaded')
        }
      })
    })
  }
})();
(function () {
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabBtns.forEach((btn) => {
    btn.addEventListener('click', (e) => {
      const tabName = e.target.dataset.tab;

      clearTabBtnsActiveClass();
      hideTabs();
      e.target.classList.add('active');
      document.querySelector(`[data-tabname="${tabName}"]`).classList.add('active');
    });
  });

  function clearTabBtnsActiveClass() {
    tabBtns.forEach((btn) => btn.classList.remove('active'));
  }

  function hideTabs() {
    tabContents.forEach((tab) => tab.classList.remove('active'));
  }
})();

(function() {
  if (window.matchMedia('(max-width: 767.98px)').matches) {
    const steps = new Swiper('.about__steps', {
      pagination: {
        el: '.about__steps-pagination',
        bulletClass: 'dot',
        bulletActiveClass: 'active',
        clickable: true,
      },
    })
  }

  const teamSlider = new Swiper('.about__team', {
    speed: 700,
    spaceBetween: 20,
    slidesPerView: 1.2,
    slideActiveClass: 'active',
    grabCursor: true,
    navigation: {      
      nextEl: '.about__team-nav .arrow-next',
      prevEl: '.about__team-nav .arrow-prev',
    },
    mousewheel: {
      forceToAxis: true,
    },
    breakpoints: {
      767.98: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      1023.98: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1279.98: {
        slidesPerView: 2,
        spaceBetween: 40,
      }
    }
  })
})();