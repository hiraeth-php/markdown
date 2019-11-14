<?php

namespace Hiraeth\Markdown;

/**
 * The minimal interface for a markdown parser
 */
interface Parser
{
	/**
	 * Parse a markdown string into rendered HTML
	 */
	public function parse(string $markdown): string;
}
