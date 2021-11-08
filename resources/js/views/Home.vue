<template>
    <div>
        <img src="https://via.placeholder.com/1000" class="block h-[calc(100vh-3.5rem)] object-cover w-full">
        <img src="https://via.placeholder.com/1000" class="block h-[calc(100vh-3.5rem)] object-cover w-full">
        <div class="bg-linen text-black overflow-auto">
            <Article
                heading="Architektúra a život na pulze času"
                title="Jaromír Krejcar"
                slug="jaromir-krejcar"
                content=
"Jaromír Krejcar sa radí k najvýznamnejším protagonistom moderného hnutia v architektúre Československa: ako architekt, ale aj ako publicista, organizátor, koordinátor, sprostredkovateľ a iniciátor. Zakaždým sa mu podarilo vypracovať projekty, ktoré ukazovali nový smer a kriticky odrážali dovtedajší vývoj, boli v nich inteligentne zapracované aktuálne tendencie a prognosticky naznačená budúca orientácia. Krejcarov dlhoročný súputník Karel Teige ich označoval – nie celkom nezaujate – „ztělesněním celé tvořivé atmosféry a summou kolektivních intencí své doby a své generace“
Krejcarova profesijná kariéra sa rozbehla na začiatku 20. rokov minulého storočia. Už krátko po ukončení štúdia architektúry u Jana Kotěru na Pražskej akadémii sa pohyboval v kruhu avantgardnej skupiny Devětsil a rýchlo sa stal dôverníkom jej vedúcej osobnosti Karla Teigeho (1900-51)."
                :images="[
                    { url: 'https://via.placeholder.com/1000' },
                    { url: 'https://via.placeholder.com/800x300' }]" />
            <Article
                heading="LD Machnáč"
                title="LD Machnáč"
                slug="ld-machnac"
                content=
"Je len málo stavieb na Slovensku, pri ktorých je možné v plnej miere obdivovať princípy a filozofiu  funkcionalistickej architektúry. Liečebný dom Machnáč bol postavený pre Pojišťovnu soukromých úředníku v Prahe , podľa ktorej niesol v 30. rokoch aj meno. Autor Jaromír Krejcar sa k zákazke dostal na základe víťazstva v súťaži architektonických návrhov v roku 1929. Pôvodný zámer architekta však nebol zďaleka tak progresívnou stavbou akú môžeme obdivovať dnes. Umiestenie na okraji parku, a nie ideálne smerovanie k svetovým stranám, viedli architekta k odklonu od pôvodnej predstavy trojtraktového monobloku otočeného dlhšou stranou k parku, k rozložitejšiemu tvaru nepravidelného pôdorysu písmena T. Noha písmena bola celá vyčlenená pre umiestenie spoločenskej časti, kuchyne v suteréne, reštaurácie na prízemí, kaviarne a čitárne na poschodí a slnečnej terasy na streche. V horizontálnej hlave písmena T tak ostal priestor pre oddychovú časť s izbami s bezprostredným kontaktom s parkom, prístupnými z priestrannej chodby presvetlenej pásovými oknami. Práve pásové okná, strešné terasy, použitie železobetónového nosného skeletu umožňujúce voľné rozmiestnenie dispozície a veľkoplošné zasklenia, predstavujú ucelenú ukážku princípov modernej architektúry definovanej svetoznámym architektom Le Corbusierom. Balkóny izieb vytvárajú na východnom priečelí dnes už ikonickú kompozíciu. Balkón a okno tu nie sú už len funkciou, ale aj znakom architektúry, a miestom, ktoré každému oku návštevníka umožňuje cestovanie do nekonečných zákutí parku.
Machnáč nie je len stavbou, je manifestom architektúry architekta Jaromíra Krejcara. Jeho politické presvedčenie sa tu prenieslo do podoby domu. Rampa umožňuje rovnocenne vstup každému návštevníkovi, spoločenské priestory pre zábavu a stravovanie podnecujú sociálnu interakciu hostí a malé izby otvorené do nekonečného vonkajšieho priestoru sú dostatočne veľké na regeneráciu tela a odpočinok. A napokon slnečné terasy po celej streche domu, kde sa nahí návštevníci liečili slnkom, sú oslobodením od spoločenských noriem sveta okolo. Celý dom nesie znaky estetiky zaoceánskych lodí a parníkov. Svojich návštevníkov po celé obdobie svojho fungovania niesol do nového sveta budúcnosti.  Machnáč je oslavou pokroku ako technologického, tak najmä spoločenského, zhmotnením autorovej predstavy humanizmu."
                :images="[
                    { url: 'https://via.placeholder.com/300x800' },
                    { url: 'https://via.placeholder.com/1000' }]" />
        </div>
    </div>
</template>

<script>
import Article from '../components/Article.vue'

export default {
    components: { Article },
}
</script>
