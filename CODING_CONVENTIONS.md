## Functie -en variablenamen
Bij IMPROVE IT gebruiken wij altijd camelCase voor variablenamen. Dus:

```$variableNaam```

Dus niet:

```$VarName```
```$m_sVarName```

Verder hanteren wij een '_'-prefix bij global variables. Voorbeeld:

```$_ikBenEenGlobal```.

## Comments
Verder is het noodzakelijk dat wij ten alle tijden onze functies commenten op de volgende wijze:

```
/**
* Maakt verbinding met de database.
* 
* Auteur:
* @author Danny Kluin
* 
* Parameters:
* -
*
* Resultaat:
* -
* 
* Versie:
* @version 1.0
*/
```

Je dient dus het volgende te noteren:

* Een korte beschrijving van wat een functie doet
* De auteur van de geschreven functie
* De parameters van de functie. Is deze niet aanwezig? Gebruik dan een streepje.
* De return value van de functie. Is deze niet aanwezig? Gebruik dan een streepje.
* De versie van de functie. Mochten er later revisies gemaakt worden dienen deze gedocumenteerd te worden.