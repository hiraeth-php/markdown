<?php

namespace Hiraeth\Markdown;

/**
 *
 */
interface Parser
{
	public function parse(string $markdown): string;
}
