eBook
Ramiza Hošo, 16441

Spirala 1:

Napravljene su skice kako bi svaka od stranica trebale izgledati (Pocetna, Knjige, Linkovi, Onama i kontakt) u Paintu, kao i skice izgleda za mobilne uređaje.

Kreirane stranice su responzivne i imaju grid-view izgled. Također, omogućen je izgled za mobilne uređaje pomoću media query-a koji je napisan u CSS-u. Implementirano je nekoliko html formi, kao i funkcionalni meni koji je dostupan sa svake stranice. Izgled web stranice je konzistentan, te su elementi poravnati.

Lista fajlova:

Pocetna.html - U ovom fajlu, pored menija koji je dostupan na svim podstranicama, nalaze se objavljene novosti koje su poravnate u redove i kolone.

Knjige.html - U ovom fajlu nalazi se tabela sa dostupnim knjigama, kao i mogucnost unosa željene knjige, te pretrazivanje da li postoji.

Linkovi.html - U ovom fajlu se nalaze linkovi stranica na kojima postoji eBook knjizara na društvenim mrežama (Facebook, Instagram,...).

Onama.html - Historijat, nastanak i osnovne informacije o knjizari kao i mogućnost unosa grada gdje je nakon klika na dugme "Pretraži"                  moguće ispisati adresu poslovnice u unesenemom gradu.
			 
Kontakt.html - U ovom fajlu se nalazi forma koja omogućava korisniku da pošalje sugestije, pohvale, primjedbe i sve što želi                              administratoru web stranice.

stil.css - U tom fajlu se nalazi definisan stil svih stranica.

SkiceDesktop:
               Pocetna.jpg
               Knjige.jpg
               Linkovi.jpg
               Onama.jpg
               Kontakt.jpg
SkicaMobitel:
              Pocetna.jpg
              Knjige.jpg
              Linkovi.jpg
              Onama.jpg
              Kontakt.jpg
	    
SPIRALA2:

Sva polja u formi posjeduju JavaScript validaciju, te ukoliko je unos nevalidan submit je onemogućen. Svaka poruka o neispravnosti se ispisuje iznad/ispod nevalidnog polja.

Koristeći JavaScript implementiran je dorpdown meni. Kada se klikne na podstranicu "Galerija" koja je ponuđena u meniju pojavi se dropdown meni gdje se nudi odabir 4 opcije ("Albumi.html", "Cestitke.html", "Knjizevnost.html" i "Pribor.html").

Također, implementirana je galerija slika na podstranicama "Albumi.html", "Cestitke.html", "Knjizevnost.html" i "Pribor.html" (Koje su stavke dopdown menija). Ukoliko kliknemo na neku od slika tada se ona pojavi preko cijelog ekrana, a na escape se vraća na normalni izgled, odnosno, na galeriju sa slikama.

Koristeći Ajax, na podstranici "Knjizevnost.html" dolazi do promjene sadrzaja stranice bez njenog reload-a ukoliko kliknemo na dugme koje se nalazi ispod galerije sa slikama.

Lista fajlova

Pocetna.html - U ovom fajlu, pored menija koji je dostupan na svim podstranicama, nalaze se objavljene novosti koje su poravnate u redove i kolone.

Knjige.html - U ovom fajlu nalazi se tabela sa dostupnim knjigama, kao i mogucnost unosa željene knjige, te pretrazivanje da li postoji.

Linkovi.html - U ovom fajlu se nalaze linkovi stranica na kojima postoji eBook knjizara na društvenim mrežama (Facebook, Instagram,...).

Onama.html - Historijat, nastanak i osnovne informacije o knjizari kao i mogućnost unosa grada gdje je nakon klika na dugme "Pretraži"                  moguće ispisati adresu poslovnice u unesenemom gradu.
			 
Kontakt.html - U ovom fajlu se nalazi forma koja omogućava korisniku da pošalje sugestije, pohvale, primjedbe i sve što želi                              administratoru web stranice.

Galerija.html - U ovim fajlom je omogućena još jedna stavka menija koja nudi dropDown meni.

Albumi.html - U ovom fajlu se nalazi galerija sa slikama.

Cestitke.html - U ovom fajlu se nalazi galerija sa slikama.

Knjizevnost.html - U ovom fajlu se nalazi galerija sa slikama.

Pribor.html - U ovom fajlu se nalazi galerija sa slikama.

Ajax.js - JavaScript fajl koji omogućava mjenjanje sadrzaja na podstranici "Knjizevnost.html" bez reload-a.

DropDown.js - JavaScript fajl koji omogućava dropDown meni kad se klikne na stavku "Galerija" glavnog menija

galerija.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Knjizevnost.html"

galerijaAlbum.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Albumi.html"

galerijaCestitke.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Cestitke.html"

galerijaPribor.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Pribor.html"

validacija.js - Fajl koji omogućava validaciju svih polja formi na stranici

AjaxInformacije.txt - Fajl koji sadrzi tekst koji se dodajem bez reload-a stranice

stil.css - U tom fajlu se nalazi definisan stil svih stranica.

Kreirane stranice su i dalje responzivne i imaju grid-view izgled. Također, omogućen je izgled za mobilne uređaje pomoću media query-a 

SPIRALA 3:

1)

Koristeći PHP napravljena je  serializacija podataka (Knjige i novosti) u XML fajlove. Također, omogućen je unos, izmjena (knjiga, ali ne i novosti), prikazivanje i brisanje podataka koji se nalaze u XML fajlovima.

Svi podaci koji se unose u XML fajlove su  validirani kako u PHP-u, tako i u JS. Prilikom pisanja koda paženo je na XSS ranjivost napisanog koda. 

Unos, izmjenu i brisanje podataka u/iz XML fajlova je u mogućnosti raditi samo korisnik koji je prijavljen kao admin čiji podaci (username i password)se nalazi u XML fajlu može raditi samo admin korisnik.

2)

Adminu je omogućeno download podataka(Spisak raspoloživih knjiga) u obliku csv fajla. Podaci koji se nalaze u csv fajlu su upisani iz XML fajla.

3)

Opcija generisanja izvještaja u obliku pdf fajla dostupna je svim korisnicima web stranice na podstranici "Knjige.php". Ovaj izvještaj sadrži spisak knjiga koje su dostupne u XML fajlu. Korištena je  fpdf biblioteka.

4)

Napravljena je pretraga podataka sa prijedlozima. Na podstranici "Knjige.php" nalazi se forma unutar koje postoji input za pretragu. Prilikom unosa, npr, sloga "St" pretražuje se polje naslov knjige i autor knjige i ispisuju se svi podaci iz XMLa koji zadovoljavaju uslov, odnoso, u naslovu knjige ili autoru posjeduju uneseni slog. Nakon klika na "Pretraži" prikazuju se svi podaci koji zadovoljavaju unesenu vrijednost inputa za pretragu. Dakle, pretraga je za dva polja (naslov i autor knjige).

5)

Napravljen je deployment stranice na OpenShift-u. Međutim, prilikom kreiranja računa i registracije nisam uspjela dobiti pristup, stavljena sam u listu čekanja, pa je deployment moje stranice urađen na račun od prijateljice.

LINK: http://knjizara-ikarasofti1.rhcloud.com/Spirala3/Knjige.php   (Morala sam u URL navesti ime foldera "Spirala3" (/Spirala3/Knjige.php)).

OBRAZLOŽENJE: http://pokit.org/get/?412022e5e2d15060e74be0c7b8e242b2.jpg (nisam mogla kreirati svoj račun).

UPDATE: Nakon što sam kreirala svoj račun link na OpenShiftu za moj projekat je:
http://knjizara-knjizara.44fs.preview.openshiftapps.com/Pocetna.php



SPISAK FAJLOVA:

Pocetna.php - U ovom fajlu, pored menija koji je dostupan na svim podstranicama, nalaze se objavljene novosti (generisane na osnovu                  "Novost.xml" fajla).

Knjige.php - U ovom fajlu nalazi se tabela sa dostupnim knjigama (generisana na osnovu "Knjige.xml" fajla), kao i mogucnost pretrage                  unesene vrijednosti.

Linkovi.php - U ovom fajlu se nalaze linkovi stranica na kojima postoji eBook knjizara na društvenim mrežama (Facebook, Instagram,...).

Onama.php - Historijat, nastanak i osnovne informacije o knjizari kao i mogućnost unosa grada gdje je nakon klika na dugme "Pretraži"                  moguće ispisati adresu poslovnice u unesenemom gradu.
			 
Kontakt.php - U ovom fajlu se nalazi forma koja omogućava korisniku da pošalje sugestije, pohvale, primjedbe i sve što želi                              administratoru web stranice.

Galerija.php - U ovim fajlom je omogućena još jedna stavka menija koja nudi dropDown meni.

Albumi.php - U ovom fajlu se nalazi galerija sa slikama.

Cestitke.php - U ovom fajlu se nalazi galerija sa slikama.

Knjizevnost.php - U ovom fajlu se nalazi galerija sa slikama.

Pribor.php - U ovom fajlu se nalazi galerija sa slikama.

Ajax.js - JavaScript fajl koji omogućava mjenjanje sadrzaja na podstranici "Knjizevnost.html" bez reload-a.

DropDown.js - JavaScript fajl koji omogućava dropDown meni kad se klikne na stavku "Galerija" glavnog menija

galerija.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Knjizevnost.html"

galerijaAlbum.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Albumi.html"

galerijaCestitke.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Cestitke.html"

galerijaPribor.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Pribor.html"

validacija.js - Fajl koji omogućava validaciju svih polja formi na stranici

AjaxInformacije.txt - Fajl koji sadrzi tekst koji se dodajem bez reload-a stranice

stil.css - U tom fajlu se nalazi definisan stil svih stranica.

(u odnosu na prethodnu spiralu dodani su sljedeći fajlovi)

Login.php - U ovom fajlu je omogućen Login za admina. Njegovi podaci se nalaze zapisani u XML fajlu pod nazivom "AdminPodaci.xml".
            Ukoliko uneseni username i password odgovaraju podacima u xml-u Admin je uspješno logovan. U suprotnom, prijavljuje se                 greška.
	    
AdminOpcije.php - Ovaj fajl nudi opcije koje se nalaze u postavci spirale, a koje može izvršavati samo korisnik logovan kao admin

MyPDF.php - U ovom fajlu je omogućeno generisane pdf fajla koji je dostupan na podstranici "Knjige.php" , a koji sadrži spisak dostupnih            knjiga u XML fajlu "Knjige.xml".

AdminPodaci.xml - U ovom fajlu nalaze se podaci o adminu (username i password) koji moraju odgovarati unesenim podacima sa podstranice                     "Login.php" ukoliko se zelite logovati kao admin.

UnosPodataka.php - U ovom fajlu omogućeno je dodavanje novih knjiga (naslov knjige, žanr i autora knjige) u "Knjige.xml", pri čemu se                      unesene knjige prikazuju na podstranici "Knjige.php" u vidu tabele.(Prikazivanje se vrsi na osnovu podataka koji se                      nalaze u navedenoj XML datoteci).

Novost.xml - U ovom fajlu se nalaze XML podaci o unesenim novostima koji služe za prikaz novosti na podstranici "Početna.php".

csvFile.csv - U ovom fajlu je omogućen download spiska knjiga dostupnih u "Knjige.xml" u csv formatu.

Knjige.csv - U ovom fajlu se nalazi spisak knjiga koje admin može downloadati, a koje su generisane na osnovu "Knjige.xml" fajla.

Knjige.xml - U ovom fajlu se nalaze XML podaci o unesenim knjigama koji služe za prikaz knjiga na podstranici "Knjige.php".

UnosNovosti.php - U ovom fajlu omogućeno je dodavanje novosti (naslov novosti, sadrzaj i autora novosti) u "Novost.xml" fajl. 

BrisanjeNovosti.php - U ovom fajlu je omogućeno brisanje novosti kako sa podstranice za prikazivanje tako i iz odgovarajućeg XML fajla.

ajaxPretraga.js - U ovom fajlu je omogućena pretraga sa prijedlozima, pri čemu se pretražuju dva polja (naslov knjige i ime autora).                       Također je omogućen prikaz svih podataka koji zadovoljavaju uslov pretrage.

BrisanjeKnjige.php - U ovom fajlu je omogućeno brisanje novosti kako sa podstranice za prikazivanje tako i iz odgovarajućeg XML fajla.

Prijedlog.php - U ovom fajlu je omogućena pretraga sa prijedlozima, pri čemu se pretražuju dva polja (naslov knjige i ime autora).

Prijedlog2.php - U ovom fajlu je omogućena pretraga sa prijedlozima, pri čemu se pretražuju dva polja (naslov knjige i ime autora).

UrediKnjige.php - U ovom fajlu je omogućeno uređivanje knjiga kao i spašavanje novih vrijednosti u "Knjige.xml" fajl.

Kreirane stranice su i dalje responzivne i imaju grid-view izgled.


SPIRALA 4

a) 
Napravljena je baza pod imenom "knjizaraebook.sql" koja posjeduje 5 tabela od kojih su tri međusobno povezane. Tabele koje su povezane su "poslovnice", "novosti" i "knjige". Dakle, knjige i novosti koje su objavljene moraju da sadrže i informaciju na koju poslovnicu se odnose novododane novosti i knjige. Prvo je kreirana tabela "poslovnice", a zatim "novosti" i "knjige" pri cemu je u njih dodano polje "poslovnice" tipa INT koje je foreign key na tabele "knjige" i "novosti". Tabela "adminpodaci" sadrzi polja username i password koja moraju odgovarati vijednostima unesenim u formi za login, ukoliko želimo pristupati opcijama admina. U tabeli "webservis" se nalaze polja koja sadrži podatke za web servis i ispis u json formatu. Dodana je forma za unos poslovnice.

b)
Napravljena je php skripta "SQL.php" koja sve podatke iz postojećih XML fajlova prebacuje u bazu podataka. Pri tom skripta u bazu upisuje samo podatke koje ne postoje u bazi. Ova opcija je dostupna samo ukoliko Ste logovani kao administrator. Ukoliko Ste logovani kao administrator i kliknete na opcijama dugme "SQL" pojavit će Vam se forma sa izborom koji XML (jer postoje tri XML fajla : Knjige.xml, Novost.xml i Poslovnice.xml) fajl želite da upišete u bazu. Ukoliko podaci već postoje u bazi pojavljuje se obavijest u vidu alert box-a.

c)
Sve php skripte koje su radile sa XML fajlovima sada rade sa bazom podataka, a to se odnosi na upisivanje u bazu, prikaz iz baze, brisanje i uređivanje.

d)
Link na OpenShiftu:

e) 
Ukoliko Ste logovani kao administrator u opcijama će Vam se ponuditi dugme "WebServis". Ukoliko kliknete na to dugme pojavit će Vam se forma sa izborom da li želite da Vam se podaci ispišu u JSON formatu i da se vratite nazad na opcije admina. Ukoliko kliknete na dugme JSON format izvršava se "REST.php" skripta unutar koje je implementirana GET metoda REST web servisa koja vraća podatke u obliku JSON-a.

f) 
Koristeći Postman testirala sam napisani web servis i u nastavku je priložen screenshot različitih slučajeva upotrebe:
http://pokit.org/get/?a0387e6809d811272f975c29908248b8.jpg
http://pokit.org/get/?569cf4b7f91e8f3361e01f90236c5b51.jpg
http://pokit.org/get/?91ecb756e7aaeab739046817a195abf4.jpg
http://pokit.org/get/?b843b4e6503f560521e213c8ab29f1c1.jpg

FAJLOVI

Pocetna.php - U ovom fajlu, pored menija koji je dostupan na svim podstranicama, nalaze se objavljene novosti (generisane na osnovu                  "Novost.xml" fajla).

Knjige.php - U ovom fajlu nalazi se tabela sa dostupnim knjigama (generisana na osnovu "Knjige.xml" fajla), kao i mogucnost pretrage                  unesene vrijednosti.

Linkovi.php - U ovom fajlu se nalaze linkovi stranica na kojima postoji eBook knjizara na društvenim mrežama (Facebook, Instagram,...).

Onama.php - Historijat, nastanak i osnovne informacije o knjizari kao i mogućnost unosa grada gdje je nakon klika na dugme "Pretraži"                  moguće ispisati adresu poslovnice u unesenemom gradu.
			 
Kontakt.php - U ovom fajlu se nalazi forma koja omogućava korisniku da pošalje sugestije, pohvale, primjedbe i sve što želi                              administratoru web stranice.

Galerija.php - U ovim fajlom je omogućena još jedna stavka menija koja nudi dropDown meni.

Albumi.php - U ovom fajlu se nalazi galerija sa slikama.

Cestitke.php - U ovom fajlu se nalazi galerija sa slikama.

Knjizevnost.php - U ovom fajlu se nalazi galerija sa slikama.

Pribor.php - U ovom fajlu se nalazi galerija sa slikama.

Ajax.js - JavaScript fajl koji omogućava mjenjanje sadrzaja na podstranici "Knjizevnost.html" bez reload-a.

DropDown.js - JavaScript fajl koji omogućava dropDown meni kad se klikne na stavku "Galerija" glavnog menija

galerija.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Knjizevnost.html"

galerijaAlbum.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Albumi.html"

galerijaCestitke.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Cestitke.html"

galerijaPribor.js - Fajl koji omogućava širenje slike preko cijelog ekrana i vraćanje na prvobitni izgled pritiskom na escape na podstranici "Pribor.html"

validacija.js - Fajl koji omogućava validaciju svih polja formi na stranici

AjaxInformacije.txt - Fajl koji sadrzi tekst koji se dodajem bez reload-a stranice

stil.css - U tom fajlu se nalazi definisan stil svih stranica.

Login.php - U ovom fajlu je omogućen Login za admina. Njegovi podaci se nalaze zapisani u XML fajlu pod nazivom "AdminPodaci.xml".
            Ukoliko uneseni username i password odgovaraju podacima u xml-u Admin je uspješno logovan. U suprotnom, prijavljuje se                 greška.
	    
AdminOpcije.php - Ovaj fajl nudi opcije koje se nalaze u postavci spirale, a koje može izvršavati samo korisnik logovan kao admin

MyPDF.php - U ovom fajlu je omogućeno generisane pdf fajla koji je dostupan na podstranici "Knjige.php" , a koji sadrži spisak dostupnih            knjiga u XML fajlu "Knjige.xml".

AdminPodaci.xml - U ovom fajlu nalaze se podaci o adminu (username i password) koji moraju odgovarati unesenim podacima sa podstranice                     "Login.php" ukoliko se zelite logovati kao admin.

UnosPodataka.php - U ovom fajlu omogućeno je dodavanje novih knjiga (naslov knjige, žanr i autora knjige) u "Knjige.xml", pri čemu se                      unesene knjige prikazuju na podstranici "Knjige.php" u vidu tabele.(Prikazivanje se vrsi na osnovu podataka koji se                      nalaze u navedenoj XML datoteci).

Novost.xml - U ovom fajlu se nalaze XML podaci o unesenim novostima koji služe za prikaz novosti na podstranici "Početna.php".

csvFile.csv - U ovom fajlu je omogućen download spiska knjiga dostupnih u "Knjige.xml" u csv formatu.

Knjige.csv - U ovom fajlu se nalazi spisak knjiga koje admin može downloadati, a koje su generisane na osnovu "Knjige.xml" fajla.

Knjige.xml - U ovom fajlu se nalaze XML podaci o unesenim knjigama koji služe za prikaz knjiga na podstranici "Knjige.php".

UnosNovosti.php - U ovom fajlu omogućeno je dodavanje novosti (naslov novosti, sadrzaj i autora novosti) u "Novost.xml" fajl. 

BrisanjeNovosti.php - U ovom fajlu je omogućeno brisanje novosti kako sa podstranice za prikazivanje tako i iz odgovarajućeg XML fajla.

ajaxPretraga.js - U ovom fajlu je omogućena pretraga sa prijedlozima, pri čemu se pretražuju dva polja (naslov knjige i ime autora).                       Također je omogućen prikaz svih podataka koji zadovoljavaju uslov pretrage.

BrisanjeKnjige.php - U ovom fajlu je omogućeno brisanje novosti kako sa podstranice za prikazivanje tako i iz odgovarajućeg XML fajla.

Prijedlog.php - U ovom fajlu je omogućena pretraga sa prijedlozima, pri čemu se pretražuju dva polja (naslov knjige i ime autora).

Prijedlog2.php - U ovom fajlu je omogućena pretraga sa prijedlozima, pri čemu se pretražuju dva polja (naslov knjige i ime autora).

UrediKnjige.php - U ovom fajlu je omogućeno uređivanje knjiga kao i spašavanje novih vrijednosti u "Knjige.xml" fajl.

(u odnosu na prethodnu spiralu dodani su sljedeći fajlovi)

Poslovnice.php - U ovom fajlu je omogućeno prikazivanje svih poslovnica koje posjeduje knjizara "eBook", odnosno, grad i adresu gdje se                  poslovnica nalazi.

DodajPoslovnicu.php - U ovom fajlu  omogućeno je putem forme dodavanje nove poslovnice, pri čemu se podaci upisuju u bazu podataka,                         odnosno, u tabelu "poslovnice". Dodavanje nove poslovnice je moguće ukoliko ste logovani kao administrator.

Poslovnice.xml -  U ovom fajlu se nalaze XML podaci o unesenim poslovnicama koji su poslije na klik dugmeta upisani u bazu

SQL.php - U ovom fajlu je omogućeno upisivanje podataka iz XML fajlova u bazu podataka u odgovarajuće tabele.

REST.php - U ovom fajlu je  implementirana GET metoda REST web servisa koja vraća podatke u obliku JSON-a.

WebServis.php - U ovom fajlu je omogućeno izvršavanje skripte "REST.php" na klik dugmeta. 

knjizaraebook.sql - baza podataka.

Kreirane stranice su i dalje responzivne i imaju grid-view izgled.
