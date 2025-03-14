(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    const navbarToggler = document.getElementById("navbarToggler");
    const navMenu = document.getElementById("navbarCollapse"); // ID diperbarui sesuai HTML
  
    if (navbarToggler && navMenu) {
      navbarToggler.addEventListener("click", function () {
        navMenu.classList.toggle("hidden");
        navMenu.classList.toggle("opacity-100");
        navMenu.classList.toggle("max-h-screen"); // Tambahan agar menu bisa terlihat dengan baik
      });
    }
  });
  
  

  // === Fix: Math.easeInOutQuad dideklarasikan lebih awal
  Math.easeInOutQuad = function (t, b, c, d) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
  };

  // Sticky Header
  window.onscroll = function () {
    const ud_header = document.querySelector(".ud-header");
    if (!ud_header) return; // === Fix: Pastikan elemen ada sebelum akses

    const sticky = ud_header.offsetTop;
    const logo = document.querySelector(".header-logo");

    if (window.pageYOffset > sticky) {
      ud_header.classList.add("sticky");
      if (logo) logo.src = "images/logo/image-nonwhite.png";
    } else {
      ud_header.classList.remove("sticky");
      if (logo) logo.src = "images/logo/images (1).png";
    }

    const backToTop = document.querySelector(".back-to-top");
    if (backToTop) {
      backToTop.style.display =
        document.documentElement.scrollTop > 50 ? "flex" : "none";
    }
  };

  // Back to Top
  function scrollTo(element, to = 0, duration = 500) {
    const start = element.scrollTop;
    const change = to - start;
    const increment = 20;
    let currentTime = 0;

    function animateScroll() {
      currentTime += increment;
      element.scrollTop = Math.easeInOutQuad(currentTime, start, change, duration);

      if (currentTime < duration) {
        setTimeout(animateScroll, increment);
      }
    }

    animateScroll();
  }

  const backToTopButton = document.querySelector(".back-to-top");
  if (backToTopButton) {
    backToTopButton.onclick = () => scrollTo(document.documentElement);
  }

  // Theme Switcher
  document.addEventListener("DOMContentLoaded", function () {
    const themeSwitcher = document.getElementById("themeSwitcher");

    const userTheme = localStorage.getItem("theme");
    const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

    function themeCheck() {
      if (userTheme === "dark" || (!userTheme && systemTheme)) {
        document.documentElement.classList.add("dark");
      }
    }

    function themeSwitch() {
      if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
      } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("theme", "dark");
      }
    }

    if (themeSwitcher) {
      themeSwitcher.addEventListener("click", themeSwitch);
    }

    themeCheck();
  });
})();
