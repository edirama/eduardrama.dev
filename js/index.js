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

// Form style
const labels = document.querySelectorAll('.label')
const inputs = document.querySelectorAll('.input')
const textarea = document.querySelector('.textarea')
const textareaLabel = document.querySelector('.textarea--label')

for (let i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('focus', function () {
    labels[i].classList.add('label--active')
  })
  inputs[i].addEventListener('focusout', function () {
    labels[i].classList.remove('label--active')
  })
}

textarea.addEventListener('focus', function () {
  textareaLabel.classList.add('textarea--active')
})
