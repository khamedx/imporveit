## De leeswijzer

Onze broncode is opgesteld m.b.v. de MVC-methode. Wij werken vooral vanuit de core-map, en wij kennen de volgende submappen:

- **Helpers** - Centrale, herbruikbare broncode kan je hier vinden. Dus het saniteren en valideren van gebruikersinput gebeurt in een helper.
- **Resources** - Alle client-side resources zoals stylesheets zijn hier te vinden.
- **Models** - Models handelen databaseverkeer af en zetten gesaniteerde data door naar de database.
- **Controllers** - Dit is de tussenfase tussen een view en een model. Hier gebeurt het een saniteren en valideren van data en de communicatie van en naar een view.
- **Views** - Met de views wordt de HTML opgebouwd en als response teruggestuurd naar de browser.