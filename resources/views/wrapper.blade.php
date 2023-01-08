<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <base href="">
    <title>GPT - IMPERIUM GROUP</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="https://cdn.shopify.com/s/files/1/0517/6446/1721/files/logomain_1_32x32.png?v=1641411709" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="https://navigator.imperiumgrouppr.com/assets/dashboard/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="https://navigator.imperiumgrouppr.com/assets/dashboard/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://navigator.imperiumgrouppr.com/assets/dashboard/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://navigator.imperiumgrouppr.com/assets/dashboard/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <meta name="token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--end::Global Stylesheets Bundle-->
    <style>
      .logo1 a {
        font-weight: bold;
      }

      .symbol img {
        object-fit: cover;
      }

      .menu-title-gray-800 .menu-item .menu-link {
        color: black;
      }

      .menu-title-gray-800 .menu-item .menu-link .menu-title {
        color: black;
      }
    </style>
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
          <!--begin::Brand-->
          <div class="aside-logo flex-column-auto" id="kt_aside_logo">
            <!--begin::Logo-->
            <div class="logo1 logo-3">
              <a href="https://navigator.imperiumgrouppr.com/dashboard">
                <img alt="Logo" src="https://navigator.imperiumgrouppr.com/assets/images/logo.svg" class="h-25px logo" />
              </a>
            </div>
            <!--end::Logo-->
            <!--begin::Aside toggler-->
            <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
              <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
                  <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Aside toggler-->
          </div>
          <!--end::Brand-->
          <!--begin::Aside menu-->
          <div class="aside-menu flex-column-fluid">
            <!--begin::Aside Menu-->
            <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
              <!--begin::Menu-->
              <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                  <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                  </div>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/dashboard">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                          <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                          <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                          <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Overview</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="https://navigator.imperiumgrouppr.com/my-recommendations">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                          <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                          <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                          <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">My Recommendations</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/my-imperium">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M14 18V16H10V18L9 20H15L14 18Z" fill="black" />
                          <path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">My Imperium <i class="fas fa-question-circle ms-2 fs-7" data-bs-toggle="tooltip" data-bs-placement="right" title="Your MyImperium score is a numerical value that is computed using machine learning and AI to compute data sets related to your online reputation and brand presence."></i>
                    </span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/domain-overview">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M14 18V16H10V18L9 20H15L14 18Z" fill="black" />
                          <path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Domain Overview <i class="fas fa-question-circle ms-2 fs-7" data-bs-toggle="tooltip" data-bs-placement="right" title="Get insights into your website’s strengths and how to continuously improve them."></i>
                    </span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/new-press-release">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
                          <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Submit Article</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/my-current-articles">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <rect opacity="0.5" x="7" y="2" width="14" height="16" rx="3" fill="black" />
                          <rect x="3" y="6" width="14" height="16" rx="3" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Current Projects</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="https://navigator.imperiumgrouppr.com/messages">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <i class="fa fa-comments fs-3"></i>
                      </span>
                    </span>
                    <span class="menu-title">Messages</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link active" href="/">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Chat GPT</span>
                  </a>
                </div>
                <div class="menu-item">
                  <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Outreach</span>
                  </div>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/my-contacts">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                          <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">My Contacts</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/new-email">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
                          <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">Send Personalized Emails</span>
                  </a>
                </div>
                <div class="menu-item">
                  <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Resources</span>
                  </div>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/publication-database">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z" fill="black" />
                          <path d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Publication Database</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/companies-database">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M16.0077 19.2901L12.9293 17.5311C12.3487 17.1993 11.6407 17.1796 11.0426 17.4787L6.89443 19.5528C5.56462 20.2177 4 19.2507 4 17.7639V5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V17.5536C19 19.0893 17.341 20.052 16.0077 19.2901Z" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Companies Database</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/newscenter">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
                          <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Newscenter</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/business-directory">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M6.5 11C8.98528 11 11 8.98528 11 6.5C11 4.01472 8.98528 2 6.5 2C4.01472 2 2 4.01472 2 6.5C2 8.98528 4.01472 11 6.5 11Z" fill="black" />
                          <path opacity="0.3" d="M13 6.5C13 4 15 2 17.5 2C20 2 22 4 22 6.5C22 9 20 11 17.5 11C15 11 13 9 13 6.5ZM6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22ZM17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22Z" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Business Dictionary</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link " href="https://navigator.imperiumgrouppr.com/blog">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M6.89999 21.9C5.89999 21.9 5.1 21.6 4.7 21.1C4.2 20.6 4 19.9 4 18.9V4.90002C4 3.90002 4.2 3.10007 4.7 2.70007C5.2 2.30007 5.89999 2 6.89999 2H13C13.9 2 14.7 2.10007 15.4 2.20007C16.1 2.30007 16.8 2.60002 17.4 2.90002C17.9 3.20002 18.3 3.6 18.7 4C19.1 4.5 19.4 5 19.6 5.5C19.8 6.1 19.9 6.70005 19.9 7.30005C19.9 9.00005 19.2 10.3 17.9 11.3C19.8 12.3 20.8 13.9 20.8 16C20.8 17.2 20.5 18.2001 19.9 19.2001C19.3 20.1001 18.5 20.9 17.4 21.3C16.8 21.6 16.1 21.7 15.3 21.9C14.5 22 13.6 22.1 12.6 22.1H6.89999V21.9ZM12.5 17.7001C15.3 17.7001 15.7 16.6 15.7 15.6C15.7 14.7 15.3 14.3 15 14.1C14.4 13.7 13.6 13.6 12.4 13.6H9.09999V17.7001H12.5ZM11.9 9.59998C12.8 9.59998 13.4 9.50002 13.9 9.40002C14.3 9.30002 14.5 9.00007 14.7 8.70007C14.9 8.40007 14.9 8.10005 14.9 7.80005C14.9 6.90005 14.5 6.6 14.3 6.5C13.7 6.2 12.8 6.09998 11.5 6.09998H9.09999V9.59998H11.9Z" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Blog</span>
                  </a>
                </div>
                <div class="menu-item">
                  <div class="menu-content">
                    <div class="separator mx-1 my-4"></div>
                  </div>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="https://navigator.imperiumgrouppr.com/signout">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="black" />
                          <path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Logout</span>
                  </a>
                </div>
              </div>
              <!--end::Menu-->
            </div>
            <!--end::Aside Menu-->
          </div>
          <!--end::Aside menu-->
          <!--begin::Footer-->
          <div class="aside-footer flex-column-auto pt-5 pb-7 px-5 d-none" id="kt_aside_footer">
            <a href="https://navigator.imperiumgrouppr.com/subscription" class="btn btn-custom btn-primary w-100">
              <span class="btn-label">Upgrade Plan</span>
              <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
              <span class="svg-icon btn-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
                  <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </a>
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid pb-0 pt-0" id="kt_wrapper">
          <!--begin::Header-->
          <div id="kt_header" style="" class="header align-items-stretch2">
            <!--begin::Container-->
            <div class="container-fluid d-flex align-items-stretch justify-content-between">
              <!--begin::Aside mobile toggle-->
              <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                  <span class="svg-icon svg-icon-2x mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                      <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Aside mobile toggle-->
              <!--begin::Mobile logo-->
              <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="https://navigator.imperiumgrouppr.com/dashboard" class="d-lg-none">
                  <img alt="Logo" src="https://navigator.imperiumgrouppr.com/assets/images/logo.svg" class="h-30px" />
                </a>
              </div>
              <!--end::Mobile logo-->
              <!--begin::Wrapper-->
              <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                <!--begin::Navbar-->
                <div class="d-flex align-items-stretch" id="kt_header_nav">
                  <!--begin::Menu wrapper-->
                  <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div class="d-flex menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                      <div class="menu-item me-lg-1">
                        <a class="menu-link py-3" href="/">
                          <span class="menu-title" style="color:#009EF7;">Chat GPTs</span>
                        </a>
                      </div>
                      <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1 d-none">
                        <span class="menu-link py-3">
                          <span class="menu-title">Mega Menu</span>
                          <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-600px p-5 p-lg-5">
                          <!--begin:Row-->
                          <div class="row" data-kt-menu-dismiss="true">
                            <!--begin:Col-->
                            <div class="col-lg-4 border-left-lg-1">
                              <div class="menu-inline menu-column menu-active-bg">
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-4 border-left-lg-1">
                              <div class="menu-inline menu-column menu-active-bg">
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-4 border-left-lg-1">
                              <div class="menu-inline menu-column menu-active-bg">
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a href="#" class="menu-link">
                                    <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Example link</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <!--end:Col-->
                          </div>
                          <!--end:Row-->
                        </div>
                      </div>
                    </div>
                    <!--end::Menu-->
                  </div>
                  <!--end::Menu wrapper-->
                </div>
                <!--end::Navbar-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Header-->
          <!--begin::Content-->
          <div class="content d-flex flex-column flex-column-fluid pt-0 pb-0" id="kt_content">
            {{-- Here --}} @yield('chat-gpt')
          </div>
          <!--end::Content-->
          <!--begin::Footer-->
          {{-- <div  iv class="footer py-4 d-flex flex-lg-column " id="kt_footer">
										<!--begin::Container-->
										<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
											<!--begin::Copyright-->
											<div class="text-dark order-2 order-md-1">
												<span class="text-muted fw-bold me-1">© 2022</span>
												<a href="https://navigator.imperiumgrouppr.com/dashboard" target="_blank" class="text-gray-800 text-hover-primary">Imperium Group</a>
											</div>
											<!--end::Copyright-->
											<!--begin::Menu-->
											<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
												<li class="menu-item">
													<a href="https://navigator.imperiumgrouppr.com/faq" target="_blank" class="menu-link px-2">FAQ</a>
												</li>
												<li class="menu-item">
													<a href="https://navigator.imperiumgrouppr.com/blog" target="_blank" class="menu-link px-2">Blog</a>
												</li>
												<li class="menu-item">
													<a href="#" target="_blank" class="menu-link px-2">Privacy Policy</a>
												</li>
											</ul>
											<!--end::Menu-->
										</div>
										<!--end::Container-->
									</div> --}}
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
      var hostUrl = "https://navigator.imperiumgrouppr.com/assets/dashboard";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="https://navigator.imperiumgrouppr.com/assets/dashboard/plugins/global/plugins.bundle.js"></script>
    <script src="https://navigator.imperiumgrouppr.com/assets/dashboard/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="https://navigator.imperiumgrouppr.com/assets/dashboard/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://navigator.imperiumgrouppr.com/assets/dashboard/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="https://navigator.imperiumgrouppr.com/assets/dashboard/js/custom/pages/projects/project/project.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="https://navigator.imperiumgrouppr.com/assets/dashboard/js/custom/widgets.js"></script>
    <script src="https://navigator.imperiumgrouppr.com/assets/dashboard/js/custom/apps/chat/chat.js"></script>
    <script src="https://navigator.imperiumgrouppr.com/assets/dashboard/js/custom/modals/create-app.js"></script>
    <script src="https://navigator.imperiumgrouppr.com/assets/dashboard/js/custom/modals/upgrade-plan.js"></script>
    <script src="https://kit.fontawesome.com/97a70b8472.js" crossorigin="anonymous"></script>
    <!--end::Page Custom Javascript-->
    <script>
      //login user time START
      function track_loggedin() {
        var formData = new FormData();
        formData.append('_token', 'sstbP7OT29EZ7HPGIDxnJGlKhMBWmjXWOSCmcbna');
        formData.append('path', 'my-recommendations');
        $.ajax({
          url: "https://navigator.imperiumgrouppr.com/track-loggedin",
          type: "POST",
          data: formData,
          beforeSend: function() { //alert('sending');
          },
          contentType: false,
          processData: false,
          success: function(data) { //alert(data);
            //success
            // here we will handle errors and validation messages
            if (!data.success) {} else {
              // ALL GOOD! just show the success message!
            }
          },
          error: function() {
            //error
          }
        });
      }
      setInterval(track_loggedin, 10000);

      function notifications_seen(th) {
        var formData = new FormData();
        formData.append('_token', 'sstbP7OT29EZ7HPGIDxnJGlKhMBWmjXWOSCmcbna');
        $.ajax({
          url: "https://navigator.imperiumgrouppr.com/notifications-seen",
          type: "POST",
          data: formData,
          beforeSend: function() { //alert('sending');
          },
          contentType: false,
          processData: false,
          success: function(data) { //alert(data);
            //success
            // here we will handle errors and validation messages
            if (!data.success) {} else {
              // ALL GOOD! just show the success message!
            }
          },
          error: function() {
            //error
          }
        });
      }
    </script>
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
<script>
  function set_industry(th) {
    var industry = $(th).val();
    var formData = new FormData();
    formData.append('_token', 'sstbP7OT29EZ7HPGIDxnJGlKhMBWmjXWOSCmcbna');
    formData.append('industry', industry);
    $.ajax({
      url: "https://navigator.imperiumgrouppr.com/update-industry",
      type: "POST",
      data: formData,
      beforeSend: function() { //alert('sending');
      },
      contentType: false,
      processData: false,
      success: function(data) { //alert(data);
        //success
        // here we will handle errors and validation messages
        if (!data.success) {} else {
          // ALL GOOD! just show the success message!
        }
      },
      error: function() {
        //error
      }
    });
  }
</script>
