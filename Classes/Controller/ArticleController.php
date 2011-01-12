<?php
declare(ENCODING = 'utf-8');
namespace F3\ArticleWorkflow\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "ArticleWorkflow".            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Article controller for the ArticleWorkflow package 
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class ArticleController extends \F3\ArticleWorkflow\Controller\AbstractBaseController {

	/**
	 * @inject
	 * @var \F3\ArticleWorkflow\Domain\Repository\ArticleRepository
	 */
	protected $articleRepository;


	/**
	 * Index action
	 *
	 * @return void
	 * @author Soren Malling <mail@typo3tech.net>
	 */
	public function indexAction() {
		$this->view->assign('foos', array(
			'bar', 'baz'
		));
	}

	/**
	 * New action
	 * 
	 * @param \F3\ArticleWorkflow\Domain\Model\Article $newArticle
	 * @return void
	 * @dontvalidate $newArticle
	 * @author Soren Malling <mail@typo3tech.net>
	 */
	public function newAction(\F3\ArticleWorkflow\Domain\Model\Article $article = NULL) {
		$this->view->assign('newArticle', $article);
	}

	/**
	 * Create action
	 * @param \F3\ArticleWorkflow\Domain\Model\Article $newArticle
	 * @return void
	 * @author Soren Malling <mail@typo3tech.net>
	 */
	public function createAction(\F3\ArticleWorkflow\Domain\Model\Article $newArticle) {
		$this->articleRepository->add($newArticle);
		$this->redirect('index', 'Standard');
	}

	/**
	 * Edit action
	 * @param \F3\ArticleWorkflow\Domain\Model\Article $newArticle
	 * @return void
	 * @author Soren Malling <mail@typo3tech.net>
	 */
	public function editAction(\F3\ArticleWorkflow\Domain\Model\Article $editedArticle = NULL) {
		$this->view->assign('article', $editedArticle);
	}

	
}

?>