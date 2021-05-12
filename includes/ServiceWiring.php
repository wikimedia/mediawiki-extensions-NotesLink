<?php

use MediaWiki\MediaWikiServices;

return [

	'NotesLinkNDLFactory' => static function ( MediaWikiServices $services ) {
		return new \NotesLink\NDLFactory(
			$services->getConfigFactory()->makeConfig( 'noteslink' )
		);
	},

];
