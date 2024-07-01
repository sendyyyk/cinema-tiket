document.addEventListener("DOMContentLoaded", function () {
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
        const statusKursi =  itemClickStatusKursi[elementClickKursi].querySelector(".status-kursi").textContent;
        const idKursi =  itemClickKursi[elementClickKursi].querySelector(".id-kursi").textContent;
        if (statusKursi.toLowerCase() ===  "terisi") {
            alert("Kursi Sudah Terisi, Silahkan Pilih Kursi Kosong !");
        } else {
            inputPrimaryKursi.value = idKursi;
            pilihKursiWrap.classList.add("hidden");
            pilihKursiWrap.querySelector(".pilih-kursi").classList.add("hidden");
            pilihTiketFilm[3].disabled = false;
            pilihTiketFilm[3].style.opacity = "1";
        }
    })
    
    // Button Pilih Kusi [END]

    // Button Submit (CHECK FORM COMPLETE) [Start];

    const inputElementPesanan = document.querySelector(".pesan-center");
    const formInputPesanan = inputElementPesanan.querySelectorAll(".pesan-body form input");
    inputElementPesanan.querySelector('.pesan-body .pesan-btn button[type="submit"').addEventListener("click", function () {
        formInputPesanan.forEach(inputElement => {
            console.log(inputElement.value);
            if (!inputElement.value) {
                console.log(" jinx");
            } else {
                console.log("cfkk");
            }
        })
    })
    // Button Submit (CHECK FORM COMPLETE) [END];
})