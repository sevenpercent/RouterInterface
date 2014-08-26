<?php

namespace SevenPercent;

use SevenPercent\HTTP\Request;

interface RouterInterface {
	public static function serve(Request $httpRequest);
}
