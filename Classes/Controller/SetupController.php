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
 * Setup controller for the ArticleWorkflow package 
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class SetupController extends \F3\FLOW3\MVC\Controller\ActionController {

	/**
	 * @inject
	 * @var \F3\FLOW3\Security\AccountRepository
	 */
	protected $accountRepository;

	/**
	 * @inject
	 * @var \F3\FLOW3\Security\Authentication\AuthenticationManagerInterface
	 */
	protected $authenticationManager;

	/**
	 * @inject
	 * @var F3\FLOW3\Security\Context
	 */
	protected $securityContext;

	/**
	 * Initial action
	 *
	 * @return void
	 */
	public function initializeAction() {
		//If any project exists go to list else create first project

		//If a project exists but
	}

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function indexAction() {
		/**
		 * TODO IN SETUP (NOT PRIORITIZED)
		 * - Create roles
		 * - Create first project
		 * - Create admin user
		 */
		$account = $this->objectManager->create('F3\FLOW3\Security\Account');
		$roles = array(
			$this->objectManager->create('F3\FLOW3\Security\Policy\Role', 'Journalist'),
			$this->objectManager->create('F3\FLOW3\Security\Policy\Role', 'Editor'),
			$this->objectManager->create('F3\FLOW3\Security\Policy\Role', 'Administrator')
		);
		$account->setRoles($roles);

	}

	/**
	 * Project action
	 *
	 * @return void
	 */
	public function projectAction() {
		
	}

}

?>