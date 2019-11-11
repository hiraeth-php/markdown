<?php

namespace Hiraeth\Markdown;

use League\CommonMark;

/**
 *
 */
class CommonMarkProxy implements ParserInterface
{
	/**
	 *
	 */
	public function __construct(CommonMark\Converter $converter)
	{
		$this->converter = $converter;
	}


	/**
	 *
	 */
	public function parse(string $markdown): string
	{
		return $this->converter->convertToHtml($markdown);
	}
}
