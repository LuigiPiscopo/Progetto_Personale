<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

<h1 align="center">Progetto Personale - Web App Full Stack</h1>

<p align="center">
  Una piattaforma moderna e scalabile sviluppata con Laravel, Node.js e Tailwind CSS.
</p>

---

## 🚀 Panoramica del Progetto

Questo progetto personale è una piattaforma web completa che integra funzionalità moderne di gestione contenuti (CRUD), autenticazione, API RESTful e un'interfaccia utente responsive e intuitiva.

È stato creato con l’obiettivo di esplorare e padroneggiare lo sviluppo full-stack usando tecnologie moderne e best practices.

## 🧰 Tecnologie Utilizzate

- **Laravel** – Backend solido, gestione delle API, autenticazione, routing.
- **Node.js** – Gestione del frontend moderno con Vite.
- **Tailwind CSS** – Styling responsive e personalizzabile.
- **Vite** – Compilazione veloce e sviluppo frontend ottimizzato.
- **MySQL** – Persistenza dei dati attraverso un database relazionale.

## 🔧 Funzionalità Principali

- Sistema di autenticazione sicuro
- Operazioni CRUD sui contenuti
- Gestione utenti
- Interfaccia moderna e mobile-friendly
- Comunicazione frontend-backend via API

## 🛠️ Come Installare

Segui questi passaggi per eseguire il progetto in locale:

```bash
# Clona il repository
git clone https://github.com/LuigiPiscopo/Progetto_Personale.git
cd Progetto_Personale

# Installa le dipendenze PHP
composer install

# Installa le dipendenze JavaScript
npm install

# Configura l’ambiente
cp .env.example .env
php artisan key:generate

# Esegui le migrazioni
php artisan migrate

# Avvia il server Laravel
php artisan serve

# Avvia il compilatore frontend
npm run dev
