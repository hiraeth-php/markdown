<?php

namespace Hiraeth\Markdown;

/**
 *
 */
interface ParserInterfaice
{
	public function parse(string $markdown): string;
}
