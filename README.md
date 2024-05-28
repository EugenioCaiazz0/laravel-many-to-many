**Sviluppo**
1. Creare il DB
2. Fare la migration
3. Nelle view aggiungere le cartelle guest e admin
4. customizzate  il layout guest e aggiungere la view home in view/guest
5. creare il controller Guest/PageController che in index restituisce la view guest.home
6. Aggiornare la rotta home
7. Creare il layout admin.blade
8. Creare il Admin/DashboardController chi in index punta alla view admin.home che estende il layout admin
9. Raggruppare le rotte admin protette da Middleware impostando prefisso e nome
10. Creare la rotta admin/home che punta a DashboardController@index
11. Modificare RouteServiceProvider in modo che la rotta admin di default sia ‘/admin’
12. Nell’header del layout admin collegare la home della dashboard, la home pubblica, mettere il nome dell’utente loggato e il bottone funzionante logout

**BONUS**
Creazione del modello `Project` con relativa migrazione, seeder, controller e rotte e stampare la index  dei progetti (protetta da middleware)


*Add*
- Aggiungere, fra le rotte admin, anche la gestione (CRUD) della tabella “projects”
- Aggiungere due tabelle `technologies` e `types` con le relative *CRUD* (meglio se su una pagina sola)

*Add* 
Aggiungiamo una nuova entità **Technology**. Questa entità rappresenta le tecnologie utilizzate ed è in relazione **many to many** con i progetti

- creare la migration per la tabella `technologies`
- creare il model `Technology`
- creare la migration per la tabella pivot `project_technology`
- aggiungere ai model Technology e Project i metodi per definire la relazione many to many
- visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti
- permettere all’utente di associare le tecnologie nella pagina di creazione e modifica di un progetto
- gestire il salvataggio dell’associazione progetto-tecnologie con opportune regole di validazione
Bonus:
creare il seeder per la tabella pivot
