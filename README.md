# php-oop-1

- Inizio a creare una classe su movie.php e definisco i membri della classe
- Creo un costruttore della classe
- Creo due oggetti della classe Movie 
- Visualizzo le informazioni sui film
- Ho creato un array $movies che contiene gli oggetti Movie nel file db.php. Poi ho utilizzato un ciclo foreach per iterare attraverso l'array e visualizzare i dettagli di ciascun film nell'index.php.

# La logica di Production.php
- Creo la classe Production che contiene tre campi protetti per immagazzinare le informazioni sulla produzione: $title, $director, e $genres.

- Nel costruttore __construct, ho passato tre argomenti: $title, $director, e $genres. Questi argomenti vengono utilizzati per inizializzare i campi corrispondenti della classe Production.

- Ho creato un metodo getDetails per ottenere i dettagli della produzione in un formato HTML. Incui genera una stringa che include il titolo della produzione ($this->title), il regista ($this->director) e i generi ($this->genres).

- All'interno del metodo, ho aggiunto delle parti HTML per formattare i dettagli. I generi vengono iterati attraverso un ciclo foreach per creare una lista di generi separati da virgole. L'ultima virgola in eccesso viene rimossa utilizzando la funzione rtrim.

- Infine, il metodo restituisce la stringa HTML formattata contenente i dettagli della produzione.