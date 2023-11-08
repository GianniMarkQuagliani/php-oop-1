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

# La logica di Movie.php
- Creo una class Movie extends Production che eredita tutti i campi e i metodi pubblici o protetti dalla classe Production.
- All'interno della classe Movie, ci ho messo due campi protetti ($published_year e $running_time) specifici per i film.
- Questi campi contengono l'anno di pubblicazione del film e la durata in minuti del film che vengono definiti dal costruttore della classe Movie.
- Che accetta cinque argomenti: $title, $director, $genres, $published_year, e $running_time, che vengono utilizzati per inizializzare i campi della classe.
- poi creato parent::__construct($title, $director, $genres); che chiama il costruttore della classe genitore Production con i primi tre argomenti (titolo, regista e generi) così sono sicuro che i campi comuni vengano inizializzati correttamente.
- Successivamente, che scritto $this->published_year e $this->running_time che vengono inizializzati con i valori forniti come argomenti.
- Ho creato un metodo chiamato getDetails che restituisce una stringa contenente i dettagli del film.
- Aggiorno l'array $movies nel file db.php che contiene una lista di oggetti Movie che rappresentano diversi film, ciascuno con i propri dettagli come titolo, regista, generi, anno di pubblicazione e durata.

# La logica di TvSerie.php

- è uguale a quella di Movie.php