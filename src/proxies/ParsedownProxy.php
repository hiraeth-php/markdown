<?php

namespace Hiraeth\Markdown;

use Parsedown;

/**
 *
 */
class ParsedownProxy implements ParserInterface
{
	/**
	 *
	 */
	public function __construct(Parsedown $parsedown)
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
