<?php

declare(strict_types=1);

namespace MatiCore\Article;

/**
 * Interface ArticleManagerAccessor
 * @package MatiCore\Article
 */
interface ArticleManagerAccessor
{

	/**
	 * @return ArticleManager
	 */
	public function get(): ArticleManager;

}