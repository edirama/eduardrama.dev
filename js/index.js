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

document.addEventListener('scroll', function (e) {
  const value = window.scrollY

  value > headerSection.clientHeight - 1
    ? navBar.classList.add('sticky')
    : navBar.classList.remove('sticky')

  meImg.style.top = value * 0.4 + 'px'
})

for (let i = 0; i > navBarLinks.length; i++) {
  navBarLinks[i].addEventListener('click', toggleNavBar)
}
