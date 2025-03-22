<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Telkom Akses Semarang - Magang Telkom Akses Semarang
  </title>
  <link
  rel="shortcut icon"
  href="images/image.png"
  type="image/x-icon"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/tailwind.css" />
    <!-- ==== WOW JS ==== -->
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  @vite('resources/css/app.css')
</head>
<body>

    <!-- ====== Navbar Section Start -->
    <div
      class="ud-header absolute left-0 top-0 z-40 flex w-full items-center bg-transparent"
    >
      <div class="container">
        <div class="relative -mx-4 flex items-center justify-between">
          <div class="w-60 max-w-full px-4">
            <a href="/" class="navbar-logo block w-full py-5">
              <img
                src="images/logo/images (1).png"
                alt="logo"
                class="header-logo w-full"
              />
            </a>
          </div>
          <div class="flex w-full items-center justify-between px-4">
            <div>
              <button
                id="navbarToggler"
                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
              >
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
              </button>
              <nav
                id="navbarCollapse"
                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark-2 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6"
              >
                <ul class="blcok lg:flex 2xl:ml-20">
                  <li class="group relative">
                    <a
                      href="#home"
                      class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
                    >
                      Beranda
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#about"
                      class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                    >
                      Tentang
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#program"
                      class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                    >
                      Program
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#testimonials"
                      class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                    >
                      Testimonials
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#faq"
                      class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                    >
                      FAQ
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#form"
                      class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                    >
                      Form
                    </a>
                  </li>
                  <li class="submenu-item group relative">

                  </li>
                </ul>
              </nav>
            </div>
            <div class="flex items-center justify-end pr-16 lg:pr-0">
              <label
                for="themeSwitcher"
                class="inline-flex cursor-pointer items-center mr-5"
                aria-label="themeSwitcher"
                name="themeSwitcher"
              >
                <input
                  type="checkbox"
                  name="themeSwitcher"
                  id="themeSwitcher"
                  class="sr-only"
                />
                <span class="block text-white dark:hidden">
                  <svg
                    class="fill-current"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M13.3125 1.50001C12.675 1.31251 12.0375 1.16251 11.3625 1.05001C10.875 0.975006 10.35 1.23751 10.1625 1.68751C9.93751 2.13751 10.05 2.70001 10.425 3.00001C13.0875 5.47501 14.0625 9.11251 12.975 12.525C11.775 16.3125 8.25001 18.975 4.16251 19.0875C3.63751 19.0875 3.22501 19.425 3.07501 19.9125C2.92501 20.4 3.15001 20.925 3.56251 21.1875C4.50001 21.75 5.43751 22.2 6.37501 22.5C7.46251 22.8375 8.58751 22.9875 9.71251 22.9875C11.625 22.9875 13.5 22.5 15.1875 21.5625C17.85 20.1 19.725 17.7375 20.55 14.8875C22.1625 9.26251 18.975 3.37501 13.3125 1.50001ZM18.9375 14.4C18.2625 16.8375 16.6125 18.825 14.4 20.0625C12.075 21.3375 9.41251 21.6 6.90001 20.85C6.63751 20.775 6.33751 20.6625 6.07501 20.55C10.05 19.7625 13.35 16.9125 14.5875 13.0125C15.675 9.56251 15 5.92501 12.7875 3.07501C17.5875 4.68751 20.2875 9.67501 18.9375 14.4Z"
                    />
                  </svg>
                </span>
                <span class="hidden text-white dark:block">
                  <svg
                    class="fill-current"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g clip-path="url(#clip0_2172_3070)">
                      <path
                        d="M12 6.89999C9.18752 6.89999 6.90002 9.18749 6.90002 12C6.90002 14.8125 9.18752 17.1 12 17.1C14.8125 17.1 17.1 14.8125 17.1 12C17.1 9.18749 14.8125 6.89999 12 6.89999ZM12 15.4125C10.125 15.4125 8.58752 13.875 8.58752 12C8.58752 10.125 10.125 8.58749 12 8.58749C13.875 8.58749 15.4125 10.125 15.4125 12C15.4125 13.875 13.875 15.4125 12 15.4125Z"
                      />
                      <path
                        d="M12 4.2375C12.45 4.2375 12.8625 3.8625 12.8625 3.375V1.5C12.8625 1.05 12.4875 0.637497 12 0.637497C11.55 0.637497 11.1375 1.0125 11.1375 1.5V3.4125C11.175 3.8625 11.55 4.2375 12 4.2375Z"
                      />
                      <path
                        d="M12 19.7625C11.55 19.7625 11.1375 20.1375 11.1375 20.625V22.5C11.1375 22.95 11.5125 23.3625 12 23.3625C12.45 23.3625 12.8625 22.9875 12.8625 22.5V20.5875C12.8625 20.1375 12.45 19.7625 12 19.7625Z"
                      />
                      <path
                        d="M18.1125 6.74999C18.3375 6.74999 18.5625 6.67499 18.7125 6.48749L19.9125 5.28749C20.25 4.94999 20.25 4.42499 19.9125 4.08749C19.575 3.74999 19.05 3.74999 18.7125 4.08749L17.5125 5.28749C17.175 5.62499 17.175 6.14999 17.5125 6.48749C17.6625 6.67499 17.8875 6.74999 18.1125 6.74999Z"
                      />
                      <path
                        d="M5.32501 17.5125L4.12501 18.675C3.78751 19.0125 3.78751 19.5375 4.12501 19.875C4.27501 20.025 4.50001 20.1375 4.72501 20.1375C4.95001 20.1375 5.17501 20.0625 5.32501 19.875L6.52501 18.675C6.86251 18.3375 6.86251 17.8125 6.52501 17.475C6.18751 17.175 5.62501 17.175 5.32501 17.5125Z"
                      />
                      <path
                        d="M22.5 11.175H20.5875C20.1375 11.175 19.725 11.55 19.725 12.0375C19.725 12.4875 20.1 12.9 20.5875 12.9H22.5C22.95 12.9 23.3625 12.525 23.3625 12.0375C23.3625 11.55 22.95 11.175 22.5 11.175Z"
                      />
                      <path
                        d="M4.23751 12C4.23751 11.55 3.86251 11.1375 3.37501 11.1375H1.50001C1.05001 11.1375 0.637512 11.5125 0.637512 12C0.637512 12.45 1.01251 12.8625 1.50001 12.8625H3.41251C3.86251 12.8625 4.23751 12.45 4.23751 12Z"
                      />
                      <path
                        d="M18.675 17.5125C18.3375 17.175 17.8125 17.175 17.475 17.5125C17.1375 17.85 17.1375 18.375 17.475 18.7125L18.675 19.9125C18.825 20.0625 19.05 20.175 19.275 20.175C19.5 20.175 19.725 20.1 19.875 19.9125C20.2125 19.575 20.2125 19.05 19.875 18.7125L18.675 17.5125Z"
                      />
                      <path
                        d="M5.32501 4.125C4.98751 3.7875 4.46251 3.7875 4.12501 4.125C3.78751 4.4625 3.78751 4.9875 4.12501 5.325L5.32501 6.525C5.47501 6.675 5.70001 6.7875 5.92501 6.7875C6.15001 6.7875 6.37501 6.7125 6.52501 6.525C6.86251 6.1875 6.86251 5.6625 6.52501 5.325L5.32501 4.125Z"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0_2172_3070">
                        <rect width="24" height="24" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
              </label>
              <div class="hidden sm:flex">

                <a
                  href="#form"
                  class="signUpBtn rounded-md bg-white bg-opacity-20 px-6 py-2 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark"
                >
                  Lamar Sekarang
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    <div
      id="home"
      class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px] py-16"
    >


      <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
          <div class="w-full px-4">
            <div
              class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center"
              data-wow-delay=".2s"
            >
              <h1
                class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]"
              >
                Ayo Raih Mimpimu dengan Magang di Telkom Akses Semarang
              </h1>
              <p
                class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]"
              >
                Telkom Akses Semarang membuka kesempatan bagi siswa/i dan mahasiswa/i yang
                ingin mengikuti program magang di perusahaan kami. Dengan
                mengikuti program magang di Telkom Akses Semarang, kamu akan
                mendapatkan pengalaman berharga dan ilmu yang bermanfaat.
              </p>
              <ul
                class="mb-10 flex flex-wrap items-center justify-center gap-5"
              >
                <li>

                </li>
                <li>

                </li>
              </ul>
              <div>
                <p class="mb-4 text-center text-base font-medium text-white">
                  Di support langsung oleh
                </p>
                <div
                  class="wow fadeInUp flex items-center justify-center gap-4 text-center"
                  data-wow-delay=".3s"
                >


                <div class="flex items-center space-x-4">
                  <a
                    href="https://www.telkom.co.id/sites"
                    class="text-white/60 duration-300 ease-in-out hover:text-white flex items-center"
                    target="_blank"
                  >
                    <img
                      src="images/hero/telkom-id.png"
                      alt="Telkom Indonesia"
                      class="h-12 object-contain"
                    />
                  </a>
                
                  <a
                    href="https://www.bumn.go.id/"
                    class="text-white/60 duration-300 ease-in-out hover:text-white flex items-center"
                    target="_blank"
                  >
                    <img
                      src="images/hero/bumn.png"
                      alt="BUMN"
                      class="h-10 object-contain"
                    />
                  </a>
                </div>
                






                </div>
              </div>
            </div>
          </div>

          <div class="w-full px-4">
            <div
              class="wow fadeInUp relative z-10 mx-auto max-w-[845px]"
              data-wow-delay=".25s"
            >

              <div class="absolute -left-9 bottom-0 z-[-1]">
                <svg
                  width="134"
                  height="106"
                  viewBox="0 0 134 106"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="1.66667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 1.66667 104)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 16.3333 104)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 31 104)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 45.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 60.3333 104)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 88.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 117.667 104)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 74.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 103 104)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 132 104)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 1.66667 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 16.3333 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 31 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 45.6667 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 60.3333 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 88.6667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 117.667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 74.6667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 103 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 132 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="74.6673"
                    r="1.66667"
                    transform="rotate(-90 1.66667 74.6673)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 1.66667 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 16.3333 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 16.3333 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 31 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 31 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 45.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 45.6667 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 60.3333 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 60.3333 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 88.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 88.6667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 117.667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 117.667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 74.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 74.6667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 103 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 103 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 132 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 132 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 1.66667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 1.66667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 16.3333 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 16.3333 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 31 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 31 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 45.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 45.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 60.3333 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 60.3333 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 88.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 88.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 117.667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 117.667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 74.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 74.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 103 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 103 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 132 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 132 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 1.66667 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 1.66667 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 16.3333 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 16.3333 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 31 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 31 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 45.6667 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 45.6667 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 60.3333 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 60.3333 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 88.6667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 88.6667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 117.667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 117.667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 74.6667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 74.6667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 103 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 103 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 132 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 132 1.66707)"
                    fill="white"
                  />
                </svg>
              </div>
              <div class="absolute -right-6 -top-6 z-[-1]">
                <svg
                  width="134"
                  height="106"
                  viewBox="0 0 134 106"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="1.66667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 1.66667 104)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 16.3333 104)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 31 104)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 45.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 60.3333 104)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 88.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 117.667 104)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 74.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 103 104)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 132 104)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 1.66667 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 16.3333 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 31 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 45.6667 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 60.3333 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 88.6667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 117.667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 74.6667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 103 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 132 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="74.6673"
                    r="1.66667"
                    transform="rotate(-90 1.66667 74.6673)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 1.66667 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 16.3333 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 16.3333 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 31 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 31 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 45.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 45.6667 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 60.3333 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 60.3333 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 88.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 88.6667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 117.667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 117.667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 74.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 74.6667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 103 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 103 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 132 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 132 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 1.66667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 1.66667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 16.3333 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 16.3333 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 31 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 31 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 45.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 45.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 60.3333 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 60.3333 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 88.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 88.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 117.667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 117.667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 74.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 74.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 103 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 103 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 132 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 132 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 1.66667 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 1.66667 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 16.3333 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 16.3333 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 31 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 31 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 45.6667 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 45.6667 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 60.3333 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 60.3333 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 88.6667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 88.6667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 117.667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 117.667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 74.6667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 74.6667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 103 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 103 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 132 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 132 1.66707)"
                    fill="white"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== About Section Start -->
    <section
      id="about"
      class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]"
    >
      <div class="container">
        <div class="wow fadeInUp" data-wow-delay=".2s">
          <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4 lg:w-1/2">
              <div class="mb-12 max-w-[540px] lg:mb-0">
                <h2
                  class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]"
                >
                  Get To Know About Us
                </h2>
                <h2
                  class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]"
                >
                PT. Telkom Akses Semarang
                </h2>
                <p
                  class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6"
                >
                Telkom Akses merupakan anak perusahaan PT Telkom Indonesia Tbk.

Kami merupakan anak perusahaan PT Telkom Indonesia Tbk dan berdiri sejak tanggal 12 Desember 2012. Kami memiliki expertise secara end to end dalam value chain mulai tahap perencanaan, pembangunan hingga operasi dan pemeliharaan. Coverage area kami menjangkau operasi secara nasional dalam mendukung percepatan penetrasi jaringan broadband di Indonesia. Telkom Akses memiliki portfolio yaitu: 

                  <br />
                  <ul class="text-body-color dark:text-dark-6">
                    <li>a. Survey, Drawing, dan Data Inventory</li>
                    <li>b. Pembangunan Jaringan</li>
                    <li>c. Layanan Pasang Baru</li>
                    <li>d. Operasi dan Pemeliharaan Jaringan</li>
                    <li>e. Jasa Layanan Operasi</li>
                  </ul>
                </p>


              </div>
            </div>

            <div class="w-full px-4 lg:w-1/2">
              <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div
                    class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]"
                  >
                    <img
                      src="./images/about/about-image-02.jpg"
                      alt="about image"
                      class="h-full w-full object-cover object-center"
                    />
                  </div>
                </div>

                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div
                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]"
                  >
                    <img
                      src="./images/about/about-image-01.jpg"
                      alt="about image"
                      class="h-full w-full object-cover object-center"
                    />
                  </div>

                  <div
                    class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8"
                  >
                    <div>

                      <span class="block text-base font-semibold text-white">
                        Kami telah berpengalaman
                      </span>
                      <span id="experience-years" class="block text-5xl font-extrabold text-white">
                        12
                      </span>
                      <span class="block text-base font-medium text-white text-opacity-70">
                        Tahun lebih
                      </span>
                      
                      <script>
                        // Tanggal berdiri perusahaan
                        const tanggalBerdiri = new Date(2012, 12, 12); // Bulan dalam JavaScript mulai dari 0, jadi 11 = Desember
                        const sekarang = new Date();
                        
                        let pengalaman = sekarang.getFullYear() - tanggalBerdiri.getFullYear();
                      
                        // Cek apakah ulang tahun perusahaan sudah terjadi di tahun ini atau belum
                        const belumUlangTahun = (sekarang.getMonth() < tanggalBerdiri.getMonth()) || 
                                                (sekarang.getMonth() === tanggalBerdiri.getMonth() && sekarang.getDate() < tanggalBerdiri.getDate());
                      
                        if (belumUlangTahun) {
                          pengalaman -= 1; // Kurangi 1 jika ulang tahun belum terjadi tahun ini
                        }
                      
                        // Menampilkan hasil ke dalam elemen dengan id "experience-years"
                        document.getElementById("experience-years").textContent = pengalaman;
                      </script>
                      
                    </div>
                    <div>
                      <span class="absolute left-0 top-0 -z-10">
                        <svg
                          width="106"
                          height="144"
                          viewBox="0 0 106 144"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            opacity="0.1"
                            x="-67"
                            y="47.127"
                            width="113.378"
                            height="131.304"
                            transform="rotate(-42.8643 -67 47.127)"
                            fill="url(#paint0_linear_1416_214)"
                          />
                          <defs>
                            <linearGradient
                              id="paint0_linear_1416_214"
                              x1="-10.3111"
                              y1="47.127"
                              x2="-10.3111"
                              y2="178.431"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop stop-color="white" />
                              <stop
                                offset="1"
                                stop-color="white"
                                stop-opacity="0"
                              />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                      <span class="absolute right-0 top-0 -z-10">
                        <svg
                          width="130"
                          height="97"
                          viewBox="0 0 130 97"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            opacity="0.1"
                            x="0.86792"
                            y="-6.67725"
                            width="155.563"
                            height="140.614"
                            transform="rotate(-42.8643 0.86792 -6.67725)"
                            fill="url(#paint0_linear_1416_215)"
                          />
                          <defs>
                            <linearGradient
                              id="paint0_linear_1416_215"
                              x1="78.6495"
                              y1="-6.67725"
                              x2="78.6495"
                              y2="133.937"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop stop-color="white" />
                              <stop
                                offset="1"
                                stop-color="white"
                                stop-opacity="0"
                              />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                      <span class="absolute bottom-0 right-0 -z-10">
                        <svg
                          width="175"
                          height="104"
                          viewBox="0 0 175 104"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            opacity="0.1"
                            x="175.011"
                            y="108.611"
                            width="101.246"
                            height="148.179"
                            transform="rotate(137.136 175.011 108.611)"
                            fill="url(#paint0_linear_1416_216)"
                          />
                          <defs>
                            <linearGradient
                              id="paint0_linear_1416_216"
                              x1="225.634"
                              y1="108.611"
                              x2="225.634"
                              y2="256.79"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop stop-color="white" />
                              <stop
                                offset="1"
                                stop-color="white"
                                stop-opacity="0"
                              />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== About Section End -->

    <!-- ====== Program Section Start -->
    <section class="pb-8 pt-20 dark:bg-dark lg:pb-[70px] lg:pt-[120px]" id="program">
      <div class="container" >
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Program
              </span>
              <h2
                class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
              >
                Tentang Program Magang
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                Berikut adalah beberapa informasi mengenai program magang yang kami tawarkan
              </p>
            </div>
          </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="wow fadeInUp group mb-12" data-wow-delay=".1s">
              <div
                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary"
              >
                <span
                  class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"
                ></span>
                <svg width="50" height="50" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="white" stroke-width="25">
                  <circle cx="256" cy="256" r="200" />
                  <line x1="256" y1="56" x2="256" y2="456" />
                  <line x1="56" y1="256" x2="456" y2="256" />
                  <line x1="126" y1="126" x2="386" y2="386" />
                  <line x1="126" y1="386" x2="386" y2="126" />
                  <polygon points="250,10 262,10 256,56" />
                </svg>
                
              </div> 
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                Tujuan
              </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                Memberikan kesempatan belajar langsung dari para profesional dalam pengelolaan dan pengembangan infrastruktur jaringan di Indonesia
              </p>

            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="wow fadeInUp group mb-12" data-wow-delay=".15s">
              <div
                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary"
              >
                <span
                  class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"
                ></span>
                <svg width="40" height="40" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.5 14.5H9C9 14.6894 9.107 14.8625 9.27639 14.9472C9.44579 15.0319 9.64849 15.0136 9.8 14.9L9.5 14.5ZM11.5 13L11.8 12.6C11.6222 12.4667 11.3778 12.4667 11.2 12.6L11.5 13ZM13.5 14.5L13.2 14.9C13.3515 15.0136 13.5542 15.0319 13.7236 14.9472C13.893 14.8625 14 14.6894 14 14.5H13.5ZM11.5 11C10.1193 11 9 9.88071 9 8.5H8C8 10.433 9.567 12 11.5 12V11ZM14 8.5C14 9.88071 12.8807 11 11.5 11V12C13.433 12 15 10.433 15 8.5H14ZM11.5 6C12.8807 6 14 7.11929 14 8.5H15C15 6.567 13.433 5 11.5 5V6ZM11.5 5C9.567 5 8 6.567 8 8.5H9C9 7.11929 10.1193 6 11.5 6V5ZM9 10.5V14.5H10V10.5H9ZM9.8 14.9L11.8 13.4L11.2 12.6L9.2 14.1L9.8 14.9ZM11.2 13.4L13.2 14.9L13.8 14.1L11.8 12.6L11.2 13.4ZM14 14.5V10.5H13V14.5H14ZM15 5V1.5H14V5H15ZM13.5 0H1.5V1H13.5V0ZM0 1.5V13.5H1V1.5H0ZM1.5 15H8V14H1.5V15ZM0 13.5C0 14.3284 0.671573 15 1.5 15V14C1.22386 14 1 13.7761 1 13.5H0ZM1.5 0C0.671574 0 0 0.671573 0 1.5H1C1 1.22386 1.22386 1 1.5 1V0ZM15 1.5C15 0.671573 14.3284 0 13.5 0V1C13.7761 1 14 1.22386 14 1.5H15ZM3 5H8V4H3V5ZM3 8H6V7H3V8Z" fill="white"/>
                  </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                Benefit
              </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                Pengalaman berharga bersama para profesional dan sertifikat magang resmi dari perusahaan
              </p>

            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="wow fadeInUp group mb-12" data-wow-delay=".2s">
              <div
                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary"
              >
                <span
                  class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"
                ></span>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45"
                viewBox="0 0 338.784 338.784" style="enable-background:new 0 0 338.784 338.784;" xml:space="preserve" fill-width="100" >
             <g>
               <g>
                 <g>
                   <path d="M18.93,168.462C18.93,85.497,86.427,18,169.392,18c41.483,0,80.871,17.046,109.254,47.017h-7.688c-4.971,0-9,4.029-9,9
                     c0,4.971,4.029,9,9,9h30.522c4.971,0,9-4.029,9-9V43.494c0-4.971-4.029-9-9-9s-9,4.029-9,9v9.971
                     C260.649,19.401,216.217,0,169.392,0C76.502,0,0.93,75.572,0.93,168.462c0,40.967,14.882,80.454,41.903,111.188
                     c1.779,2.023,4.264,3.057,6.763,3.057c2.109,0,4.229-0.738,5.938-2.241c3.733-3.282,4.099-8.969,0.816-12.702
                     C32.22,240.318,18.93,205.052,18.93,168.462z" fill="white"/>
                   <path d="M327.121,109.168c-1.75-4.653-6.943-7.006-11.592-5.256c-4.652,1.75-7.006,6.939-5.256,11.592
                     c6.357,16.905,9.581,34.723,9.581,52.958c0,82.965-67.497,150.461-150.462,150.461c-24.007,0-47.843-5.792-69.014-16.738
                     l8.134-2.88c4.685-1.66,7.138-6.803,5.479-11.488c-1.659-4.687-6.808-7.138-11.488-5.479l-28.771,10.189
                     c-4.685,1.66-7.138,6.803-5.479,11.488l10.189,28.771c1.308,3.692,4.777,5.998,8.483,5.998c0.997,0,2.012-0.167,3.005-0.519
                     c4.685-1.66,7.138-6.803,5.479-11.488l-2.993-8.45c23.641,12.16,50.217,18.596,76.976,18.596
                     c92.891,0,168.462-75.571,168.462-168.461C337.854,148.056,334.243,128.106,327.121,109.168z" fill="white"/>
                   <path d="M169.392,56.371c-61.132,0-110.866,49.734-110.866,110.866c0,61.131,49.734,110.866,110.866,110.866
                     s110.866-49.734,110.866-110.866C280.259,106.105,230.524,56.371,169.392,56.371z M254.504,176.237h7.317
                     c-4.255,44.037-39.392,79.174-83.429,83.429v-7.317c0-4.971-4.029-9-9-9c-4.971,0-9,4.029-9,9v7.317
                     c-44.037-4.255-79.174-39.392-83.429-83.428h7.317c4.971,0,9-4.029,9-9s-4.029-9-9-9h-7.317
                     c4.255-44.037,39.392-79.174,83.429-83.429v7.317c0,4.971,4.029,9,9,9c4.971,0,9-4.029,9-9v-7.317
                     c44.037,4.255,79.174,39.392,83.429,83.428h-7.317c-4.971,0-9,4.029-9,9C245.504,172.208,249.533,176.237,254.504,176.237z" fill="white"/>
                   <path d="M209.864,167.286h-6.303h-25.169v-35.939v-12.851c0-4.971-4.029-9-9-9c-4.971,0-9,4.029-9,9v57.79c0,4.971,4.029,9,9,9
                     h40.472c4.971,0,9-4.029,9-9S214.835,167.286,209.864,167.286z" fill="white"/>
                 </g>
               </g>
             </g>
             </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                Durasi
              </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                Waktu pelaksanaan disesuaikan dengan kesepakatan bersama antara pihak sekolah/kampus dengan perusahaan
              </p>

            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="wow fadeInUp group mb-12" data-wow-delay=".25s">
              <div
                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary"
              >
                <span
                  class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"
                ></span>
                <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                width="50" height="50" viewBox="0 0 32 32" xml:space="preserve">
             <style type="text/css">
               .bentblocks_een{fill:white;}
             </style>
             <path class="bentblocks_een" d="M26,8h-5V6c0-1.1-0.9-2-2-2h-6c-1.1,0-2,0.9-2,2v2H6c-1.1,0-2,0.9-2,2v16c0,1.1,0.9,2,2,2h20
               c1.1,0,2-0.9,2-2V10C28,8.9,27.1,8,26,8z M13,6h6v2h-6V6z M17,10v6h-2v-6H17z M26,26H6v-3h20V26z M26,21H6V10h7v6c0,1.1,0.9,2,2,2h2
               c1.1,0,2-0.9,2-2v-6h7V21z"/>
             </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                Penempatan Bidang
              </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                Posisi magang yang ditawarkan disesuaikan dengan kebutuhan perusahaan serta kuota yang tersedia.
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Program Section End -->



        <!-- ====== Requirement Section Start -->
        <section class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]">
          <div class="container mx-auto">
            <div class="relative overflow-hidden" >
              <div class="-mx-4 flex flex-wrap items-stretch">
                <div class="w-full px-4">
                  <div class="mx-auto max-w-[750px] text-center"> <!-- Lebarkan max-w -->
                    <h2 class="mb-4 text-3xl font-bold text-white md:text-[38px] md:leading-[1.44] max-w-full">
                      Syarat dan Ketentuan Magang/Prakerin PT. Telkom Akses
                    </h2>
                    <ol class="list-decimal text-white text-left pl-5 wow fadeInUp" data-wow-delay=".2s">
                      <li>Sehat jasmani dan rohani.</li>
                      <li>Memiliki BPJS Kesehatan dan BPJS Magang.</li>
                      <li>Bersedia menandatangani pakta integritas dan mematuhi tata tertib.</li>
                      <li>Menggunakan nomor GSM Telkom Group (Simpati, Kartu As, Kartu Halo, By.U) untuk komunikasi selama masa Prakerin.</li>
                      <li>Membawa laptop pribadi.</li>
                      <li>Apabila saat Prakerin peserta diketahui memiliki gangguan kejiwaan, pelanggaran disiplin, atau terkena kasus hukum akan dikembalikan ke pihak instansi terkait.</li>
                      <li>Data yang digunakan hanya untuk kepentingan sekolah terkait, tidak dipublikasikan untuk umum.</li>
                      <li>Mempresentasikan kegiatan dan hasil praktik kerja selama magang di PT Telkom Akses di akhir periode.</li>
                      <li>Pernyataan dari sekolah bahwa tidak pernah terlibat dalam organisasi ilegal yang melanggar hukum (bertanda tangan dan berstempel).</li>
                    </ol>
                    <a
                      href="#form"
                      class="inline-block rounded-md border border-transparent bg-secondary px-7 py-3 text-base font-medium text-white transition hover:bg-[#0BB489] mt-3"
                    >
                      Ajukan Lamaran
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
      <!-- ====== Requirement Section End -->

    <!-- ====== Timeline Section Start -->
    <section class="pb-8 pt-20 dark:bg-dark lg:pb-[70px] lg:pt-[120px]" id="program">
      <div class="container" >
        <div class="-mx-4 flex flex-wrap ">
          <div class="w-full px-4">
            <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Timeline
              </span>
              <h2
                class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
              >
                Alur Magang / Prakerin
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                Berikut adalah step-by-step dalam mengikuti program magang di perusahaan kami
              </p>
            </div>
          </div>
        </div>
        <div class="overflow-x-auto py-10 wow fadeInUp" data-wow-delay=".2s">
          <div class="flex space-x-6 px-6">
            <!-- Step 1 -->
            <div class="flex-shrink-0 w-80 bg-primary p-6 rounded-xl shadow-lg text-white">
              <img src="images/timeline/submit.jpg" alt="Step 1" class="w-full h-40 object-cover rounded-lg mb-4">
              <h3 class="text-xl font-bold">Identity and Document Submission</h3>
              <p class="text-sm text-red-200">Kamu harus ajukan permohonan Prakerin (Praktik Kerja Industri) dengan mengunggah surat pengantar dari sekolah atau perguruan tinggi.</p>
            </div>
        
            <!-- Step 2 -->
            <div class="flex-shrink-0 w-80 bg-red-600 p-6 rounded-xl shadow-lg text-white">
              <img src="images/timeline/screening.jpg" alt="Step 2" class="w-full h-40 object-cover rounded-lg mb-4">
              <h3 class="text-xl font-bold">Screening and Selection</h3>
              <p class="text-sm text-red-200">Calon pembimbing akan meninjau dan melakukan seleksi dokumen yang telah Kamu kirimkan.</p>
            </div>
        
            <!-- Step 3 -->
            <div class="flex-shrink-0 w-80 bg-red-600 p-6 rounded-xl shadow-lg text-white">
              <img src="images/timeline/job.jpg" alt="Step 3" class="w-full h-40 object-cover rounded-lg mb-4">
              <h3 class="text-xl font-bold">On Job</h3>
              <p class="text-sm text-red-200">Masa tunggu pengajuan Kerja Praktik (KP) adalah 14 hari kerja. Jika disetujui, Kamu akan dihubungi lewat email resmi perusahaan dan akan menjalani On Job sesuai durasi yang telah ditentukan.</p>
            </div>
        
            <!-- Step 4 -->
            <div class="flex-shrink-0 w-80 bg-red-600 p-6 rounded-xl shadow-lg text-white">
              <img src="images/timeline/graduate.jpg" alt="Step 4" class="w-full h-40 object-cover rounded-lg mb-4">
              <h3 class="text-xl font-bold">Graduate</h3>
              <p class="text-sm text-red-200">Kamu akan dinyatakan lulus setelah mempresentasikan hasil magang dan menyelesaikan On Job sesuai durasi yang telah ditentukan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Timeline Section End -->

        <!-- ====== Division Section Start -->
        <section class="bg-white pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
          <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Divisi Bidang
                        </span>
                        <h2
                            class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
                        >
                            Deskripsi Pekerjaan
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            Terdapat banyak posisi yang bisa Anda ambil untuk magang di perusahaan ini
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                @foreach ($divisis as $divisi)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">
                            <div class="mb-8 overflow-hidden rounded-[5px]">
                              <a href="#" class="block">
                                <img
                                    src="{{ asset('storage/images/' . $divisi->Images) }}"
                                    alt="{{ $divisi->Divisi }}"
                                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                                    style="width: 500px; height: 250px; object-fit: cover;"
                                />
                            </a>
                            </div>
                            <div>
                                <span
                                    class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                                >
                                    Kuota : {{ $divisi->KuotaTerisi }} / {{ $divisi->TotalKuota }}
                                </span>
                                <h3>
                                    <a
                                        href="#"
                                        class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                                    >
                                        {{ $divisi->Divisi }}
                                    </a>
                                </h3>
                                <p
                                    class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                                >
                                    {{ $divisi->Deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </section>
        <!-- ====== Division Section End -->

    <!-- ====== Testimonial Section Start -->
    <section
      id="testimonials"
      class="overflow-hidden bg-gray-1 py-20 dark:bg-dark-2 md:py-[120px]"
    >
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap justify-center">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Testimonials
              </span>
              <h2
                class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]"
              >
                Apa kata mereka?
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                Coba dengarkan kesan dan pesan dari mereka yang telah mengikuti program magang di perusahaan ini
              </p>
            </div>
          </div>
        </div>

        <div class="-m-5">
          <div class="swiper testimonial-carousel common-carousel p-5">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our intern is excels on his job’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./images/testimonials/author-01.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark dark:text-white"
                      >
                        Sabo Masties
                      </h3>
                      <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./images/testimonials/author-02.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark dark:text-white"
                      >
                        Musharof Chowdhury
                      </h3>
                      <p class="text-xs text-body-secondary">
                        Founder @ Ayro UI
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./images/testimonials/author-03.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark dark:text-white"
                      >
                        William Smith
                      </h3>
                      <p class="text-xs text-body-secondary">
                        Founder @ Trorex
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./images/testimonials/author-01.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark dark:text-white"
                      >
                        Sabo Masties
                      </h3>
                      <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./images/testimonials/author-02.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark dark:text-white"
                      >
                        Musharof Chowdhury
                      </h3>
                      <p class="text-xs text-body-secondary">
                        Founder @ Ayro UI
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./images/testimonials/author-03.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark dark:text-white"
                      >
                        William Smith
                      </h3>
                      <p class="text-xs text-body-secondary">
                        Founder @ Trorex
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="mt-[60px] flex items-center justify-center gap-1">
              <div class="swiper-button-prev">
                <svg
                  class="fill-current"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.25 10.2437H4.57187L10.4156 4.29687C10.725 3.9875 10.725 3.50625 10.4156 3.19687C10.1062 2.8875 9.625 2.8875 9.31562 3.19687L2.2 10.4156C1.89062 10.725 1.89062 11.2063 2.2 11.5156L9.31562 18.7344C9.45312 18.8719 9.65937 18.975 9.86562 18.975C10.0719 18.975 10.2437 18.9062 10.4156 18.7687C10.725 18.4594 10.725 17.9781 10.4156 17.6688L4.60625 11.7906H19.25C19.6625 11.7906 20.0063 11.4469 20.0063 11.0344C20.0063 10.5875 19.6625 10.2437 19.25 10.2437Z"
                  />
                </svg>
              </div>

              <div class="swiper-button-next">
                <svg
                  class="fill-current"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.8 10.45L12.6844 3.2313C12.375 2.92192 11.8938 2.92192 11.5844 3.2313C11.275 3.54067 11.275 4.02192 11.5844 4.3313L17.3594 10.2094H2.75C2.3375 10.2094 1.99375 10.5532 1.99375 10.9657C1.99375 11.3782 2.3375 11.7563 2.75 11.7563H17.4281L11.5844 17.7032C11.275 18.0126 11.275 18.4938 11.5844 18.8032C11.7219 18.9407 11.9281 19.0094 12.1344 19.0094C12.3406 19.0094 12.5469 18.9407 12.6844 18.7688L19.8 11.55C20.1094 11.2407 20.1094 10.7594 19.8 10.45Z"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Testimonial Section End -->

    <!-- ====== FAQ Section Start -->
    <section
      class="relative z-20 overflow-hidden bg-white pb-8 pt-20 dark:bg-dark lg:pb-[50px] lg:pt-[120px]"
      id="faq"
    >
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[520px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary">
                FAQ
              </span>
              <h2
                class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]"
              >
                Ada pertanyaan? Lihat di sini
              </h2>
              <p
                class="mx-auto max-w-[485px] text-base text-body-color dark:text-dark-6"
              >
                Masih kebingungan? Lihat pertanyaan yang sering diajukan oleh
                peserta lainnya
              </p>
            </div>
          </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2">
            <div class="mb-12 flex lg:mb-[70px]">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
              >
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 34 34"
                  class="fill-current"
                >
                  <path
                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                  />
                  <path
                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                  />
                  <path
                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                  />
                </svg>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                >
                Berapa lama durasi magang di PT. Telkom Akses Semarang?
                </h3>
                <p class="text-base text-body-color dark:text-dark-6">
                  Durasi magang umumnya berlangsung <b> 1 hingga 6 bulan </b> , tergantung pada kebijakan perusahaan dan kebutuhan peserta magang.
                </p>
              </div>
            </div>
            <div class="mb-12 flex lg:mb-[70px]">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
              >
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 34 34"
                  class="fill-current"
                >
                  <path
                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                  />
                  <path
                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                  />
                  <path
                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                  />
                </svg>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                >
                Apakah peserta magang akan mendapatkan uang saku atau gaji?
                </h3>
                <p class="text-base text-body-color dark:text-dark-6">
                  Saat ini, program magang di PT. Telkom Akses bersifat <b>non-paid internship</b>, sehingga peserta tidak mendapatkan gaji atau uang saku. Namun, peserta akan memperoleh pengalaman kerja, bimbingan dari mentor, serta kesempatan belajar langsung di industri telekomunikasi.
                </p>
              </div>
            </div>

            <div class="mb-12 flex lg:mb-[70px]">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
              >
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 34 34"
                  class="fill-current"
                >
                  <path
                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                  />
                  <path
                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                  />
                  <path
                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                  />
                </svg>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                >
                Bagaimana jika peserta melanggar aturan selama magang?
                </h3>
                <p class="text-base text-body-color dark:text-dark-6">
                  Jika peserta melakukan pelanggaran disiplin, gangguan kejiwaan, atau kasus hukum, maka akan <b>dikembalikan</b> ke institusi terkait dan magang dapat <b>dihentikan</b>.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <div class="mb-12 flex lg:mb-[70px]">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
              >
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 34 34"
                  class="fill-current"
                >
                  <path
                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                  />
                  <path
                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                  />
                  <path
                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                  />
                </svg>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                >
                Apakah ada ujian atau evaluasi selama magang?
                </h3>
                <p class="text-base text-body-color dark:text-dark-6">
                  Ya, peserta magang akan dievaluasi berdasarkan <b>kehadiran, tugas yang diberikan, serta laporan hasil magang</b>. Di akhir periode magang, peserta diwajibkan <b>mempresentasikan hasil kerja</b> di PT. Telkom Akses.
                </p>
              </div>
            </div>
            <div class="mb-12 flex lg:mb-[70px]">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
              >
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 34 34"
                  class="fill-current"
                >
                  <path
                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                  />
                  <path
                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                  />
                  <path
                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                  />
                </svg>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                >
                Apakah sertifikat diberikan setelah magang selesai?
                </h3>
                <p class="text-base text-body-color dark:text-dark-6">
                  Ya, peserta yang menyelesaikan magang dengan baik akan mendapatkan <b>Sertifikat Magang dari </b>PT. Telkom Akses sebagai bukti pengalaman kerja.
                </p>
              </div>
            </div>
            <div class="mb-12 flex lg:mb-[70px]">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
              >
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 34 34"
                  class="fill-current"
                >
                  <path
                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                  />
                  <path
                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                  />
                  <path
                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                  />
                </svg>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                >
                Siapa yang bisa dihubungi untuk informasi lebih lanjut?
                </h3>
                <p class="text-base text-body-color dark:text-dark-6">
                  Untuk informasi lebih lanjut, Anda bisa menghubungi:<br>
    📧 <b>Email</b>: hr.telkomakses@telkom.co.id<br>
    📞<b>Telepon</b>: (024) 123-4567
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div>
        <span class="absolute left-4 top-4 -z-[1]">
          <svg
            width="48"
            height="134"
            viewBox="0 0 48 134"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="45.6673"
              cy="132"
              r="1.66667"
              transform="rotate(180 45.6673 132)"
              fill="#13C296"
            />
            <circle
              cx="45.6673"
              cy="117.333"
              r="1.66667"
              transform="rotate(180 45.6673 117.333)"
              fill="#13C296"
            />
            <circle
              cx="45.6673"
              cy="102.667"
              r="1.66667"
              transform="rotate(180 45.6673 102.667)"
              fill="#13C296"
            />
            <circle
              cx="45.6673"
              cy="88.0001"
              r="1.66667"
              transform="rotate(180 45.6673 88.0001)"
              fill="#13C296"
            />
            <circle
              cx="45.6673"
              cy="73.3335"
              r="1.66667"
              transform="rotate(180 45.6673 73.3335)"
              fill="#13C296"
            />
            <circle
              cx="45.6673"
              cy="45.0001"
              r="1.66667"
              transform="rotate(180 45.6673 45.0001)"
              fill="#13C296"
            />
            <circle
              cx="45.6673"
              cy="16.0001"
              r="1.66667"
              transform="rotate(180 45.6673 16.0001)"
              fill="#13C296"
            />
            <circle
              cx="45.6673"
              cy="59.0001"
              r="1.66667"
              transform="rotate(180 45.6673 59.0001)"
              fill="#13C296"
            />
            <circle
              cx="45.6673"
              cy="30.6668"
              r="1.66667"
              transform="rotate(180 45.6673 30.6668)"
              fill="#13C296"
            />
            <circle
              cx="45.6673"
              cy="1.66683"
              r="1.66667"
              transform="rotate(180 45.6673 1.66683)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="132"
              r="1.66667"
              transform="rotate(180 31.0013 132)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="117.333"
              r="1.66667"
              transform="rotate(180 31.0013 117.333)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="102.667"
              r="1.66667"
              transform="rotate(180 31.0013 102.667)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="88.0001"
              r="1.66667"
              transform="rotate(180 31.0013 88.0001)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="73.3335"
              r="1.66667"
              transform="rotate(180 31.0013 73.3335)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="45.0001"
              r="1.66667"
              transform="rotate(180 31.0013 45.0001)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="16.0001"
              r="1.66667"
              transform="rotate(180 31.0013 16.0001)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="59.0001"
              r="1.66667"
              transform="rotate(180 31.0013 59.0001)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="30.6668"
              r="1.66667"
              transform="rotate(180 31.0013 30.6668)"
              fill="#13C296"
            />
            <circle
              cx="31.0013"
              cy="1.66683"
              r="1.66667"
              transform="rotate(180 31.0013 1.66683)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="132"
              r="1.66667"
              transform="rotate(180 16.3333 132)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="117.333"
              r="1.66667"
              transform="rotate(180 16.3333 117.333)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="102.667"
              r="1.66667"
              transform="rotate(180 16.3333 102.667)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="88.0001"
              r="1.66667"
              transform="rotate(180 16.3333 88.0001)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="73.3335"
              r="1.66667"
              transform="rotate(180 16.3333 73.3335)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="45.0001"
              r="1.66667"
              transform="rotate(180 16.3333 45.0001)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="16.0001"
              r="1.66667"
              transform="rotate(180 16.3333 16.0001)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="59.0001"
              r="1.66667"
              transform="rotate(180 16.3333 59.0001)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="30.6668"
              r="1.66667"
              transform="rotate(180 16.3333 30.6668)"
              fill="#13C296"
            />
            <circle
              cx="16.3333"
              cy="1.66683"
              r="1.66667"
              transform="rotate(180 16.3333 1.66683)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="132"
              r="1.66667"
              transform="rotate(180 1.66732 132)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="117.333"
              r="1.66667"
              transform="rotate(180 1.66732 117.333)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="102.667"
              r="1.66667"
              transform="rotate(180 1.66732 102.667)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="88.0001"
              r="1.66667"
              transform="rotate(180 1.66732 88.0001)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="73.3335"
              r="1.66667"
              transform="rotate(180 1.66732 73.3335)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="45.0001"
              r="1.66667"
              transform="rotate(180 1.66732 45.0001)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="16.0001"
              r="1.66667"
              transform="rotate(180 1.66732 16.0001)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="59.0001"
              r="1.66667"
              transform="rotate(180 1.66732 59.0001)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="30.6668"
              r="1.66667"
              transform="rotate(180 1.66732 30.6668)"
              fill="#13C296"
            />
            <circle
              cx="1.66732"
              cy="1.66683"
              r="1.66667"
              transform="rotate(180 1.66732 1.66683)"
              fill="#13C296"
            />
          </svg>
        </span>
        <span class="absolute bottom-4 right-4 -z-[1]">
          <svg
            width="48"
            height="134"
            viewBox="0 0 48 134"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="45.6673"
              cy="132"
              r="1.66667"
              transform="rotate(180 45.6673 132)"
              fill="#3758F9"
            />
            <circle
              cx="45.6673"
              cy="117.333"
              r="1.66667"
              transform="rotate(180 45.6673 117.333)"
              fill="#3758F9"
            />
            <circle
              cx="45.6673"
              cy="102.667"
              r="1.66667"
              transform="rotate(180 45.6673 102.667)"
              fill="#3758F9"
            />
            <circle
              cx="45.6673"
              cy="88.0001"
              r="1.66667"
              transform="rotate(180 45.6673 88.0001)"
              fill="#3758F9"
            />
            <circle
              cx="45.6673"
              cy="73.3333"
              r="1.66667"
              transform="rotate(180 45.6673 73.3333)"
              fill="#3758F9"
            />
            <circle
              cx="45.6673"
              cy="45.0001"
              r="1.66667"
              transform="rotate(180 45.6673 45.0001)"
              fill="#3758F9"
            />
            <circle
              cx="45.6673"
              cy="16.0001"
              r="1.66667"
              transform="rotate(180 45.6673 16.0001)"
              fill="#3758F9"
            />
            <circle
              cx="45.6673"
              cy="59.0001"
              r="1.66667"
              transform="rotate(180 45.6673 59.0001)"
              fill="#3758F9"
            />
            <circle
              cx="45.6673"
              cy="30.6668"
              r="1.66667"
              transform="rotate(180 45.6673 30.6668)"
              fill="#3758F9"
            />
            <circle
              cx="45.6673"
              cy="1.66683"
              r="1.66667"
              transform="rotate(180 45.6673 1.66683)"
              fill="#3758F9"
            />
            <circle
              cx="31.0006"
              cy="132"
              r="1.66667"
              transform="rotate(180 31.0006 132)"
              fill="#3758F9"
            />
            <circle
              cx="31.0006"
              cy="117.333"
              r="1.66667"
              transform="rotate(180 31.0006 117.333)"
              fill="#3758F9"
            />
            <circle
              cx="31.0006"
              cy="102.667"
              r="1.66667"
              transform="rotate(180 31.0006 102.667)"
              fill="#3758F9"
            />
            <circle
              cx="31.0006"
              cy="88.0001"
              r="1.66667"
              transform="rotate(180 31.0006 88.0001)"
              fill="#3758F9"
            />
            <circle
              cx="31.0008"
              cy="73.3333"
              r="1.66667"
              transform="rotate(180 31.0008 73.3333)"
              fill="#3758F9"
            />
            <circle
              cx="31.0008"
              cy="45.0001"
              r="1.66667"
              transform="rotate(180 31.0008 45.0001)"
              fill="#3758F9"
            />
            <circle
              cx="31.0008"
              cy="16.0001"
              r="1.66667"
              transform="rotate(180 31.0008 16.0001)"
              fill="#3758F9"
            />
            <circle
              cx="31.0008"
              cy="59.0001"
              r="1.66667"
              transform="rotate(180 31.0008 59.0001)"
              fill="#3758F9"
            />
            <circle
              cx="31.0008"
              cy="30.6668"
              r="1.66667"
              transform="rotate(180 31.0008 30.6668)"
              fill="#3758F9"
            />
            <circle
              cx="31.0008"
              cy="1.66683"
              r="1.66667"
              transform="rotate(180 31.0008 1.66683)"
              fill="#3758F9"
            />
            <circle
              cx="16.3341"
              cy="132"
              r="1.66667"
              transform="rotate(180 16.3341 132)"
              fill="#3758F9"
            />
            <circle
              cx="16.3341"
              cy="117.333"
              r="1.66667"
              transform="rotate(180 16.3341 117.333)"
              fill="#3758F9"
            />
            <circle
              cx="16.3341"
              cy="102.667"
              r="1.66667"
              transform="rotate(180 16.3341 102.667)"
              fill="#3758F9"
            />
            <circle
              cx="16.3341"
              cy="88.0001"
              r="1.66667"
              transform="rotate(180 16.3341 88.0001)"
              fill="#3758F9"
            />
            <circle
              cx="16.3338"
              cy="73.3333"
              r="1.66667"
              transform="rotate(180 16.3338 73.3333)"
              fill="#3758F9"
            />
            <circle
              cx="16.3338"
              cy="45.0001"
              r="1.66667"
              transform="rotate(180 16.3338 45.0001)"
              fill="#3758F9"
            />
            <circle
              cx="16.3338"
              cy="16.0001"
              r="1.66667"
              transform="rotate(180 16.3338 16.0001)"
              fill="#3758F9"
            />
            <circle
              cx="16.3338"
              cy="59.0001"
              r="1.66667"
              transform="rotate(180 16.3338 59.0001)"
              fill="#3758F9"
            />
            <circle
              cx="16.3338"
              cy="30.6668"
              r="1.66667"
              transform="rotate(180 16.3338 30.6668)"
              fill="#3758F9"
            />
            <circle
              cx="16.3338"
              cy="1.66683"
              r="1.66667"
              transform="rotate(180 16.3338 1.66683)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="132"
              r="1.66667"
              transform="rotate(180 1.66732 132)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="117.333"
              r="1.66667"
              transform="rotate(180 1.66732 117.333)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="102.667"
              r="1.66667"
              transform="rotate(180 1.66732 102.667)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="88.0001"
              r="1.66667"
              transform="rotate(180 1.66732 88.0001)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="73.3333"
              r="1.66667"
              transform="rotate(180 1.66732 73.3333)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="45.0001"
              r="1.66667"
              transform="rotate(180 1.66732 45.0001)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="16.0001"
              r="1.66667"
              transform="rotate(180 1.66732 16.0001)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="59.0001"
              r="1.66667"
              transform="rotate(180 1.66732 59.0001)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="30.6668"
              r="1.66667"
              transform="rotate(180 1.66732 30.6668)"
              fill="#3758F9"
            />
            <circle
              cx="1.66732"
              cy="1.66683"
              r="1.66667"
              transform="rotate(180 1.66732 1.66683)"
              fill="#3758F9"
            />
          </svg>
          
        </span>
        
      </div>
      
    </section>
    <!-- ====== FAQ Section End -->










    <!-- ====== Form Start ====== -->
    <section id="form" class="relative py-20 md:py-[120px]">
      <div
        class="absolute left-0 top-0 -z-[1] h-full w-full dark:bg-dark"
      ></div>
      <div
        class="absolute left-0 top-0 -z-[1] h-1/2 w-full bg-[#E9F9FF] dark:bg-dark-700 lg:h-[45%] xl:h-1/2"
      ></div>
      <div class="container px-4">
        <div class="-mx-4 flex flex-wrap items-center">
          <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title mb-12 lg:mb-[150px]">
                <span
                  class="mb-6 block text-base font-medium text-dark dark:text-white"
                >
                  HUBUNGI KAMI
                </span>
                <h2
                  class="max-w-[260px] text-[35px] font-semibold leading-[1.14] text-dark dark:text-white"
                >
                  Lamar Segera
                </h2>
              </div>
              <div class="mb-12 flex flex-wrap justify-between lg:mb-0">
                <div class="mb-8 flex w-[330px] max-w-full">
                  <div class="mr-6 text-[32px] text-primary">
                    <svg
                      width="29"
                      height="35"
                      viewBox="0 0 29 35"
                      class="fill-current"
                    >
                      <path
                        d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"
                      />
                      <path
                        d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5
                      class="mb-[18px] text-lg font-semibold text-dark dark:text-white"
                    >
                      Lokasi
                    </h5>
                    <p class="text-base text-body-color dark:text-dark-6">
                      Jl. Singotoro No.20, Jomblang, Kec. Candisari, Kota Semarang, Jawa Tengah 50256
                    </p>
                  </div>
                </div>
                <div class="mb-8 flex w-[330px] max-w-full">
                  <div class="mr-6 text-[32px] text-primary">
                    <svg
                      width="34"
                      height="25"
                      viewBox="0 0 34 25"
                      class="fill-current"
                    >
                      <path
                        d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5
                      class="mb-[18px] text-lg font-semibold text-dark dark:text-white"
                    >
                      Email Resmi
                    </h5>
                    <p class="text-base text-body-color dark:text-dark-6">
                      info@yourdomain.com
                    </p>
                    <p class="mt-1 text-base text-body-color dark:text-dark-6">
                      contact@yourdomain.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-full xl:w-full">
            <div class="wow fadeInUp rounded-lg bg-white px-8 py-10 shadow-testimonial dark:bg-dark-2 dark:shadow-none sm:px-10 sm:py-12 md:p-10 lg:p-12">
              <h3 class="mb-8 text-2xl font-semibold text-dark dark:text-white md:text-[28px] md:leading-[1.42]">
                Form Lamaran Magang
              </h3>
                  
              @if(session('success'))
              <!-- Notifikasi Sukses -->
              <div id="success-notification" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                  <strong class="font-bold">Sukses!</strong>
                  <span class="block sm:inline">{{ session('success') }}</span>
              </div>
              @else
              <!-- Notifikasi Gagal -->
              @if(session('error'))
              <div id="error-notification" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                  <strong class="font-bold">Error!</strong>
                  <span class="block sm:inline">{{ session('error') }}</span>
              </div>
              @endif
              @endif

                  {{-- <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const successNotification = document.getElementById('success-notification');
                        const errorNotification = document.getElementById('error-notification');
                    
                        if (successNotification) {
                            setTimeout(() => {
                                successNotification.style.display = 'none';
                            }, 3000); // Hilangkan notifikasi sukses setelah 3 detik
                        }
                    
                        if (errorNotification) {
                            setTimeout(() => {
                                errorNotification.style.display = 'none';
                            }, 3000); // Hilangkan notifikasi error setelah 3 detik
                        }
                    });
                    </script> --}}



              <form action="{{ route('registrasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf            
                <div class="grid grid-cols-2 gap-6">
                  <!-- NISN/NIM -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">NISN/NIM*</label>
                    <input type="text" name="NISN_NIM" required class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- Nama -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Nama*</label>
                    <input type="text" name="Nama" required class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- Tingkat -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Tingkat*</label>
                    <select name="Tingkat" required class="w-full border border-gray-300 p-2 rounded-md">
                      <option value="siswa">Siswa</option>
                      <option value="mahasiswa">Mahasiswa</option>
                    </select>
                  </div>
              
                  <!-- Sekolah/Universitas -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Sekolah/Universitas*</label>
                    <input type="text" name="Sekolah_Universitas" required class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- Jenis Kelamin -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Jenis Kelamin*</label>
                    <select name="Jenis_Kelamin" required class="w-full border border-gray-300 p-2 rounded-md">
                      <option value="laki-laki">Laki-laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
              
                  <!-- Alamat -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Alamat*</label>
                    <textarea name="Alamat" rows="2" required class="w-full border border-gray-300 p-2 rounded-md"></textarea>
                  </div>
              
                  <!-- Jurusan -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Jurusan</label>
                    <input type="text" name="Jurusan" class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- Kelas/Semester -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Kelas/Semester</label>
                    <input type="text" name="Kelas_Semester" class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- No HP -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">No HP</label>
                    <input type="text" name="NoHP" class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- Email -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Email*</label>
                    <input type="email" name="Email" required class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- Surat Resmi Sekolah -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Surat Resmi Sekolah (PDF)</label>
                    <input type="file" name="Surat_Resmi_Sekolah" accept=".pdf" class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- Divisi yang Dipilih -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Divisi yang dipilih*</label>
                    <select name="ID_Divisi" required class="w-full border border-gray-300 p-2 rounded-md">
                        @foreach ($divisis as $divisi)
                            <option value="{{ $divisi->ID_Divisi }}">{{ $divisi->Divisi }}</option>
                        @endforeach
                    </select>
                  </div>
              
                  <!-- Tanggal Mulai -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Tanggal Mulai*</label>
                    <input type="date" name="TanggalMulai" required class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- Tanggal Berakhir -->
                  <div>
                    <label class="block text-sm text-body-color dark:text-dark-6">Tanggal Berakhir*</label>
                    <input type="date" name="TanggalBerakhir" required class="w-full border border-gray-300 p-2 rounded-md" />
                  </div>
              
                  <!-- Pesan -->
                  <div class="col-span-2">
                    <label class="block text-sm text-body-color dark:text-dark-6">Pesan</label>
                    <textarea name="message" rows="2" class="w-full border border-gray-300 p-2 rounded-md"></textarea>
                  </div>
                </div>
              
                <!-- Tombol Kirim -->
                <div class="mt-6 text-center">
                  <button type="submit" class="bg-primary text-white px-6 py-3 rounded-md hover:bg-blue-dark transition duration-300">
                    Kirim
                  </button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ====== Form End ====== -->



    <!-- ====== Footer Section Start -->
    <footer
      class="wow fadeInUp relative z-10 bg-[#090E34] pt-20 lg:pt-[100px] overflow-hidden "
      data-wow-delay=".15s"
    >
      <div class="container">
        <div class="-mx-4 flex flex-wrap ">
          <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12">
            <div class="mb-10 w-full">
              <a
                href="https://telkomakses.co.id/"
                class="mb-6 inline-block max-w-[160px]"
              >
                <img
                  src="images/logo/image-nonwhite.png"
                  alt="logo"
                  class="max-w-full"
                />
              </a>
              <p class="mb-8 max-w-[270px] text-base text-gray-7">
                Kami memberikan layanan terbaik untuk anda
              </p>
              <div class="-mx-3 flex items-center">
                <a
                  href="javascript:void(0)"
                  class="px-3 text-gray-7 hover:text-white"
                >
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-current"
                  >
                    <path
                      d="M16.294 8.86875H14.369H13.6815V8.18125V6.05V5.3625H14.369H15.8128C16.1909 5.3625 16.5003 5.0875 16.5003 4.675V1.03125C16.5003 0.653125 16.2253 0.34375 15.8128 0.34375H13.3034C10.5878 0.34375 8.69714 2.26875 8.69714 5.12187V8.1125V8.8H8.00964H5.67214C5.19089 8.8 4.74402 9.17812 4.74402 9.72812V12.2031C4.74402 12.6844 5.12214 13.1313 5.67214 13.1313H7.94089H8.62839V13.8188V20.7281C8.62839 21.2094 9.00652 21.6562 9.55652 21.6562H12.7878C12.994 21.6562 13.1659 21.5531 13.3034 21.4156C13.4409 21.2781 13.544 21.0375 13.544 20.8312V13.8531V13.1656H14.2659H15.8128C16.2596 13.1656 16.6034 12.8906 16.6721 12.4781V12.4438V12.4094L17.1534 10.0375C17.1878 9.79688 17.1534 9.52187 16.9471 9.24687C16.8784 9.075 16.569 8.90312 16.294 8.86875Z"
                    />
                  </svg>
                </a>
                <a
                  href="javascript:void(0)"
                  class="px-3 text-gray-7 hover:text-white"
                >
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-current"
                  >
                    <path
                      d="M20.1236 5.91236C20.2461 5.76952 20.0863 5.58286 19.905 5.64972C19.5004 5.79896 19.1306 5.8974 18.5837 5.95817C19.2564 5.58362 19.5693 5.04828 19.8237 4.39259C19.885 4.23443 19.7 4.09092 19.5406 4.16647C18.8931 4.47345 18.1945 4.70121 17.4599 4.83578C16.7338 4.11617 15.6988 3.6665 14.5539 3.6665C12.3554 3.6665 10.5725 5.32454 10.5725 7.36908C10.5725 7.65933 10.6081 7.94206 10.6752 8.21276C7.51486 8.06551 4.6968 6.71359 2.73896 4.64056C2.60477 4.49848 2.36128 4.51734 2.27772 4.69063C2.05482 5.15296 1.93056 5.66584 1.93056 6.20582C1.93056 7.49014 2.6332 8.62331 3.70132 9.28732C3.22241 9.27293 2.76441 9.17961 2.34234 9.02125C2.13684 8.94416 1.90127 9.07964 1.92888 9.28686C2.14084 10.8781 3.42915 12.1909 5.09205 12.5011C4.75811 12.586 4.40639 12.6311 4.04253 12.6311C3.95431 12.6311 3.86685 12.6284 3.78019 12.6231C3.55967 12.6094 3.38044 12.8067 3.47499 12.9954C4.09879 14.2404 5.44575 15.1096 7.0132 15.1367C5.65077 16.13 3.93418 16.7218 2.06882 16.7218C1.83882 16.7218 1.74015 17.0175 1.9442 17.1178C3.52016 17.8924 5.31487 18.3332 7.22182 18.3332C14.545 18.3332 18.549 12.6914 18.549 7.79843C18.549 7.63827 18.545 7.47811 18.5377 7.31945C19.1321 6.92012 19.6664 6.44528 20.1236 5.91236Z"
                    />
                  </svg>
                </a>
                <a
                  href="https://www.instagram.com/fiberacademysemarang/"
                  class="px-3 text-gray-7 hover:text-white"
                >
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-current"
                  >
                    <path
                      d="M11.0297 14.4305C12.9241 14.4305 14.4598 12.8948 14.4598 11.0004C14.4598 9.10602 12.9241 7.57031 11.0297 7.57031C9.13529 7.57031 7.59958 9.10602 7.59958 11.0004C7.59958 12.8948 9.13529 14.4305 11.0297 14.4305Z"
                    />
                    <path
                      d="M14.7554 1.8335H7.24463C4.25807 1.8335 1.83334 4.25823 1.83334 7.24479V14.6964C1.83334 17.7421 4.25807 20.1668 7.24463 20.1668H14.6962C17.7419 20.1668 20.1667 17.7421 20.1667 14.7555V7.24479C20.1667 4.25823 17.7419 1.8335 14.7554 1.8335ZM11.0296 15.4948C8.51614 15.4948 6.53496 13.4545 6.53496 11.0002C6.53496 8.54586 8.54571 6.50554 11.0296 6.50554C13.4839 6.50554 15.4946 8.54586 15.4946 11.0002C15.4946 13.4545 13.5134 15.4948 11.0296 15.4948ZM17.2393 6.91952C16.9436 7.24479 16.5 7.42221 15.9973 7.42221C15.5538 7.42221 15.1102 7.24479 14.7554 6.91952C14.4301 6.59425 14.2527 6.18027 14.2527 5.67758C14.2527 5.17489 14.4301 4.79049 14.7554 4.43565C15.0807 4.08081 15.4946 3.90339 15.9973 3.90339C16.4409 3.90339 16.914 4.08081 17.2393 4.40608C17.535 4.79049 17.7419 5.23403 17.7419 5.70715C17.7124 6.18027 17.535 6.59425 17.2393 6.91952Z"
                    />
                    <path
                      d="M16.0276 4.96777C15.6432 4.96777 15.318 5.29304 15.318 5.67745C15.318 6.06186 15.6432 6.38713 16.0276 6.38713C16.412 6.38713 16.7373 6.06186 16.7373 5.67745C16.7373 5.29304 16.4416 4.96777 16.0276 4.96777Z"
                    />
                  </svg>
                </a>
                <a
                  href="javascript:void(0)"
                  class="px-3 text-gray-7 hover:text-white"
                >
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-current"
                  >
                    <path
                      d="M18.8065 1.8335H3.16399C2.42474 1.8335 1.83334 2.42489 1.83334 3.16414V18.8362C1.83334 19.5459 2.42474 20.1668 3.16399 20.1668H18.7473C19.4866 20.1668 20.078 19.5754 20.078 18.8362V3.13457C20.1371 2.42489 19.5457 1.8335 18.8065 1.8335ZM7.24464 17.4168H4.55379V8.69371H7.24464V17.4168ZM5.88443 7.48135C4.99733 7.48135 4.31721 6.77167 4.31721 5.91414C4.31721 5.05661 5.0269 4.34694 5.88443 4.34694C6.74196 4.34694 7.45163 5.05661 7.45163 5.91414C7.45163 6.77167 6.8011 7.48135 5.88443 7.48135ZM17.4463 17.4168H14.7554V13.1883C14.7554 12.183 14.7258 10.8523 13.336 10.8523C11.9167 10.8523 11.7097 11.976 11.7097 13.0996V17.4168H9.01884V8.69371H11.6506V9.90608H11.6801C12.0645 9.1964 12.9221 8.48672 14.2527 8.48672C17.0027 8.48672 17.5054 10.2609 17.5054 12.6856V17.4168H17.4463Z"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>



          <div class="w-full px-4 md:w-2/3 lg:w-6/12 xl:w-3/12">

          </div>
        </div>
      </div>

      <div
        class="mt-12 border-t border-[#8890A4] border-opacity-40 py-8 lg:mt-[60px]"
      >
        <div class="container">
          <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 md:w-2/3 lg:w-1/2">
              <div class="my-1">

              </div>
            </div>
            <div class="w-full px-4 md:w-1/3 lg:w-1/2">
              <div class="my-1 flex justify-center md:justify-end">
                <p class="text-base text-gray-7">
                  © PT Telkom Akses Semarang 2025 |
                  <a
                    href=""
                    cursor-pointer="false"
                  >
                    <b></b>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div>
        <span class="absolute left-0 top-0 z-[-1]">
          <img src="images/footer/shape-1.svg" alt="" />
        </span>

        <span class="absolute bottom-0 right-0 z-[-1]">
          <img src="images/footer/shape-3.svg" alt="" />
        </span>

        <span class="absolute right-0 top-0 z-[-1]">
          <svg
            width="102"
            height="102"
            viewBox="0 0 102 102"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M1.8667 33.1956C2.89765 33.1956 3.7334 34.0318 3.7334 35.0633C3.7334 36.0947 2.89765 36.9309 1.8667 36.9309C0.835744 36.9309 4.50645e-08 36.0947 0 35.0633C-4.50645e-08 34.0318 0.835744 33.1956 1.8667 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 33.1956C19.3249 33.1956 20.1606 34.0318 20.1606 35.0633C20.1606 36.0947 19.3249 36.9309 18.2939 36.9309C17.263 36.9309 16.4272 36.0947 16.4272 35.0633C16.4272 34.0318 17.263 33.1956 18.2939 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 33.195C35.7519 33.195 36.5876 34.0311 36.5876 35.0626C36.5876 36.0941 35.7519 36.9303 34.7209 36.9303C33.69 36.9303 32.8542 36.0941 32.8542 35.0626C32.8542 34.0311 33.69 33.195 34.7209 33.195Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 33.195C51.965 33.195 52.8008 34.0311 52.8008 35.0626C52.8008 36.0941 51.965 36.9303 50.9341 36.9303C49.9031 36.9303 49.0674 36.0941 49.0674 35.0626C49.0674 34.0311 49.9031 33.195 50.9341 33.195Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 16.7605C2.89765 16.7605 3.7334 17.5966 3.7334 18.6281C3.7334 19.6596 2.89765 20.4957 1.8667 20.4957C0.835744 20.4957 4.50645e-08 19.6596 0 18.6281C-4.50645e-08 17.5966 0.835744 16.7605 1.8667 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 16.7605C19.3249 16.7605 20.1606 17.5966 20.1606 18.6281C20.1606 19.6596 19.3249 20.4957 18.2939 20.4957C17.263 20.4957 16.4272 19.6596 16.4272 18.6281C16.4272 17.5966 17.263 16.7605 18.2939 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 16.7605C35.7519 16.7605 36.5876 17.5966 36.5876 18.6281C36.5876 19.6596 35.7519 20.4957 34.7209 20.4957C33.69 20.4957 32.8542 19.6596 32.8542 18.6281C32.8542 17.5966 33.69 16.7605 34.7209 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 16.7605C51.965 16.7605 52.8008 17.5966 52.8008 18.6281C52.8008 19.6596 51.965 20.4957 50.9341 20.4957C49.9031 20.4957 49.0674 19.6596 49.0674 18.6281C49.0674 17.5966 49.9031 16.7605 50.9341 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 0.324951C2.89765 0.324951 3.7334 1.16115 3.7334 2.19261C3.7334 3.22408 2.89765 4.06024 1.8667 4.06024C0.835744 4.06024 4.50645e-08 3.22408 0 2.19261C-4.50645e-08 1.16115 0.835744 0.324951 1.8667 0.324951Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 0.324951C19.3249 0.324951 20.1606 1.16115 20.1606 2.19261C20.1606 3.22408 19.3249 4.06024 18.2939 4.06024C17.263 4.06024 16.4272 3.22408 16.4272 2.19261C16.4272 1.16115 17.263 0.324951 18.2939 0.324951Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 0.325302C35.7519 0.325302 36.5876 1.16147 36.5876 2.19293C36.5876 3.2244 35.7519 4.06056 34.7209 4.06056C33.69 4.06056 32.8542 3.2244 32.8542 2.19293C32.8542 1.16147 33.69 0.325302 34.7209 0.325302Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 0.325302C51.965 0.325302 52.8008 1.16147 52.8008 2.19293C52.8008 3.2244 51.965 4.06056 50.9341 4.06056C49.9031 4.06056 49.0674 3.2244 49.0674 2.19293C49.0674 1.16147 49.9031 0.325302 50.9341 0.325302Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 33.1956C67.9346 33.1956 68.7704 34.0318 68.7704 35.0633C68.7704 36.0947 67.9346 36.9309 66.9037 36.9309C65.8727 36.9309 65.037 36.0947 65.037 35.0633C65.037 34.0318 65.8727 33.1956 66.9037 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 33.1956C84.3616 33.1956 85.1974 34.0318 85.1974 35.0633C85.1974 36.0947 84.3616 36.9309 83.3307 36.9309C82.2997 36.9309 81.464 36.0947 81.464 35.0633C81.464 34.0318 82.2997 33.1956 83.3307 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 33.1956C100.789 33.1956 101.624 34.0318 101.624 35.0633C101.624 36.0947 100.789 36.9309 99.7576 36.9309C98.7266 36.9309 97.8909 36.0947 97.8909 35.0633C97.8909 34.0318 98.7266 33.1956 99.7576 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 16.7605C67.9346 16.7605 68.7704 17.5966 68.7704 18.6281C68.7704 19.6596 67.9346 20.4957 66.9037 20.4957C65.8727 20.4957 65.037 19.6596 65.037 18.6281C65.037 17.5966 65.8727 16.7605 66.9037 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 16.7605C84.3616 16.7605 85.1974 17.5966 85.1974 18.6281C85.1974 19.6596 84.3616 20.4957 83.3307 20.4957C82.2997 20.4957 81.464 19.6596 81.464 18.6281C81.464 17.5966 82.2997 16.7605 83.3307 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 16.7605C100.789 16.7605 101.624 17.5966 101.624 18.6281C101.624 19.6596 100.789 20.4957 99.7576 20.4957C98.7266 20.4957 97.8909 19.6596 97.8909 18.6281C97.8909 17.5966 98.7266 16.7605 99.7576 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 0.324966C67.9346 0.324966 68.7704 1.16115 68.7704 2.19261C68.7704 3.22408 67.9346 4.06024 66.9037 4.06024C65.8727 4.06024 65.037 3.22408 65.037 2.19261C65.037 1.16115 65.8727 0.324966 66.9037 0.324966Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 0.324951C84.3616 0.324951 85.1974 1.16115 85.1974 2.19261C85.1974 3.22408 84.3616 4.06024 83.3307 4.06024C82.2997 4.06024 81.464 3.22408 81.464 2.19261C81.464 1.16115 82.2997 0.324951 83.3307 0.324951Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 0.324951C100.789 0.324951 101.624 1.16115 101.624 2.19261C101.624 3.22408 100.789 4.06024 99.7576 4.06024C98.7266 4.06024 97.8909 3.22408 97.8909 2.19261C97.8909 1.16115 98.7266 0.324951 99.7576 0.324951Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 82.2029C2.89765 82.2029 3.7334 83.039 3.7334 84.0705C3.7334 85.102 2.89765 85.9382 1.8667 85.9382C0.835744 85.9382 4.50645e-08 85.102 0 84.0705C-4.50645e-08 83.039 0.835744 82.2029 1.8667 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 82.2029C19.3249 82.2029 20.1606 83.039 20.1606 84.0705C20.1606 85.102 19.3249 85.9382 18.2939 85.9382C17.263 85.9382 16.4272 85.102 16.4272 84.0705C16.4272 83.039 17.263 82.2029 18.2939 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 82.2026C35.7519 82.2026 36.5876 83.0387 36.5876 84.0702C36.5876 85.1017 35.7519 85.9378 34.7209 85.9378C33.69 85.9378 32.8542 85.1017 32.8542 84.0702C32.8542 83.0387 33.69 82.2026 34.7209 82.2026Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 82.2026C51.965 82.2026 52.8008 83.0387 52.8008 84.0702C52.8008 85.1017 51.965 85.9378 50.9341 85.9378C49.9031 85.9378 49.0674 85.1017 49.0674 84.0702C49.0674 83.0387 49.9031 82.2026 50.9341 82.2026Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 65.7677C2.89765 65.7677 3.7334 66.6039 3.7334 67.6353C3.7334 68.6668 2.89765 69.503 1.8667 69.503C0.835744 69.503 4.50645e-08 68.6668 0 67.6353C-4.50645e-08 66.6039 0.835744 65.7677 1.8667 65.7677Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 65.7677C19.3249 65.7677 20.1606 66.6039 20.1606 67.6353C20.1606 68.6668 19.3249 69.503 18.2939 69.503C17.263 69.503 16.4272 68.6668 16.4272 67.6353C16.4272 66.6039 17.263 65.7677 18.2939 65.7677Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 65.7674C35.7519 65.7674 36.5876 66.6036 36.5876 67.635C36.5876 68.6665 35.7519 69.5027 34.7209 69.5027C33.69 69.5027 32.8542 68.6665 32.8542 67.635C32.8542 66.6036 33.69 65.7674 34.7209 65.7674Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 65.7674C51.965 65.7674 52.8008 66.6036 52.8008 67.635C52.8008 68.6665 51.965 69.5027 50.9341 69.5027C49.9031 69.5027 49.0674 68.6665 49.0674 67.635C49.0674 66.6036 49.9031 65.7674 50.9341 65.7674Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 98.2644C2.89765 98.2644 3.7334 99.1005 3.7334 100.132C3.7334 101.163 2.89765 102 1.8667 102C0.835744 102 4.50645e-08 101.163 0 100.132C-4.50645e-08 99.1005 0.835744 98.2644 1.8667 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 49.3322C2.89765 49.3322 3.7334 50.1684 3.7334 51.1998C3.7334 52.2313 2.89765 53.0675 1.8667 53.0675C0.835744 53.0675 4.50645e-08 52.2313 0 51.1998C-4.50645e-08 50.1684 0.835744 49.3322 1.8667 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 98.2644C19.3249 98.2644 20.1606 99.1005 20.1606 100.132C20.1606 101.163 19.3249 102 18.2939 102C17.263 102 16.4272 101.163 16.4272 100.132C16.4272 99.1005 17.263 98.2644 18.2939 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 49.3322C19.3249 49.3322 20.1606 50.1684 20.1606 51.1998C20.1606 52.2313 19.3249 53.0675 18.2939 53.0675C17.263 53.0675 16.4272 52.2313 16.4272 51.1998C16.4272 50.1684 17.263 49.3322 18.2939 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 98.2647C35.7519 98.2647 36.5876 99.1008 36.5876 100.132C36.5876 101.164 35.7519 102 34.7209 102C33.69 102 32.8542 101.164 32.8542 100.132C32.8542 99.1008 33.69 98.2647 34.7209 98.2647Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 98.2647C51.965 98.2647 52.8008 99.1008 52.8008 100.132C52.8008 101.164 51.965 102 50.9341 102C49.9031 102 49.0674 101.164 49.0674 100.132C49.0674 99.1008 49.9031 98.2647 50.9341 98.2647Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 49.3326C35.7519 49.3326 36.5876 50.1687 36.5876 51.2002C36.5876 52.2317 35.7519 53.0678 34.7209 53.0678C33.69 53.0678 32.8542 52.2317 32.8542 51.2002C32.8542 50.1687 33.69 49.3326 34.7209 49.3326Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 49.3326C51.965 49.3326 52.8008 50.1687 52.8008 51.2002C52.8008 52.2317 51.965 53.0678 50.9341 53.0678C49.9031 53.0678 49.0674 52.2317 49.0674 51.2002C49.0674 50.1687 49.9031 49.3326 50.9341 49.3326Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 82.2029C67.9346 82.2029 68.7704 83.0391 68.7704 84.0705C68.7704 85.102 67.9346 85.9382 66.9037 85.9382C65.8727 85.9382 65.037 85.102 65.037 84.0705C65.037 83.0391 65.8727 82.2029 66.9037 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 82.2029C84.3616 82.2029 85.1974 83.0391 85.1974 84.0705C85.1974 85.102 84.3616 85.9382 83.3307 85.9382C82.2997 85.9382 81.464 85.102 81.464 84.0705C81.464 83.0391 82.2997 82.2029 83.3307 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 82.2029C100.789 82.2029 101.624 83.039 101.624 84.0705C101.624 85.102 100.789 85.9382 99.7576 85.9382C98.7266 85.9382 97.8909 85.102 97.8909 84.0705C97.8909 83.039 98.7266 82.2029 99.7576 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 65.7674C67.9346 65.7674 68.7704 66.6036 68.7704 67.635C68.7704 68.6665 67.9346 69.5027 66.9037 69.5027C65.8727 69.5027 65.037 68.6665 65.037 67.635C65.037 66.6036 65.8727 65.7674 66.9037 65.7674Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 65.7677C84.3616 65.7677 85.1974 66.6039 85.1974 67.6353C85.1974 68.6668 84.3616 69.503 83.3307 69.503C82.2997 69.503 81.464 68.6668 81.464 67.6353C81.464 66.6039 82.2997 65.7677 83.3307 65.7677Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 65.7677C100.789 65.7677 101.624 66.6039 101.624 67.6353C101.624 68.6668 100.789 69.503 99.7576 69.503C98.7266 69.503 97.8909 68.6668 97.8909 67.6353C97.8909 66.6039 98.7266 65.7677 99.7576 65.7677Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 98.2644C67.9346 98.2644 68.7704 99.1005 68.7704 100.132C68.7704 101.163 67.9346 102 66.9037 102C65.8727 102 65.037 101.163 65.037 100.132C65.037 99.1005 65.8727 98.2644 66.9037 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 49.3322C67.9346 49.3322 68.7704 50.1684 68.7704 51.1998C68.7704 52.2313 67.9346 53.0675 66.9037 53.0675C65.8727 53.0675 65.037 52.2313 65.037 51.1998C65.037 50.1684 65.8727 49.3322 66.9037 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 98.2644C84.3616 98.2644 85.1974 99.1005 85.1974 100.132C85.1974 101.163 84.3616 102 83.3307 102C82.2997 102 81.464 101.163 81.464 100.132C81.464 99.1005 82.2997 98.2644 83.3307 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 49.3322C84.3616 49.3322 85.1974 50.1684 85.1974 51.1998C85.1974 52.2313 84.3616 53.0675 83.3307 53.0675C82.2997 53.0675 81.464 52.2313 81.464 51.1998C81.464 50.1684 82.2997 49.3322 83.3307 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 98.2644C100.789 98.2644 101.624 99.1005 101.624 100.132C101.624 101.163 100.789 102 99.7576 102C98.7266 102 97.8909 101.163 97.8909 100.132C97.8909 99.1005 98.7266 98.2644 99.7576 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 49.3322C100.789 49.3322 101.624 50.1684 101.624 51.1998C101.624 52.2313 100.789 53.0675 99.7576 53.0675C98.7266 53.0675 97.8909 52.2313 97.8909 51.1998C97.8909 50.1684 98.7266 49.3322 99.7576 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
          </svg>
        </span>
      </div>
    </footer>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="back-to-top fixed bottom-8 left-auto right-8 z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark"
    >
      <span
        class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"
      ></span>
    </a>
    <!-- ====== Back To Top End -->



    <!-- ====== All Scripts -->

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);

      // Testimonial
      const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });

    </script>
  </body>
</html>