document.addEventListener("DOMContentLoaded", function () {
    // Ip Public User 

    fetch('https://api.ipify.org?format=json')
    .then(response => response.json())
    .then(data => {
        document.getElementById("ip-set").textContent = ` ${data.ip}`;
    })
    .catch(error => {
        error;
    });
    
    //  Media Device Change [START]
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    if (/android/i.test(userAgent) || /ipad|iPhone|iPad/.test(userAgent) && !window.MSStream) {
        document.body.classList.add("mobile-view");
    } else if (window.matchMedia("(max-width: 992px)").matches) {
        document.body.classList.add("mobile-view");
    } else {
        document.body.classList.remove("mobile-view");
    }
    //  Media Device Change [END]
    
    // Hamburger Menu Button [START]
    document.getElementById("hamburger-btn").addEventListener("click", function() {
        document.querySelector("header").classList.toggle("see-all-header")
        document.querySelector(".header-button").classList.toggle("see-all-margin")
    })
    // Hamburger Menu Button [END]
    
    // Tombol Filter Kategori [START]

    const genresSelect = document.getElementById("genres-select")
    genresSelect.addEventListener("change", function () {
        const selectedOption = genresSelect.options[genresSelect.selectedIndex];
        const selectedGenre = selectedOption.getAttribute('data-genres');
        if (selectedGenre === "sedang-tayang") {
            document.querySelector(".text-filter").textContent = "Sedang Tayang";
        } else if (selectedGenre === "segera-tayang") {
            document.querySelector(".text-filter").textContent = "Segera Tayang";
        } else {
            document.querySelector(".text-filter").textContent = "Populer";
        }
    });

    // Tombol Filter Kategori [END]

    // Form Login/Registrasi/Lupa Password [START]

    document.getElementById("login-btn").addEventListener("click", function() {
        document.querySelector(".login").classList.add("see-all-header");
        document.querySelector(".form-wrap").classList.add("see-all-transform");
    })

    const formWrap = document.querySelector(".form-wrap");
    const loginWrap = document.querySelector(".login");
    
    document.getElementById("close-btn").addEventListener("click", function() {
        document.querySelector(".login").classList.remove("see-all-header")
        document.querySelector(".form-wrap").classList.remove("see-all-transform")
        setTimeout(() => {
            loginWrap.classList.remove("registrasi");
            formWrap.classList.remove("registrasi-wrap");
            formWrap.classList.remove("lupa-pswd");
            formWrap.classList.remove("lupa-pswd-wrap");
        }, 300)
    })

    const buttonChange = document.querySelectorAll(".change-btn");
    
    buttonChange.forEach(element => {
        element.addEventListener("click", function () {
            const dataCheck = element.getAttribute('data-btn')
            if (dataCheck === "login") {
                formWrap.classList.remove("see-all-transform");
                setTimeout(() => {
                    formWrap.classList.add("see-all-transform");
                }, 400)
                setTimeout(() => {
                    loginWrap.classList.remove("registrasi");
                    formWrap.classList.remove("registrasi-wrap");
                    loginWrap.classList.remove("lupa-pswd");
                    formWrap.classList.remove("lupa-pswd-wrap");
                }, 200)
            } else if (dataCheck === "registrasi") {
                formWrap.classList.remove("see-all-transform");
                setTimeout(() => {
                    formWrap.classList.add("see-all-transform");
                }, 400)
                
                setTimeout(() => {
                    loginWrap.classList.add("registrasi");
                    formWrap.classList.add("registrasi-wrap");
                    loginWrap.classList.remove("lupa-pswd");
                    formWrap.classList.remove("lupa-pswd-wrap");
                }, 100)
            } else if (dataCheck === "lupa-pswd") {
                formWrap.classList.remove("see-all-transform");
                setTimeout(() => {
                    formWrap.classList.add("see-all-transform");
                }, 400)
                
                setTimeout(() => {
                    loginWrap.classList.add("lupa-pswd");
                    formWrap.classList.add("lupa-pswd-wrap");
                }, 100)
            } 
        });
    });
    // Form Login/Registrasi/Lupa Password [END]

    // Hide / Show Password Button [START]
    const buttonPassword = document.querySelectorAll(".hide-pswd");
    
    buttonPassword.forEach(element => {
        element.addEventListener("click", function () {
            const input = this.closest('.flex').querySelector('input.password');
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            element.classList.toggle("see-all-margin-100")
            input.setAttribute('type', type);   
            
        })
    })
    // Hide / Show Password Button [END]

    // Shift Button [Daftar Film]
    const postPrevBtn = document.getElementById("poster-prev-btn");
    const postNextBtn = document.getElementById("poster-next-btn");
    
    let isTransitioning = false;

    postNextBtn.addEventListener("click", function(event) {
        event.preventDefault();
        event.stopPropagation();

        if (isTransitioning) return;

        document.querySelectorAll(".list-film-daftar").forEach(element => {
            let transformValue = parseFloat(window.getComputedStyle(element).transform.split('(')[1].split(')')[0].split(',')[4]);
            if (parseInt(transformValue) === parseInt(-widthlistFilm * totalNewFilm)) {
                return;
            }

            isTransitioning = true;
            element.style.transform = `translateX(${transformValue - widthlistFilm}px)`;

            element.addEventListener('transitionend', () => {
                isTransitioning = false;
            }, { once: true });
        });
    });
    
    postPrevBtn.addEventListener("click", function(event) {
        event.preventDefault();
        event.stopPropagation();
    
        if (isTransitioning) return;
    
        document.querySelectorAll(".list-film-daftar").forEach(element => {
            let transformValue = parseFloat(window.getComputedStyle(element).transform.split('(')[1].split(')')[0].split(',')[4]);
            if (transformValue === 0) {
                return;
            } 

            isTransitioning = true;
            element.style.transform = `translateX(${transformValue + widthlistFilm}px)`;
            element.addEventListener('transitionend', () => {
                isTransitioning = false;
            }, { once: true });
        }); 
    });
    
    // Pesan Button OK [Start] 
    const popup = document.querySelector(".popup")
    const popupOkBtn = document.querySelectorAll(".popup-ok-btn");
    const popupCategory = document.querySelectorAll(".popup-category");
    popupOkBtn.forEach(element => {
        element.addEventListener("click", function () {
            popupCategory.forEach(element2 => {
                if (!element2.classList.contains("hidden")) {
                    element2.classList.add("hidden");
                    popup.style.height = "0";
                }
            })
        })
    })
    // Pesan Button OK [END]

    const loginActive = document.querySelector(".login-active");
    if(loginActive.textContent == "1") {
        document.querySelector(".login-profile").classList.add("flex");
        document.querySelector(".login-profile").classList.add("flex");
        document.getElementById("login-btn").classList.add("hidden");
    }
    
    // Pesan Button [Start] 
    const pesan = document.getElementById("pesan-btn");
    pesan.addEventListener("click", function () {
        const popupEvent = document.querySelector(".popup-info");
        const pesanDisplay = document.querySelector(".pesan-display");
        const loginActive = document.querySelector(".login-active");
        const popupText = document.querySelector(".popup-info .popup-span");
        if(loginActive.textContent == "1") {
            pesanDisplay.classList.remove("hidden");
            pesanDisplay.classList.add("flex");
        } else {
            popup.style.height = "100%";
            popupEvent.classList.remove("hidden");
            popupText.textContent = "Anda Belum Login, Silahkan Login Terlebih Dahulu !";
        }
    })        

    // // Pesan Close Button [Start]
    const pesanCloseBtn = document.querySelectorAll("button.close-btn");
    pesanCloseBtn.forEach(element => {
        element.addEventListener("click", function () {
            if (element.parentElement.classList.contains("pesan-wrap")) {
                const pesanDisplay = document.querySelector(".pesan-display")
                pesanDisplay.classList.add("hidden");
                pesanDisplay.classList.remove("flex");
            } else if (element.parentElement.classList.contains("cart-wrap")) {
                const cartDisplay = document.querySelector(".cart-display")
                cartDisplay.classList.add("hidden");
                cartDisplay.classList.remove("flex");
            }
        })  
    })
    
    // Pesan Button [END]

    
    document.querySelector('input[type="tel"]').addEventListener('input', function(event) {
        // Hanya ambil angka dari input
        this.value = this.value.replace(/\D/g, '');
    });

    // Cart Button [Start] 
    const cart = document.getElementById("cart-btn");
    cart.addEventListener("click", function () {
        const popupEvent = document.querySelector(".popup-cross");
        const popupText = document.querySelector(".popup-cross .popup-span");
        const cartDisplay = document.querySelector(".cart-display");
        if(loginActive.textContent == "1") {
            cartDisplay.classList.remove("hidden");
            cartDisplay.classList.add("flex");
        } else {
            popup.style.height = "100%";
            popupEvent.classList.remove("hidden");
            popupText.textContent = "Anda Belum Login, Silahkan Login Terlebih Dahulu !";
        }
    })     
    
    const totalTicket = document.querySelector(".cart-display .cart-item");
    const kuponTicket = document.getElementById("tiket");
    const totalNotif = cart.querySelector("span");
    if (totalTicket.childElementCount <= 29 && totalTicket.childElementCount !== 0) {
        totalNotif.textContent = `${totalTicket.childElementCount}`;
        kuponTicket.textContent = `${totalTicket.childElementCount}`;
        if (totalTicket.childElementCount >= 26) {
            totalNotif.textContent = `${totalTicket.childElementCount}+`;
        }
    } else if (totalTicket.childElementCount === 0) {
        console.log(document.querySelector(".cart-display .empty-cart"));
        document.querySelector(".cart-display .empty-cart").hidden = false;
        kuponTicket.textContent = `${totalTicket.childElementCount}`;
        totalNotif.textContent = `0`;
    } else {
        kuponTicket.textContent = `${totalTicket.childElementCount}`;
        totalNotif.textContent = `30mx`;
    }



    const invoiceInfo = document.querySelectorAll(".invoice-info");
    invoiceInfo.forEach(element => {
        const textInvoice = element.querySelector("span");
        const invoiceText = textInvoice.textContent.replace(/[^a-zA-Z]/g, '').toLocaleLowerCase();
        const batalBtn = document.querySelectorAll(".batal-pesan");
        if (invoiceText === "belumlunas") {
            element.style.backgroundColor = "#d71515";
            batalBtn.forEach(element => {
                let checkInvoice = element.parentElement.querySelector(".invoice-info span").textContent.replace(/[^a-zA-Z]/g, '').toLocaleLowerCase();
                if (checkInvoice === "belumlunas") {
                    element.hidden = false;
                }
            });
        } else {
            element.style.backgroundColor = "#adff2f"
        }
    })
    // Cart Button [END]  

    // Jumlah Film [Daftar Film]
    const listFilm = document.querySelectorAll(".list-film");
    const widthDaftarScroll = parseFloat(window.getComputedStyle(document.getElementById("display-scroll")).width);
    const heightDaftarScroll = parseFloat(window.getComputedStyle(document.getElementById("display-scroll")).height);
    const daftarFilm = document.getElementById("film-wrap");
    const totalFilm = daftarFilm.childElementCount;
    const widthlistFilm = daftarFilm.clientWidth / 5;
    const heightlistFilm = daftarFilm.clientHeight / 1;
    let maxFilm = 5;
    let maxFilmMobile = 2;
    let totalNewFilm = totalFilm - maxFilm;

    if (document.body.classList.contains("mobile-view")) {
        let heightFilm = 0;
        if (totalFilm % maxFilmMobile === 1) {
            heightFilm = (heightDaftarScroll + heightlistFilm) * (Math.floor(totalFilm / 2 / maxFilmMobile));
        } else {
            heightFilm = (heightDaftarScroll + heightlistFilm) * (totalFilm / 2 / maxFilmMobile - 1);
        }
        daftarFilm.style.height = `${heightFilm}px`;
        let index = 0;
        let indexS = 0;
        for (let i = 0; i <= totalFilm; i++) {
            if (i == 0) {
                listFilm[i].style.left = 0;
                listFilm[i].style.top = `${heightlistFilm * 0}px`;
            } else if (i % 2 == 1) {
                listFilm[i].style.right = 0;
                listFilm[i].style.top = `${heightlistFilm * index}px`;
                index++;
                indexS = index;
            } 
            else {
                listFilm[i].style.left = 0;
                listFilm[i].style.top = `${heightlistFilm * indexS}px`;
            }
        }
    } else {
        if (totalFilm > 5) {
            daftarFilm.style.width = `calc(${widthDaftarScroll}px + (${widthlistFilm}px * ${totalNewFilm}))`;
        } 
    }

    // Button Pilih Film [Start]
    
    const pilihTiketFilm = document.querySelectorAll(".pilih-btn")
    pilihTiketFilm.forEach(element => {
        if (element.classList.contains("film")) {
            element.addEventListener("click", function() {
                pilihFormWrap.classList.add("flex");
                pilihFormWrap.classList.remove("hidden");
                pilihFormWrap.querySelector(".pilih-film").classList.remove("hidden");
            })
        } else if (element.classList.contains("bioskop")) {
            element.addEventListener("click", function() {
                pilihFormWrap.classList.add("flex");
                pilihFormWrap.classList.remove("hidden");
                pilihFormWrap.querySelector(".pilih-bioskop").classList.remove("hidden");
            })
        } else if (element.classList.contains("kursi")) {
            element.addEventListener("click", function() {
                pilihFormWrap.classList.add("flex");
                pilihFormWrap.classList.remove("hidden");
                pilihFormWrap.querySelector(".pilih-kursi").classList.remove("hidden");
            })
        }
    })
    
    const pilihFilm = document.querySelectorAll(".picture-pilih-film");
    const itemClick = document.querySelectorAll(".picture-pilih-film .pilih-wrap");
    const simpanPilihFilm = document.querySelector(".pilih-film-btn button.simpan");
    let elementClick = 0;
    let elementBatalClick = 0;
    pilihFilm.forEach((item, index) => {
        item.addEventListener('click', () => {
            if (itemClick[elementClick].classList.contains("active")) {
                itemClick[elementClick].classList.remove("active");
                itemClick[elementClick].style.display = "none";
                itemClick[elementClick].style.opacity = "0.7";
            } 
            
            elementClick = index;
            itemClick[index].style.display = "flex";
            itemClick[index].style.opacity = "1";
            itemClick[index].classList.add("active");
            simpanPilihFilm.disabled = false;            
            simpanPilihFilm.style.opacity = "1";            
        });
    })
    
    const batalPilihFilm = document.querySelector(".pilih-film-btn button.batal");
    const pilihFormWrap = document.querySelector(".pilih-input-form");
    batalPilihFilm.addEventListener("click", function() {
        pilihFormWrap.classList.add("hidden");
        pilihFormWrap.querySelector(".pilih-film").classList.add("hidden");
        if (itemClick[elementClick].classList.contains("active")) {
            itemClick[elementBatalClick].style.display = "none";
            itemClick[elementBatalClick].classList.remove("active");
            itemClick[elementBatalClick].style.opacity = "0.7";
            simpanPilihFilm.disabled = true;            
            simpanPilihFilm.style.opacity = "0.5";   
        }
    })
    
    simpanPilihFilm.addEventListener("click", function() {
        const inputPrimary = document.querySelector('.input-primary-film input[name="film"]') 
        const idFIlm = itemClick[elementClick].querySelector(".id-film").textContent;
        inputPrimary.value = idFIlm;
        pilihFormWrap.classList.add("hidden");
        pilihFormWrap.querySelector(".pilih-film").classList.add("hidden");
        pilihTiketFilm[1].disabled = false;
        pilihTiketFilm[1].style.opacity = "1";
    })
    
    // Button Pilih Film [END]
    
    // Button Pilih Bioskop [Start]

    const pilihBioskop = document.querySelectorAll(".picture-pilih-bioskop");
    const itemClickBioskop = document.querySelectorAll(".picture-pilih-bioskop .pilih-wrap");
    const simpanPilihBioskop = document.querySelector(".pilih-bioskop-btn button.simpan");
    let elementClickBioskop = 0;
    let elementBatalClickBioskop = 0;
    pilihBioskop.forEach((item, index) => {
        item.addEventListener('click', () => {
            if (itemClickBioskop[elementClickBioskop].classList.contains("active")) {
                itemClickBioskop[elementClickBioskop].classList.remove("active");
                itemClickBioskop[elementClickBioskop].style.display = "none";
                itemClickBioskop[elementClickBioskop].style.opacity = "0.7";
            } 
            
            elementClickBioskop = index;
            itemClickBioskop[index].style.display = "flex";
            itemClickBioskop[index].style.opacity = "1";
            itemClickBioskop[index].classList.add("active");
            simpanPilihBioskop.disabled = false;            
            simpanPilihBioskop.style.opacity = "1";            
        });
    })

    const batalPilihBioskop = document.querySelector(".pilih-bioskop-btn button.batal");
    const pilihBioskopWrap = document.querySelector(".pilih-input-form");
    batalPilihBioskop.addEventListener("click", function() {
        pilihBioskopWrap.classList.add("hidden");
        pilihBioskopWrap.querySelector(".pilih-bioskop").classList.add("hidden");
        if (itemClickBioskop[elementClickBioskop].classList.contains("active")) {
            itemClickBioskop[elementBatalClickBioskop].style.display = "none";
            itemClickBioskop[elementBatalClickBioskop].classList.remove("active");
            itemClickBioskop[elementBatalClickBioskop].style.opacity = "0.7";
            simpanPilihBioskop.disabled = true;            
            simpanPilihBioskop.style.opacity = "0.5";   
        }
    })

    simpanPilihBioskop.addEventListener("click", function() {
        const inputPrimaryBioskop = document.querySelector('.input-primary-bioskop input[name="bioskop"]');
        const inputPrimaryLokasi = document.querySelector('.input-primary-bioskop input[name="lokasi-bioskop"]');
        const idBioskop = itemClickBioskop[elementClickBioskop].querySelector(".id-bioskop").textContent;
        const idLokasi = itemClickBioskop[elementClickBioskop].querySelector(".id-lokasi").textContent;
        inputPrimaryBioskop.value = idBioskop;
        inputPrimaryLokasi.value = idLokasi;
        pilihBioskopWrap.classList.add("hidden");
        pilihBioskopWrap.querySelector(".pilih-bioskop").classList.add("hidden");
        pilihTiketFilm[2].disabled = false;
        pilihTiketFilm[2].style.opacity = "1";
    })

    // Button Pilih Bioskop [END]

    // Button Pilih Kusi [Start]
    
    const pilihKursi = document.querySelectorAll(".picture-pilih-kursi");
    const itemClickKursi = document.querySelectorAll(".picture-pilih-kursi .pilih-wrap");
    const simpanPilihKursi = document.querySelector(".pilih-kursi-btn button.simpan");
    let elementClickKursi = 0;
    let elementBatalClickKursi = 0;
    pilihKursi.forEach((item, index) => {
        item.addEventListener('click', () => {
            if (itemClickKursi[elementClickKursi].classList.contains("active")) {
                itemClickKursi[elementClickKursi].classList.remove("active");
                itemClickKursi[elementClickKursi].style.display = "none";
                itemClickKursi[elementClickKursi].style.opacity = "0.7";
            } 
            
            elementClickKursi = index;
            itemClickKursi[index].style.display = "flex";
            itemClickKursi[index].style.opacity = "1";
            itemClickKursi[index].classList.add("active");
            simpanPilihKursi.disabled = false;            
            simpanPilihKursi.style.opacity = "1";            
        });
    })
    
    const batalPilihKursi = document.querySelector(".pilih-kursi-btn button.batal");
    const pilihKursiWrap = document.querySelector(".pilih-input-form");
    batalPilihKursi.addEventListener("click", function() {
        pilihKursiWrap.classList.add("hidden");
        pilihKursiWrap.querySelector(".pilih-kursi").classList.add("hidden");
        if (itemClickKursi[elementClickKursi].classList.contains("active")) {
            itemClickKursi[elementBatalClickKursi].style.display = "none";
            itemClickKursi[elementBatalClickKursi].classList.remove("active");
            itemClickKursi[elementBatalClickKursi].style.opacity = "0.7";
            simpanPilihKursi.disabled = true;            
            simpanPilihKursi.style.opacity = "0.5";   
        }
    })
    
    const itemClickStatusKursi = document.querySelectorAll(".picture-pilih-kursi");
    simpanPilihKursi.addEventListener("click", function() {
        const inputPrimaryKursi = document.querySelector('.input-primary-kursi input[name="kursi"]');
        const statusKursi =  itemClickStatusKursi[elementClickKursi].querySelector(".status-kursi");
        const idKursi =  itemClickKursi[elementClickKursi].querySelector(".id-kursi").textContent;
        if (statusKursi.textContent.toLowerCase() ===  "terisi") {
            alert("Kursi Sudah Terisi, Silahkan Pilih Kursi Kosong !");
        } else {
            inputPrimaryKursi.value = idKursi;
            pilihKursiWrap.classList.add("hidden");
            pilihKursiWrap.querySelector(".pilih-kursi").classList.add("hidden");
        }
    })

    const statusKursi =  itemClickStatusKursi[elementClickKursi].querySelector(".status-kursi");
    if (statusKursi.textContent.toLowerCase() ===  "terisi") {
        statusKursi.style.backgroundColor = "#d71515";
    }
    // Button Pilih Kusi [END]

    // Button Submit (CHECK FORM COMPLETE) [Start];

    const inputElementPesanan = document.querySelector(".pesan-center");
    const formInputPesanan = inputElementPesanan.querySelectorAll(".pesan-body form input[readonly]");
    const formInputTel = inputElementPesanan.querySelector(`.pesan-body form input[type="tel"]`);
    const cartTel = document.querySelectorAll(`.cart-display .cart-list .cart-nomor-tel .info span`);
    inputElementPesanan.querySelector('.pesan-body form button[type="submit"]').addEventListener("click", function (event) {
        
        const popupEvent = document.querySelector(".popup-warning");
        const popupText = popupEvent.querySelector(".popup-span");

        if (totalTicket.childElementCount === parseInt(document.getElementById("max-tiket").textContent)) {
            event.preventDefault();
            popup.style.height = "100%";
            popupEvent.classList.remove("hidden");
            popupText.textContent = "Pesanan Sudah Mencapai Batas Maksimum !";
        } else if (formInputPesanan[0].value == "") {
            event.preventDefault();
            alert("Mohon Untuk Memilih Film Terlebih Dahulu !");
        } else if (formInputPesanan[1].value == "") {
            event.preventDefault();
            alert("Mohon Untuk Memilih Bioskop Terlebih Dahulu !");
        } else if (formInputPesanan[2].value == "") {
            event.preventDefault();
            alert("Mohon Untuk Memilih Lokasi Bioskop Terlebih Dahulu !");
        } else if (formInputPesanan[3].value == "") {
            event.preventDefault();
            alert("Mohon Untuk Memilih Kursi Terlebih Dahulu !");
        }

        cartTel.forEach(element => {
            if (parseInt(formInputTel.value) === parseInt(element.textContent)) {
                event.preventDefault();
                alert("Nomor Telepon Sudah Ada, Silahkan Masukkan Nomor Yang Berbeda !");
            } 
        })
    })
    // Button Submit (CHECK FORM COMPLETE) [END];
})

// Tombol Dropdown profile User [Start]

function dropUser() {
    document.querySelector(".profile-wrap").classList.toggle("h-6vw");
    document.querySelector("button.dropdown").classList.toggle("opacity-50");
}

// Tombol Dropdown profile User [END]