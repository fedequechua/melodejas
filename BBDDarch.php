<?php

/**
	Esborrany: Cal revisar el llenguatge i l'arquitectura en si, que és només una proposta
	@fede: Estem d'acord que la base de dades serà MySQL no?
	@fede: Probablement ja ho saps, però com a convenció, en llocs on calgui discutir alguna cosa, ho marcaré amb un comentari com a "TBD" (to-be-discussed)
*/

	TABLE users: 
	{
		id:              int, //auto-increment-key 
		name:            string, 
		img:             string, //path to a file 
		location:        string, //o location_id des d'una taula de locations
		is_premium:      bool, 
		trusty_points:   int, 
		untrusty_points: int, 
		credit:          ????, //TBD
	}

	TABLE objects: 
	{
		id:              int, //auto-increment-key 
		user_id:         int, 
		description:     string, 
		img:             string, //path to file 
		price:           float, 
		garantia:        ????, //TBD
		ratings:         ????, //TBD
	}

?>
