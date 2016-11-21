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
