# Aplicatie Organizare evenimente

Cerinte:

•	Administarea  informatiilor legate de evenimente, bilete, locatii si fonduri
•	Modificarea/stergerea/adaugarea datelor facil, printr-o interfata grafica
•	Administrarea usoara a legaturilor eveniment-planner

Relatii intre tabele:
•	Bilete - Evenimente 1 – n (un eveniment poate avea mai multe tipuri de bilete)
•	Evenimente - Locatie 1 – n (o locatie poate gazdui mai multe evenimente)
•	Evenimente - Planneri 1 – n (un planner se poate ocupa de mai multe evenimente simultan)
•	Evenimente - Sponsori n – n (mai multi sponsori pot finanta mai multe evenimente)

Functionalitatile aplicatiei:
•	Adaugare/Modificare/Stergere Bilete
•	Adaugare/Modificare/Stergere Sponsori
•	Vizualizare Bilete/Sponsori
•	Interogari

Interogari:

1.	Afisarea evenimentelor coordonate de un organizator la alegere.
2.	Afisarea evenimentelor ce au loc intr-un oras la alegere.
3.	Afisarea organizatorului ce coordoneaza un eveniment ales.
4.	Afisarea evenimentului ce a primit o suma mai mare decat cea aleasa de la sponsorul cu id-ul 1.
5.	Sponsori ce au oferit unui eveniment suma de 3000 de lei.
6.	Evenimentele la care exista un bilet care costa mai mult decat media.
7.	Evenimentele ale caror locatii au un spatiu mai mare decat media.
8.	Plannerii ai caror evenimente prezinta o limita de varsta mai mare decat media.
9.	Evenimente organizate de plannerul Popescu in ordinea descrescatoare a datei de incepere.


Proiectul a fost dezvoltat folosind PHP,SQL si phpMyAdmin.
