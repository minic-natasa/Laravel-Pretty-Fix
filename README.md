Pretty Fix je Laravel aplikacija koja koristi Blade šablone za izradu dinamičkih web stranica. Ova aplikacija omogućava CRUD (Create, Read, Update, Delete) operacije za upravljanje objavama. Svaka objava sadrži naslov, tekstualni sadržaj i cover fotografiju.

Za pokretanje aplikacije potrebno je instalirati Laravel i konfigurisati okruženje u skladu sa Laravel dokumentacijom. Nakon instalacije, potrebno je kreirati bazu podataka i povezati je sa aplikacijom putem konfiguracionog fajla .env.

Korišćene su migracije za definisanje struktura tabela u bazi podataka. Seederi su korišćeni za populaciju baze podataka početnim podacima, što omogućava lakši početak rada sa aplikacijom.

**Model User:** Predstavlja korisnike sistema. Sadrži osnovne informacije kao što su ime, email i šifra.
**Model Post:** Sadrži informacije o objavama koje korisnici kreiraju. Svaka objava je povezana sa korisnikom koji ju je kreirao.
Odnos između modela User i Post je 'jedan prema mnogo', gde jedan korisnik može kreirati više objava.

**HomeController:** Upravlja prikazom početne stranice.
**PagesController:** Upravlja statičkim stranicama kao što su About i Services.
**PostsController: **Upravlja CRUD operacijama za objave.
**AuthController:** Upravlja registracijom i prijavom korisnika.
Web rute su definisane za svaku od navedenih funkcionalnosti, omogućavajući navigaciju i interakciju sa aplikacijom.

Kreiran je REST API koji omogućava pristup podacima u JSON formatu. API je posebno koristan za integraciju sa drugim sistemima ili za razvoj mobilnih aplikacija koje koriste podatke iz Pretty Fix aplikacije.

Implementirani su mehanizmi za registraciju i prijavu korisnika, kao i zaštita ruta putem middleware-a koji zahteva autentikaciju.

Pretty Fix je kompletna aplikacija koja demonstrira rad i fleksibilnost Laravela i Blade šablona. Kroz različite funkcionalnosti i integracije, ova aplikacija služi kao odličan primer za razvoj modernih web aplikacija.

___________________________

Pretty Fix is a Laravel application that utilizes Blade templates to create dynamic web pages. The application enables CRUD (Create, Read, Update, Delete) operations for managing posts. Each post includes a title, body text, and a cover photo.

To run the application, Laravel must be installed and the environment set up according to Laravel's documentation. After installation, a database should be created and connected to the application via the .env configuration file.

Migrations are used to define the structures of database tables. Seeders are used to populate the database with initial data, facilitating an easier start with the application.

**User Model:** Represents system users. It contains basic information such as name, email, and password.
**Post Model: **Contains information about posts created by users. Each post is associated with the user who created it.
The relationship between the User and Post models is 'one-to-many', where one user can create multiple posts.

**HomeController:** Manages the display of the homepage.
**PagesController:** Manages static pages such as About and Services.
**PostsController:** Manages CRUD operations for posts.
**AuthController:** Manages user registration and login.
Web routes are defined for each of these functionalities, enabling navigation and interaction with the application.

A REST API has been created that allows access to data in JSON format. The API is particularly useful for integration with other systems or for developing mobile applications that use data from the Pretty Fix application.

Mechanisms for user registration and login have been implemented, along with route protection through middleware requiring authentication.

Pretty Fix is a complete application that demonstrates the power and flexibility of Laravel and Blade templates. Through its various functionalities and integrations, this application serves as an excellent example for developing modern web applications.
