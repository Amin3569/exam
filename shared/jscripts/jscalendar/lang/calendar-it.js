
// full day names
Calendar._DN = new Array
("Domenica",
 "Lunedì",
 "Martedì",
 "Mercoledì",
 "Giovedì",
 "Venerdì",
 "Sabato",
 "Domenica");

// Please note that the following array of short day names (and the same goes
// for short month names, _SMN) isn't absolutely necessary.  We give it here
// for exemplification on how one can customize the short day names, but if
// they are simply the first N letters of the full name you can simply say:
//
//   Calendar._SDN_len = N; // short day name length
//   Calendar._SMN_len = N; // short month name length
//
// If N = 3 then this is not needed either since we assume a value of 3 if not
// present, to be compatible with translation files that were written before
// this feature.

// short day names
Calendar._SDN = new Array
("Dom",
 "Lun",
 "Mar",
 "Mer",
 "Gio",
 "Ven",
 "Sab",
 "Dom");

// First day of the week. "0" means display Sunday first, "1" means display
// Monday first, etc.
Calendar._FD = 0;

// full month names
Calendar._MN = new Array
("Gennaio",
 "Febbraio",
 "Marzo",
 "Aprile",
 "Maggio",
 "Giugno",
 "Luglio",
 "Agosto",
 "Settembre",
 "Ottobre",
 "Novembre",
 "Dicembre");

// short month names
Calendar._SMN = new Array
("Gen",
 "Feb",
 "Mar",
 "Apr",
 "Mag",
 "Giu",
 "Lug",
 "Ago",
 "Set",
 "Ott",
 "Nov",
 "Dic");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "Informazioni sul calendario";

Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + // don't translate this this ;-)
"Per l'ultima versione visita: http://www.dynarch.com/projects/calendar/\n" +
"Distribuito con licenza GNU LGPL.  See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"Selezione data:\n" +
"- Usate i pulsanti \xab, \xbb per selezionare l'anno\n" +
"- Usate i pulsanti " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " per selezionare il mese\n" +
"- Mantenete premuto il pulsante del mouse od uno dei pulsanti precedenti per una selezione rapida.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Selezione ora:\n" +
"- Cliccate sull'ora o sui minuti per aumentarli\n" +
"- o Shift-click per decrementarli\n" +
"- o cliccate e trascinate per una selezione rapida.";

Calendar._TT["PREV_YEAR"] = "Anno prec. (tieni premuto per il menù)";
Calendar._TT["PREV_MONTH"] = "Mese prec. (tieni premuto per il menù)";
Calendar._TT["GO_TODAY"] = "Oggi";
Calendar._TT["NEXT_MONTH"] = "Pross. mese (tieni premuto per il menù)";
Calendar._TT["NEXT_YEAR"] = "Pross. anno (tieni premuto per il menù)";
Calendar._TT["SEL_DATE"] = "Seleziona data";
Calendar._TT["DRAG_TO_MOVE"] = "Trascina per spostarlo";
Calendar._TT["PART_TODAY"] = " (oggi)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "Mostra prima %s";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Chiudi";
Calendar._TT["TODAY"] = "Oggi";
Calendar._TT["TIME_PART"] = "(Shift-)Click o trascina per cambiare il valore";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d";
Calendar._TT["TT_DATE_FORMAT"] = "%a:%b:%e";

Calendar._TT["WK"] = "set";
Calendar._TT["TIME"] = "Ora:";