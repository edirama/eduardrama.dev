// NavBar
const headerBars = document.querySelector('.header--bars')
const navbarList = document.querySelector('.navbar--list')
const navBar = document.querySelector('#navbar')
const navBarLinks = document.querySelectorAll('.navbar--link')

const toggleNavBar = function () {
  headerBars.classList.toggle('active')
  navbarList.classList.toggle('navbar--active')
}

headerBars.addEventListener('click', toggleNavBar)

navBarLinks.forEach(item => {
  item.addEventListener('click', toggleNavBar)
})

// Header-Section scroll img
const meImg = document.querySelector('#meImg')
const headerSection = document.querySelector('.header--section')
const headerContentHeading = document.querySelector('.header--content-heading')
const headerContentParagraph = document.querySelector(
  '.header--content-paragraph'
)
const readMore = document.querySelector('.read--more')
const navbar = document.querySelector('.navbar')

document.addEventListener('scroll', function (e) {
  const value = window.scrollY

  value > headerSection.clientHeight - navbar.clientHeight
    ? navBar.classList.add('sticky')
    : navBar.classList.remove('sticky')

  meImg.style.top = value * 0.4 + 'px'
  headerContentHeading.style.left = value * 1.25 + 'px'
  headerContentParagraph.style.left = value * 1 + 'px'
  readMore.style.left = value * 0.75 + 'px'

  if (window.innerWidth <= 430) {
    headerContentHeading.style.bottom = value * 1.25 + 'px'
    headerContentParagraph.style.bottom = value * 1 + 'px'
    readMore.style.bottom = value * 0.75 + 'px'
  } else {
    headerContentHeading.style.top = value * 0.7 + 'px'
    headerContentParagraph.style.top = value * 0.7 + 'px'
    readMore.style.top = value * 0.7 + 'px'
  }
})

for (let i = 0; i > navBarLinks.length; i++) {
  navBarLinks[i].addEventListener('click', toggleNavBar)
}

// Slider
const slider = function () {
  const slides = document.querySelectorAll('.slide')
  const btnLeft = document.querySelector('.slider__btn--left')
  const btnRight = document.querySelector('.slider__btn--right')
  const dotContainer = document.querySelector('.dots')

  let curSlide = 0
  const maxSlide = slides.length

  // Functions
  const createDots = function () {
    slides.forEach(function (_, i) {
      dotContainer.insertAdjacentHTML(
        'beforeend',
        `<button class="dots__dot" data-slide="${i}"></button>`
      )
    })
  }

  const activateDot = function (slide) {
    document
      .querySelectorAll('.dots__dot')
      .forEach(dot => dot.classList.remove('dots__dot--active'))

    document
      .querySelector(`.dots__dot[data-slide='${slide}']`)
      .classList.add('dots__dot--active')
  }

  const goToSlide = function (slide) {
    slides.forEach(
      (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
    )
  }

  // Next slide
  const nextSlide = function () {
    if (curSlide === maxSlide - 1) {
      curSlide = 0
    } else {
      curSlide++
    }
    goToSlide(curSlide)
    activateDot(curSlide)
  }

  const prevSlide = function () {
    if (curSlide === 0) {
      curSlide = maxSlide - 1
    } else {
      curSlide--
    }
    goToSlide(curSlide)
    activateDot(curSlide)
  }

  const init = function () {
    goToSlide(0)
    createDots()
    activateDot(0)
  }
  init()

  // Event handlers
  btnRight.addEventListener('click', nextSlide)
  btnLeft.addEventListener('click', prevSlide)

  dotContainer.addEventListener('click', function (e) {
    if (e.target.classList.contains('dots__dot')) {
      const { slide } = e.target.dataset
      goToSlide(slide)
      activateDot(slide)
    }
  })
}
slider()
