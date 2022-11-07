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

document.addEventListener('scroll', function (e) {
  scrollY > 740
    ? navBar.classList.add('sticky')
    : navBar.classList.remove('sticky')
})

for (let i = 0; i > navBarLinks.length; i++) {
  navBarLinks[i].addEventListener('click', toggleNavBar)
}
