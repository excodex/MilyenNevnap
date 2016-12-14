<?php
# Beállítások
header('Content-Type: text/html; charset=utf-8');
$config = array(
  // JSON kimenet engedélyezése: nevnap.php?t=json
  "Enable_JSON" => true
);

$t = (isset($_GET["t"]) ? strtolower($_GET["t"]) : false);
$n = array(
  "01" => array( // Január
    "01" => "Fruzsina", "02" => "Ábel", "03" => "Benjámin, Genovéva",
    "04" => "Leóna, Titusz", "05" => "Simon", "06" => "Boldizsár",
    "07" => "Attila, Ramóna", "08" => "Gyöngyvér", "09" => "Marcell",
    "10" => "Melánia", "11" => "Ágota", "12" => "Ernő",
    "13" => "Veronika", "14" => "Bódog", "15" => "Lóránd, Lóránt",
    "16" => "Gusztáv", "17" => "Antal, Antónia", "18" => "Piroska",
    "19" => "Márió, Sára", "20" => "Fábián, Sebestyén", "21" => "Ágnes",
    "22" => "Artúr, Vince", "23" => "Rajmund, Zelma", "24" => "Timót",
    "25" => "Pál", "26" => "Paula, Vanda", "27" => "Angelika",
    "28" => "Karola, Károly", "29" => "Adél", "30" => "Martina",
    "31" => "Gerda, Marcella"
  ),
  "02" => array( // Február
    "01" => "Ignác", "02" => "Aida, Karolina", "03" => "Balázs",
    "04" => "Csenge, Ráhel", "05" => "Ágota, Ingrid", "06" => "Dóra, Dorottya",
    "07" => "Rómeó, Tódor", "08" => "Aranka", "09" => "Abigél, Alex",
    "10" => "Elvira", "11" => "Bertold, Marietta", "12" => "Lídia, Lívia",
    "13" => "Ella, Linda", "14" => "Bálint, Valentin", "15" => "Georgina, Kolos",
    "16" => "Julianna, Lilla", "17" => "Donát", "18" => "Bernadett",
    "19" => "Zsuzsanna", "20" => "Aladár, Álmos", "21" => "Eleonóra",
    "22" => "Gerzson", "23" => "Alfréd", "24" => "Mátyás",
    "25" => "Géza", "26" => "Edina", "27" => "Ákos, Bátor",
    "28" => "Elemér",
  ),
  "03" => array( // Március
    "01" => "Albin", "02" => "Lujza", "03" => "Kornélia",
    "04" => "Kázmér", "05" => "Adorján, Adrián", "06" => "Inez, Leonóra",
    "07" => "Tamás", "08" => "Zoltán", "09" => "Fanni, Franciska",
    "10" => "Ildikó", "11" => "Szilárd", "12" => "Gergely",
    "13" => "Ajtony, Krisztián", "14" => "Matild", "15" => "Kristóf",
    "16" => "Henrietta", "17" => "Gertrúd, Patrik", "18" => "Ede, Sándor",
    "19" => "Bánk, József", "20" => "Klaudia", "21" => "Benedek",
    "22" => "Beáta, Izolda", "23" => "Emőke", "24" => "Gábor, Karina",
    "25" => "Irén, Írisz", "26" => "Emánuel", "27" => "Hajnalka",
    "28" => "Gedeon, Johanna", "29" => "Auguszta", "30" => "Zalán",
    "31" => "Árpád"
  ),
  "04" => array( // Április
    "01" => "Hugó", "02" => "Áron", "03" => "Buda, Richárd",
    "04" => "Izidor", "05" => "Vince", "06" => "Bíborka, Vilmos",
    "07" => "Herman", "08" => "Dénes", "09" => "Erhard",
    "10" => "Zsolt", "11" => "Leó, Szaniszló", "12" => "Gyula",
    "13" => "Ida", "14" => "Tibor", "15" => "Anasztázia, Tas",
    "16" => "Csongor", "17" => "Rudolf", "18" => "Andrea, Ilma",
    "19" => "Emma", "20" => "Tivadar", "21" => "Konrád",
    "22" => "Csilla, Noémi", "23" => "Béla", "24" => "György",
    "25" => "Márk", "26" => "Ervin", "27" => "Zita",
    "28" => "Valéria", "29" => "Péter", "30" => "Katalin, Kitti"
  ),
  "05" => array( // Május
    "01" => "Fülöp, Jakab", "02" => "Zsigmond", "03" => "Irma, Tímea",
    "04" => "Flórián, Mónika", "05" => "Adrián, Györgyi", "06" => "Frida, Ivett",
    "07" => "Gizella", "08" => "Mihály", "09" => "Gergely",
    "10" => "Ármin, Pálma, Mira", "11" => "Ferenc", "12" => "Pongrác",
    "13" => "Imola, Szervác", "14" => "Bonifác", "15" => "Szonja, Zsófia",
    "16" => "Botond, Mózes", "17" => "Paszkál", "18" => "Alexandra, Erik",
    "19" => "Ivó, Milán", "20" => "Bernát, Felícia", "21" => "Konstantin",
    "22" => "Júlia, Rita", "23" => "Dezső", "24" => "Eliza, Eszter",
    "25" => "Orbán", "26" => "Evelin, Fülöp", "27" => "Hella",
    "28" => "Csanád, Emil", "29" => "Magdolna", "30" => "Janka, Zsanett",
    "31" => "Angéla"
  ),
  "06" => array( // Június
    "01" => "Tünde", "02" => "Anita, Kármen", "03" => "Klotild",
    "04" => "Bulcsú", "05" => "Fatime", "06" => "Cintia, Norbert",
    "07" => "Róbert", "08" => "Medárd", "09" => "Félix",
    "10" => "Gréta, Margit", "11" => "Barnabás", "12" => "Villő",
    "13" => "Anett, Antal", "14" => "Vazul", "15" => "Jolán, Vid",
    "16" => "Jusztin", "17" => "Alida, Laura", "18" => "Arnold, Levente",
    "19" => "Gyárfás", "20" => "Rafael", "21" => "Alajos, Leila",
    "22" => "Paulina", "23" => "Zoltán", "24" => "Iván",
    "25" => "Vilmos", "26" => "János, Pál", "27" => "László",
    "28" => "Irén, Levente", "29" => "Péter, Pál", "30" => "Pál"
  ),
  "07" => array( // Július
    "01" => "Annamária, Tihamér", "02" => "Ottó", "03" => "Kornél, Soma",
    "04" => "Ulrik", "05" => "Emese, Sarolta", "06" => "Csaba",
    "07" => "Apollónia", "08" => "Ellák", "09" => "Lukrécia",
    "10" => "Amália", "11" => "Lili, Nóra", "12" => "Dalma, Izabella",
    "13" => "Jenő", "14" => "Örs, Stella", "15" => "Henrik, Roland",
    "16" => "Valter", "17" => "Elek, Endre", "18" => "Frigyes",
    "19" => "Emília", "20" => "Illés", "21" => "Dániel, Daniella",
    "22" => "Magdolna", "23" => "Lenke", "24" => "Kincső, Kinga",
    "25" => "Jakab, Kristóf", "26" => "Anikó, Anna", "27" => "Liliána, Olga",
    "28" => "Szabolcs", "29" => "Flóra, Márta", "30" => "Judit, Xénia",
    "31" => "Oszkár"
  ),
  "08" => array( // Augusztus
    "01" => "Boglárka", "02" => "Lehel", "03" => "Hermina",
    "04" => "Dominika, Domonkos", "05" => "Krisztina", "06" => "Berta, Bettina",
    "07" => "Ibolya", "08" => "László", "09" => "Emőd",
    "10" => "Lőrinc", "11" => "Tiborc, Zsuzsanna", "12" => "Klára",
    "13" => "Ipoly", "14" => "Marcell", "15" => "Mária",
    "16" => "Ábrahám", "17" => "Jácint", "18" => "Ilona",
    "19" => "Huba", "20" => "István", "21" => "Hajna, Sámuel",
    "22" => "Menyhért, Mirjam", "23" => "Bence", "24" => "Bertalan",
    "25" => "Lajos, Patrícia", "26" => "Izsó", "27" => "Gáspár",
    "28" => "Ágoston", "29" => "Beatrix, Erna", "30" => "Rózsa",
    "31" => "Bella, Erika"
  ),
  "09" => array( // Szeptember
    "01" => "Egon, Egyed", "02" => "Dorina, Rebeka", "03" => "Hilda",
    "04" => "Rozália", "05" => "Lőrinc, Viktor", "06" => "Zakariás",
    "07" => "Regina", "08" => "Adrienn, Mária", "09" => "Adám",
    "10" => "Hunor, Nikolett", "11" => "Teodóra", "12" => "Mária",
    "13" => "Kornél", "14" => "Roxána, Szeréna", "15" => "Enikő, Melitta",
    "16" => "Edit", "17" => "Zsófia", "18" => "Diána",
    "19" => "Vilhelmina", "20" => "Friderika", "21" => "Máté, Mirella",
    "22" => "Móric", "23" => "Tekla", "24" => "Gellért, Mercédesz",
    "25" => "Eufrozina, Kende", "26" => "Jusztina, Pál", "27" => "Adalbert",
    "28" => "Vencel", "29" => "Mihály", "30" => "Jeromos"
  ),
  "10" => array( // Október
    "01" => "Malvin", "02" => "Petra", "03" => "Helga",
    "04" => "Ferenc", "05" => "Aurél", "06" => "Brúnó, Renáta",
    "07" => "Amália", "08" => "Koppány", "09" => "Dénes",
    "10" => "Gedeon", "11" => "Brigitta", "12" => "Miksa",
    "13" => "Ede, Kálmán", "14" => "Helén","15" => "Teréz",
    "16" => "Gál", "17" => "Hedvig", "18" => "Lukács",
    "19" => "Nándor", "20" => "Vendel", "21" => "Orsolya",
    "22" => "Előd", "23" => "Gyöngyi", "24" => "Salamon",
    "25" => "Bianka, Blanka", "26" => "Dömötör", "27" => "Szabina",
    "28" => "Simon, Szimonetta", "29" => "Nárcisz", "30" => "Alfonz",
    "31" => "Farkas"
  ),
  "11" => array( // November
    "01" => "Marianna", "02" => "Achilles", "03" => "Győző",
    "04" => "Károly", "05" => "Imre", "06" => "Lénárd",
    "07" => "Rezső", "08" => "Zsombor", "09" => "Tivadar",
    "10" => "Réka", "11" => "Márton", "12" => "Jónás, Renátó",
    "13" => "Szilvia", "14" => "Aliz", "15" => "Albert, Lipót",
    "16" => "Ödön", "17" => "Gergő, Hortenzia", "18" => "Jenő",
    "19" => "Erzsébet", "20" => "Jolán", "21" => "Olivér",
    "22" => "Cecília", "23" => "Kelemen, Klementina", "24" => "Emma",
    "25" => "Katalin", "26" => "Virág", "27" => "Virgil",
    "28" => "Stefánia", "29" => "Taksony", "30" => "Andor, András"
  ),
  "12" => array( // December
    "01" => "Elza", "02" => "Melinda, Vivien", "03" => "Ferenc, Olívia",
    "04" => "Barbara, Borbála", "05" => "Vilma", "06" => "Miklós",
    "07" => "Ambrus", "08" => "Mária", "09" => "Natália",
    "10" => "Judit", "11" => "Árpád", "12" => "Gabriella",
    "13" => "Luca, Otília", "14" => "Szilárda", "15" => "Valér",
    "16" => "Aletta, Etelka", "17" => "Lázár, Olimpia", "18" => "Auguszta",
    "19" => "Viola", "20" => "Teofil", "21" => "Tamás",
    "22" => "Zénó", "23" => "Viktória", "24" => "Adám, Éva",
    "25" => "Eugénia", "26" => "István", "27" => "János",
    "28" => "Kamilla", "29" => "Tamara, Tamás", "30" => "Dávid",
    "31" => "Szilveszter"
  ),
);
if ($config["Enable_JSON"] && $t == "json") {
  $json = array(
    "date_year" => date("Y"), "date_month" => date("m"), "date_day" => date("d"),
    "name" => $n[date("m")][date("d")]
  );
  echo json_encode($json);
  die();
}
echo date("Y. m. d.") . ": " . $n[date("m")][date("d")] . " névnapja van!";
?>
