<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Timezone implements JsonSerializable
{
    private static Timezone $AFRICAABIDJAN;
    private static Timezone $AFRICAACCRA;
    private static Timezone $AFRICAADDISABABA;
    private static Timezone $AFRICAALGIERS;
    private static Timezone $AFRICAASMARA;
    private static Timezone $AFRICABAMAKO;
    private static Timezone $AFRICABANGUI;
    private static Timezone $AFRICABANJUL;
    private static Timezone $AFRICABISSAU;
    private static Timezone $AFRICABLANTYRE;
    private static Timezone $AFRICABRAZZAVILLE;
    private static Timezone $AFRICABUJUMBURA;
    private static Timezone $AFRICACAIRO;
    private static Timezone $AFRICACASABLANCA;
    private static Timezone $AFRICACEUTA;
    private static Timezone $AFRICACONAKRY;
    private static Timezone $AFRICADAKAR;
    private static Timezone $AFRICADARESSALAAM;
    private static Timezone $AFRICADJIBOUTI;
    private static Timezone $AFRICADOUALA;
    private static Timezone $AFRICAELAAIUN;
    private static Timezone $AFRICAFREETOWN;
    private static Timezone $AFRICAGABORONE;
    private static Timezone $AFRICAHARARE;
    private static Timezone $AFRICAJOHANNESBURG;
    private static Timezone $AFRICAJUBA;
    private static Timezone $AFRICAKAMPALA;
    private static Timezone $AFRICAKHARTOUM;
    private static Timezone $AFRICAKIGALI;
    private static Timezone $AFRICAKINSHASA;
    private static Timezone $AFRICALAGOS;
    private static Timezone $AFRICALIBREVILLE;
    private static Timezone $AFRICALOME;
    private static Timezone $AFRICALUANDA;
    private static Timezone $AFRICALUBUMBASHI;
    private static Timezone $AFRICALUSAKA;
    private static Timezone $AFRICAMALABO;
    private static Timezone $AFRICAMAPUTO;
    private static Timezone $AFRICAMASERU;
    private static Timezone $AFRICAMBABANE;
    private static Timezone $AFRICAMOGADISHU;
    private static Timezone $AFRICAMONROVIA;
    private static Timezone $AFRICANAIROBI;
    private static Timezone $AFRICANDJAMENA;
    private static Timezone $AFRICANIAMEY;
    private static Timezone $AFRICANOUAKCHOTT;
    private static Timezone $AFRICAOUAGADOUGOU;
    private static Timezone $AFRICAPORTONOVO;
    private static Timezone $AFRICASAOTOME;
    private static Timezone $AFRICATRIPOLI;
    private static Timezone $AFRICATUNIS;
    private static Timezone $AFRICAWINDHOEK;
    private static Timezone $AMERICAADAK;
    private static Timezone $AMERICAANCHORAGE;
    private static Timezone $AMERICAANGUILLA;
    private static Timezone $AMERICAANTIGUA;
    private static Timezone $AMERICAARAGUAINA;
    private static Timezone $AMERICAARUBA;
    private static Timezone $AMERICAASUNCION;
    private static Timezone $AMERICAATIKOKAN;
    private static Timezone $AMERICABAHIA;
    private static Timezone $AMERICABAHIABANDERAS;
    private static Timezone $AMERICABARBADOS;
    private static Timezone $AMERICABELEM;
    private static Timezone $AMERICABELIZE;
    private static Timezone $AMERICABLANCSABLON;
    private static Timezone $AMERICABOAVISTA;
    private static Timezone $AMERICABOGOTA;
    private static Timezone $AMERICABOISE;
    private static Timezone $AMERICACAMBRIDGEBAY;
    private static Timezone $AMERICACAMPOGRANDE;
    private static Timezone $AMERICACANCUN;
    private static Timezone $AMERICACARACAS;
    private static Timezone $AMERICACAYENNE;
    private static Timezone $AMERICACAYMAN;
    private static Timezone $AMERICACHICAGO;
    private static Timezone $AMERICACHIHUAHUA;
    private static Timezone $AMERICACIUDADJUAREZ;
    private static Timezone $AMERICACOSTARICA;
    private static Timezone $AMERICACOYHAIQUE;
    private static Timezone $AMERICACRESTON;
    private static Timezone $AMERICACUIABA;
    private static Timezone $AMERICACURACAO;
    private static Timezone $AMERICADANMARKSHAVN;
    private static Timezone $AMERICADAWSON;
    private static Timezone $AMERICADAWSONCREEK;
    private static Timezone $AMERICADENVER;
    private static Timezone $AMERICADETROIT;
    private static Timezone $AMERICADOMINICA;
    private static Timezone $AMERICAEDMONTON;
    private static Timezone $AMERICAEIRUNEPE;
    private static Timezone $AMERICAELSALVADOR;
    private static Timezone $AMERICAFORTNELSON;
    private static Timezone $AMERICAFORTALEZA;
    private static Timezone $AMERICAGLACEBAY;
    private static Timezone $AMERICAGOOSEBAY;
    private static Timezone $AMERICAGRANDTURK;
    private static Timezone $AMERICAGRENADA;
    private static Timezone $AMERICAGUADELOUPE;
    private static Timezone $AMERICAGUATEMALA;
    private static Timezone $AMERICAGUAYAQUIL;
    private static Timezone $AMERICAGUYANA;
    private static Timezone $AMERICAHALIFAX;
    private static Timezone $AMERICAHAVANA;
    private static Timezone $AMERICAHERMOSILLO;
    private static Timezone $AMERICAINUVIK;
    private static Timezone $AMERICAIQALUIT;
    private static Timezone $AMERICAJAMAICA;
    private static Timezone $AMERICAJUNEAU;
    private static Timezone $AMERICAKRALENDIJK;
    private static Timezone $AMERICALAPAZ;
    private static Timezone $AMERICALIMA;
    private static Timezone $AMERICALOSANGELES;
    private static Timezone $AMERICALOWERPRINCES;
    private static Timezone $AMERICAMACEIO;
    private static Timezone $AMERICAMANAGUA;
    private static Timezone $AMERICAMANAUS;
    private static Timezone $AMERICAMARIGOT;
    private static Timezone $AMERICAMARTINIQUE;
    private static Timezone $AMERICAMATAMOROS;
    private static Timezone $AMERICAMAZATLAN;
    private static Timezone $AMERICAMENOMINEE;
    private static Timezone $AMERICAMERIDA;
    private static Timezone $AMERICAMETLAKATLA;
    private static Timezone $AMERICAMEXICOCITY;
    private static Timezone $AMERICAMIQUELON;
    private static Timezone $AMERICAMONCTON;
    private static Timezone $AMERICAMONTERREY;
    private static Timezone $AMERICAMONTEVIDEO;
    private static Timezone $AMERICAMONTSERRAT;
    private static Timezone $AMERICANASSAU;
    private static Timezone $AMERICANEWYORK;
    private static Timezone $AMERICANOME;
    private static Timezone $AMERICANORONHA;
    private static Timezone $AMERICANUUK;
    private static Timezone $AMERICAOJINAGA;
    private static Timezone $AMERICAPANAMA;
    private static Timezone $AMERICAPARAMARIBO;
    private static Timezone $AMERICAPHOENIX;
    private static Timezone $AMERICAPORTAUPRINCE;
    private static Timezone $AMERICAPORTOFSPAIN;
    private static Timezone $AMERICAPORTOVELHO;
    private static Timezone $AMERICAPUERTORICO;
    private static Timezone $AMERICAPUNTAARENAS;
    private static Timezone $AMERICARANKININLET;
    private static Timezone $AMERICARECIFE;
    private static Timezone $AMERICAREGINA;
    private static Timezone $AMERICARESOLUTE;
    private static Timezone $AMERICARIOBRANCO;
    private static Timezone $AMERICASANTAREM;
    private static Timezone $AMERICASANTIAGO;
    private static Timezone $AMERICASANTODOMINGO;
    private static Timezone $AMERICASAOPAULO;
    private static Timezone $AMERICASCORESBYSUND;
    private static Timezone $AMERICASITKA;
    private static Timezone $AMERICASTBARTHELEMY;
    private static Timezone $AMERICASTJOHNS;
    private static Timezone $AMERICASTKITTS;
    private static Timezone $AMERICASTLUCIA;
    private static Timezone $AMERICASTTHOMAS;
    private static Timezone $AMERICASTVINCENT;
    private static Timezone $AMERICASWIFTCURRENT;
    private static Timezone $AMERICATEGUCIGALPA;
    private static Timezone $AMERICATHULE;
    private static Timezone $AMERICATIJUANA;
    private static Timezone $AMERICATORONTO;
    private static Timezone $AMERICATORTOLA;
    private static Timezone $AMERICAVANCOUVER;
    private static Timezone $AMERICAWHITEHORSE;
    private static Timezone $AMERICAWINNIPEG;
    private static Timezone $AMERICAYAKUTAT;
    private static Timezone $ANTARCTICACASEY;
    private static Timezone $ANTARCTICADAVIS;
    private static Timezone $ANTARCTICADUMONTDURVILLE;
    private static Timezone $ANTARCTICAMACQUARIE;
    private static Timezone $ANTARCTICAMAWSON;
    private static Timezone $ANTARCTICAMCMURDO;
    private static Timezone $ANTARCTICAPALMER;
    private static Timezone $ANTARCTICAROTHERA;
    private static Timezone $ANTARCTICASYOWA;
    private static Timezone $ANTARCTICATROLL;
    private static Timezone $ANTARCTICAVOSTOK;
    private static Timezone $ARCTICLONGYEARBYEN;
    private static Timezone $ASIAADEN;
    private static Timezone $ASIAALMATY;
    private static Timezone $ASIAAMMAN;
    private static Timezone $ASIAANADYR;
    private static Timezone $ASIAAQTAU;
    private static Timezone $ASIAAQTOBE;
    private static Timezone $ASIAASHGABAT;
    private static Timezone $ASIAATYRAU;
    private static Timezone $ASIABAGHDAD;
    private static Timezone $ASIABAHRAIN;
    private static Timezone $ASIABAKU;
    private static Timezone $ASIABANGKOK;
    private static Timezone $ASIABARNAUL;
    private static Timezone $ASIABEIRUT;
    private static Timezone $ASIABISHKEK;
    private static Timezone $ASIABRUNEI;
    private static Timezone $ASIACHITA;
    private static Timezone $ASIACOLOMBO;
    private static Timezone $ASIADAMASCUS;
    private static Timezone $ASIADHAKA;
    private static Timezone $ASIADILI;
    private static Timezone $ASIADUBAI;
    private static Timezone $ASIADUSHANBE;
    private static Timezone $ASIAFAMAGUSTA;
    private static Timezone $ASIAGAZA;
    private static Timezone $ASIAHEBRON;
    private static Timezone $ASIAHOCHIMINH;
    private static Timezone $ASIAHONGKONG;
    private static Timezone $ASIAHOVD;
    private static Timezone $ASIAIRKUTSK;
    private static Timezone $ASIAJAKARTA;
    private static Timezone $ASIAJAYAPURA;
    private static Timezone $ASIAJERUSALEM;
    private static Timezone $ASIAKABUL;
    private static Timezone $ASIAKAMCHATKA;
    private static Timezone $ASIAKARACHI;
    private static Timezone $ASIAKATHMANDU;
    private static Timezone $ASIAKHANDYGA;
    private static Timezone $ASIAKOLKATA;
    private static Timezone $ASIAKRASNOYARSK;
    private static Timezone $ASIAKUALALUMPUR;
    private static Timezone $ASIAKUCHING;
    private static Timezone $ASIAKUWAIT;
    private static Timezone $ASIAMACAU;
    private static Timezone $ASIAMAGADAN;
    private static Timezone $ASIAMAKASSAR;
    private static Timezone $ASIAMANILA;
    private static Timezone $ASIAMUSCAT;
    private static Timezone $ASIANICOSIA;
    private static Timezone $ASIANOVOKUZNETSK;
    private static Timezone $ASIANOVOSIBIRSK;
    private static Timezone $ASIAOMSK;
    private static Timezone $ASIAORAL;
    private static Timezone $ASIAPHNOMPENH;
    private static Timezone $ASIAPONTIANAK;
    private static Timezone $ASIAPYONGYANG;
    private static Timezone $ASIAQATAR;
    private static Timezone $ASIAQOSTANAY;
    private static Timezone $ASIAQYZYLORDA;
    private static Timezone $ASIARIYADH;
    private static Timezone $ASIASAKHALIN;
    private static Timezone $ASIASAMARKAND;
    private static Timezone $ASIASEOUL;
    private static Timezone $ASIASHANGHAI;
    private static Timezone $ASIASINGAPORE;
    private static Timezone $ASIASREDNEKOLYMSK;
    private static Timezone $ASIATAIPEI;
    private static Timezone $ASIATASHKENT;
    private static Timezone $ASIATBILISI;
    private static Timezone $ASIATEHRAN;
    private static Timezone $ASIATHIMPHU;
    private static Timezone $ASIATOKYO;
    private static Timezone $ASIATOMSK;
    private static Timezone $ASIAULAANBAATAR;
    private static Timezone $ASIAURUMQI;
    private static Timezone $ASIAUSTNERA;
    private static Timezone $ASIAVIENTIANE;
    private static Timezone $ASIAVLADIVOSTOK;
    private static Timezone $ASIAYAKUTSK;
    private static Timezone $ASIAYANGON;
    private static Timezone $ASIAYEKATERINBURG;
    private static Timezone $ASIAYEREVAN;
    private static Timezone $ATLANTICAZORES;
    private static Timezone $ATLANTICBERMUDA;
    private static Timezone $ATLANTICCANARY;
    private static Timezone $ATLANTICCAPEVERDE;
    private static Timezone $ATLANTICFAROE;
    private static Timezone $ATLANTICMADEIRA;
    private static Timezone $ATLANTICREYKJAVIK;
    private static Timezone $ATLANTICSOUTHGEORGIA;
    private static Timezone $ATLANTICSTHELENA;
    private static Timezone $ATLANTICSTANLEY;
    private static Timezone $AUSTRALIAADELAIDE;
    private static Timezone $AUSTRALIABRISBANE;
    private static Timezone $AUSTRALIABROKENHILL;
    private static Timezone $AUSTRALIADARWIN;
    private static Timezone $AUSTRALIAEUCLA;
    private static Timezone $AUSTRALIAHOBART;
    private static Timezone $AUSTRALIALINDEMAN;
    private static Timezone $AUSTRALIALORDHOWE;
    private static Timezone $AUSTRALIAMELBOURNE;
    private static Timezone $AUSTRALIAPERTH;
    private static Timezone $AUSTRALIASYDNEY;
    private static Timezone $EUROPEAMSTERDAM;
    private static Timezone $EUROPEANDORRA;
    private static Timezone $EUROPEASTRAKHAN;
    private static Timezone $EUROPEATHENS;
    private static Timezone $EUROPEBELGRADE;
    private static Timezone $EUROPEBERLIN;
    private static Timezone $EUROPEBRATISLAVA;
    private static Timezone $EUROPEBRUSSELS;
    private static Timezone $EUROPEBUCHAREST;
    private static Timezone $EUROPEBUDAPEST;
    private static Timezone $EUROPEBUSINGEN;
    private static Timezone $EUROPECHISINAU;
    private static Timezone $EUROPECOPENHAGEN;
    private static Timezone $EUROPEDUBLIN;
    private static Timezone $EUROPEGIBRALTAR;
    private static Timezone $EUROPEGUERNSEY;
    private static Timezone $EUROPEHELSINKI;
    private static Timezone $EUROPEISLEOFMAN;
    private static Timezone $EUROPEISTANBUL;
    private static Timezone $EUROPEJERSEY;
    private static Timezone $EUROPEKALININGRAD;
    private static Timezone $EUROPEKIROV;
    private static Timezone $EUROPEKYIV;
    private static Timezone $EUROPELISBON;
    private static Timezone $EUROPELJUBLJANA;
    private static Timezone $EUROPELONDON;
    private static Timezone $EUROPELUXEMBOURG;
    private static Timezone $EUROPEMADRID;
    private static Timezone $EUROPEMALTA;
    private static Timezone $EUROPEMARIEHAMN;
    private static Timezone $EUROPEMINSK;
    private static Timezone $EUROPEMONACO;
    private static Timezone $EUROPEMOSCOW;
    private static Timezone $EUROPEOSLO;
    private static Timezone $EUROPEPARIS;
    private static Timezone $EUROPEPODGORICA;
    private static Timezone $EUROPEPRAGUE;
    private static Timezone $EUROPERIGA;
    private static Timezone $EUROPEROME;
    private static Timezone $EUROPESAMARA;
    private static Timezone $EUROPESANMARINO;
    private static Timezone $EUROPESARAJEVO;
    private static Timezone $EUROPESARATOV;
    private static Timezone $EUROPESIMFEROPOL;
    private static Timezone $EUROPESKOPJE;
    private static Timezone $EUROPESOFIA;
    private static Timezone $EUROPESTOCKHOLM;
    private static Timezone $EUROPETALLINN;
    private static Timezone $EUROPETIRANE;
    private static Timezone $EUROPEULYANOVSK;
    private static Timezone $EUROPEVADUZ;
    private static Timezone $EUROPEVATICAN;
    private static Timezone $EUROPEVIENNA;
    private static Timezone $EUROPEVILNIUS;
    private static Timezone $EUROPEVOLGOGRAD;
    private static Timezone $EUROPEWARSAW;
    private static Timezone $EUROPEZAGREB;
    private static Timezone $EUROPEZURICH;
    private static Timezone $INDIANANTANANARIVO;
    private static Timezone $INDIANCHAGOS;
    private static Timezone $INDIANCHRISTMAS;
    private static Timezone $INDIANCOCOS;
    private static Timezone $INDIANCOMORO;
    private static Timezone $INDIANKERGUELEN;
    private static Timezone $INDIANMAHE;
    private static Timezone $INDIANMALDIVES;
    private static Timezone $INDIANMAURITIUS;
    private static Timezone $INDIANMAYOTTE;
    private static Timezone $INDIANREUNION;
    private static Timezone $PACIFICAPIA;
    private static Timezone $PACIFICAUCKLAND;
    private static Timezone $PACIFICBOUGAINVILLE;
    private static Timezone $PACIFICCHATHAM;
    private static Timezone $PACIFICCHUUK;
    private static Timezone $PACIFICEASTER;
    private static Timezone $PACIFICEFATE;
    private static Timezone $PACIFICFAKAOFO;
    private static Timezone $PACIFICFIJI;
    private static Timezone $PACIFICFUNAFUTI;
    private static Timezone $PACIFICGALAPAGOS;
    private static Timezone $PACIFICGAMBIER;
    private static Timezone $PACIFICGUADALCANAL;
    private static Timezone $PACIFICGUAM;
    private static Timezone $PACIFICHONOLULU;
    private static Timezone $PACIFICKANTON;
    private static Timezone $PACIFICKIRITIMATI;
    private static Timezone $PACIFICKOSRAE;
    private static Timezone $PACIFICKWAJALEIN;
    private static Timezone $PACIFICMAJURO;
    private static Timezone $PACIFICMARQUESAS;
    private static Timezone $PACIFICMIDWAY;
    private static Timezone $PACIFICNAURU;
    private static Timezone $PACIFICNIUE;
    private static Timezone $PACIFICNORFOLK;
    private static Timezone $PACIFICNOUMEA;
    private static Timezone $PACIFICPAGOPAGO;
    private static Timezone $PACIFICPALAU;
    private static Timezone $PACIFICPITCAIRN;
    private static Timezone $PACIFICPOHNPEI;
    private static Timezone $PACIFICPORTMORESBY;
    private static Timezone $PACIFICRAROTONGA;
    private static Timezone $PACIFICSAIPAN;
    private static Timezone $PACIFICTAHITI;
    private static Timezone $PACIFICTARAWA;
    private static Timezone $PACIFICTONGATAPU;
    private static Timezone $PACIFICWAKE;
    private static Timezone $PACIFICWALLIS;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function AFRICAABIDJAN(): Timezone
    {
        if (!isset(self::$AFRICAABIDJAN)) {
            self::$AFRICAABIDJAN = new Timezone('Africa/Abidjan');
        }
        return self::$AFRICAABIDJAN;
    }
    public static function AFRICAACCRA(): Timezone
    {
        if (!isset(self::$AFRICAACCRA)) {
            self::$AFRICAACCRA = new Timezone('Africa/Accra');
        }
        return self::$AFRICAACCRA;
    }
    public static function AFRICAADDISABABA(): Timezone
    {
        if (!isset(self::$AFRICAADDISABABA)) {
            self::$AFRICAADDISABABA = new Timezone('Africa/Addis_Ababa');
        }
        return self::$AFRICAADDISABABA;
    }
    public static function AFRICAALGIERS(): Timezone
    {
        if (!isset(self::$AFRICAALGIERS)) {
            self::$AFRICAALGIERS = new Timezone('Africa/Algiers');
        }
        return self::$AFRICAALGIERS;
    }
    public static function AFRICAASMARA(): Timezone
    {
        if (!isset(self::$AFRICAASMARA)) {
            self::$AFRICAASMARA = new Timezone('Africa/Asmara');
        }
        return self::$AFRICAASMARA;
    }
    public static function AFRICABAMAKO(): Timezone
    {
        if (!isset(self::$AFRICABAMAKO)) {
            self::$AFRICABAMAKO = new Timezone('Africa/Bamako');
        }
        return self::$AFRICABAMAKO;
    }
    public static function AFRICABANGUI(): Timezone
    {
        if (!isset(self::$AFRICABANGUI)) {
            self::$AFRICABANGUI = new Timezone('Africa/Bangui');
        }
        return self::$AFRICABANGUI;
    }
    public static function AFRICABANJUL(): Timezone
    {
        if (!isset(self::$AFRICABANJUL)) {
            self::$AFRICABANJUL = new Timezone('Africa/Banjul');
        }
        return self::$AFRICABANJUL;
    }
    public static function AFRICABISSAU(): Timezone
    {
        if (!isset(self::$AFRICABISSAU)) {
            self::$AFRICABISSAU = new Timezone('Africa/Bissau');
        }
        return self::$AFRICABISSAU;
    }
    public static function AFRICABLANTYRE(): Timezone
    {
        if (!isset(self::$AFRICABLANTYRE)) {
            self::$AFRICABLANTYRE = new Timezone('Africa/Blantyre');
        }
        return self::$AFRICABLANTYRE;
    }
    public static function AFRICABRAZZAVILLE(): Timezone
    {
        if (!isset(self::$AFRICABRAZZAVILLE)) {
            self::$AFRICABRAZZAVILLE = new Timezone('Africa/Brazzaville');
        }
        return self::$AFRICABRAZZAVILLE;
    }
    public static function AFRICABUJUMBURA(): Timezone
    {
        if (!isset(self::$AFRICABUJUMBURA)) {
            self::$AFRICABUJUMBURA = new Timezone('Africa/Bujumbura');
        }
        return self::$AFRICABUJUMBURA;
    }
    public static function AFRICACAIRO(): Timezone
    {
        if (!isset(self::$AFRICACAIRO)) {
            self::$AFRICACAIRO = new Timezone('Africa/Cairo');
        }
        return self::$AFRICACAIRO;
    }
    public static function AFRICACASABLANCA(): Timezone
    {
        if (!isset(self::$AFRICACASABLANCA)) {
            self::$AFRICACASABLANCA = new Timezone('Africa/Casablanca');
        }
        return self::$AFRICACASABLANCA;
    }
    public static function AFRICACEUTA(): Timezone
    {
        if (!isset(self::$AFRICACEUTA)) {
            self::$AFRICACEUTA = new Timezone('Africa/Ceuta');
        }
        return self::$AFRICACEUTA;
    }
    public static function AFRICACONAKRY(): Timezone
    {
        if (!isset(self::$AFRICACONAKRY)) {
            self::$AFRICACONAKRY = new Timezone('Africa/Conakry');
        }
        return self::$AFRICACONAKRY;
    }
    public static function AFRICADAKAR(): Timezone
    {
        if (!isset(self::$AFRICADAKAR)) {
            self::$AFRICADAKAR = new Timezone('Africa/Dakar');
        }
        return self::$AFRICADAKAR;
    }
    public static function AFRICADARESSALAAM(): Timezone
    {
        if (!isset(self::$AFRICADARESSALAAM)) {
            self::$AFRICADARESSALAAM = new Timezone('Africa/Dar_es_Salaam');
        }
        return self::$AFRICADARESSALAAM;
    }
    public static function AFRICADJIBOUTI(): Timezone
    {
        if (!isset(self::$AFRICADJIBOUTI)) {
            self::$AFRICADJIBOUTI = new Timezone('Africa/Djibouti');
        }
        return self::$AFRICADJIBOUTI;
    }
    public static function AFRICADOUALA(): Timezone
    {
        if (!isset(self::$AFRICADOUALA)) {
            self::$AFRICADOUALA = new Timezone('Africa/Douala');
        }
        return self::$AFRICADOUALA;
    }
    public static function AFRICAELAAIUN(): Timezone
    {
        if (!isset(self::$AFRICAELAAIUN)) {
            self::$AFRICAELAAIUN = new Timezone('Africa/El_Aaiun');
        }
        return self::$AFRICAELAAIUN;
    }
    public static function AFRICAFREETOWN(): Timezone
    {
        if (!isset(self::$AFRICAFREETOWN)) {
            self::$AFRICAFREETOWN = new Timezone('Africa/Freetown');
        }
        return self::$AFRICAFREETOWN;
    }
    public static function AFRICAGABORONE(): Timezone
    {
        if (!isset(self::$AFRICAGABORONE)) {
            self::$AFRICAGABORONE = new Timezone('Africa/Gaborone');
        }
        return self::$AFRICAGABORONE;
    }
    public static function AFRICAHARARE(): Timezone
    {
        if (!isset(self::$AFRICAHARARE)) {
            self::$AFRICAHARARE = new Timezone('Africa/Harare');
        }
        return self::$AFRICAHARARE;
    }
    public static function AFRICAJOHANNESBURG(): Timezone
    {
        if (!isset(self::$AFRICAJOHANNESBURG)) {
            self::$AFRICAJOHANNESBURG = new Timezone('Africa/Johannesburg');
        }
        return self::$AFRICAJOHANNESBURG;
    }
    public static function AFRICAJUBA(): Timezone
    {
        if (!isset(self::$AFRICAJUBA)) {
            self::$AFRICAJUBA = new Timezone('Africa/Juba');
        }
        return self::$AFRICAJUBA;
    }
    public static function AFRICAKAMPALA(): Timezone
    {
        if (!isset(self::$AFRICAKAMPALA)) {
            self::$AFRICAKAMPALA = new Timezone('Africa/Kampala');
        }
        return self::$AFRICAKAMPALA;
    }
    public static function AFRICAKHARTOUM(): Timezone
    {
        if (!isset(self::$AFRICAKHARTOUM)) {
            self::$AFRICAKHARTOUM = new Timezone('Africa/Khartoum');
        }
        return self::$AFRICAKHARTOUM;
    }
    public static function AFRICAKIGALI(): Timezone
    {
        if (!isset(self::$AFRICAKIGALI)) {
            self::$AFRICAKIGALI = new Timezone('Africa/Kigali');
        }
        return self::$AFRICAKIGALI;
    }
    public static function AFRICAKINSHASA(): Timezone
    {
        if (!isset(self::$AFRICAKINSHASA)) {
            self::$AFRICAKINSHASA = new Timezone('Africa/Kinshasa');
        }
        return self::$AFRICAKINSHASA;
    }
    public static function AFRICALAGOS(): Timezone
    {
        if (!isset(self::$AFRICALAGOS)) {
            self::$AFRICALAGOS = new Timezone('Africa/Lagos');
        }
        return self::$AFRICALAGOS;
    }
    public static function AFRICALIBREVILLE(): Timezone
    {
        if (!isset(self::$AFRICALIBREVILLE)) {
            self::$AFRICALIBREVILLE = new Timezone('Africa/Libreville');
        }
        return self::$AFRICALIBREVILLE;
    }
    public static function AFRICALOME(): Timezone
    {
        if (!isset(self::$AFRICALOME)) {
            self::$AFRICALOME = new Timezone('Africa/Lome');
        }
        return self::$AFRICALOME;
    }
    public static function AFRICALUANDA(): Timezone
    {
        if (!isset(self::$AFRICALUANDA)) {
            self::$AFRICALUANDA = new Timezone('Africa/Luanda');
        }
        return self::$AFRICALUANDA;
    }
    public static function AFRICALUBUMBASHI(): Timezone
    {
        if (!isset(self::$AFRICALUBUMBASHI)) {
            self::$AFRICALUBUMBASHI = new Timezone('Africa/Lubumbashi');
        }
        return self::$AFRICALUBUMBASHI;
    }
    public static function AFRICALUSAKA(): Timezone
    {
        if (!isset(self::$AFRICALUSAKA)) {
            self::$AFRICALUSAKA = new Timezone('Africa/Lusaka');
        }
        return self::$AFRICALUSAKA;
    }
    public static function AFRICAMALABO(): Timezone
    {
        if (!isset(self::$AFRICAMALABO)) {
            self::$AFRICAMALABO = new Timezone('Africa/Malabo');
        }
        return self::$AFRICAMALABO;
    }
    public static function AFRICAMAPUTO(): Timezone
    {
        if (!isset(self::$AFRICAMAPUTO)) {
            self::$AFRICAMAPUTO = new Timezone('Africa/Maputo');
        }
        return self::$AFRICAMAPUTO;
    }
    public static function AFRICAMASERU(): Timezone
    {
        if (!isset(self::$AFRICAMASERU)) {
            self::$AFRICAMASERU = new Timezone('Africa/Maseru');
        }
        return self::$AFRICAMASERU;
    }
    public static function AFRICAMBABANE(): Timezone
    {
        if (!isset(self::$AFRICAMBABANE)) {
            self::$AFRICAMBABANE = new Timezone('Africa/Mbabane');
        }
        return self::$AFRICAMBABANE;
    }
    public static function AFRICAMOGADISHU(): Timezone
    {
        if (!isset(self::$AFRICAMOGADISHU)) {
            self::$AFRICAMOGADISHU = new Timezone('Africa/Mogadishu');
        }
        return self::$AFRICAMOGADISHU;
    }
    public static function AFRICAMONROVIA(): Timezone
    {
        if (!isset(self::$AFRICAMONROVIA)) {
            self::$AFRICAMONROVIA = new Timezone('Africa/Monrovia');
        }
        return self::$AFRICAMONROVIA;
    }
    public static function AFRICANAIROBI(): Timezone
    {
        if (!isset(self::$AFRICANAIROBI)) {
            self::$AFRICANAIROBI = new Timezone('Africa/Nairobi');
        }
        return self::$AFRICANAIROBI;
    }
    public static function AFRICANDJAMENA(): Timezone
    {
        if (!isset(self::$AFRICANDJAMENA)) {
            self::$AFRICANDJAMENA = new Timezone('Africa/Ndjamena');
        }
        return self::$AFRICANDJAMENA;
    }
    public static function AFRICANIAMEY(): Timezone
    {
        if (!isset(self::$AFRICANIAMEY)) {
            self::$AFRICANIAMEY = new Timezone('Africa/Niamey');
        }
        return self::$AFRICANIAMEY;
    }
    public static function AFRICANOUAKCHOTT(): Timezone
    {
        if (!isset(self::$AFRICANOUAKCHOTT)) {
            self::$AFRICANOUAKCHOTT = new Timezone('Africa/Nouakchott');
        }
        return self::$AFRICANOUAKCHOTT;
    }
    public static function AFRICAOUAGADOUGOU(): Timezone
    {
        if (!isset(self::$AFRICAOUAGADOUGOU)) {
            self::$AFRICAOUAGADOUGOU = new Timezone('Africa/Ouagadougou');
        }
        return self::$AFRICAOUAGADOUGOU;
    }
    public static function AFRICAPORTONOVO(): Timezone
    {
        if (!isset(self::$AFRICAPORTONOVO)) {
            self::$AFRICAPORTONOVO = new Timezone('Africa/Porto-Novo');
        }
        return self::$AFRICAPORTONOVO;
    }
    public static function AFRICASAOTOME(): Timezone
    {
        if (!isset(self::$AFRICASAOTOME)) {
            self::$AFRICASAOTOME = new Timezone('Africa/Sao_Tome');
        }
        return self::$AFRICASAOTOME;
    }
    public static function AFRICATRIPOLI(): Timezone
    {
        if (!isset(self::$AFRICATRIPOLI)) {
            self::$AFRICATRIPOLI = new Timezone('Africa/Tripoli');
        }
        return self::$AFRICATRIPOLI;
    }
    public static function AFRICATUNIS(): Timezone
    {
        if (!isset(self::$AFRICATUNIS)) {
            self::$AFRICATUNIS = new Timezone('Africa/Tunis');
        }
        return self::$AFRICATUNIS;
    }
    public static function AFRICAWINDHOEK(): Timezone
    {
        if (!isset(self::$AFRICAWINDHOEK)) {
            self::$AFRICAWINDHOEK = new Timezone('Africa/Windhoek');
        }
        return self::$AFRICAWINDHOEK;
    }
    public static function AMERICAADAK(): Timezone
    {
        if (!isset(self::$AMERICAADAK)) {
            self::$AMERICAADAK = new Timezone('America/Adak');
        }
        return self::$AMERICAADAK;
    }
    public static function AMERICAANCHORAGE(): Timezone
    {
        if (!isset(self::$AMERICAANCHORAGE)) {
            self::$AMERICAANCHORAGE = new Timezone('America/Anchorage');
        }
        return self::$AMERICAANCHORAGE;
    }
    public static function AMERICAANGUILLA(): Timezone
    {
        if (!isset(self::$AMERICAANGUILLA)) {
            self::$AMERICAANGUILLA = new Timezone('America/Anguilla');
        }
        return self::$AMERICAANGUILLA;
    }
    public static function AMERICAANTIGUA(): Timezone
    {
        if (!isset(self::$AMERICAANTIGUA)) {
            self::$AMERICAANTIGUA = new Timezone('America/Antigua');
        }
        return self::$AMERICAANTIGUA;
    }
    public static function AMERICAARAGUAINA(): Timezone
    {
        if (!isset(self::$AMERICAARAGUAINA)) {
            self::$AMERICAARAGUAINA = new Timezone('America/Araguaina');
        }
        return self::$AMERICAARAGUAINA;
    }
    public static function AMERICAARUBA(): Timezone
    {
        if (!isset(self::$AMERICAARUBA)) {
            self::$AMERICAARUBA = new Timezone('America/Aruba');
        }
        return self::$AMERICAARUBA;
    }
    public static function AMERICAASUNCION(): Timezone
    {
        if (!isset(self::$AMERICAASUNCION)) {
            self::$AMERICAASUNCION = new Timezone('America/Asuncion');
        }
        return self::$AMERICAASUNCION;
    }
    public static function AMERICAATIKOKAN(): Timezone
    {
        if (!isset(self::$AMERICAATIKOKAN)) {
            self::$AMERICAATIKOKAN = new Timezone('America/Atikokan');
        }
        return self::$AMERICAATIKOKAN;
    }
    public static function AMERICABAHIA(): Timezone
    {
        if (!isset(self::$AMERICABAHIA)) {
            self::$AMERICABAHIA = new Timezone('America/Bahia');
        }
        return self::$AMERICABAHIA;
    }
    public static function AMERICABAHIABANDERAS(): Timezone
    {
        if (!isset(self::$AMERICABAHIABANDERAS)) {
            self::$AMERICABAHIABANDERAS = new Timezone('America/Bahia_Banderas');
        }
        return self::$AMERICABAHIABANDERAS;
    }
    public static function AMERICABARBADOS(): Timezone
    {
        if (!isset(self::$AMERICABARBADOS)) {
            self::$AMERICABARBADOS = new Timezone('America/Barbados');
        }
        return self::$AMERICABARBADOS;
    }
    public static function AMERICABELEM(): Timezone
    {
        if (!isset(self::$AMERICABELEM)) {
            self::$AMERICABELEM = new Timezone('America/Belem');
        }
        return self::$AMERICABELEM;
    }
    public static function AMERICABELIZE(): Timezone
    {
        if (!isset(self::$AMERICABELIZE)) {
            self::$AMERICABELIZE = new Timezone('America/Belize');
        }
        return self::$AMERICABELIZE;
    }
    public static function AMERICABLANCSABLON(): Timezone
    {
        if (!isset(self::$AMERICABLANCSABLON)) {
            self::$AMERICABLANCSABLON = new Timezone('America/Blanc-Sablon');
        }
        return self::$AMERICABLANCSABLON;
    }
    public static function AMERICABOAVISTA(): Timezone
    {
        if (!isset(self::$AMERICABOAVISTA)) {
            self::$AMERICABOAVISTA = new Timezone('America/Boa_Vista');
        }
        return self::$AMERICABOAVISTA;
    }
    public static function AMERICABOGOTA(): Timezone
    {
        if (!isset(self::$AMERICABOGOTA)) {
            self::$AMERICABOGOTA = new Timezone('America/Bogota');
        }
        return self::$AMERICABOGOTA;
    }
    public static function AMERICABOISE(): Timezone
    {
        if (!isset(self::$AMERICABOISE)) {
            self::$AMERICABOISE = new Timezone('America/Boise');
        }
        return self::$AMERICABOISE;
    }
    public static function AMERICACAMBRIDGEBAY(): Timezone
    {
        if (!isset(self::$AMERICACAMBRIDGEBAY)) {
            self::$AMERICACAMBRIDGEBAY = new Timezone('America/Cambridge_Bay');
        }
        return self::$AMERICACAMBRIDGEBAY;
    }
    public static function AMERICACAMPOGRANDE(): Timezone
    {
        if (!isset(self::$AMERICACAMPOGRANDE)) {
            self::$AMERICACAMPOGRANDE = new Timezone('America/Campo_Grande');
        }
        return self::$AMERICACAMPOGRANDE;
    }
    public static function AMERICACANCUN(): Timezone
    {
        if (!isset(self::$AMERICACANCUN)) {
            self::$AMERICACANCUN = new Timezone('America/Cancun');
        }
        return self::$AMERICACANCUN;
    }
    public static function AMERICACARACAS(): Timezone
    {
        if (!isset(self::$AMERICACARACAS)) {
            self::$AMERICACARACAS = new Timezone('America/Caracas');
        }
        return self::$AMERICACARACAS;
    }
    public static function AMERICACAYENNE(): Timezone
    {
        if (!isset(self::$AMERICACAYENNE)) {
            self::$AMERICACAYENNE = new Timezone('America/Cayenne');
        }
        return self::$AMERICACAYENNE;
    }
    public static function AMERICACAYMAN(): Timezone
    {
        if (!isset(self::$AMERICACAYMAN)) {
            self::$AMERICACAYMAN = new Timezone('America/Cayman');
        }
        return self::$AMERICACAYMAN;
    }
    public static function AMERICACHICAGO(): Timezone
    {
        if (!isset(self::$AMERICACHICAGO)) {
            self::$AMERICACHICAGO = new Timezone('America/Chicago');
        }
        return self::$AMERICACHICAGO;
    }
    public static function AMERICACHIHUAHUA(): Timezone
    {
        if (!isset(self::$AMERICACHIHUAHUA)) {
            self::$AMERICACHIHUAHUA = new Timezone('America/Chihuahua');
        }
        return self::$AMERICACHIHUAHUA;
    }
    public static function AMERICACIUDADJUAREZ(): Timezone
    {
        if (!isset(self::$AMERICACIUDADJUAREZ)) {
            self::$AMERICACIUDADJUAREZ = new Timezone('America/Ciudad_Juarez');
        }
        return self::$AMERICACIUDADJUAREZ;
    }
    public static function AMERICACOSTARICA(): Timezone
    {
        if (!isset(self::$AMERICACOSTARICA)) {
            self::$AMERICACOSTARICA = new Timezone('America/Costa_Rica');
        }
        return self::$AMERICACOSTARICA;
    }
    public static function AMERICACOYHAIQUE(): Timezone
    {
        if (!isset(self::$AMERICACOYHAIQUE)) {
            self::$AMERICACOYHAIQUE = new Timezone('America/Coyhaique');
        }
        return self::$AMERICACOYHAIQUE;
    }
    public static function AMERICACRESTON(): Timezone
    {
        if (!isset(self::$AMERICACRESTON)) {
            self::$AMERICACRESTON = new Timezone('America/Creston');
        }
        return self::$AMERICACRESTON;
    }
    public static function AMERICACUIABA(): Timezone
    {
        if (!isset(self::$AMERICACUIABA)) {
            self::$AMERICACUIABA = new Timezone('America/Cuiaba');
        }
        return self::$AMERICACUIABA;
    }
    public static function AMERICACURACAO(): Timezone
    {
        if (!isset(self::$AMERICACURACAO)) {
            self::$AMERICACURACAO = new Timezone('America/Curacao');
        }
        return self::$AMERICACURACAO;
    }
    public static function AMERICADANMARKSHAVN(): Timezone
    {
        if (!isset(self::$AMERICADANMARKSHAVN)) {
            self::$AMERICADANMARKSHAVN = new Timezone('America/Danmarkshavn');
        }
        return self::$AMERICADANMARKSHAVN;
    }
    public static function AMERICADAWSON(): Timezone
    {
        if (!isset(self::$AMERICADAWSON)) {
            self::$AMERICADAWSON = new Timezone('America/Dawson');
        }
        return self::$AMERICADAWSON;
    }
    public static function AMERICADAWSONCREEK(): Timezone
    {
        if (!isset(self::$AMERICADAWSONCREEK)) {
            self::$AMERICADAWSONCREEK = new Timezone('America/Dawson_Creek');
        }
        return self::$AMERICADAWSONCREEK;
    }
    public static function AMERICADENVER(): Timezone
    {
        if (!isset(self::$AMERICADENVER)) {
            self::$AMERICADENVER = new Timezone('America/Denver');
        }
        return self::$AMERICADENVER;
    }
    public static function AMERICADETROIT(): Timezone
    {
        if (!isset(self::$AMERICADETROIT)) {
            self::$AMERICADETROIT = new Timezone('America/Detroit');
        }
        return self::$AMERICADETROIT;
    }
    public static function AMERICADOMINICA(): Timezone
    {
        if (!isset(self::$AMERICADOMINICA)) {
            self::$AMERICADOMINICA = new Timezone('America/Dominica');
        }
        return self::$AMERICADOMINICA;
    }
    public static function AMERICAEDMONTON(): Timezone
    {
        if (!isset(self::$AMERICAEDMONTON)) {
            self::$AMERICAEDMONTON = new Timezone('America/Edmonton');
        }
        return self::$AMERICAEDMONTON;
    }
    public static function AMERICAEIRUNEPE(): Timezone
    {
        if (!isset(self::$AMERICAEIRUNEPE)) {
            self::$AMERICAEIRUNEPE = new Timezone('America/Eirunepe');
        }
        return self::$AMERICAEIRUNEPE;
    }
    public static function AMERICAELSALVADOR(): Timezone
    {
        if (!isset(self::$AMERICAELSALVADOR)) {
            self::$AMERICAELSALVADOR = new Timezone('America/El_Salvador');
        }
        return self::$AMERICAELSALVADOR;
    }
    public static function AMERICAFORTNELSON(): Timezone
    {
        if (!isset(self::$AMERICAFORTNELSON)) {
            self::$AMERICAFORTNELSON = new Timezone('America/Fort_Nelson');
        }
        return self::$AMERICAFORTNELSON;
    }
    public static function AMERICAFORTALEZA(): Timezone
    {
        if (!isset(self::$AMERICAFORTALEZA)) {
            self::$AMERICAFORTALEZA = new Timezone('America/Fortaleza');
        }
        return self::$AMERICAFORTALEZA;
    }
    public static function AMERICAGLACEBAY(): Timezone
    {
        if (!isset(self::$AMERICAGLACEBAY)) {
            self::$AMERICAGLACEBAY = new Timezone('America/Glace_Bay');
        }
        return self::$AMERICAGLACEBAY;
    }
    public static function AMERICAGOOSEBAY(): Timezone
    {
        if (!isset(self::$AMERICAGOOSEBAY)) {
            self::$AMERICAGOOSEBAY = new Timezone('America/Goose_Bay');
        }
        return self::$AMERICAGOOSEBAY;
    }
    public static function AMERICAGRANDTURK(): Timezone
    {
        if (!isset(self::$AMERICAGRANDTURK)) {
            self::$AMERICAGRANDTURK = new Timezone('America/Grand_Turk');
        }
        return self::$AMERICAGRANDTURK;
    }
    public static function AMERICAGRENADA(): Timezone
    {
        if (!isset(self::$AMERICAGRENADA)) {
            self::$AMERICAGRENADA = new Timezone('America/Grenada');
        }
        return self::$AMERICAGRENADA;
    }
    public static function AMERICAGUADELOUPE(): Timezone
    {
        if (!isset(self::$AMERICAGUADELOUPE)) {
            self::$AMERICAGUADELOUPE = new Timezone('America/Guadeloupe');
        }
        return self::$AMERICAGUADELOUPE;
    }
    public static function AMERICAGUATEMALA(): Timezone
    {
        if (!isset(self::$AMERICAGUATEMALA)) {
            self::$AMERICAGUATEMALA = new Timezone('America/Guatemala');
        }
        return self::$AMERICAGUATEMALA;
    }
    public static function AMERICAGUAYAQUIL(): Timezone
    {
        if (!isset(self::$AMERICAGUAYAQUIL)) {
            self::$AMERICAGUAYAQUIL = new Timezone('America/Guayaquil');
        }
        return self::$AMERICAGUAYAQUIL;
    }
    public static function AMERICAGUYANA(): Timezone
    {
        if (!isset(self::$AMERICAGUYANA)) {
            self::$AMERICAGUYANA = new Timezone('America/Guyana');
        }
        return self::$AMERICAGUYANA;
    }
    public static function AMERICAHALIFAX(): Timezone
    {
        if (!isset(self::$AMERICAHALIFAX)) {
            self::$AMERICAHALIFAX = new Timezone('America/Halifax');
        }
        return self::$AMERICAHALIFAX;
    }
    public static function AMERICAHAVANA(): Timezone
    {
        if (!isset(self::$AMERICAHAVANA)) {
            self::$AMERICAHAVANA = new Timezone('America/Havana');
        }
        return self::$AMERICAHAVANA;
    }
    public static function AMERICAHERMOSILLO(): Timezone
    {
        if (!isset(self::$AMERICAHERMOSILLO)) {
            self::$AMERICAHERMOSILLO = new Timezone('America/Hermosillo');
        }
        return self::$AMERICAHERMOSILLO;
    }
    public static function AMERICAINUVIK(): Timezone
    {
        if (!isset(self::$AMERICAINUVIK)) {
            self::$AMERICAINUVIK = new Timezone('America/Inuvik');
        }
        return self::$AMERICAINUVIK;
    }
    public static function AMERICAIQALUIT(): Timezone
    {
        if (!isset(self::$AMERICAIQALUIT)) {
            self::$AMERICAIQALUIT = new Timezone('America/Iqaluit');
        }
        return self::$AMERICAIQALUIT;
    }
    public static function AMERICAJAMAICA(): Timezone
    {
        if (!isset(self::$AMERICAJAMAICA)) {
            self::$AMERICAJAMAICA = new Timezone('America/Jamaica');
        }
        return self::$AMERICAJAMAICA;
    }
    public static function AMERICAJUNEAU(): Timezone
    {
        if (!isset(self::$AMERICAJUNEAU)) {
            self::$AMERICAJUNEAU = new Timezone('America/Juneau');
        }
        return self::$AMERICAJUNEAU;
    }
    public static function AMERICAKRALENDIJK(): Timezone
    {
        if (!isset(self::$AMERICAKRALENDIJK)) {
            self::$AMERICAKRALENDIJK = new Timezone('America/Kralendijk');
        }
        return self::$AMERICAKRALENDIJK;
    }
    public static function AMERICALAPAZ(): Timezone
    {
        if (!isset(self::$AMERICALAPAZ)) {
            self::$AMERICALAPAZ = new Timezone('America/La_Paz');
        }
        return self::$AMERICALAPAZ;
    }
    public static function AMERICALIMA(): Timezone
    {
        if (!isset(self::$AMERICALIMA)) {
            self::$AMERICALIMA = new Timezone('America/Lima');
        }
        return self::$AMERICALIMA;
    }
    public static function AMERICALOSANGELES(): Timezone
    {
        if (!isset(self::$AMERICALOSANGELES)) {
            self::$AMERICALOSANGELES = new Timezone('America/Los_Angeles');
        }
        return self::$AMERICALOSANGELES;
    }
    public static function AMERICALOWERPRINCES(): Timezone
    {
        if (!isset(self::$AMERICALOWERPRINCES)) {
            self::$AMERICALOWERPRINCES = new Timezone('America/Lower_Princes');
        }
        return self::$AMERICALOWERPRINCES;
    }
    public static function AMERICAMACEIO(): Timezone
    {
        if (!isset(self::$AMERICAMACEIO)) {
            self::$AMERICAMACEIO = new Timezone('America/Maceio');
        }
        return self::$AMERICAMACEIO;
    }
    public static function AMERICAMANAGUA(): Timezone
    {
        if (!isset(self::$AMERICAMANAGUA)) {
            self::$AMERICAMANAGUA = new Timezone('America/Managua');
        }
        return self::$AMERICAMANAGUA;
    }
    public static function AMERICAMANAUS(): Timezone
    {
        if (!isset(self::$AMERICAMANAUS)) {
            self::$AMERICAMANAUS = new Timezone('America/Manaus');
        }
        return self::$AMERICAMANAUS;
    }
    public static function AMERICAMARIGOT(): Timezone
    {
        if (!isset(self::$AMERICAMARIGOT)) {
            self::$AMERICAMARIGOT = new Timezone('America/Marigot');
        }
        return self::$AMERICAMARIGOT;
    }
    public static function AMERICAMARTINIQUE(): Timezone
    {
        if (!isset(self::$AMERICAMARTINIQUE)) {
            self::$AMERICAMARTINIQUE = new Timezone('America/Martinique');
        }
        return self::$AMERICAMARTINIQUE;
    }
    public static function AMERICAMATAMOROS(): Timezone
    {
        if (!isset(self::$AMERICAMATAMOROS)) {
            self::$AMERICAMATAMOROS = new Timezone('America/Matamoros');
        }
        return self::$AMERICAMATAMOROS;
    }
    public static function AMERICAMAZATLAN(): Timezone
    {
        if (!isset(self::$AMERICAMAZATLAN)) {
            self::$AMERICAMAZATLAN = new Timezone('America/Mazatlan');
        }
        return self::$AMERICAMAZATLAN;
    }
    public static function AMERICAMENOMINEE(): Timezone
    {
        if (!isset(self::$AMERICAMENOMINEE)) {
            self::$AMERICAMENOMINEE = new Timezone('America/Menominee');
        }
        return self::$AMERICAMENOMINEE;
    }
    public static function AMERICAMERIDA(): Timezone
    {
        if (!isset(self::$AMERICAMERIDA)) {
            self::$AMERICAMERIDA = new Timezone('America/Merida');
        }
        return self::$AMERICAMERIDA;
    }
    public static function AMERICAMETLAKATLA(): Timezone
    {
        if (!isset(self::$AMERICAMETLAKATLA)) {
            self::$AMERICAMETLAKATLA = new Timezone('America/Metlakatla');
        }
        return self::$AMERICAMETLAKATLA;
    }
    public static function AMERICAMEXICOCITY(): Timezone
    {
        if (!isset(self::$AMERICAMEXICOCITY)) {
            self::$AMERICAMEXICOCITY = new Timezone('America/Mexico_City');
        }
        return self::$AMERICAMEXICOCITY;
    }
    public static function AMERICAMIQUELON(): Timezone
    {
        if (!isset(self::$AMERICAMIQUELON)) {
            self::$AMERICAMIQUELON = new Timezone('America/Miquelon');
        }
        return self::$AMERICAMIQUELON;
    }
    public static function AMERICAMONCTON(): Timezone
    {
        if (!isset(self::$AMERICAMONCTON)) {
            self::$AMERICAMONCTON = new Timezone('America/Moncton');
        }
        return self::$AMERICAMONCTON;
    }
    public static function AMERICAMONTERREY(): Timezone
    {
        if (!isset(self::$AMERICAMONTERREY)) {
            self::$AMERICAMONTERREY = new Timezone('America/Monterrey');
        }
        return self::$AMERICAMONTERREY;
    }
    public static function AMERICAMONTEVIDEO(): Timezone
    {
        if (!isset(self::$AMERICAMONTEVIDEO)) {
            self::$AMERICAMONTEVIDEO = new Timezone('America/Montevideo');
        }
        return self::$AMERICAMONTEVIDEO;
    }
    public static function AMERICAMONTSERRAT(): Timezone
    {
        if (!isset(self::$AMERICAMONTSERRAT)) {
            self::$AMERICAMONTSERRAT = new Timezone('America/Montserrat');
        }
        return self::$AMERICAMONTSERRAT;
    }
    public static function AMERICANASSAU(): Timezone
    {
        if (!isset(self::$AMERICANASSAU)) {
            self::$AMERICANASSAU = new Timezone('America/Nassau');
        }
        return self::$AMERICANASSAU;
    }
    public static function AMERICANEWYORK(): Timezone
    {
        if (!isset(self::$AMERICANEWYORK)) {
            self::$AMERICANEWYORK = new Timezone('America/New_York');
        }
        return self::$AMERICANEWYORK;
    }
    public static function AMERICANOME(): Timezone
    {
        if (!isset(self::$AMERICANOME)) {
            self::$AMERICANOME = new Timezone('America/Nome');
        }
        return self::$AMERICANOME;
    }
    public static function AMERICANORONHA(): Timezone
    {
        if (!isset(self::$AMERICANORONHA)) {
            self::$AMERICANORONHA = new Timezone('America/Noronha');
        }
        return self::$AMERICANORONHA;
    }
    public static function AMERICANUUK(): Timezone
    {
        if (!isset(self::$AMERICANUUK)) {
            self::$AMERICANUUK = new Timezone('America/Nuuk');
        }
        return self::$AMERICANUUK;
    }
    public static function AMERICAOJINAGA(): Timezone
    {
        if (!isset(self::$AMERICAOJINAGA)) {
            self::$AMERICAOJINAGA = new Timezone('America/Ojinaga');
        }
        return self::$AMERICAOJINAGA;
    }
    public static function AMERICAPANAMA(): Timezone
    {
        if (!isset(self::$AMERICAPANAMA)) {
            self::$AMERICAPANAMA = new Timezone('America/Panama');
        }
        return self::$AMERICAPANAMA;
    }
    public static function AMERICAPARAMARIBO(): Timezone
    {
        if (!isset(self::$AMERICAPARAMARIBO)) {
            self::$AMERICAPARAMARIBO = new Timezone('America/Paramaribo');
        }
        return self::$AMERICAPARAMARIBO;
    }
    public static function AMERICAPHOENIX(): Timezone
    {
        if (!isset(self::$AMERICAPHOENIX)) {
            self::$AMERICAPHOENIX = new Timezone('America/Phoenix');
        }
        return self::$AMERICAPHOENIX;
    }
    public static function AMERICAPORTAUPRINCE(): Timezone
    {
        if (!isset(self::$AMERICAPORTAUPRINCE)) {
            self::$AMERICAPORTAUPRINCE = new Timezone('America/Port-au-Prince');
        }
        return self::$AMERICAPORTAUPRINCE;
    }
    public static function AMERICAPORTOFSPAIN(): Timezone
    {
        if (!isset(self::$AMERICAPORTOFSPAIN)) {
            self::$AMERICAPORTOFSPAIN = new Timezone('America/Port_of_Spain');
        }
        return self::$AMERICAPORTOFSPAIN;
    }
    public static function AMERICAPORTOVELHO(): Timezone
    {
        if (!isset(self::$AMERICAPORTOVELHO)) {
            self::$AMERICAPORTOVELHO = new Timezone('America/Porto_Velho');
        }
        return self::$AMERICAPORTOVELHO;
    }
    public static function AMERICAPUERTORICO(): Timezone
    {
        if (!isset(self::$AMERICAPUERTORICO)) {
            self::$AMERICAPUERTORICO = new Timezone('America/Puerto_Rico');
        }
        return self::$AMERICAPUERTORICO;
    }
    public static function AMERICAPUNTAARENAS(): Timezone
    {
        if (!isset(self::$AMERICAPUNTAARENAS)) {
            self::$AMERICAPUNTAARENAS = new Timezone('America/Punta_Arenas');
        }
        return self::$AMERICAPUNTAARENAS;
    }
    public static function AMERICARANKININLET(): Timezone
    {
        if (!isset(self::$AMERICARANKININLET)) {
            self::$AMERICARANKININLET = new Timezone('America/Rankin_Inlet');
        }
        return self::$AMERICARANKININLET;
    }
    public static function AMERICARECIFE(): Timezone
    {
        if (!isset(self::$AMERICARECIFE)) {
            self::$AMERICARECIFE = new Timezone('America/Recife');
        }
        return self::$AMERICARECIFE;
    }
    public static function AMERICAREGINA(): Timezone
    {
        if (!isset(self::$AMERICAREGINA)) {
            self::$AMERICAREGINA = new Timezone('America/Regina');
        }
        return self::$AMERICAREGINA;
    }
    public static function AMERICARESOLUTE(): Timezone
    {
        if (!isset(self::$AMERICARESOLUTE)) {
            self::$AMERICARESOLUTE = new Timezone('America/Resolute');
        }
        return self::$AMERICARESOLUTE;
    }
    public static function AMERICARIOBRANCO(): Timezone
    {
        if (!isset(self::$AMERICARIOBRANCO)) {
            self::$AMERICARIOBRANCO = new Timezone('America/Rio_Branco');
        }
        return self::$AMERICARIOBRANCO;
    }
    public static function AMERICASANTAREM(): Timezone
    {
        if (!isset(self::$AMERICASANTAREM)) {
            self::$AMERICASANTAREM = new Timezone('America/Santarem');
        }
        return self::$AMERICASANTAREM;
    }
    public static function AMERICASANTIAGO(): Timezone
    {
        if (!isset(self::$AMERICASANTIAGO)) {
            self::$AMERICASANTIAGO = new Timezone('America/Santiago');
        }
        return self::$AMERICASANTIAGO;
    }
    public static function AMERICASANTODOMINGO(): Timezone
    {
        if (!isset(self::$AMERICASANTODOMINGO)) {
            self::$AMERICASANTODOMINGO = new Timezone('America/Santo_Domingo');
        }
        return self::$AMERICASANTODOMINGO;
    }
    public static function AMERICASAOPAULO(): Timezone
    {
        if (!isset(self::$AMERICASAOPAULO)) {
            self::$AMERICASAOPAULO = new Timezone('America/Sao_Paulo');
        }
        return self::$AMERICASAOPAULO;
    }
    public static function AMERICASCORESBYSUND(): Timezone
    {
        if (!isset(self::$AMERICASCORESBYSUND)) {
            self::$AMERICASCORESBYSUND = new Timezone('America/Scoresbysund');
        }
        return self::$AMERICASCORESBYSUND;
    }
    public static function AMERICASITKA(): Timezone
    {
        if (!isset(self::$AMERICASITKA)) {
            self::$AMERICASITKA = new Timezone('America/Sitka');
        }
        return self::$AMERICASITKA;
    }
    public static function AMERICASTBARTHELEMY(): Timezone
    {
        if (!isset(self::$AMERICASTBARTHELEMY)) {
            self::$AMERICASTBARTHELEMY = new Timezone('America/St_Barthelemy');
        }
        return self::$AMERICASTBARTHELEMY;
    }
    public static function AMERICASTJOHNS(): Timezone
    {
        if (!isset(self::$AMERICASTJOHNS)) {
            self::$AMERICASTJOHNS = new Timezone('America/St_Johns');
        }
        return self::$AMERICASTJOHNS;
    }
    public static function AMERICASTKITTS(): Timezone
    {
        if (!isset(self::$AMERICASTKITTS)) {
            self::$AMERICASTKITTS = new Timezone('America/St_Kitts');
        }
        return self::$AMERICASTKITTS;
    }
    public static function AMERICASTLUCIA(): Timezone
    {
        if (!isset(self::$AMERICASTLUCIA)) {
            self::$AMERICASTLUCIA = new Timezone('America/St_Lucia');
        }
        return self::$AMERICASTLUCIA;
    }
    public static function AMERICASTTHOMAS(): Timezone
    {
        if (!isset(self::$AMERICASTTHOMAS)) {
            self::$AMERICASTTHOMAS = new Timezone('America/St_Thomas');
        }
        return self::$AMERICASTTHOMAS;
    }
    public static function AMERICASTVINCENT(): Timezone
    {
        if (!isset(self::$AMERICASTVINCENT)) {
            self::$AMERICASTVINCENT = new Timezone('America/St_Vincent');
        }
        return self::$AMERICASTVINCENT;
    }
    public static function AMERICASWIFTCURRENT(): Timezone
    {
        if (!isset(self::$AMERICASWIFTCURRENT)) {
            self::$AMERICASWIFTCURRENT = new Timezone('America/Swift_Current');
        }
        return self::$AMERICASWIFTCURRENT;
    }
    public static function AMERICATEGUCIGALPA(): Timezone
    {
        if (!isset(self::$AMERICATEGUCIGALPA)) {
            self::$AMERICATEGUCIGALPA = new Timezone('America/Tegucigalpa');
        }
        return self::$AMERICATEGUCIGALPA;
    }
    public static function AMERICATHULE(): Timezone
    {
        if (!isset(self::$AMERICATHULE)) {
            self::$AMERICATHULE = new Timezone('America/Thule');
        }
        return self::$AMERICATHULE;
    }
    public static function AMERICATIJUANA(): Timezone
    {
        if (!isset(self::$AMERICATIJUANA)) {
            self::$AMERICATIJUANA = new Timezone('America/Tijuana');
        }
        return self::$AMERICATIJUANA;
    }
    public static function AMERICATORONTO(): Timezone
    {
        if (!isset(self::$AMERICATORONTO)) {
            self::$AMERICATORONTO = new Timezone('America/Toronto');
        }
        return self::$AMERICATORONTO;
    }
    public static function AMERICATORTOLA(): Timezone
    {
        if (!isset(self::$AMERICATORTOLA)) {
            self::$AMERICATORTOLA = new Timezone('America/Tortola');
        }
        return self::$AMERICATORTOLA;
    }
    public static function AMERICAVANCOUVER(): Timezone
    {
        if (!isset(self::$AMERICAVANCOUVER)) {
            self::$AMERICAVANCOUVER = new Timezone('America/Vancouver');
        }
        return self::$AMERICAVANCOUVER;
    }
    public static function AMERICAWHITEHORSE(): Timezone
    {
        if (!isset(self::$AMERICAWHITEHORSE)) {
            self::$AMERICAWHITEHORSE = new Timezone('America/Whitehorse');
        }
        return self::$AMERICAWHITEHORSE;
    }
    public static function AMERICAWINNIPEG(): Timezone
    {
        if (!isset(self::$AMERICAWINNIPEG)) {
            self::$AMERICAWINNIPEG = new Timezone('America/Winnipeg');
        }
        return self::$AMERICAWINNIPEG;
    }
    public static function AMERICAYAKUTAT(): Timezone
    {
        if (!isset(self::$AMERICAYAKUTAT)) {
            self::$AMERICAYAKUTAT = new Timezone('America/Yakutat');
        }
        return self::$AMERICAYAKUTAT;
    }
    public static function ANTARCTICACASEY(): Timezone
    {
        if (!isset(self::$ANTARCTICACASEY)) {
            self::$ANTARCTICACASEY = new Timezone('Antarctica/Casey');
        }
        return self::$ANTARCTICACASEY;
    }
    public static function ANTARCTICADAVIS(): Timezone
    {
        if (!isset(self::$ANTARCTICADAVIS)) {
            self::$ANTARCTICADAVIS = new Timezone('Antarctica/Davis');
        }
        return self::$ANTARCTICADAVIS;
    }
    public static function ANTARCTICADUMONTDURVILLE(): Timezone
    {
        if (!isset(self::$ANTARCTICADUMONTDURVILLE)) {
            self::$ANTARCTICADUMONTDURVILLE = new Timezone('Antarctica/DumontDUrville');
        }
        return self::$ANTARCTICADUMONTDURVILLE;
    }
    public static function ANTARCTICAMACQUARIE(): Timezone
    {
        if (!isset(self::$ANTARCTICAMACQUARIE)) {
            self::$ANTARCTICAMACQUARIE = new Timezone('Antarctica/Macquarie');
        }
        return self::$ANTARCTICAMACQUARIE;
    }
    public static function ANTARCTICAMAWSON(): Timezone
    {
        if (!isset(self::$ANTARCTICAMAWSON)) {
            self::$ANTARCTICAMAWSON = new Timezone('Antarctica/Mawson');
        }
        return self::$ANTARCTICAMAWSON;
    }
    public static function ANTARCTICAMCMURDO(): Timezone
    {
        if (!isset(self::$ANTARCTICAMCMURDO)) {
            self::$ANTARCTICAMCMURDO = new Timezone('Antarctica/McMurdo');
        }
        return self::$ANTARCTICAMCMURDO;
    }
    public static function ANTARCTICAPALMER(): Timezone
    {
        if (!isset(self::$ANTARCTICAPALMER)) {
            self::$ANTARCTICAPALMER = new Timezone('Antarctica/Palmer');
        }
        return self::$ANTARCTICAPALMER;
    }
    public static function ANTARCTICAROTHERA(): Timezone
    {
        if (!isset(self::$ANTARCTICAROTHERA)) {
            self::$ANTARCTICAROTHERA = new Timezone('Antarctica/Rothera');
        }
        return self::$ANTARCTICAROTHERA;
    }
    public static function ANTARCTICASYOWA(): Timezone
    {
        if (!isset(self::$ANTARCTICASYOWA)) {
            self::$ANTARCTICASYOWA = new Timezone('Antarctica/Syowa');
        }
        return self::$ANTARCTICASYOWA;
    }
    public static function ANTARCTICATROLL(): Timezone
    {
        if (!isset(self::$ANTARCTICATROLL)) {
            self::$ANTARCTICATROLL = new Timezone('Antarctica/Troll');
        }
        return self::$ANTARCTICATROLL;
    }
    public static function ANTARCTICAVOSTOK(): Timezone
    {
        if (!isset(self::$ANTARCTICAVOSTOK)) {
            self::$ANTARCTICAVOSTOK = new Timezone('Antarctica/Vostok');
        }
        return self::$ANTARCTICAVOSTOK;
    }
    public static function ARCTICLONGYEARBYEN(): Timezone
    {
        if (!isset(self::$ARCTICLONGYEARBYEN)) {
            self::$ARCTICLONGYEARBYEN = new Timezone('Arctic/Longyearbyen');
        }
        return self::$ARCTICLONGYEARBYEN;
    }
    public static function ASIAADEN(): Timezone
    {
        if (!isset(self::$ASIAADEN)) {
            self::$ASIAADEN = new Timezone('Asia/Aden');
        }
        return self::$ASIAADEN;
    }
    public static function ASIAALMATY(): Timezone
    {
        if (!isset(self::$ASIAALMATY)) {
            self::$ASIAALMATY = new Timezone('Asia/Almaty');
        }
        return self::$ASIAALMATY;
    }
    public static function ASIAAMMAN(): Timezone
    {
        if (!isset(self::$ASIAAMMAN)) {
            self::$ASIAAMMAN = new Timezone('Asia/Amman');
        }
        return self::$ASIAAMMAN;
    }
    public static function ASIAANADYR(): Timezone
    {
        if (!isset(self::$ASIAANADYR)) {
            self::$ASIAANADYR = new Timezone('Asia/Anadyr');
        }
        return self::$ASIAANADYR;
    }
    public static function ASIAAQTAU(): Timezone
    {
        if (!isset(self::$ASIAAQTAU)) {
            self::$ASIAAQTAU = new Timezone('Asia/Aqtau');
        }
        return self::$ASIAAQTAU;
    }
    public static function ASIAAQTOBE(): Timezone
    {
        if (!isset(self::$ASIAAQTOBE)) {
            self::$ASIAAQTOBE = new Timezone('Asia/Aqtobe');
        }
        return self::$ASIAAQTOBE;
    }
    public static function ASIAASHGABAT(): Timezone
    {
        if (!isset(self::$ASIAASHGABAT)) {
            self::$ASIAASHGABAT = new Timezone('Asia/Ashgabat');
        }
        return self::$ASIAASHGABAT;
    }
    public static function ASIAATYRAU(): Timezone
    {
        if (!isset(self::$ASIAATYRAU)) {
            self::$ASIAATYRAU = new Timezone('Asia/Atyrau');
        }
        return self::$ASIAATYRAU;
    }
    public static function ASIABAGHDAD(): Timezone
    {
        if (!isset(self::$ASIABAGHDAD)) {
            self::$ASIABAGHDAD = new Timezone('Asia/Baghdad');
        }
        return self::$ASIABAGHDAD;
    }
    public static function ASIABAHRAIN(): Timezone
    {
        if (!isset(self::$ASIABAHRAIN)) {
            self::$ASIABAHRAIN = new Timezone('Asia/Bahrain');
        }
        return self::$ASIABAHRAIN;
    }
    public static function ASIABAKU(): Timezone
    {
        if (!isset(self::$ASIABAKU)) {
            self::$ASIABAKU = new Timezone('Asia/Baku');
        }
        return self::$ASIABAKU;
    }
    public static function ASIABANGKOK(): Timezone
    {
        if (!isset(self::$ASIABANGKOK)) {
            self::$ASIABANGKOK = new Timezone('Asia/Bangkok');
        }
        return self::$ASIABANGKOK;
    }
    public static function ASIABARNAUL(): Timezone
    {
        if (!isset(self::$ASIABARNAUL)) {
            self::$ASIABARNAUL = new Timezone('Asia/Barnaul');
        }
        return self::$ASIABARNAUL;
    }
    public static function ASIABEIRUT(): Timezone
    {
        if (!isset(self::$ASIABEIRUT)) {
            self::$ASIABEIRUT = new Timezone('Asia/Beirut');
        }
        return self::$ASIABEIRUT;
    }
    public static function ASIABISHKEK(): Timezone
    {
        if (!isset(self::$ASIABISHKEK)) {
            self::$ASIABISHKEK = new Timezone('Asia/Bishkek');
        }
        return self::$ASIABISHKEK;
    }
    public static function ASIABRUNEI(): Timezone
    {
        if (!isset(self::$ASIABRUNEI)) {
            self::$ASIABRUNEI = new Timezone('Asia/Brunei');
        }
        return self::$ASIABRUNEI;
    }
    public static function ASIACHITA(): Timezone
    {
        if (!isset(self::$ASIACHITA)) {
            self::$ASIACHITA = new Timezone('Asia/Chita');
        }
        return self::$ASIACHITA;
    }
    public static function ASIACOLOMBO(): Timezone
    {
        if (!isset(self::$ASIACOLOMBO)) {
            self::$ASIACOLOMBO = new Timezone('Asia/Colombo');
        }
        return self::$ASIACOLOMBO;
    }
    public static function ASIADAMASCUS(): Timezone
    {
        if (!isset(self::$ASIADAMASCUS)) {
            self::$ASIADAMASCUS = new Timezone('Asia/Damascus');
        }
        return self::$ASIADAMASCUS;
    }
    public static function ASIADHAKA(): Timezone
    {
        if (!isset(self::$ASIADHAKA)) {
            self::$ASIADHAKA = new Timezone('Asia/Dhaka');
        }
        return self::$ASIADHAKA;
    }
    public static function ASIADILI(): Timezone
    {
        if (!isset(self::$ASIADILI)) {
            self::$ASIADILI = new Timezone('Asia/Dili');
        }
        return self::$ASIADILI;
    }
    public static function ASIADUBAI(): Timezone
    {
        if (!isset(self::$ASIADUBAI)) {
            self::$ASIADUBAI = new Timezone('Asia/Dubai');
        }
        return self::$ASIADUBAI;
    }
    public static function ASIADUSHANBE(): Timezone
    {
        if (!isset(self::$ASIADUSHANBE)) {
            self::$ASIADUSHANBE = new Timezone('Asia/Dushanbe');
        }
        return self::$ASIADUSHANBE;
    }
    public static function ASIAFAMAGUSTA(): Timezone
    {
        if (!isset(self::$ASIAFAMAGUSTA)) {
            self::$ASIAFAMAGUSTA = new Timezone('Asia/Famagusta');
        }
        return self::$ASIAFAMAGUSTA;
    }
    public static function ASIAGAZA(): Timezone
    {
        if (!isset(self::$ASIAGAZA)) {
            self::$ASIAGAZA = new Timezone('Asia/Gaza');
        }
        return self::$ASIAGAZA;
    }
    public static function ASIAHEBRON(): Timezone
    {
        if (!isset(self::$ASIAHEBRON)) {
            self::$ASIAHEBRON = new Timezone('Asia/Hebron');
        }
        return self::$ASIAHEBRON;
    }
    public static function ASIAHOCHIMINH(): Timezone
    {
        if (!isset(self::$ASIAHOCHIMINH)) {
            self::$ASIAHOCHIMINH = new Timezone('Asia/Ho_Chi_Minh');
        }
        return self::$ASIAHOCHIMINH;
    }
    public static function ASIAHONGKONG(): Timezone
    {
        if (!isset(self::$ASIAHONGKONG)) {
            self::$ASIAHONGKONG = new Timezone('Asia/Hong_Kong');
        }
        return self::$ASIAHONGKONG;
    }
    public static function ASIAHOVD(): Timezone
    {
        if (!isset(self::$ASIAHOVD)) {
            self::$ASIAHOVD = new Timezone('Asia/Hovd');
        }
        return self::$ASIAHOVD;
    }
    public static function ASIAIRKUTSK(): Timezone
    {
        if (!isset(self::$ASIAIRKUTSK)) {
            self::$ASIAIRKUTSK = new Timezone('Asia/Irkutsk');
        }
        return self::$ASIAIRKUTSK;
    }
    public static function ASIAJAKARTA(): Timezone
    {
        if (!isset(self::$ASIAJAKARTA)) {
            self::$ASIAJAKARTA = new Timezone('Asia/Jakarta');
        }
        return self::$ASIAJAKARTA;
    }
    public static function ASIAJAYAPURA(): Timezone
    {
        if (!isset(self::$ASIAJAYAPURA)) {
            self::$ASIAJAYAPURA = new Timezone('Asia/Jayapura');
        }
        return self::$ASIAJAYAPURA;
    }
    public static function ASIAJERUSALEM(): Timezone
    {
        if (!isset(self::$ASIAJERUSALEM)) {
            self::$ASIAJERUSALEM = new Timezone('Asia/Jerusalem');
        }
        return self::$ASIAJERUSALEM;
    }
    public static function ASIAKABUL(): Timezone
    {
        if (!isset(self::$ASIAKABUL)) {
            self::$ASIAKABUL = new Timezone('Asia/Kabul');
        }
        return self::$ASIAKABUL;
    }
    public static function ASIAKAMCHATKA(): Timezone
    {
        if (!isset(self::$ASIAKAMCHATKA)) {
            self::$ASIAKAMCHATKA = new Timezone('Asia/Kamchatka');
        }
        return self::$ASIAKAMCHATKA;
    }
    public static function ASIAKARACHI(): Timezone
    {
        if (!isset(self::$ASIAKARACHI)) {
            self::$ASIAKARACHI = new Timezone('Asia/Karachi');
        }
        return self::$ASIAKARACHI;
    }
    public static function ASIAKATHMANDU(): Timezone
    {
        if (!isset(self::$ASIAKATHMANDU)) {
            self::$ASIAKATHMANDU = new Timezone('Asia/Kathmandu');
        }
        return self::$ASIAKATHMANDU;
    }
    public static function ASIAKHANDYGA(): Timezone
    {
        if (!isset(self::$ASIAKHANDYGA)) {
            self::$ASIAKHANDYGA = new Timezone('Asia/Khandyga');
        }
        return self::$ASIAKHANDYGA;
    }
    public static function ASIAKOLKATA(): Timezone
    {
        if (!isset(self::$ASIAKOLKATA)) {
            self::$ASIAKOLKATA = new Timezone('Asia/Kolkata');
        }
        return self::$ASIAKOLKATA;
    }
    public static function ASIAKRASNOYARSK(): Timezone
    {
        if (!isset(self::$ASIAKRASNOYARSK)) {
            self::$ASIAKRASNOYARSK = new Timezone('Asia/Krasnoyarsk');
        }
        return self::$ASIAKRASNOYARSK;
    }
    public static function ASIAKUALALUMPUR(): Timezone
    {
        if (!isset(self::$ASIAKUALALUMPUR)) {
            self::$ASIAKUALALUMPUR = new Timezone('Asia/Kuala_Lumpur');
        }
        return self::$ASIAKUALALUMPUR;
    }
    public static function ASIAKUCHING(): Timezone
    {
        if (!isset(self::$ASIAKUCHING)) {
            self::$ASIAKUCHING = new Timezone('Asia/Kuching');
        }
        return self::$ASIAKUCHING;
    }
    public static function ASIAKUWAIT(): Timezone
    {
        if (!isset(self::$ASIAKUWAIT)) {
            self::$ASIAKUWAIT = new Timezone('Asia/Kuwait');
        }
        return self::$ASIAKUWAIT;
    }
    public static function ASIAMACAU(): Timezone
    {
        if (!isset(self::$ASIAMACAU)) {
            self::$ASIAMACAU = new Timezone('Asia/Macau');
        }
        return self::$ASIAMACAU;
    }
    public static function ASIAMAGADAN(): Timezone
    {
        if (!isset(self::$ASIAMAGADAN)) {
            self::$ASIAMAGADAN = new Timezone('Asia/Magadan');
        }
        return self::$ASIAMAGADAN;
    }
    public static function ASIAMAKASSAR(): Timezone
    {
        if (!isset(self::$ASIAMAKASSAR)) {
            self::$ASIAMAKASSAR = new Timezone('Asia/Makassar');
        }
        return self::$ASIAMAKASSAR;
    }
    public static function ASIAMANILA(): Timezone
    {
        if (!isset(self::$ASIAMANILA)) {
            self::$ASIAMANILA = new Timezone('Asia/Manila');
        }
        return self::$ASIAMANILA;
    }
    public static function ASIAMUSCAT(): Timezone
    {
        if (!isset(self::$ASIAMUSCAT)) {
            self::$ASIAMUSCAT = new Timezone('Asia/Muscat');
        }
        return self::$ASIAMUSCAT;
    }
    public static function ASIANICOSIA(): Timezone
    {
        if (!isset(self::$ASIANICOSIA)) {
            self::$ASIANICOSIA = new Timezone('Asia/Nicosia');
        }
        return self::$ASIANICOSIA;
    }
    public static function ASIANOVOKUZNETSK(): Timezone
    {
        if (!isset(self::$ASIANOVOKUZNETSK)) {
            self::$ASIANOVOKUZNETSK = new Timezone('Asia/Novokuznetsk');
        }
        return self::$ASIANOVOKUZNETSK;
    }
    public static function ASIANOVOSIBIRSK(): Timezone
    {
        if (!isset(self::$ASIANOVOSIBIRSK)) {
            self::$ASIANOVOSIBIRSK = new Timezone('Asia/Novosibirsk');
        }
        return self::$ASIANOVOSIBIRSK;
    }
    public static function ASIAOMSK(): Timezone
    {
        if (!isset(self::$ASIAOMSK)) {
            self::$ASIAOMSK = new Timezone('Asia/Omsk');
        }
        return self::$ASIAOMSK;
    }
    public static function ASIAORAL(): Timezone
    {
        if (!isset(self::$ASIAORAL)) {
            self::$ASIAORAL = new Timezone('Asia/Oral');
        }
        return self::$ASIAORAL;
    }
    public static function ASIAPHNOMPENH(): Timezone
    {
        if (!isset(self::$ASIAPHNOMPENH)) {
            self::$ASIAPHNOMPENH = new Timezone('Asia/Phnom_Penh');
        }
        return self::$ASIAPHNOMPENH;
    }
    public static function ASIAPONTIANAK(): Timezone
    {
        if (!isset(self::$ASIAPONTIANAK)) {
            self::$ASIAPONTIANAK = new Timezone('Asia/Pontianak');
        }
        return self::$ASIAPONTIANAK;
    }
    public static function ASIAPYONGYANG(): Timezone
    {
        if (!isset(self::$ASIAPYONGYANG)) {
            self::$ASIAPYONGYANG = new Timezone('Asia/Pyongyang');
        }
        return self::$ASIAPYONGYANG;
    }
    public static function ASIAQATAR(): Timezone
    {
        if (!isset(self::$ASIAQATAR)) {
            self::$ASIAQATAR = new Timezone('Asia/Qatar');
        }
        return self::$ASIAQATAR;
    }
    public static function ASIAQOSTANAY(): Timezone
    {
        if (!isset(self::$ASIAQOSTANAY)) {
            self::$ASIAQOSTANAY = new Timezone('Asia/Qostanay');
        }
        return self::$ASIAQOSTANAY;
    }
    public static function ASIAQYZYLORDA(): Timezone
    {
        if (!isset(self::$ASIAQYZYLORDA)) {
            self::$ASIAQYZYLORDA = new Timezone('Asia/Qyzylorda');
        }
        return self::$ASIAQYZYLORDA;
    }
    public static function ASIARIYADH(): Timezone
    {
        if (!isset(self::$ASIARIYADH)) {
            self::$ASIARIYADH = new Timezone('Asia/Riyadh');
        }
        return self::$ASIARIYADH;
    }
    public static function ASIASAKHALIN(): Timezone
    {
        if (!isset(self::$ASIASAKHALIN)) {
            self::$ASIASAKHALIN = new Timezone('Asia/Sakhalin');
        }
        return self::$ASIASAKHALIN;
    }
    public static function ASIASAMARKAND(): Timezone
    {
        if (!isset(self::$ASIASAMARKAND)) {
            self::$ASIASAMARKAND = new Timezone('Asia/Samarkand');
        }
        return self::$ASIASAMARKAND;
    }
    public static function ASIASEOUL(): Timezone
    {
        if (!isset(self::$ASIASEOUL)) {
            self::$ASIASEOUL = new Timezone('Asia/Seoul');
        }
        return self::$ASIASEOUL;
    }
    public static function ASIASHANGHAI(): Timezone
    {
        if (!isset(self::$ASIASHANGHAI)) {
            self::$ASIASHANGHAI = new Timezone('Asia/Shanghai');
        }
        return self::$ASIASHANGHAI;
    }
    public static function ASIASINGAPORE(): Timezone
    {
        if (!isset(self::$ASIASINGAPORE)) {
            self::$ASIASINGAPORE = new Timezone('Asia/Singapore');
        }
        return self::$ASIASINGAPORE;
    }
    public static function ASIASREDNEKOLYMSK(): Timezone
    {
        if (!isset(self::$ASIASREDNEKOLYMSK)) {
            self::$ASIASREDNEKOLYMSK = new Timezone('Asia/Srednekolymsk');
        }
        return self::$ASIASREDNEKOLYMSK;
    }
    public static function ASIATAIPEI(): Timezone
    {
        if (!isset(self::$ASIATAIPEI)) {
            self::$ASIATAIPEI = new Timezone('Asia/Taipei');
        }
        return self::$ASIATAIPEI;
    }
    public static function ASIATASHKENT(): Timezone
    {
        if (!isset(self::$ASIATASHKENT)) {
            self::$ASIATASHKENT = new Timezone('Asia/Tashkent');
        }
        return self::$ASIATASHKENT;
    }
    public static function ASIATBILISI(): Timezone
    {
        if (!isset(self::$ASIATBILISI)) {
            self::$ASIATBILISI = new Timezone('Asia/Tbilisi');
        }
        return self::$ASIATBILISI;
    }
    public static function ASIATEHRAN(): Timezone
    {
        if (!isset(self::$ASIATEHRAN)) {
            self::$ASIATEHRAN = new Timezone('Asia/Tehran');
        }
        return self::$ASIATEHRAN;
    }
    public static function ASIATHIMPHU(): Timezone
    {
        if (!isset(self::$ASIATHIMPHU)) {
            self::$ASIATHIMPHU = new Timezone('Asia/Thimphu');
        }
        return self::$ASIATHIMPHU;
    }
    public static function ASIATOKYO(): Timezone
    {
        if (!isset(self::$ASIATOKYO)) {
            self::$ASIATOKYO = new Timezone('Asia/Tokyo');
        }
        return self::$ASIATOKYO;
    }
    public static function ASIATOMSK(): Timezone
    {
        if (!isset(self::$ASIATOMSK)) {
            self::$ASIATOMSK = new Timezone('Asia/Tomsk');
        }
        return self::$ASIATOMSK;
    }
    public static function ASIAULAANBAATAR(): Timezone
    {
        if (!isset(self::$ASIAULAANBAATAR)) {
            self::$ASIAULAANBAATAR = new Timezone('Asia/Ulaanbaatar');
        }
        return self::$ASIAULAANBAATAR;
    }
    public static function ASIAURUMQI(): Timezone
    {
        if (!isset(self::$ASIAURUMQI)) {
            self::$ASIAURUMQI = new Timezone('Asia/Urumqi');
        }
        return self::$ASIAURUMQI;
    }
    public static function ASIAUSTNERA(): Timezone
    {
        if (!isset(self::$ASIAUSTNERA)) {
            self::$ASIAUSTNERA = new Timezone('Asia/Ust-Nera');
        }
        return self::$ASIAUSTNERA;
    }
    public static function ASIAVIENTIANE(): Timezone
    {
        if (!isset(self::$ASIAVIENTIANE)) {
            self::$ASIAVIENTIANE = new Timezone('Asia/Vientiane');
        }
        return self::$ASIAVIENTIANE;
    }
    public static function ASIAVLADIVOSTOK(): Timezone
    {
        if (!isset(self::$ASIAVLADIVOSTOK)) {
            self::$ASIAVLADIVOSTOK = new Timezone('Asia/Vladivostok');
        }
        return self::$ASIAVLADIVOSTOK;
    }
    public static function ASIAYAKUTSK(): Timezone
    {
        if (!isset(self::$ASIAYAKUTSK)) {
            self::$ASIAYAKUTSK = new Timezone('Asia/Yakutsk');
        }
        return self::$ASIAYAKUTSK;
    }
    public static function ASIAYANGON(): Timezone
    {
        if (!isset(self::$ASIAYANGON)) {
            self::$ASIAYANGON = new Timezone('Asia/Yangon');
        }
        return self::$ASIAYANGON;
    }
    public static function ASIAYEKATERINBURG(): Timezone
    {
        if (!isset(self::$ASIAYEKATERINBURG)) {
            self::$ASIAYEKATERINBURG = new Timezone('Asia/Yekaterinburg');
        }
        return self::$ASIAYEKATERINBURG;
    }
    public static function ASIAYEREVAN(): Timezone
    {
        if (!isset(self::$ASIAYEREVAN)) {
            self::$ASIAYEREVAN = new Timezone('Asia/Yerevan');
        }
        return self::$ASIAYEREVAN;
    }
    public static function ATLANTICAZORES(): Timezone
    {
        if (!isset(self::$ATLANTICAZORES)) {
            self::$ATLANTICAZORES = new Timezone('Atlantic/Azores');
        }
        return self::$ATLANTICAZORES;
    }
    public static function ATLANTICBERMUDA(): Timezone
    {
        if (!isset(self::$ATLANTICBERMUDA)) {
            self::$ATLANTICBERMUDA = new Timezone('Atlantic/Bermuda');
        }
        return self::$ATLANTICBERMUDA;
    }
    public static function ATLANTICCANARY(): Timezone
    {
        if (!isset(self::$ATLANTICCANARY)) {
            self::$ATLANTICCANARY = new Timezone('Atlantic/Canary');
        }
        return self::$ATLANTICCANARY;
    }
    public static function ATLANTICCAPEVERDE(): Timezone
    {
        if (!isset(self::$ATLANTICCAPEVERDE)) {
            self::$ATLANTICCAPEVERDE = new Timezone('Atlantic/Cape_Verde');
        }
        return self::$ATLANTICCAPEVERDE;
    }
    public static function ATLANTICFAROE(): Timezone
    {
        if (!isset(self::$ATLANTICFAROE)) {
            self::$ATLANTICFAROE = new Timezone('Atlantic/Faroe');
        }
        return self::$ATLANTICFAROE;
    }
    public static function ATLANTICMADEIRA(): Timezone
    {
        if (!isset(self::$ATLANTICMADEIRA)) {
            self::$ATLANTICMADEIRA = new Timezone('Atlantic/Madeira');
        }
        return self::$ATLANTICMADEIRA;
    }
    public static function ATLANTICREYKJAVIK(): Timezone
    {
        if (!isset(self::$ATLANTICREYKJAVIK)) {
            self::$ATLANTICREYKJAVIK = new Timezone('Atlantic/Reykjavik');
        }
        return self::$ATLANTICREYKJAVIK;
    }
    public static function ATLANTICSOUTHGEORGIA(): Timezone
    {
        if (!isset(self::$ATLANTICSOUTHGEORGIA)) {
            self::$ATLANTICSOUTHGEORGIA = new Timezone('Atlantic/South_Georgia');
        }
        return self::$ATLANTICSOUTHGEORGIA;
    }
    public static function ATLANTICSTHELENA(): Timezone
    {
        if (!isset(self::$ATLANTICSTHELENA)) {
            self::$ATLANTICSTHELENA = new Timezone('Atlantic/St_Helena');
        }
        return self::$ATLANTICSTHELENA;
    }
    public static function ATLANTICSTANLEY(): Timezone
    {
        if (!isset(self::$ATLANTICSTANLEY)) {
            self::$ATLANTICSTANLEY = new Timezone('Atlantic/Stanley');
        }
        return self::$ATLANTICSTANLEY;
    }
    public static function AUSTRALIAADELAIDE(): Timezone
    {
        if (!isset(self::$AUSTRALIAADELAIDE)) {
            self::$AUSTRALIAADELAIDE = new Timezone('Australia/Adelaide');
        }
        return self::$AUSTRALIAADELAIDE;
    }
    public static function AUSTRALIABRISBANE(): Timezone
    {
        if (!isset(self::$AUSTRALIABRISBANE)) {
            self::$AUSTRALIABRISBANE = new Timezone('Australia/Brisbane');
        }
        return self::$AUSTRALIABRISBANE;
    }
    public static function AUSTRALIABROKENHILL(): Timezone
    {
        if (!isset(self::$AUSTRALIABROKENHILL)) {
            self::$AUSTRALIABROKENHILL = new Timezone('Australia/Broken_Hill');
        }
        return self::$AUSTRALIABROKENHILL;
    }
    public static function AUSTRALIADARWIN(): Timezone
    {
        if (!isset(self::$AUSTRALIADARWIN)) {
            self::$AUSTRALIADARWIN = new Timezone('Australia/Darwin');
        }
        return self::$AUSTRALIADARWIN;
    }
    public static function AUSTRALIAEUCLA(): Timezone
    {
        if (!isset(self::$AUSTRALIAEUCLA)) {
            self::$AUSTRALIAEUCLA = new Timezone('Australia/Eucla');
        }
        return self::$AUSTRALIAEUCLA;
    }
    public static function AUSTRALIAHOBART(): Timezone
    {
        if (!isset(self::$AUSTRALIAHOBART)) {
            self::$AUSTRALIAHOBART = new Timezone('Australia/Hobart');
        }
        return self::$AUSTRALIAHOBART;
    }
    public static function AUSTRALIALINDEMAN(): Timezone
    {
        if (!isset(self::$AUSTRALIALINDEMAN)) {
            self::$AUSTRALIALINDEMAN = new Timezone('Australia/Lindeman');
        }
        return self::$AUSTRALIALINDEMAN;
    }
    public static function AUSTRALIALORDHOWE(): Timezone
    {
        if (!isset(self::$AUSTRALIALORDHOWE)) {
            self::$AUSTRALIALORDHOWE = new Timezone('Australia/Lord_Howe');
        }
        return self::$AUSTRALIALORDHOWE;
    }
    public static function AUSTRALIAMELBOURNE(): Timezone
    {
        if (!isset(self::$AUSTRALIAMELBOURNE)) {
            self::$AUSTRALIAMELBOURNE = new Timezone('Australia/Melbourne');
        }
        return self::$AUSTRALIAMELBOURNE;
    }
    public static function AUSTRALIAPERTH(): Timezone
    {
        if (!isset(self::$AUSTRALIAPERTH)) {
            self::$AUSTRALIAPERTH = new Timezone('Australia/Perth');
        }
        return self::$AUSTRALIAPERTH;
    }
    public static function AUSTRALIASYDNEY(): Timezone
    {
        if (!isset(self::$AUSTRALIASYDNEY)) {
            self::$AUSTRALIASYDNEY = new Timezone('Australia/Sydney');
        }
        return self::$AUSTRALIASYDNEY;
    }
    public static function EUROPEAMSTERDAM(): Timezone
    {
        if (!isset(self::$EUROPEAMSTERDAM)) {
            self::$EUROPEAMSTERDAM = new Timezone('Europe/Amsterdam');
        }
        return self::$EUROPEAMSTERDAM;
    }
    public static function EUROPEANDORRA(): Timezone
    {
        if (!isset(self::$EUROPEANDORRA)) {
            self::$EUROPEANDORRA = new Timezone('Europe/Andorra');
        }
        return self::$EUROPEANDORRA;
    }
    public static function EUROPEASTRAKHAN(): Timezone
    {
        if (!isset(self::$EUROPEASTRAKHAN)) {
            self::$EUROPEASTRAKHAN = new Timezone('Europe/Astrakhan');
        }
        return self::$EUROPEASTRAKHAN;
    }
    public static function EUROPEATHENS(): Timezone
    {
        if (!isset(self::$EUROPEATHENS)) {
            self::$EUROPEATHENS = new Timezone('Europe/Athens');
        }
        return self::$EUROPEATHENS;
    }
    public static function EUROPEBELGRADE(): Timezone
    {
        if (!isset(self::$EUROPEBELGRADE)) {
            self::$EUROPEBELGRADE = new Timezone('Europe/Belgrade');
        }
        return self::$EUROPEBELGRADE;
    }
    public static function EUROPEBERLIN(): Timezone
    {
        if (!isset(self::$EUROPEBERLIN)) {
            self::$EUROPEBERLIN = new Timezone('Europe/Berlin');
        }
        return self::$EUROPEBERLIN;
    }
    public static function EUROPEBRATISLAVA(): Timezone
    {
        if (!isset(self::$EUROPEBRATISLAVA)) {
            self::$EUROPEBRATISLAVA = new Timezone('Europe/Bratislava');
        }
        return self::$EUROPEBRATISLAVA;
    }
    public static function EUROPEBRUSSELS(): Timezone
    {
        if (!isset(self::$EUROPEBRUSSELS)) {
            self::$EUROPEBRUSSELS = new Timezone('Europe/Brussels');
        }
        return self::$EUROPEBRUSSELS;
    }
    public static function EUROPEBUCHAREST(): Timezone
    {
        if (!isset(self::$EUROPEBUCHAREST)) {
            self::$EUROPEBUCHAREST = new Timezone('Europe/Bucharest');
        }
        return self::$EUROPEBUCHAREST;
    }
    public static function EUROPEBUDAPEST(): Timezone
    {
        if (!isset(self::$EUROPEBUDAPEST)) {
            self::$EUROPEBUDAPEST = new Timezone('Europe/Budapest');
        }
        return self::$EUROPEBUDAPEST;
    }
    public static function EUROPEBUSINGEN(): Timezone
    {
        if (!isset(self::$EUROPEBUSINGEN)) {
            self::$EUROPEBUSINGEN = new Timezone('Europe/Busingen');
        }
        return self::$EUROPEBUSINGEN;
    }
    public static function EUROPECHISINAU(): Timezone
    {
        if (!isset(self::$EUROPECHISINAU)) {
            self::$EUROPECHISINAU = new Timezone('Europe/Chisinau');
        }
        return self::$EUROPECHISINAU;
    }
    public static function EUROPECOPENHAGEN(): Timezone
    {
        if (!isset(self::$EUROPECOPENHAGEN)) {
            self::$EUROPECOPENHAGEN = new Timezone('Europe/Copenhagen');
        }
        return self::$EUROPECOPENHAGEN;
    }
    public static function EUROPEDUBLIN(): Timezone
    {
        if (!isset(self::$EUROPEDUBLIN)) {
            self::$EUROPEDUBLIN = new Timezone('Europe/Dublin');
        }
        return self::$EUROPEDUBLIN;
    }
    public static function EUROPEGIBRALTAR(): Timezone
    {
        if (!isset(self::$EUROPEGIBRALTAR)) {
            self::$EUROPEGIBRALTAR = new Timezone('Europe/Gibraltar');
        }
        return self::$EUROPEGIBRALTAR;
    }
    public static function EUROPEGUERNSEY(): Timezone
    {
        if (!isset(self::$EUROPEGUERNSEY)) {
            self::$EUROPEGUERNSEY = new Timezone('Europe/Guernsey');
        }
        return self::$EUROPEGUERNSEY;
    }
    public static function EUROPEHELSINKI(): Timezone
    {
        if (!isset(self::$EUROPEHELSINKI)) {
            self::$EUROPEHELSINKI = new Timezone('Europe/Helsinki');
        }
        return self::$EUROPEHELSINKI;
    }
    public static function EUROPEISLEOFMAN(): Timezone
    {
        if (!isset(self::$EUROPEISLEOFMAN)) {
            self::$EUROPEISLEOFMAN = new Timezone('Europe/Isle_of_Man');
        }
        return self::$EUROPEISLEOFMAN;
    }
    public static function EUROPEISTANBUL(): Timezone
    {
        if (!isset(self::$EUROPEISTANBUL)) {
            self::$EUROPEISTANBUL = new Timezone('Europe/Istanbul');
        }
        return self::$EUROPEISTANBUL;
    }
    public static function EUROPEJERSEY(): Timezone
    {
        if (!isset(self::$EUROPEJERSEY)) {
            self::$EUROPEJERSEY = new Timezone('Europe/Jersey');
        }
        return self::$EUROPEJERSEY;
    }
    public static function EUROPEKALININGRAD(): Timezone
    {
        if (!isset(self::$EUROPEKALININGRAD)) {
            self::$EUROPEKALININGRAD = new Timezone('Europe/Kaliningrad');
        }
        return self::$EUROPEKALININGRAD;
    }
    public static function EUROPEKIROV(): Timezone
    {
        if (!isset(self::$EUROPEKIROV)) {
            self::$EUROPEKIROV = new Timezone('Europe/Kirov');
        }
        return self::$EUROPEKIROV;
    }
    public static function EUROPEKYIV(): Timezone
    {
        if (!isset(self::$EUROPEKYIV)) {
            self::$EUROPEKYIV = new Timezone('Europe/Kyiv');
        }
        return self::$EUROPEKYIV;
    }
    public static function EUROPELISBON(): Timezone
    {
        if (!isset(self::$EUROPELISBON)) {
            self::$EUROPELISBON = new Timezone('Europe/Lisbon');
        }
        return self::$EUROPELISBON;
    }
    public static function EUROPELJUBLJANA(): Timezone
    {
        if (!isset(self::$EUROPELJUBLJANA)) {
            self::$EUROPELJUBLJANA = new Timezone('Europe/Ljubljana');
        }
        return self::$EUROPELJUBLJANA;
    }
    public static function EUROPELONDON(): Timezone
    {
        if (!isset(self::$EUROPELONDON)) {
            self::$EUROPELONDON = new Timezone('Europe/London');
        }
        return self::$EUROPELONDON;
    }
    public static function EUROPELUXEMBOURG(): Timezone
    {
        if (!isset(self::$EUROPELUXEMBOURG)) {
            self::$EUROPELUXEMBOURG = new Timezone('Europe/Luxembourg');
        }
        return self::$EUROPELUXEMBOURG;
    }
    public static function EUROPEMADRID(): Timezone
    {
        if (!isset(self::$EUROPEMADRID)) {
            self::$EUROPEMADRID = new Timezone('Europe/Madrid');
        }
        return self::$EUROPEMADRID;
    }
    public static function EUROPEMALTA(): Timezone
    {
        if (!isset(self::$EUROPEMALTA)) {
            self::$EUROPEMALTA = new Timezone('Europe/Malta');
        }
        return self::$EUROPEMALTA;
    }
    public static function EUROPEMARIEHAMN(): Timezone
    {
        if (!isset(self::$EUROPEMARIEHAMN)) {
            self::$EUROPEMARIEHAMN = new Timezone('Europe/Mariehamn');
        }
        return self::$EUROPEMARIEHAMN;
    }
    public static function EUROPEMINSK(): Timezone
    {
        if (!isset(self::$EUROPEMINSK)) {
            self::$EUROPEMINSK = new Timezone('Europe/Minsk');
        }
        return self::$EUROPEMINSK;
    }
    public static function EUROPEMONACO(): Timezone
    {
        if (!isset(self::$EUROPEMONACO)) {
            self::$EUROPEMONACO = new Timezone('Europe/Monaco');
        }
        return self::$EUROPEMONACO;
    }
    public static function EUROPEMOSCOW(): Timezone
    {
        if (!isset(self::$EUROPEMOSCOW)) {
            self::$EUROPEMOSCOW = new Timezone('Europe/Moscow');
        }
        return self::$EUROPEMOSCOW;
    }
    public static function EUROPEOSLO(): Timezone
    {
        if (!isset(self::$EUROPEOSLO)) {
            self::$EUROPEOSLO = new Timezone('Europe/Oslo');
        }
        return self::$EUROPEOSLO;
    }
    public static function EUROPEPARIS(): Timezone
    {
        if (!isset(self::$EUROPEPARIS)) {
            self::$EUROPEPARIS = new Timezone('Europe/Paris');
        }
        return self::$EUROPEPARIS;
    }
    public static function EUROPEPODGORICA(): Timezone
    {
        if (!isset(self::$EUROPEPODGORICA)) {
            self::$EUROPEPODGORICA = new Timezone('Europe/Podgorica');
        }
        return self::$EUROPEPODGORICA;
    }
    public static function EUROPEPRAGUE(): Timezone
    {
        if (!isset(self::$EUROPEPRAGUE)) {
            self::$EUROPEPRAGUE = new Timezone('Europe/Prague');
        }
        return self::$EUROPEPRAGUE;
    }
    public static function EUROPERIGA(): Timezone
    {
        if (!isset(self::$EUROPERIGA)) {
            self::$EUROPERIGA = new Timezone('Europe/Riga');
        }
        return self::$EUROPERIGA;
    }
    public static function EUROPEROME(): Timezone
    {
        if (!isset(self::$EUROPEROME)) {
            self::$EUROPEROME = new Timezone('Europe/Rome');
        }
        return self::$EUROPEROME;
    }
    public static function EUROPESAMARA(): Timezone
    {
        if (!isset(self::$EUROPESAMARA)) {
            self::$EUROPESAMARA = new Timezone('Europe/Samara');
        }
        return self::$EUROPESAMARA;
    }
    public static function EUROPESANMARINO(): Timezone
    {
        if (!isset(self::$EUROPESANMARINO)) {
            self::$EUROPESANMARINO = new Timezone('Europe/San_Marino');
        }
        return self::$EUROPESANMARINO;
    }
    public static function EUROPESARAJEVO(): Timezone
    {
        if (!isset(self::$EUROPESARAJEVO)) {
            self::$EUROPESARAJEVO = new Timezone('Europe/Sarajevo');
        }
        return self::$EUROPESARAJEVO;
    }
    public static function EUROPESARATOV(): Timezone
    {
        if (!isset(self::$EUROPESARATOV)) {
            self::$EUROPESARATOV = new Timezone('Europe/Saratov');
        }
        return self::$EUROPESARATOV;
    }
    public static function EUROPESIMFEROPOL(): Timezone
    {
        if (!isset(self::$EUROPESIMFEROPOL)) {
            self::$EUROPESIMFEROPOL = new Timezone('Europe/Simferopol');
        }
        return self::$EUROPESIMFEROPOL;
    }
    public static function EUROPESKOPJE(): Timezone
    {
        if (!isset(self::$EUROPESKOPJE)) {
            self::$EUROPESKOPJE = new Timezone('Europe/Skopje');
        }
        return self::$EUROPESKOPJE;
    }
    public static function EUROPESOFIA(): Timezone
    {
        if (!isset(self::$EUROPESOFIA)) {
            self::$EUROPESOFIA = new Timezone('Europe/Sofia');
        }
        return self::$EUROPESOFIA;
    }
    public static function EUROPESTOCKHOLM(): Timezone
    {
        if (!isset(self::$EUROPESTOCKHOLM)) {
            self::$EUROPESTOCKHOLM = new Timezone('Europe/Stockholm');
        }
        return self::$EUROPESTOCKHOLM;
    }
    public static function EUROPETALLINN(): Timezone
    {
        if (!isset(self::$EUROPETALLINN)) {
            self::$EUROPETALLINN = new Timezone('Europe/Tallinn');
        }
        return self::$EUROPETALLINN;
    }
    public static function EUROPETIRANE(): Timezone
    {
        if (!isset(self::$EUROPETIRANE)) {
            self::$EUROPETIRANE = new Timezone('Europe/Tirane');
        }
        return self::$EUROPETIRANE;
    }
    public static function EUROPEULYANOVSK(): Timezone
    {
        if (!isset(self::$EUROPEULYANOVSK)) {
            self::$EUROPEULYANOVSK = new Timezone('Europe/Ulyanovsk');
        }
        return self::$EUROPEULYANOVSK;
    }
    public static function EUROPEVADUZ(): Timezone
    {
        if (!isset(self::$EUROPEVADUZ)) {
            self::$EUROPEVADUZ = new Timezone('Europe/Vaduz');
        }
        return self::$EUROPEVADUZ;
    }
    public static function EUROPEVATICAN(): Timezone
    {
        if (!isset(self::$EUROPEVATICAN)) {
            self::$EUROPEVATICAN = new Timezone('Europe/Vatican');
        }
        return self::$EUROPEVATICAN;
    }
    public static function EUROPEVIENNA(): Timezone
    {
        if (!isset(self::$EUROPEVIENNA)) {
            self::$EUROPEVIENNA = new Timezone('Europe/Vienna');
        }
        return self::$EUROPEVIENNA;
    }
    public static function EUROPEVILNIUS(): Timezone
    {
        if (!isset(self::$EUROPEVILNIUS)) {
            self::$EUROPEVILNIUS = new Timezone('Europe/Vilnius');
        }
        return self::$EUROPEVILNIUS;
    }
    public static function EUROPEVOLGOGRAD(): Timezone
    {
        if (!isset(self::$EUROPEVOLGOGRAD)) {
            self::$EUROPEVOLGOGRAD = new Timezone('Europe/Volgograd');
        }
        return self::$EUROPEVOLGOGRAD;
    }
    public static function EUROPEWARSAW(): Timezone
    {
        if (!isset(self::$EUROPEWARSAW)) {
            self::$EUROPEWARSAW = new Timezone('Europe/Warsaw');
        }
        return self::$EUROPEWARSAW;
    }
    public static function EUROPEZAGREB(): Timezone
    {
        if (!isset(self::$EUROPEZAGREB)) {
            self::$EUROPEZAGREB = new Timezone('Europe/Zagreb');
        }
        return self::$EUROPEZAGREB;
    }
    public static function EUROPEZURICH(): Timezone
    {
        if (!isset(self::$EUROPEZURICH)) {
            self::$EUROPEZURICH = new Timezone('Europe/Zurich');
        }
        return self::$EUROPEZURICH;
    }
    public static function INDIANANTANANARIVO(): Timezone
    {
        if (!isset(self::$INDIANANTANANARIVO)) {
            self::$INDIANANTANANARIVO = new Timezone('Indian/Antananarivo');
        }
        return self::$INDIANANTANANARIVO;
    }
    public static function INDIANCHAGOS(): Timezone
    {
        if (!isset(self::$INDIANCHAGOS)) {
            self::$INDIANCHAGOS = new Timezone('Indian/Chagos');
        }
        return self::$INDIANCHAGOS;
    }
    public static function INDIANCHRISTMAS(): Timezone
    {
        if (!isset(self::$INDIANCHRISTMAS)) {
            self::$INDIANCHRISTMAS = new Timezone('Indian/Christmas');
        }
        return self::$INDIANCHRISTMAS;
    }
    public static function INDIANCOCOS(): Timezone
    {
        if (!isset(self::$INDIANCOCOS)) {
            self::$INDIANCOCOS = new Timezone('Indian/Cocos');
        }
        return self::$INDIANCOCOS;
    }
    public static function INDIANCOMORO(): Timezone
    {
        if (!isset(self::$INDIANCOMORO)) {
            self::$INDIANCOMORO = new Timezone('Indian/Comoro');
        }
        return self::$INDIANCOMORO;
    }
    public static function INDIANKERGUELEN(): Timezone
    {
        if (!isset(self::$INDIANKERGUELEN)) {
            self::$INDIANKERGUELEN = new Timezone('Indian/Kerguelen');
        }
        return self::$INDIANKERGUELEN;
    }
    public static function INDIANMAHE(): Timezone
    {
        if (!isset(self::$INDIANMAHE)) {
            self::$INDIANMAHE = new Timezone('Indian/Mahe');
        }
        return self::$INDIANMAHE;
    }
    public static function INDIANMALDIVES(): Timezone
    {
        if (!isset(self::$INDIANMALDIVES)) {
            self::$INDIANMALDIVES = new Timezone('Indian/Maldives');
        }
        return self::$INDIANMALDIVES;
    }
    public static function INDIANMAURITIUS(): Timezone
    {
        if (!isset(self::$INDIANMAURITIUS)) {
            self::$INDIANMAURITIUS = new Timezone('Indian/Mauritius');
        }
        return self::$INDIANMAURITIUS;
    }
    public static function INDIANMAYOTTE(): Timezone
    {
        if (!isset(self::$INDIANMAYOTTE)) {
            self::$INDIANMAYOTTE = new Timezone('Indian/Mayotte');
        }
        return self::$INDIANMAYOTTE;
    }
    public static function INDIANREUNION(): Timezone
    {
        if (!isset(self::$INDIANREUNION)) {
            self::$INDIANREUNION = new Timezone('Indian/Reunion');
        }
        return self::$INDIANREUNION;
    }
    public static function PACIFICAPIA(): Timezone
    {
        if (!isset(self::$PACIFICAPIA)) {
            self::$PACIFICAPIA = new Timezone('Pacific/Apia');
        }
        return self::$PACIFICAPIA;
    }
    public static function PACIFICAUCKLAND(): Timezone
    {
        if (!isset(self::$PACIFICAUCKLAND)) {
            self::$PACIFICAUCKLAND = new Timezone('Pacific/Auckland');
        }
        return self::$PACIFICAUCKLAND;
    }
    public static function PACIFICBOUGAINVILLE(): Timezone
    {
        if (!isset(self::$PACIFICBOUGAINVILLE)) {
            self::$PACIFICBOUGAINVILLE = new Timezone('Pacific/Bougainville');
        }
        return self::$PACIFICBOUGAINVILLE;
    }
    public static function PACIFICCHATHAM(): Timezone
    {
        if (!isset(self::$PACIFICCHATHAM)) {
            self::$PACIFICCHATHAM = new Timezone('Pacific/Chatham');
        }
        return self::$PACIFICCHATHAM;
    }
    public static function PACIFICCHUUK(): Timezone
    {
        if (!isset(self::$PACIFICCHUUK)) {
            self::$PACIFICCHUUK = new Timezone('Pacific/Chuuk');
        }
        return self::$PACIFICCHUUK;
    }
    public static function PACIFICEASTER(): Timezone
    {
        if (!isset(self::$PACIFICEASTER)) {
            self::$PACIFICEASTER = new Timezone('Pacific/Easter');
        }
        return self::$PACIFICEASTER;
    }
    public static function PACIFICEFATE(): Timezone
    {
        if (!isset(self::$PACIFICEFATE)) {
            self::$PACIFICEFATE = new Timezone('Pacific/Efate');
        }
        return self::$PACIFICEFATE;
    }
    public static function PACIFICFAKAOFO(): Timezone
    {
        if (!isset(self::$PACIFICFAKAOFO)) {
            self::$PACIFICFAKAOFO = new Timezone('Pacific/Fakaofo');
        }
        return self::$PACIFICFAKAOFO;
    }
    public static function PACIFICFIJI(): Timezone
    {
        if (!isset(self::$PACIFICFIJI)) {
            self::$PACIFICFIJI = new Timezone('Pacific/Fiji');
        }
        return self::$PACIFICFIJI;
    }
    public static function PACIFICFUNAFUTI(): Timezone
    {
        if (!isset(self::$PACIFICFUNAFUTI)) {
            self::$PACIFICFUNAFUTI = new Timezone('Pacific/Funafuti');
        }
        return self::$PACIFICFUNAFUTI;
    }
    public static function PACIFICGALAPAGOS(): Timezone
    {
        if (!isset(self::$PACIFICGALAPAGOS)) {
            self::$PACIFICGALAPAGOS = new Timezone('Pacific/Galapagos');
        }
        return self::$PACIFICGALAPAGOS;
    }
    public static function PACIFICGAMBIER(): Timezone
    {
        if (!isset(self::$PACIFICGAMBIER)) {
            self::$PACIFICGAMBIER = new Timezone('Pacific/Gambier');
        }
        return self::$PACIFICGAMBIER;
    }
    public static function PACIFICGUADALCANAL(): Timezone
    {
        if (!isset(self::$PACIFICGUADALCANAL)) {
            self::$PACIFICGUADALCANAL = new Timezone('Pacific/Guadalcanal');
        }
        return self::$PACIFICGUADALCANAL;
    }
    public static function PACIFICGUAM(): Timezone
    {
        if (!isset(self::$PACIFICGUAM)) {
            self::$PACIFICGUAM = new Timezone('Pacific/Guam');
        }
        return self::$PACIFICGUAM;
    }
    public static function PACIFICHONOLULU(): Timezone
    {
        if (!isset(self::$PACIFICHONOLULU)) {
            self::$PACIFICHONOLULU = new Timezone('Pacific/Honolulu');
        }
        return self::$PACIFICHONOLULU;
    }
    public static function PACIFICKANTON(): Timezone
    {
        if (!isset(self::$PACIFICKANTON)) {
            self::$PACIFICKANTON = new Timezone('Pacific/Kanton');
        }
        return self::$PACIFICKANTON;
    }
    public static function PACIFICKIRITIMATI(): Timezone
    {
        if (!isset(self::$PACIFICKIRITIMATI)) {
            self::$PACIFICKIRITIMATI = new Timezone('Pacific/Kiritimati');
        }
        return self::$PACIFICKIRITIMATI;
    }
    public static function PACIFICKOSRAE(): Timezone
    {
        if (!isset(self::$PACIFICKOSRAE)) {
            self::$PACIFICKOSRAE = new Timezone('Pacific/Kosrae');
        }
        return self::$PACIFICKOSRAE;
    }
    public static function PACIFICKWAJALEIN(): Timezone
    {
        if (!isset(self::$PACIFICKWAJALEIN)) {
            self::$PACIFICKWAJALEIN = new Timezone('Pacific/Kwajalein');
        }
        return self::$PACIFICKWAJALEIN;
    }
    public static function PACIFICMAJURO(): Timezone
    {
        if (!isset(self::$PACIFICMAJURO)) {
            self::$PACIFICMAJURO = new Timezone('Pacific/Majuro');
        }
        return self::$PACIFICMAJURO;
    }
    public static function PACIFICMARQUESAS(): Timezone
    {
        if (!isset(self::$PACIFICMARQUESAS)) {
            self::$PACIFICMARQUESAS = new Timezone('Pacific/Marquesas');
        }
        return self::$PACIFICMARQUESAS;
    }
    public static function PACIFICMIDWAY(): Timezone
    {
        if (!isset(self::$PACIFICMIDWAY)) {
            self::$PACIFICMIDWAY = new Timezone('Pacific/Midway');
        }
        return self::$PACIFICMIDWAY;
    }
    public static function PACIFICNAURU(): Timezone
    {
        if (!isset(self::$PACIFICNAURU)) {
            self::$PACIFICNAURU = new Timezone('Pacific/Nauru');
        }
        return self::$PACIFICNAURU;
    }
    public static function PACIFICNIUE(): Timezone
    {
        if (!isset(self::$PACIFICNIUE)) {
            self::$PACIFICNIUE = new Timezone('Pacific/Niue');
        }
        return self::$PACIFICNIUE;
    }
    public static function PACIFICNORFOLK(): Timezone
    {
        if (!isset(self::$PACIFICNORFOLK)) {
            self::$PACIFICNORFOLK = new Timezone('Pacific/Norfolk');
        }
        return self::$PACIFICNORFOLK;
    }
    public static function PACIFICNOUMEA(): Timezone
    {
        if (!isset(self::$PACIFICNOUMEA)) {
            self::$PACIFICNOUMEA = new Timezone('Pacific/Noumea');
        }
        return self::$PACIFICNOUMEA;
    }
    public static function PACIFICPAGOPAGO(): Timezone
    {
        if (!isset(self::$PACIFICPAGOPAGO)) {
            self::$PACIFICPAGOPAGO = new Timezone('Pacific/Pago_Pago');
        }
        return self::$PACIFICPAGOPAGO;
    }
    public static function PACIFICPALAU(): Timezone
    {
        if (!isset(self::$PACIFICPALAU)) {
            self::$PACIFICPALAU = new Timezone('Pacific/Palau');
        }
        return self::$PACIFICPALAU;
    }
    public static function PACIFICPITCAIRN(): Timezone
    {
        if (!isset(self::$PACIFICPITCAIRN)) {
            self::$PACIFICPITCAIRN = new Timezone('Pacific/Pitcairn');
        }
        return self::$PACIFICPITCAIRN;
    }
    public static function PACIFICPOHNPEI(): Timezone
    {
        if (!isset(self::$PACIFICPOHNPEI)) {
            self::$PACIFICPOHNPEI = new Timezone('Pacific/Pohnpei');
        }
        return self::$PACIFICPOHNPEI;
    }
    public static function PACIFICPORTMORESBY(): Timezone
    {
        if (!isset(self::$PACIFICPORTMORESBY)) {
            self::$PACIFICPORTMORESBY = new Timezone('Pacific/Port_Moresby');
        }
        return self::$PACIFICPORTMORESBY;
    }
    public static function PACIFICRAROTONGA(): Timezone
    {
        if (!isset(self::$PACIFICRAROTONGA)) {
            self::$PACIFICRAROTONGA = new Timezone('Pacific/Rarotonga');
        }
        return self::$PACIFICRAROTONGA;
    }
    public static function PACIFICSAIPAN(): Timezone
    {
        if (!isset(self::$PACIFICSAIPAN)) {
            self::$PACIFICSAIPAN = new Timezone('Pacific/Saipan');
        }
        return self::$PACIFICSAIPAN;
    }
    public static function PACIFICTAHITI(): Timezone
    {
        if (!isset(self::$PACIFICTAHITI)) {
            self::$PACIFICTAHITI = new Timezone('Pacific/Tahiti');
        }
        return self::$PACIFICTAHITI;
    }
    public static function PACIFICTARAWA(): Timezone
    {
        if (!isset(self::$PACIFICTARAWA)) {
            self::$PACIFICTARAWA = new Timezone('Pacific/Tarawa');
        }
        return self::$PACIFICTARAWA;
    }
    public static function PACIFICTONGATAPU(): Timezone
    {
        if (!isset(self::$PACIFICTONGATAPU)) {
            self::$PACIFICTONGATAPU = new Timezone('Pacific/Tongatapu');
        }
        return self::$PACIFICTONGATAPU;
    }
    public static function PACIFICWAKE(): Timezone
    {
        if (!isset(self::$PACIFICWAKE)) {
            self::$PACIFICWAKE = new Timezone('Pacific/Wake');
        }
        return self::$PACIFICWAKE;
    }
    public static function PACIFICWALLIS(): Timezone
    {
        if (!isset(self::$PACIFICWALLIS)) {
            self::$PACIFICWALLIS = new Timezone('Pacific/Wallis');
        }
        return self::$PACIFICWALLIS;
    }
}