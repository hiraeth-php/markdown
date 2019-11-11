<?php

namespace Hiraeth\Markdown;

use Hiraeth;
use League\CommonMark;

/**
 * Delegates are responsible for constructing dependencies for the dependency injector.
 *
 * Each delegate operates on a single concrete class and provides the class that it is capable
 * of building so that it can be registered easily with the application.
 */
class ConverterDelegate implements Hiraeth\Delegate
{
	/**
	 * Get the class for which the delegate operates.
	 *
	 * @static
	 * @access public
	 * @return string The class for which the delegate operates
	 */
	public static function getClass(): string
	{
		return CommonMark\Converter::class;
	}


	/**
	 * Get the instance of the class for which the delegate operates.
	 *
	 * @access public
	 * @param Hiraeth\Application $app The application instance for which the delegate operates
	 * @return object The instance of the class for which the delegate operates
	 */
	public function __invoke(Hiraeth\Application $app): object
	{
		$environment = Environment::createCommonMarkEnvironment();

		foreach ($app->getConfig('packages/markdown', 'markdown.extensions', []) as $extension) {
			$environment->addExtension($app->get($extension));
		}

		return $app->share(new Converter(
			new DocParser($environment),
			new HtmlRenderer($environment)
		));
	}
}
