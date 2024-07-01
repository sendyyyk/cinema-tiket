<main class="w-full">
    <div class="main-hero relative flex h-screen w-full">
        <div class="hero-text flex flex-col justify-center absolute z-10 w-1/4 h-full">
            <div class="hero-welcome">
                <h2>Selamat Datang</h2>
                <h3>Silahkan Pesan Tiket Untuk Menonton Sekarang !</h3>
            </div>
            <div class="hero-button">
                <button id="pesan-btn" class="button-default pesan" type="button">Pesan</button>
                <button class="button-default daftar-film" type="button">Daftar Film</button>
            </div>
        </div>
        <div class="hero-media w-3/4 ms-auto me-0 h-full bg-red-400">
            <div class="content-media relative h-full h-full">
                <video width="100%" height="100%" autoplay loop muted style="object-fit: cover;">
                    <source src="assets/image-video/video/hero-video.mp4" type="video/mp4">
                </video>
                <!-- <img class="block h-full" src="assets/image-video/image/hero-media.png" alt="hero-media"> -->
            </div>
        </div>
    </div>
    <div class="main-daftar-film relative h-screen w-full">
        <div  id="daftar-film" class="daftar-film-title flex w-full h-1/5">
            <h1 class="mx-auto">Daftar Film</h1>
        </div>
        <div class="daftar-film-content flex flex-col justify-end w-full h-4/5">
            <div class="daftar-film-menu flex w-full">
                <ul class="menu flex w-full h-full">
                    <li id="populer" class="list-menu h-full">
                        <a href="index.html#populer" class="flex justify-center items-center relative w-full h-full">
                            <div class="icon-menu rounded-full flex justify-center items-center">
                                <svg width="50%" height="50%" version="1.1" id="svg2" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" sodipodi:docname="fire.svg" inkscape:version="0.48.4 r9939" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1200" enable-background="new 0 0 1200 1200" xml:space="preserve" fill="#d71515"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <sodipodi:namedview inkscape:cy="580.6024" inkscape:cx="312.39671" inkscape:zoom="0.37249375" showgrid="false" id="namedview30" guidetolerance="10" gridtolerance="10" objecttolerance="10" borderopacity="1" bordercolor="#666666" pagecolor="#ffffff" inkscape:current-layer="svg2" inkscape:window-maximized="1" inkscape:window-y="24" inkscape:window-height="876" inkscape:window-width="1535" inkscape:pageshadow="2" inkscape:pageopacity="0" inkscape:window-x="65"> </sodipodi:namedview> <path id="path8046" inkscape:connector-curvature="0" d="M381.64,1200C135.779,1061.434,71.049,930.278,108.057,751.148 c27.321-132.271,116.782-239.886,125.36-371.903c38.215,69.544,54.183,119.691,58.453,192.364 C413.413,422.695,493.731,216.546,498.487,0c0,0,316.575,186.01,337.348,466.98c27.253-57.913,40.972-149.892,13.719-209.504 c81.757,59.615,560.293,588.838-64.818,942.524c117.527-228.838,30.32-537.611-173.739-680.218 c13.628,61.319-10.265,290.021-100.542,390.515c25.014-167.916-23.8-238.918-23.8-238.918s-16.754,94.054-81.758,189.065 C345.537,947.206,304.407,1039.291,381.64,1200L381.64,1200z"></path> </g></svg>
                            </div>
                            <span class="list-text">
                                Populer
                            </span>
                        </a>
                    </li>
                    <li id="sedang-tayang"  class="list-menu h-full">
                        <a href="sedang-tayang.html#sedang-tayang" class="block flex justify-center items-center relative w-full h-full">
                            <div class="icon-menu rounded-full flex justify-center items-center">
                                <svg width="50%" height="50%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#d71515" stroke="#d71515"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_live_24_filled</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_live_24_filled" fill="#d71515" fill-rule="nonzero"> <path d="M6.34277267,4.93867691 C6.73329697,5.3292012 6.73329697,5.96236618 6.34277267,6.35289047 C3.21757171,9.47809143 3.21757171,14.5450433 6.34277267,17.6702443 C6.73329697,18.0607686 6.73329697,18.6939336 6.34277267,19.0844579 C5.95224838,19.4749821 5.3190834,19.4749821 4.92855911,19.0844579 C1.02230957,15.1782083 1.02230957,8.84492646 4.92855911,4.93867691 C5.3190834,4.54815262 5.95224838,4.54815262 6.34277267,4.93867691 Z M19.0743401,4.93867691 C22.9805896,8.84492646 22.9805896,15.1782083 19.0743401,19.0844579 C18.6838158,19.4749821 18.0506508,19.4749821 17.6601265,19.0844579 C17.2696022,18.6939336 17.2696022,18.0607686 17.6601265,17.6702443 C20.7853275,14.5450433 20.7853275,9.47809143 17.6601265,6.35289047 C17.2696022,5.96236618 17.2696022,5.3292012 17.6601265,4.93867691 C18.0506508,4.54815262 18.6838158,4.54815262 19.0743401,4.93867691 Z M9.3094225,7.81205295 C9.69994679,8.20257725 9.69994679,8.83574222 9.3094225,9.22626652 C7.77845993,10.7572291 7.77845993,13.2394099 9.3094225,14.7703724 C9.69994679,15.1608967 9.69994679,15.7940617 9.3094225,16.184586 C8.91889821,16.5751103 8.28573323,16.5751103 7.89520894,16.184586 C5.58319778,13.8725748 5.58319778,10.1240641 7.89520894,7.81205295 C8.28573323,7.42152866 8.91889821,7.42152866 9.3094225,7.81205295 Z M16.267742,7.81205295 C18.5797531,10.1240641 18.5797531,13.8725748 16.267742,16.184586 C15.8772177,16.5751103 15.2440527,16.5751103 14.8535284,16.184586 C14.4630041,15.7940617 14.4630041,15.1608967 14.8535284,14.7703724 C16.384491,13.2394099 16.384491,10.7572291 14.8535284,9.22626652 C14.4630041,8.83574222 14.4630041,8.20257725 14.8535284,7.81205295 C15.2440527,7.42152866 15.8772177,7.42152866 16.267742,7.81205295 Z M12.0814755,10.5814755 C12.9099026,10.5814755 13.5814755,11.2530483 13.5814755,12.0814755 C13.5814755,12.9099026 12.9099026,13.5814755 12.0814755,13.5814755 C11.2530483,13.5814755 10.5814755,12.9099026 10.5814755,12.0814755 C10.5814755,11.2530483 11.2530483,10.5814755 12.0814755,10.5814755 Z" id="🎨-Color"> </path> </g> </g> </g></svg>
                            </div>
                            <span class="list-text">
                                Sedang Tayang
                            </span>
                        </a>
                    </li>
                    <li id="segera-tayang" class="list-menu h-full">
                        <a href="segera-tayang.html#segera-tayang" class="block flex justify-center items-center relative w-full h-full">
                            <div class="icon-menu rounded-full flex justify-center items-center">
                                <svg width="40%" height="40%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="style=fill"> <g id="clock-stand"> <path id="line (Stroke)" fill-rule="evenodd" clip-rule="evenodd" d="M17.4697 19.9697C17.7626 19.6768 18.2374 19.6768 18.5303 19.9697L20.0303 21.4697C20.3232 21.7626 20.3232 22.2374 20.0303 22.5303C19.7374 22.8232 19.2626 22.8232 18.9697 22.5303L17.4697 21.0303C17.1768 20.7374 17.1768 20.2626 17.4697 19.9697Z" fill="#ffbf00"></path> <path id="line (Stroke)_2" fill-rule="evenodd" clip-rule="evenodd" d="M6.53033 19.9697C6.23744 19.6768 5.76256 19.6768 5.46967 19.9697L3.96967 21.4697C3.67678 21.7626 3.67678 22.2374 3.96967 22.5303C4.26256 22.8232 4.73744 22.8232 5.03033 22.5303L6.53033 21.0303C6.82322 20.7374 6.82322 20.2626 6.53033 19.9697Z" fill="#ffbf00"></path> <path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C6.61779 3.25 2.25 7.61779 2.25 13C2.25 18.3822 6.61779 22.75 12 22.75C17.3822 22.75 21.75 18.3822 21.75 13C21.75 7.61779 17.3822 3.25 12 3.25ZM12.417 8.95911C12.417 8.54489 12.0812 8.20911 11.667 8.20911C11.2528 8.20911 10.917 8.54489 10.917 8.95911V12.6491C10.917 13.0941 11.0674 13.5365 11.2742 13.8993C11.4809 14.2617 11.7844 14.6155 12.1656 14.8417L12.1666 14.8423L14.9546 16.5061C15.3103 16.7184 15.7708 16.6021 15.983 16.2464C16.1953 15.8908 16.079 15.4303 15.7233 15.2181L12.9333 13.5531L12.9313 13.5519C12.827 13.4901 12.6899 13.3537 12.5772 13.1562C12.4646 12.9587 12.417 12.7712 12.417 12.6491V8.95911Z" fill="#ffbf00"></path> <path id="line (Stroke)_3" fill-rule="evenodd" clip-rule="evenodd" d="M17.4379 1.50345C17.7121 1.19304 18.1861 1.16374 18.4965 1.438L22.2434 4.74864C22.5539 5.0229 22.5832 5.49687 22.3089 5.80728C22.0346 6.11769 21.5607 6.14699 21.2503 5.87273L17.5033 2.56209C17.1929 2.28783 17.1636 1.81386 17.4379 1.50345Z" fill="#ffbf00"></path> <path id="line (Stroke)_4" fill-rule="evenodd" clip-rule="evenodd" d="M6.56203 1.50345C6.28776 1.19304 5.81379 1.16374 5.50339 1.438L1.75643 4.74864C1.44602 5.0229 1.41672 5.49687 1.69098 5.80728C1.96524 6.11769 2.43921 6.14699 2.74962 5.87273L6.49658 2.56209C6.80699 2.28783 6.83629 1.81386 6.56203 1.50345Z" fill="#ffbf00"></path> </g> </g> </g></svg>
                            </div>
                            <span class="list-text">
                                Segera Tayang
                            </span>
                        </a>
                    </li>
                    <li id="kategori" class="list-menu h-full">
                        <a href="kategori.html#kategori" class="block flex justify-center items-center relative w-full h-full">
                            <div class="icon-menu rounded-full flex justify-center items-center">
                                <svg width="50%" height="50%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.24 2H5.34C3.15 2 2 3.15 2 5.33V7.23C2 9.41 3.15 10.56 5.33 10.56H7.23C9.41 10.56 10.56 9.41 10.56 7.23V5.33C10.57 3.15 9.42 2 7.24 2Z" fill="#ffbf00"></path> <path d="M18.6695 2H16.7695C14.5895 2 13.4395 3.15 13.4395 5.33V7.23C13.4395 9.41 14.5895 10.56 16.7695 10.56H18.6695C20.8495 10.56 21.9995 9.41 21.9995 7.23V5.33C21.9995 3.15 20.8495 2 18.6695 2Z" fill="#ffbf00"></path> <path d="M18.6695 13.4297H16.7695C14.5895 13.4297 13.4395 14.5797 13.4395 16.7597V18.6597C13.4395 20.8397 14.5895 21.9897 16.7695 21.9897H18.6695C20.8495 21.9897 21.9995 20.8397 21.9995 18.6597V16.7597C21.9995 14.5797 20.8495 13.4297 18.6695 13.4297Z" fill="#ffbf00"></path> <path d="M7.24 13.4297H5.34C3.15 13.4297 2 14.5797 2 16.7597V18.6597C2 20.8497 3.15 21.9997 5.33 21.9997H7.23C9.41 21.9997 10.56 20.8497 10.56 18.6697V16.7697C10.57 14.5797 9.42 13.4297 7.24 13.4297Z" fill="#ffbf00"></path> </g></svg>
                            </div>
                            <span class="list-text">
                                Kategori
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="daftar-film-show flex w-full">
                <div class="genres-wrap flex w-full absolute">
                    <div class="genres-center flex w-full my-auto">
                        <h1 class="genres-title flex justify-center items-center">
                            <svg width="1.5vw" height="1.5vw" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Filter</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Filter"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <line x1="4" y1="5" x2="16" y2="5" id="Path" stroke="#ffbf00" stroke-width="2" stroke-linecap="round"> </line> <line x1="4" y1="12" x2="10" y2="12" id="Path" stroke="#ffbf00" stroke-width="2" stroke-linecap="round"> </line> <line x1="14" y1="12" x2="20" y2="12" id="Path" stroke="#ffbf00" stroke-width="2" stroke-linecap="round"> </line> <line x1="8" y1="19" x2="20" y2="19" id="Path" stroke="#ffbf00" stroke-width="2" stroke-linecap="round"> </line> <circle id="Oval" stroke="#ffbf00" stroke-width="2" stroke-linecap="round" cx="18" cy="5" r="2"> </circle> <circle id="Oval" stroke="#ffbf00" stroke-width="2" stroke-linecap="round" cx="12" cy="12" r="2"> </circle> <circle id="Oval" stroke="#ffbf00" stroke-width="2" stroke-linecap="round" cx="6" cy="19" r="2"> </circle> </g> </g> </g></svg>
                            <span>Genres</span>
                        </h1>
                        <div class="genres-various flex relative overflow-x-auto">
                            <ul class="inline-flex my-auto">
                                <li class="genres-list flex overflow-hidden">
                                    <button type="button" class="flex w-full h-full rounded-full">
                                        <span>Komedi</span>
                                    </button>
                                </li>
                                <li class="genres-list flex overflow-hidden">
                                    <button type="button" class="flex w-full h-full rounded-full">
                                        <span>Aksi</span>
                                    </button>
                                </li>
                                <li class="genres-list flex overflow-hidden">
                                    <button type="button" class="flex w-full h-full rounded-full">
                                        <span>Romantis</span>
                                    </button>
                                </li>
                                <li class="genres-list flex overflow-hidden">
                                    <button type="button" class="flex w-full h-full rounded-full">
                                        <span>Keluarga</span>
                                    </button>
                                </li>
                                <li class="genres-list flex overflow-hidden">
                                    <button type="button" class="flex w-full h-full rounded-full">
                                        <span>Kartun</span>
                                    </button>
                                </li>
                                <li class="genres-list flex overflow-hidden">
                                    <button type="button" class="flex w-full h-full rounded-full">
                                        <span>Horor</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="genres-filter flex">
                            <div class="filter-wrap flex relative rounded-full inline-block my-auto mx-auto">
                                <span class="text-filter">Populer</span>
                                <select name="genres-filter" class="rounded-full" id="genres-select">
                                    <option value="" class="genres-option" data-genres="populer">Populer</option>
                                    <option value="" class="genres-option" data-genres="sedang-tayang">Sedang Tayang</option>
                                    <option value="" class="genres-option" data-genres="segera-tayang">Segera Tayang</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="display-film relative flex w-full">
                    <button id="poster-prev-btn" class="shift-prev-btn shift-btn absolute z-10 rounded-full" type="button">
                        <svg fill="#ffbf00" class="my-auto mx-auto" width="65%" height="65%" viewBox="0 0 1200 1000" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M656 852L294 535q-16-14-16-35t16-35l362-317q13-10 28-9t26 11.5 11 27.5v644q0 17-11 27.5T684 861t-28-9z"></path></g></svg>
                    </button>
                    <button id="poster-next-btn" class="shift-next-btn shift-btn absolute z-10 rounded-full" type="button">
                        <svg fill="#ffbf00" class="my-auto mx-auto" width="65%" height="65%" viewBox="0 0 1200 1000" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M656 852L294 535q-16-14-16-35t16-35l362-317q13-10 28-9t26 11.5 11 27.5v644q0 17-11 27.5T684 861t-28-9z"></path></g></svg>
                    </button>
                    <div id="display-scroll" class="display-scroll relative w-full h-full overflow-x-hidden">
                        <ul id="film-wrap" class="film-wrap flex h-full w-full">
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster1.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description whitespace-nowrap">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster2.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster3.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster4.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster5.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster6.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster7.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster8.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster9.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                            <li class="list-film-daftar flex flex-col justify-between">
                                <a href="#" class="picture-film block relative w-full" aria-disabled="true">
                                    <img src="assets/image-video/image/poster-film/poster10.png" class="w-full h-full" alt="picture-film">
                                    <span class="icon-kategori populer flex absolute top-0 rounded-full overflow-hidden">
                                        <img src="assets/icon/icon-fire.png" class="w-3/5 h-3/5 mx-auto my-auto" alt="icon-status">
                                        <div class="icon-description">Populer</div>
                                    </span>
                                </a>
                                <button class="btn-film flex justify-center items-center w-full" type="button">
                                    <div class="svg-film">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="#000000"></path> <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z" fill="#000000"></path> <path d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z" fill="#000000"></path> <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z" fill="#000000"></path> </g></svg>
                                    </div>
                                    <span class="text-film">
                                        Trailer
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>