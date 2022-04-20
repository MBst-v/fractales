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