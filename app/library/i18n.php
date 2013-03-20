<?php
/**
	* Internationalization
	*
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
 */

namespace library;

define(	'FMT_DATE_YEARONLY',		__('Y')					);
define(	'FMT_DATE_MONTHONLY',		__('F Y')				);
define(	'FMT_DATE_LONG',			__('l, jS F Y')			);
define(	'FMT_DATE_MEDIUM',			__('D, j M Y')			);
define(	'FMT_DATE_SHORT',			__('d/m/Y')				);
define(	'FMT_DATETIME_LONG',		__('l, jS F Y, g:ia (T)'));
define(	'FMT_DATETIME_MEDIUM',		__('D, j M Y, g:ia')	);
define(	'FMT_DATETIME_SHORT',		__('d/m/Y H:i')			);
define(	'FMT_DATETIME_W3CDTF',		'Y-m-d\TH:i:sO'			);

define( 'I18N_DATE_YMD',			'ymd'					);
define( 'I18N_DATE_DMY',			'dmy'					);
define( 'I18N_DATE_MDY',			'mdy'					);



class i18n {
	public static $lang = "en";
	public static $ISO639_2 = array(
		'abk' => 'Abkhazian',			'ace' => 'Achinese',			'ach' => 'Acoli',							'ada' => 'Adangme',				'ady' => 'Adygei',				'ady' => 'Adyghe',				'aar' => 'Afar',
		'afh' => 'Afrihili',			'afr' => 'Afrikaans',			'afa' => 'Afro-Asiatic (Other)',			'aka' => 'Akan',				'akk' => 'Akkadian',			'alb' => 'Albanian',			'sqi' => 'Albanian',
		'ale' => 'Aleut',				'alg' => 'Algonquian languages','tut' => 'Altaic (Other)',					'amh' => 'Amharic',				'apa' => 'Apache languages',	'ara' => 'Arabic',				'arg' => 'Aragonese',
		'arc' => 'Aramaic',				'arp' => 'Arapaho',				'arn' => 'Araucanian',						'arw' => 'Arawak',				'arm' => 'Armenian',			'hye' => 'Armenian',			'art' => 'Artificial (Other)',
		'asm' => 'Assamese',			'ast' => 'Asturian',			'ath' => 'Athapascan languages',			'aus' => 'Australian languages','map' => 'Austronesian (Other)','ava' => 'Avaric',				'ave' => 'Avestan',
		'awa' => 'Awadhi',				'aym' => 'Aymara',				'aze' => 'Azerbaijani',						'ast' => 'Bable',				'ban' => 'Balinese',			'bat' => 'Baltic (Other)',		'bal' => 'Baluchi',
		'bam' => 'Bambara',				'bai' => 'Bamileke languages',	'bad' => 'Banda',							'bnt' => 'Bantu (Other)',		'bas' => 'Basa',				'bak' => 'Bashkir',				'baq' => 'Basque',
		'eus' => 'Basque',				'btk' => 'Batak (Indonesia)',	'bej' => 'Beja',							'bel' => 'Belarusian',			'bem' => 'Bemba',				'ben' => 'Bengali',				'ber' => 'Berber (Other)',
		'bho' => 'Bhojpuri',			'bih' => 'Bihari',				'bik' => 'Bikol',							'byn' => 'Bilin',				'bin' => 'Bini',				'bis' => 'Bislama',				'byn' => 'Blin',
		'nob' => 'Bokm�l, Norwegian',	'bos' => 'Bosnian',				'bra' => 'Braj',							'bre' => 'Breton',				'bug' => 'Buginese',			'bul' => 'Bulgarian',			'bua' => 'Buriat',
		'bur' => 'Burmese',				'mya' => 'Burmese',				'cad' => 'Caddo',							'car' => 'Carib',				'spa' => 'Castilian',			'cat' => 'Catalan',				'cau' => 'Caucasian (Other)',
		'ceb' => 'Cebuano',				'cel' => 'Celtic (Other)',		'cai' => 'Central American Indian (Other)',	'chg' => 'Chagatai',			'cmc' => 'Chamic languages',	'cha' => 'Chamorro',			'che' => 'Chechen',
		'chr' => 'Cherokee',			'nya' => 'Chewa',				'chy' => 'Cheyenne',						'chb' => 'Chibcha',				'nya' => 'Chichewa',			'chi' => 'Chinese',				'zho' => 'Chinese',
		'chn' => 'Chinook jargon',		'chp' => 'Chipewyan',			'cho' => 'Choctaw',							'zha' => 'Chuang',				'chu' => 'Church Slavic',		'chu' => 'Church Slavonic',		'chk' => 'Chuukese',
		'chv' => 'Chuvash',				'cop' => 'Coptic',				'cor' => 'Cornish',							'cos' => 'Corsican',			'cre' => 'Cree',				'mus' => 'Creek',				'crp' => 'Creoles and pidgins(Other)',
		'crh' => 'Crimean Tatar',		'crh' => 'Crimean Turkish',		'scr' => 'Croatian',						'hrv' => 'Croation',			'cus' => 'Cushitic (Other)',	'cze' => 'Czech',				'ces' => 'Czech',
		'dak' => 'Dakota',				'dan' => 'Danish',				'dar' => 'Dargwa',							'day' => 'Dayak',				'del' => 'Delaware',			'din' => 'Dinka',				'div' => 'Divehi',
		'doi' => 'Dogri',				'dgr' => 'Dogrib',				'dra' => 'Dravidian (Other)',				'dua' => 'Duala',				'dut' => 'Dutch',				'nld' => 'Dutch',				'dyu' => 'Dyula',
		'dzo' => 'Dzongkha',			'efi' => 'Efik',				'egy' => 'Egyptian (Ancient)',				'eka' => 'Ekajuk',				'elx' => 'Elamite',				'eng' => 'English',				'myv' => 'Erzya',
		'epo' => 'Esperanto',			'est' => 'Estonian',			'ewe' => 'Ewe',								'ewo' => 'Ewondo',				'fan' => 'Fang',				'fat' => 'Fanti',				'fao' => 'Faroese',
		'fij' => 'Fijian',				'fin' => 'Finnish',				'fon' => 'Fon',								'fre' => 'French',				'fra' => 'French',				'fiu' => 'Finno-Ugrian (Other)','fry' => 'Frisian',
		'fur' => 'Friulian',			'ful' => 'Fulah',				'gaa' => 'Ga',								'gla' => 'Gaelic',				'glg' => 'Gallegan',			'lug' => 'Ganda',				'gay' => 'Gayo',
		'gba' => 'Gbaya',				'gez' => 'Geez',				'geo' => 'Georgian',						'kat' => 'Georgian',			'ger' => 'German',				'deu' => 'German',				'gem' => 'Germanic (Other)',
		'kik' => 'Gikuyu',				'gil' => 'Gilbertese',			'gon' => 'Gondi',							'gor' => 'Gorontalo',			'got' => 'Gothic',				'grb' => 'Grebo',				'ell' => 'Greek',
		'grn' => 'Guarani',				'guj' => 'Gujarati',			'gwi' => 'Gwich\'in',						'hai' => 'Haida',				'hat' => 'Haitian',				'hat' => 'Haitian Creole',		'hau' => 'Hausa',
		'haw' => 'Hawaiian',			'heb' => 'Hebrew',				'her' => 'Herero',							'hil' => 'Hiligaynon',			'him' => 'Himachali',			'hin' => 'Hindi',				'hmo' => 'Hiri Motu',
		'hit' => 'Hittite',				'hmn' => 'Hmong',				'hun' => 'Hungarian',						'hup' => 'Hupa',				'iba' => 'Iban',				'ice' => 'Icelandic',			'isl' => 'Icelandic',
		'ido' => 'Ido',					'ibo' => 'Igbo',				'ijo' => 'Ijo',								'ilo' => 'Iloko',				'smn' => 'Inari Sami',			'inc' => 'Indic (Other)',		'ine' => 'Indo-European (Other)',
		'ind' => 'Indonesian',			'inh' => 'Ingush',				'ile' => 'Interlingue',						'iku' => 'Inuktitut',			'ipk' => 'Inupiaq',				'ira' => 'Iranian (Other)',		'gle' => 'Irish',
		'iro' => 'Iroquoian languages',	'ita' => 'Italian',				'jpn' => 'Japanese',						'jav' => 'Javanese',			'jrb' => 'Judeo-Arabic',		'jpr' => 'Judeo-Persian',		'kbd' => 'Kabardian',
		'kab' => 'Kabyle',				'kac' => 'Kachin',				'kal' => 'Kalaallisut',						'xal' => 'Kalmyk',				'kam' => 'Kamba',				'kan' => 'Kannada',				'kau' => 'Kanuri',
		'krc' => 'Karachay-Balkar',		'kaa' => 'Kara-Kalpak',			'kar' => 'Karen',							'kas' => 'Kashmiri',			'csb' => 'Kashubian',			'kaw' => 'Kawi',				'kaz' => 'Kazakh',
		'kha' => 'Khasi',				'khm' => 'Khmer',				'khi' => 'Khoisan (Other)',					'kho' => 'Khotanese',			'kik' => 'Kikuyu',				'kmb' => 'Kimbundu',			'kin' => 'Kinyarwanda',
		'kir' => 'Kirghiz',				'kom' => 'Komi',				'kon' => 'Kongo',							'kok' => 'Konkani',				'kor' => 'Korean',				'kos' => 'Kosraean',			'kpe' => 'Kpelle',
		'kro' => 'Kru',					'kua' => 'Kuanyama',			'kum' => 'Kumyk',							'kur' => 'Kurdish',				'kru' => 'Kurukh',				'kut' => 'Kutenai',				'kua' => 'Kwanyama',
		'lad' => 'Ladino',				'lah' => 'Lahnda',				'lam' => 'Lamba',							'lao' => 'Lao',					'lat' => 'Latin',				'lav' => 'Latvian',				'ltz' => 'Letzeburgesch',
		'lez' => 'Lezghian',			'lim' => 'Limburgan',			'lim' => 'Limburger',						'lim' => 'limburgish',			'lin' => 'Lingala',				'lit' => 'Lithuanian',			'jbo' => 'Lojban',
		'nds' => 'Low German',			'nds' => 'Low Saxon',			'dsb' => 'Lower Sorbian',					'loz' => 'Lozi',				'lub' => 'Luba-Katanga',		'lua' => 'Luba-Lulua',			'lui' => 'Luiseno',
		'smj' => 'Lule Sami',			'lun' => 'Lunda',				'luo' => 'Luo (Kenya and Tanzania)',		'ltz' => 'Luxembourgish',		'lus' => 'Lushai',				'mac' => 'Macedonian',			'mkd' => 'Macedonian',
		'mad' => 'Madurese',			'mag' => 'Magahi',				'mai' => 'Maithili',						'mak' => 'Makasar',				'mlg' => 'Malagasy',			'may' => 'Malay',				'msa' => 'Malay',
		'mal' => 'Malayalam',			'mlt' => 'Maltese',				'mnc' => 'Manchu',							'mdr' => 'Mandar',				'man' => 'Mandingo',			'mni' => 'Manipuri',			'mno' => 'Manobo languages',
		'glv' => 'Manx',				'mao' => 'Maori',				'mri' => 'Maori',							'mar' => 'Marathi',				'chm' => 'Mari',				'mah' => 'Marshallese',			'mwr' => 'Marwari',
		'mas' => 'Masai',				'myn' => 'Mayan languages',		'men' => 'Mende',							'mic' => 'Micmac',				'min' => 'Minangkabau',			'moh' => 'Mohawk',				'mdf' => 'Moksha',
		'mol' => 'Moldavian',			'mkh' => 'Mon-Khmer (Other)',	'lol' => 'Mongo',							'mon' => 'Mongolian',			'mos' => 'Mossi',				'mul' => 'Multiple languages',	'mun' => 'Munda languages',
		'nah' => 'Nahuatl',				'nau' => 'Nauru',				'nav' => 'Navaho',							'nav' => 'Navajo',				'nde' => 'Ndebele, North',		'nbl' => 'Ndebele, South',		'ndo' => 'Ndonga',
		'nap' => 'Neapolitan',			'nep' => 'Nepali',				'new' => 'Newari',							'nia' => 'Nias',				'ssa' => 'Nilo-Saharan (Other)','niu' => 'Niuean',				'nog' => 'Nogai',
		'non' => 'Norse, Old',			'sme' => 'Northern Sami',		'nde' => 'North Ndebele',					'nor' => 'Norwegian',			'nob' => 'Norwegian Bokm�l',	'nno' => 'Norwegian Nynorsk',	'nub' => 'Nubian languages',
		'nym' => 'Nyamwezi',			'nya' => 'Nyanja',				'nyn' => 'Nyankole',						'nno' => 'Nynorsk, Norwegian',	'nyo' => 'Nyoro',				'nzi' => 'Nzima',				'oci' => 'Occitan (post 1500)',
		'oji' => 'Ojibwa',				'chu' => 'Old Bulgarian',		'chu' => 'Old Church Slavonic',				'chu' => 'Old Slavonic',		'ori' => 'Oriya',				'orm' => 'Oromo',				'osa' => 'Osage',
		'oss' => 'Ossetian',			'oss' => 'Ossetic',				'oto' => 'Otomian languages',				'pal' => 'Pahlavi',				'pau' => 'Palauan',				'pli' => 'Pali',				'pam' => 'Pampanga',
		'pag' => 'Pangasinan',			'pan' => 'Panjabi',				'pap' => 'Papiamento',						'paa' => 'Papuan (Other)',		'per' => 'Persian',				'fas' => 'Persian',				'phi' => 'Philippine (Other)',
		'phn' => 'Phoenician',			'pon' => 'Pohnpeian',			'pol' => 'Polish',							'por' => 'Portuguese',			'pra' => 'Prakrit languages',	'oci' => 'Proven�al',			'pan' => 'Punjabi',
		'pus' => 'Pushto',				'que' => 'Quechua',				'roh' => 'Raeto-Romance',					'raj' => 'Rajasthani',			'rap' => 'Rapanui',				'rar' => 'Rarotongan',			'roa' => 'Romance (Other)',
		'rum' => 'Romanian',			'ron' => 'Romanian',			'rom' => 'Romany',							'run' => 'Rundi',				'rus' => 'Russian',				'sal' => 'Salishan languages',	'sam' => 'Samaritan Aramaic',
		'smi' => 'Sami languages',		'smo' => 'Samoan',				'sad' => 'Sandawe',							'sag' => 'Sango',				'san' => 'Sanskrit',			'sat' => 'Santali',				'srd' => 'Sardinian',
		'sas' => 'Sasak',				'nds' => 'Saxon, Low',			'sco' => 'Scots',							'gla' => 'Scottish Gaelic',		'sel' => 'Selkup',				'sem' => 'Semitic (Other)',		'scc' => 'Serbian',
		'srp' => 'Serbian',				'srr' => 'Serer',				'shn' => 'Shan',							'sna' => 'Shona',				'iii' => 'Sichuan Yi',			'sid' => 'Sidamo',				'sgn' => 'Sign languages',
		'bla' => 'Siksika',				'snd' => 'Sindhi',				'sin' => 'Sinhalese',						'sit' => 'Sino-Tibetan (Other)','sio' => 'Siouan languages',	'sms' => 'Skolt Sami',			'den' => 'Slave (Athapascan)',
		'sla' => 'Slavic (Other)',		'slo' => 'Slovak',				'slk' => 'Slovak',							'slv' => 'Slovenian',			'sog' => 'Sogdian',				'som' => 'Somali',				'son' => 'Songhai',
		'snk' => 'Soninke',				'wen' => 'Sorbian languages',	'nso' => 'Sotho, Northern',					'sot' => 'Sotho, Southern',		'sma' => 'Southern Sami',		'nbl' => 'South Ndebele',		'spa' => 'Spanish',
		'suk' => 'Sukuma',				'sux' => 'Sumerian',			'sun' => 'Sundanese',						'sus' => 'Susu',				'swa' => 'Swahili',				'ssw' => 'Swati',				'swe' => 'Swedish',
		'syr' => 'Syriac',				'tgl' => 'Tagalog',				'tah' => 'Tahitian',						'tai' => 'Tai (Other)',			'tgk' => 'Tajik',				'tmh' => 'Tamashek',			'tam' => 'Tamil',
		'tat' => 'Tatar',				'tel' => 'Telugu',				'ter' => 'Tereno',							'tet' => 'Tetum',				'tha' => 'Thai',				'tib' => 'Tibetan',				'bod' => 'Tebetan',
		'tig' => 'Tigre',				'tir' => 'Tigrinya',			'tem' => 'Timne',							'tiv' => 'Tiv',					'tli' => 'Tlingit',				'tpi' => 'Tok Pisin',			'tkl' => 'Tokelau',
		'tog' => 'Tonga',				'tsi' => 'Tsimshian',			'tso' => 'Tsonga',							'tsn' => 'Tswana',				'tum' => 'Tumbuka',				'tup' => 'Tupi languages',		'tur' => 'Turkish',
		'tuk' => 'Turkmen',				'tvl' => 'Tuvalu',				'tyv' => 'Tuvinian',						'twi' => 'Twi',					'udm' => 'Udmurt',				'uga' => 'Ugaritic',			'uig' => 'Uighur',
		'ukr' => 'Ukrainian',			'umb' => 'Umbundu',				'und' => 'Undetermined',					'hsb' => 'Upper Sorbian',		'urd' => 'Urdu',				'uzb' => 'Uzbek',				'vai' => 'Vai',
		'cat' => 'Valencian',			'ven' => 'Venda',				'vie' => 'Vietnamese',						'vol' => 'Volap�k',				'vot' => 'Votic',				'wak' => 'Wakashan languages',	'wal' => 'Walamo',
		'wln' => 'Walloon',				'war' => 'Waray',				'was' => 'Washo',							'wel' => 'Welsh',				'cym' => 'Welsh',				'wol' => 'Wolof',				'xho' => 'Xhosa',
		'sah' => 'Yakut',				'yao' => 'Yao',					'yap' => 'Yapese',							'yid' => 'Yiddish',				'yor' => 'Yoruba',				'ypk' => 'Yupik languages',		'znd' => 'Zande',
		'zap' => 'Zapotec',				'zen' => 'Zenaga',				'zha' => 'Zhuang',							'zul' => 'Zulu',				'zun' => 'Zuni'
	);
	
	public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new i18n();
		}
		return self::$instance;
	}	
}

?>
