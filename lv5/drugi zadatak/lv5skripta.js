class Osoba {
    constructor(ime, godina, redStudent, najdraziKolegiji) {
        this.ime = ime;
        this.godina = godina;
        this.redStudent = redStudent;
        this.najdraziKolegiji = najdraziKolegiji;
    }

    ispis() {
        console.log(`Ime: ${this.ime}`);
        console.log(`Godina: ${this.godina}`);
        console.log(`Redoviti student: ${this.redStudent}`);
        console.log(`Najdrazi kolegiji: ${this.najdraziKolegiji}`);
    }
}


let objekt;
dohvatiJSON("primjer.json");

async function dohvatiJSON(file){
    let objektFetch = await fetch(file);
    objekt = await objektFetch.json();

    console.log(objekt);

    promijeniJSON();
}

async function promijeniJSON(){
    objekt[1].ime = "Matej";
    objekt[1].godina = 21;
    objekt[1].redStudent = true;
    objekt[1].najdraziKolegiji = ["Web programiranje", "Programsko inzenjerstvo"];
    
    localStorage.setItem("primjer", JSON.stringify(objekt));
}