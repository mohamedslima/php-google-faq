<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <!-- link css -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header>
        <div class="header-top">
            <!-- logo -->
            <div class="header-logo">
                <img src="img/logo.jpeg" alt="logo">
            </div>
            <!-- user -->
            <div class="header-user">
                <img src="img/user.jpeg" alt="user">
            </div>
        </div>
        <nav>
            <!-- menu -->
            <div>
                <ul class="header-menu">
                    <li>Introduzione</li>
                    <li>Norme sulla Privacy</li>
                    <li>Termini di servizio</li>
                    <li>Tecnologie</li>
                    <li>Domande Frequenti</li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <!-- array google faq -->
        <?php

        $faq = [
            [
                "question" => "Come state implementando la recente decisione della Corte di giustizia 
                dell'Unione europea (CGUE) relativa al diritto all'oblio?",
                "answer" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde 
                conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno 
                il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di 
                ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, 
                irrilevanti o non più rilevanti, o eccessivi.
                Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma 
                la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo 
                perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono 
                informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le 
                informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza 
                professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). 
                Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per
                 prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità 
                 garante per la protezione dei dati personali nel tuo paese.
                ",
            ],
            [
                "question" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
                "answer" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. 
                Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e 
                accessibili quando ne hai bisogno.
                Siamo costantemente al lavoro per garantire un'elevata sicurezza, 
                proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te.
                 Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti 
                 di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. 
                 Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, 
                 la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, 
                 hai il massimo controllo.
                ",
            ],
            [
                "question" => "Perché il mio account è associato a un paese?",
                "answer" => "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. 
                Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, 
                in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.
                I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, 
                potrebbe occorrere circa un anno per aggiornare l'associazione del paese.
                Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il 
                paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP 
                oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato.
                ",
            ],
            [
                "question" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
                "answer" => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare 
                alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer.
                 Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL 
                 (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. 
                 Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui.
                  Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface).
                   Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.
                ",
            ],
        ];
        ?>
        <div class="container">
            <?php
            foreach ($faq as $item) { ?>
                <h2 class="title"><?php echo $item["question"]; ?></h2>
                <p class="paragraph"><?php echo $item["answer"]; ?></p>
            <?php }; ?>
        </div>

    </main>
</body>

</html>