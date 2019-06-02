<?php

namespace Hiraeth\Markdown;

/**
 *
 */
interface ParserInterface
{
	public function parse(string $markdown): string;
}
