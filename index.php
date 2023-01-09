<?php 

class Movie {
    public $title;
    public $genre;
    public $director;
    public $year;
    public $language;
    public $plot;
    private $vote;

    public function __construct(string $_title,string $_genre,int $_year,int $_vote)
    {
        $this->title=$_title;
        $this->genre=$_genre;
        $this->year=$_year;
        $this->setVote($_vote);
    }
    public function setVote($_vote){
        $this->vote=$_vote/2;
    }
    public function getVote(){
        return $this->vote;
    }
}

$oldBoy= new Movie("Old Boy","Thriller",2003,9);
$oldBoy->director="Park Chan-wook";
$oldBoy->language="Corean";
$oldBoy->plot="1988. Oh Dae-su è un uomo comune che il giorno del quarto compleanno di sua figlia, dopo essere stato rilasciato dalla polizia che lo aveva arrestato per ubriachezza molesta, 
viene rapito. Risvegliatosi, scopre di essere rinchiuso in una piccola e squallida cella-appartamento dalla quale è impossibile fuggire, dotata di un letto, un bagno e una vecchia TV. 
È proprio guardando il telegiornale che Dae-su, intrappolato e sconvolto, apprende dell'omicidio della moglie il quale viene attribuito proprio a lui. 
Logorato dalla prigionia e ignaro delle ragioni di questa tortura psicologica, l'uomo tenta il suicidio più volte, ma viene sempre salvato dai suoi misteriosi carcerieri. 
Aiutandosi con degli utensili di fortuna, Dae-su riesce lentamente ad aprire una piccola breccia in una parete, ma scopre di trovarsi in un grattacielo. Intanto gli anni passano, 
e per non impazzire Dae-su impegna il tempo scrivendo un'autobiografia, allenandosi nella shadowboxing contro il muro e cercando di capire chi possa odiarlo a tal punto da fargli questo.
Trascorsi quindici anni, Dae-su improvvisamente viene liberato sul tetto di un palazzo in un punto imprecisato della città. Vagando per le strade, incontra un barbone che gli si avvicina
e gli consegna un portafoglio pieno di banconote di grosso taglio e un cellulare, che lo mette in contatto con il suo misterioso rapitore. L'uomo lo sfida: se vuole sapere l'identità 
e le ragioni della reclusione e al contempo continuare a esistere, ha cinque giorni di tempo per trovarlo.";
$snowpiercer= new Movie("Snowpiercer","Azione",2013,8);
$snowpiercer->director="Bong Joon-ho";
$snowpiercer->language="English";
$snowpiercer->plot="2031. In un mondo decimato da una nuova era glaciale, causata da esperimenti falliti per fermare il riscaldamento globale, un gruppo di sopravvissuti rimane in vita 
all'interno di un treno, lo 'Snowpiercer', che continua a spostarsi intorno alla Terra e si procura l'energia necessaria attraverso un apparente motore perpetuo. Il treno è un microcosmo 
di società umana diviso in classi sociali: i più poveri vivono nelle ultime carrozze, dove si nutrono esclusivamente di barrette 'proteiche' che vengono loro date (che, si scoprirà in seguito, 
sono prodotte con scarafaggi); i più ricchi nei vagoni anteriori. La convivenza tra loro sfocia inevitabilmente in lotte e rivoluzioni. I poveri sono continuamente oppressi dalla milizia di 
coloro che risiedono nella testa del treno, che rapiscono i loro bambini per farli lavorare come loro schiavi e facendoli vivere privi di igiene e di alimenti, punendo qualsiasi tentativo di 
ribellione.
Curtis, insieme all'amico Edgar e all'anziano Gilliam, decide di ribellarsi all'oppressione dei soldati e di condurre una rivolta fino alla locomotiva, con l'intento di uccidere lo stesso 
creatore del treno, Wilford. Una volta scoperto che le armi dei militari in realtà sono ormai scariche, Curtis ed Edgar, sostenuti dall'acrobatico Grey, da Tanya, a cui hanno portato via il 
figlio, dal menomato Andrew e da un infiltrato segreto che li aiuta inviando loro misteriosi messaggi, danno il via alla ribellione.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
    <h2><?php echo $oldBoy->title ?></h2>
    <ul>
        <?php foreach($oldBoy as $info){ ?>
            <li><?php echo $info ?></li>
        <?php } ?>
        <li><?php echo $oldBoy->getVote() ?></li>
    </ul>
    <h2><?php echo $snowpiercer->title ?></h2>
    <ul>
        <?php foreach($snowpiercer as $info){ ?>
            <li><?php echo $info ?></li>
        <?php } ?>
        <li><?php echo $snowpiercer->getVote() ?></li>
    </ul>
    
</body>
</html>