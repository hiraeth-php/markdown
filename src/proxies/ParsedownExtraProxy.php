<?php

namespace Hiraeth\Markdown;

use ParsedownExtra

/**
 *
 */
class ParsedownExtraProxy implements ParserInterface
{
	/**
	 *
	 */
	public function __construct(ParsedownExtra $parsedown)
	{
		$this->parsedown = $parsedown;
	}


	/**
	 *
	 */
	public function parse(string $markdown): string
	{
		return $this->parsedown->text($markdown);
	}
}
