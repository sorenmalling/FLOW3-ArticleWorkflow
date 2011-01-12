<?php
declare(ENCODING = 'utf-8');
namespace F3\ArticleWorkflow\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "ArticleWorkflow              *
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
 * An action controller with base functionality for all action controllers of
 * the ArticleWorkflow package.
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
abstract class AbstractBaseController extends \F3\FLOW3\MVC\Controller\ActionController {

	/**
	 * @inject
	 * @var \F3\FLOW3\Security\Context
	 */
	protected $securityContext;

	/**
	 * Initializes the view before invoking an action method.
	 *
	 * @param \F3\FLOW3\MVC\View\ViewInterface $view The view to be initialized
	 * @return void
	 * @author Soren Malling <mail@typo3tech.net>
	 */
	protected function initializeView(\F3\FLOW3\MVC\View\ViewInterface $view) {

		/**
		 * TODO:
		 * Find what project the user has selected and assign for use in hidden fields
		 * for data in the Article model
		 * 
		 */

		if($this->request->getControllerName() != 'Login') {
			$activeTokens = $this->securityContext->getAuthenticationTokens();
			foreach ($activeTokens as $token) {
				if ($token->isAuthenticated() !== TRUE) {
					$this->redirect('Form', 'Login');
				}
			}
		}
	}

}

?>