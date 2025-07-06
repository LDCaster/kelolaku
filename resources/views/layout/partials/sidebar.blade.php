 <div :class="{ 'dark text-white-dark': $store.app.semidark }">
     <nav x-data="sidebar"
         class="sidebar fixed bottom-0 top-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300">
         <div class="h-full bg-white dark:bg-[#0e1726]">
             <div class="flex items-center justify-between px-4 py-3">
                 <a href="index.html" class="main-logo flex shrink-0 items-center">
                     <img class="ml-[5px] w-8 flex-none" src="assets/images/logo.png" alt="image">
                     <span
                         class="align-middle text-2xl font-semibold ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light lg:inline">Kelola
                         Ku</span>
                 </a>
                 <a href="javascript:;"
                     class="collapse-icon flex h-8 w-8 items-center rounded-full transition duration-300 hover:bg-gray-500/10 rtl:rotate-180 dark:text-white-light dark:hover:bg-dark-light/10"
                     @click="$store.app.toggleSidebar()">
                     <svg class="m-auto h-5 w-5" width="20" height="20" viewbox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                             stroke-linejoin="round"></path>
                         <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor"
                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                 </a>
             </div>

             <ul class="perfect-scrollbar relative h-[calc(100vh-80px)] space-y-0.5 overflow-y-auto overflow-x-hidden p-4 py-0 font-semibold"
                 x-data="{ activeDropdown: 'dashboard' }">
                 <li class="nav-item">
                     <a href="apps-chat.html" class="group">
                         <div class="flex items-center">
                             <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                 viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path opacity="0.5"
                                     d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                     fill="currentColor"></path>
                                 <path
                                     d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                     fill="currentColor"></path>
                             </svg>
                             <span
                                 class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                         </div>
                     </a>
                 </li>

                 <h2
                     class="-mx-4 mb-1 flex items-center bg-white-light/30 px-7 py-3 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                     <svg class="hidden h-5 w-4 flex-none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <line x1="5" y1="12" x2="19" y2="12"></line>
                     </svg>
                     <span>Master Data</span>
                 </h2>

                 <li class="nav-item">
                     <ul>
                         <li class="nav-item">
                             <a href="apps-chat.html" class="group">
                                 <div class="flex items-center">
                                     <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                         viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path opacity="0.5"
                                             d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C17.8174 10.0089 18.3135 10.022 18.75 10.0546V8C18.75 4.27208 15.7279 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z"
                                             fill="currentColor"></path>
                                     </svg>
                                     <span
                                         class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Akun
                                         Roblox</span>
                                 </div>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <ul>
                         <li class="nav-item">
                             <a href="apps-chat.html" class="group">
                                 <div class="flex items-center">
                                     <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                         viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path opacity="0.5"
                                             d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C17.8174 10.0089 18.3135 10.022 18.75 10.0546V8C18.75 4.27208 15.7279 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z"
                                             fill="currentColor"></path>
                                     </svg>
                                     <span
                                         class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Kategori
                                         Game</span>
                                 </div>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <ul>
                         <li class="nav-item">
                             <a href="apps-chat.html" class="group">
                                 <div class="flex items-center">
                                     <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                         viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path opacity="0.5"
                                             d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                                             fill="currentColor"></path>
                                         <path
                                             d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C17.8174 10.0089 18.3135 10.022 18.75 10.0546V8C18.75 4.27208 15.7279 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z"
                                             fill="currentColor"></path>
                                     </svg>
                                     <span
                                         class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Items
                                         Game</span>
                                 </div>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <h2
                     class="-mx-4 mb-1 flex items-center bg-white-light/30 px-7 py-3 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                     <svg class="hidden h-5 w-4 flex-none" viewbox="0 0 24 24" stroke="currentColor"
                         stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <line x1="5" y1="12" x2="19" y2="12"></line>
                     </svg>
                     <span>Inventory Game</span>
                 </h2>

                 {{-- Daftar Ini akan Disesuaikan sesuai Kategori Game yang ada --}}
                 <li class="nav-item">
                     <ul>
                         <li class="nav-item">
                             <a href="apps-chat.html" class="group">
                                 <div class="flex items-center">
                                     <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                         viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                             d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                             fill="currentColor"></path>
                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z"
                                             fill="currentColor"></path>
                                     </svg>
                                     <span
                                         class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Blox
                                         Fruit</span>
                                 </div>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <ul>
                         <li class="nav-item">
                             <a href="apps-chat.html" class="group">
                                 <div class="flex items-center">
                                     <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                         viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                             d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                             fill="currentColor"></path>
                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z"
                                             fill="currentColor"></path>
                                     </svg>
                                     <span
                                         class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Grow
                                         A Garden</span>
                                 </div>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <h2
                     class="-mx-4 mb-1 flex items-center bg-white-light/30 px-7 py-3 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                     <svg class="hidden h-5 w-4 flex-none" viewbox="0 0 24 24" stroke="currentColor"
                         stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <line x1="5" y1="12" x2="19" y2="12"></line>
                     </svg>
                     <span>Transaksi / Trade</span>
                 </h2>

                 <li class="menu nav-item">
                     <button type="button" class="nav-link group"
                         :class="{ 'active': activeDropdown === 'transaksi-masuk-keluar' }"
                         @click="activeDropdown === 'transaksi-masuk-keluar' ? activeDropdown = null : activeDropdown = 'transaksi-masuk-keluar'">
                         <div class="flex items-center">
                             <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                 viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                     d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                     fill="currentColor"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                     d="M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z"
                                     fill="currentColor"></path>
                             </svg>
                             <span
                                 class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Transaksi
                                 Masuk/Keluar</span>
                         </div>
                         <div class="rtl:rotate-180"
                             :class="{ '!rotate-90': activeDropdown === 'transaksi-masuk-keluar' }">
                             <svg width="16" height="16" viewbox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                     stroke-linecap="round" stroke-linejoin="round"></path>
                             </svg>
                         </div>
                     </button>
                     <ul x-cloak="" x-show="activeDropdown === 'transaksi-masuk-keluar'" x-collapse=""
                         class="sub-menu text-gray-500">
                         <li>
                             <a href="apps-invoice-list.html">Stock Masuk</a>
                         </li>
                         <li>
                             <a href="apps-invoice-preview.html">Stock Keluar</a>
                         </li>
                     </ul>
                 </li>



                 <h2
                     class="-mx-4 mb-1 flex items-center bg-white-light/30 px-7 py-3 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                     <svg class="hidden h-5 w-4 flex-none" viewbox="0 0 24 24" stroke="currentColor"
                         stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <line x1="5" y1="12" x2="19" y2="12"></line>
                     </svg>
                     <span>Laporan</span>
                 </h2>

                 <li class="menu nav-item">
                     <button type="button" class="nav-link group"
                         :class="{ 'active': activeDropdown === 'laporan' }"
                         @click="activeDropdown === 'laporan' ? activeDropdown = null : activeDropdown = 'laporan'">
                         <div class="flex items-center">
                             <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                 viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                     d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                     fill="currentColor"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                     d="M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z"
                                     fill="currentColor"></path>
                             </svg>
                             <span
                                 class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Laporan</span>
                         </div>
                         <div class="rtl:rotate-180" :class="{ '!rotate-90': activeDropdown === 'laporan' }">
                             <svg width="16" height="16" viewbox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                     stroke-linecap="round" stroke-linejoin="round"></path>
                             </svg>
                         </div>
                     </button>
                     <ul x-cloak="" x-show="activeDropdown === 'laporan'" x-collapse=""
                         class="sub-menu text-gray-500">
                         <li>
                             <a href="apps-invoice-preview.html">Laporan Pendapatan</a>
                         </li>
                     </ul>
                 </li>

                 <h2
                     class="-mx-4 mb-1 flex items-center bg-white-light/30 px-7 py-3 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                     <svg class="hidden h-5 w-4 flex-none" viewbox="0 0 24 24" stroke="currentColor"
                         stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <line x1="5" y1="12" x2="19" y2="12"></line>
                     </svg>
                     <span>Settings</span>
                 </h2>

                 <li class="menu nav-item">
                     <a href="charts.html" class="nav-link group">
                         <div class="flex items-center">
                             <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                 viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path opacity="0.5"
                                     d="M6.22209 4.60105C6.66665 4.304 7.13344 4.04636 7.6171 3.82976C8.98898 3.21539 9.67491 2.9082 10.5875 3.4994C11.5 4.09061 11.5 5.06041 11.5 7.00001V8.50001C11.5 10.3856 11.5 11.3284 12.0858 11.9142C12.6716 12.5 13.6144 12.5 15.5 12.5H17C18.9396 12.5 19.9094 12.5 20.5006 13.4125C21.0918 14.3251 20.7846 15.011 20.1702 16.3829C19.9536 16.8666 19.696 17.3334 19.399 17.7779C18.3551 19.3402 16.8714 20.5578 15.1355 21.2769C13.3996 21.9959 11.4895 22.184 9.64665 21.8175C7.80383 21.4509 6.11109 20.5461 4.78249 19.2175C3.45389 17.8889 2.5491 16.1962 2.18254 14.3534C1.81598 12.5105 2.00412 10.6004 2.72315 8.86451C3.44218 7.12861 4.65982 5.64492 6.22209 4.60105Z"
                                     fill="currentColor"></path>
                                 <path
                                     d="M21.446 7.06901C20.6342 5.00831 18.9917 3.36579 16.931 2.55398C15.3895 1.94669 14 3.34316 14 5.00002V9.00002C14 9.5523 14.4477 10 15 10H19C20.6569 10 22.0533 8.61055 21.446 7.06901Z"
                                     fill="currentColor"></path>
                             </svg>
                             <span
                                 class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Backup
                                 & Restore Data</span>
                         </div>
                     </a>
                 </li>

                 <li class="menu nav-item">
                     <a href="widgets.html" class="nav-link group">
                         <div class="flex items-center">
                             <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                 viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path opacity="0.5"
                                     d="M13 15.4C13 13.3258 13 12.2887 13.659 11.6444C14.318 11 15.3787 11 17.5 11C19.6213 11 20.682 11 21.341 11.6444C22 12.2887 22 13.3258 22 15.4V17.6C22 19.6742 22 20.7113 21.341 21.3556C20.682 22 19.6213 22 17.5 22C15.3787 22 14.318 22 13.659 21.3556C13 20.7113 13 19.6742 13 17.6V15.4Z"
                                     fill="currentColor"></path>
                                 <path
                                     d="M2 8.6C2 10.6742 2 11.7113 2.65901 12.3556C3.31802 13 4.37868 13 6.5 13C8.62132 13 9.68198 13 10.341 12.3556C11 11.7113 11 10.6742 11 8.6V6.4C11 4.32582 11 3.28873 10.341 2.64437C9.68198 2 8.62132 2 6.5 2C4.37868 2 3.31802 2 2.65901 2.64437C2 3.28873 2 4.32582 2 6.4V8.6Z"
                                     fill="currentColor"></path>
                                 <path
                                     d="M13 5.5C13 4.4128 13 3.8692 13.1713 3.44041C13.3996 2.86867 13.8376 2.41443 14.389 2.17761C14.8024 2 15.3266 2 16.375 2H18.625C19.6734 2 20.1976 2 20.611 2.17761C21.1624 2.41443 21.6004 2.86867 21.8287 3.44041C22 3.8692 22 4.4128 22 5.5C22 6.5872 22 7.1308 21.8287 7.55959C21.6004 8.13133 21.1624 8.58557 20.611 8.82239C20.1976 9 19.6734 9 18.625 9H16.375C15.3266 9 14.8024 9 14.389 8.82239C13.8376 8.58557 13.3996 8.13133 13.1713 7.55959C13 7.1308 13 6.5872 13 5.5Z"
                                     fill="currentColor"></path>
                                 <path opacity="0.5"
                                     d="M2 18.5C2 19.5872 2 20.1308 2.17127 20.5596C2.39963 21.1313 2.83765 21.5856 3.38896 21.8224C3.80245 22 4.32663 22 5.375 22H7.625C8.67337 22 9.19755 22 9.61104 21.8224C10.1624 21.5856 10.6004 21.1313 10.8287 20.5596C11 20.1308 11 19.5872 11 18.5C11 17.4128 11 16.8692 10.8287 16.4404C10.6004 15.8687 10.1624 15.4144 9.61104 15.1776C9.19755 15 8.67337 15 7.625 15H5.375C4.32663 15 3.80245 15 3.38896 15.1776C2.83765 15.4144 2.39963 15.8687 2.17127 16.4404C2 16.8692 2 17.4128 2 18.5Z"
                                     fill="currentColor"></path>
                             </svg>
                             <span
                                 class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Profil</span>
                         </div>
                     </a>
                 </li>

             </ul>
         </div>
     </nav>
 </div>
