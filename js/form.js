function validate() {
    if (validateName() === true & validateMail() === true & validateMessageType() === true & validateSubject() === true & validateMessage() === true) {
        if (document.getElementById("gun").value !== "" || document.getElementById("ay").value !== "Ay seçiniz..." || document.getElementById("yil").value !== "") {
            if (validateDate() === true) {
                return true;
            } else {
                return false;
            }
        } else {
            alert("Mesajınız başarıyla gönderildi.");
            return true;
        }
    } else {
        alert("Hata!");
        return false;
    }
}

function validateName() {
    var isFirstName;
    var isLastName;
    var nameGrammar = /^[a-zıöüğçşA-ZİÖÜĞÇŞ]+$/;
    var firstName = document.getElementById("ad").value;
    var lastName = document.getElementById("soyad").value;


    if (lastName.match(nameGrammar)) {
        isLastName = true;
    } else {
        isLastName = false;
    }

    if (firstName.match(nameGrammar)) {
        isFirstName = true;
    } else {
        isFirstName = false;
    }

    if (isFirstName === false && isLastName === false) {
        if (firstName === "" && lastName === "") {
            document.getElementById('adDogrulama').innerHTML = "*Lütfen adınızı giriniz!";
            document.getElementById('soyadDogrulama').innerHTML = "*Lütfen soyadınızı giriniz!";
            return false;
        } else if (firstName === "" && !(lastName === "")) {
            document.getElementById('adDogrulama').innerHTML = "*Lütfen adınızı giriniz!";
            document.getElementById('soyadDogrulama').innerHTML = "*Geçersiz Soyad!";
            return false;
        } else if (!(firstName === "") && lastName === "") {
            document.getElementById('adDogrulama').innerHTML = "*Geçersiz Ad!";
            document.getElementById('soyadDogrulama').innerHTML = "*Lütfen soyadınızı giriniz!";
            return false;
        } else {
            document.getElementById('adDogrulama').innerHTML = "*Geçersiz Ad!";
            document.getElementById('soyadDogrulama').innerHTML = "*Geçersiz Soyad!";
            return false;
        }
    } else if (isFirstName === false && isLastName === true) {
        if (firstName === "" && !(lastName === "")) {
            if (lastName.length >= 2) {
                document.getElementById('adDogrulama').innerHTML = "*Lütfen adınızı giriniz!";
                document.getElementById('soyadDogrulama').innerHTML = "";
                return false;
            } else {
                document.getElementById('adDogrulama').innerHTML = "*Lütfen adınızı giriniz!";
                document.getElementById('soyadDogrulama').innerHTML = "*Lütfen en az 2 karakter giriniz!";
                return false;
            }
        } else {
            if (lastName.length >= 2) {
                document.getElementById('adDogrulama').innerHTML = "*Geçersiz Ad!";
                document.getElementById('soyadDogrulama').innerHTML = "";
                return false;
            } else {
                document.getElementById('adDogrulama').innerHTML = "*Geçersiz Ad!";
                document.getElementById('soyadDogrulama').innerHTML = "*Lütfen en az 2 karakter giriniz!";
                return false;
            }
        }
    } else if (isFirstName === true && isLastName === false) {
        if (!(firstName === "") && lastName === "") {
            if (firstName.length >= 2) {
                document.getElementById('adDogrulama').innerHTML = "";
                document.getElementById('soyadDogrulama').innerHTML = "*Lütfen soyadınızı giriniz!";
                return false;
            } else {
                document.getElementById('adDogrulama').innerHTML = "*Lütfen en az 2 karakter giriniz!";
                document.getElementById('soyadDogrulama').innerHTML = "*Lütfen soyadınızı giriniz!";
                return false;
            }
        } else {
            if (firstName.length >= 2) {
                document.getElementById('adDogrulama').innerHTML = "";
                document.getElementById('soyadDogrulama').innerHTML = "*Geçersiz Soyad!";
                return false;
            } else {
                document.getElementById('adDogrulama').innerHTML = "*Lütfen en az 2 karakter giriniz!";
                document.getElementById('soyadDogrulama').innerHTML = "*Geçersiz Soyad!";
                return false;
            }
        }
    } else {
        if (!(firstName.length >= 2) && !(lastName.length >= 2)) {
            document.getElementById('adDogrulama').innerHTML = "*Lütfen en az 2 karakter giriniz!";
            document.getElementById('soyadDogrulama').innerHTML = "*Lütfen en az 2 karakter giriniz!";
            return false;
        } else if (!(firstName.length >= 2) && (lastName.length >= 2)) {
            document.getElementById('adDogrulama').innerHTML = "*Lütfen en az 2 karakter giriniz!";
            document.getElementById('soyadDogrulama').innerHTML = "";
            return false;
        } else if ((firstName.length >= 2) && !(lastName.length >= 2)) {
            document.getElementById('adDogrulama').innerHTML = "";
            document.getElementById('soyadDogrulama').innerHTML = "*Lütfen en az 2 karakter giriniz!";
            return false;
        } else {
            document.getElementById('adDogrulama').innerHTML = "";
            document.getElementById('soyadDogrulama').innerHTML = "";

            isim = firstName;
            soyisim = lastName;

            return true;
        }
    }
}

function validateMail() {
    var mailGrammar = /^[\w!#$%&'*+/=?`{|}~^-]+(?:\.[\w!#$%&'*+/=?`{|}~^-]+)*@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/;
    var mail = document.getElementById('eposta').value;
    var isMail;

    if (mail.match(mailGrammar)) {
        isMail = true;
    } else {
        isMail = false;
    }

    if (isMail === false) {
        if (mail === "") {
            document.getElementById('epostaDogrulama').innerHTML = "*Lütfen E-Posta adresinizi giriniz!";
            return false;
        } else {
            document.getElementById('epostaDogrulama').innerHTML = "*Geçersiz E-Posta!";
            return false;
        }
    }
    if (isMail === true) {
        document.getElementById('epostaDogrulama').innerHTML = "";
        epostam = mail;
        return true;
    }
}

function validateSubject() {
    var itIsInterface = document.getElementById("arayuz").checked;
    var itIsContent = document.getElementById("icerik").checked;
    var itIsMembership = document.getElementById("uyelik").checked;
    var itIsOther = document.getElementById("diger").checked;

    if (itIsInterface === true || itIsContent === true || itIsMembership === true || itIsOther === true) {
        if (itIsInterface === true && (itIsContent === false && itIsMembership === false && itIsOther === false)) {
            document.getElementById("konuDogrulama").innerHTML = "";
            konum = "Arayüz";
            return true;
        } else if (itIsContent === true && (itIsInterface === false && itIsMembership === false && itIsOther === false)) {
            document.getElementById("konuDogrulama").innerHTML = "";
            konum = "İçerik";
            return true;
        } else if (itIsMembership === true && (itIsInterface === false && itIsContent === false && itIsOther === false)) {
            document.getElementById("konuDogrulama").innerHTML = "";
            konum = "Üyelik";
            return true;
        } else if (itIsOther === true && (itIsInterface === false && itIsContent === false && itIsMembership === false)) {
            document.getElementById("konuDogrulama").innerHTML = "";
            konum = "Diğer";
            return true;
        } else {
            document.getElementById("konuDogrulama").innerHTML = "*Lütfen sadece bir konu seçiniz!";
            return false;
        }
    } else if (itIsInterface === false && itIsContent === false && itIsMembership === false && itIsOther === false) {
        document.getElementById("konuDogrulama").innerHTML = "*Lütfen bir konu seçiniz!";
        return false;
    }
}

function validateMessageType() {
    var messageType = document.getElementById("mesajTuru").value;

    if (messageType !== "Mesaj türünü seçiniz...") {
        document.getElementById("mesajTuruDogrulama").innerHTML = "";
        return true;
    } else {
        document.getElementById("mesajTuruDogrulama").innerHTML = "*Lütfen mesaj türünü seçiniz!";
        return false;
    }

}

function validateDate() {
    if (validateDay() === true) {
        return true;
    } else {
        return false;
    }
}

function validateDay() {
    var day = document.getElementById("gun").value;
    if (day !== "") {
        if (day > 0 && day < 32) {
            document.getElementById("gunDogrulama").innerHTML = "";

            if (validateMonth(day) === true) {
                return true;
            } else {
                return false;
            }

        } else {
            document.getElementById("gunDogrulama").innerHTML = "*Lütfen 1 - 31 aralığında değer giriniz!";
            return false;
        }
    } else {
        validateMonth(day);
        return false;
    }
}

function validateMonth(day) {
    var month = document.getElementById("ay").value;
    if (month !== "Ay seçiniz...") {
        if (day !== "") {
            if (month === "Şubat" && (day === 30 || day === 31)) {
                document.getElementById("gunDogrulama").innerHTML = "*Şubat ayı en fazla 29 çeker!";
                document.getElementById("ayDogrulama").innerHTML = "";
                return false;
            } else {
                document.getElementById("ayDogrulama").innerHTML = "";
                if (validateYear(day, month)) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            document.getElementById("gunDogrulama").innerHTML = "*Lütfen gün değeri giriniz!";
            document.getElementById("yilDogrulama").innerHTML = "";
            return false;
        }

    } else {
        if (day !== "") {
            document.getElementById("ayDogrulama").innerHTML = "*Lütfen ay seçiniz!";
            document.getElementById("yilDogrulama").innerHTML = "";

            return false;
        } else {
            document.getElementById("ayDogrulama").innerHTML = "";
            validateYear(day, month);
            return false;
        }
    }
}

function validateYear(day, month) {
    var year = document.getElementById("yil").value;
    if (year !== "") {
        if (day !== "" && month !== "") {
            if (year > 1850 && year < 2015) {
                document.getElementById("yilDogrulama").innerHTML = "";
                return true;

            } else {
                document.getElementById("yilDogrulama").innerHTML = "*Lütfen 1850 - 2015 aralığında değer giriniz!";
                return false;
            }
        } else {
            document.getElementById("gunDogrulama").innerHTML = "*Lütfen gün değeri giriniz!";
            return false;
        }
    } else {
        if (day !== "" && month !== "") {
            document.getElementById("yilDogrulama").innerHTML = "*Lütfen yıl giriniz!";
            return false;
        } else {
            document.getElementById("yilDogrulama").innerHTML = "";
            return false;
        }
    }
}

function validateMessage() {
    var messageText = document.getElementById("mesaj").value;

    if (messageText === "") {
        document.getElementById("mesajDogrulama").innerHTML = "*Lütfen mesajınızı giriniz!";
        return false;
    } else {
        document.getElementById("mesajDogrulama").innerHTML = "";
        return true;
    }
}
