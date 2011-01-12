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
 * Login controller for the ArticleWorkflow package 
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class LoginController extends \F3\ArticleWorkflow\Controller\AbstractBaseController {

	/**
	 * @inject
	 * @var \F3\FLOW3\Security\Authentication\AuthenticationManagerInterface
	 */
	protected $authenticationManager;

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function formAction() {

		/*$this->authenticationManager->logout();
		$this->accountRepository->removeAll();

		$account = $this->objectManager->create('F3\FLOW3\Security\Account');

		$username = 'admin';
		$password = 'password';
		$salt = '5fab0fcaa27050706c06f3094f1015b1';

		$credentials = md5(md5($password) . $salt) . ',' . $salt;

		$roles = array(
		  $this->objectManager->create('F3\FLOW3\Security\Policy\Role', 'Administrator'),
		);*/

		$party = $this->objectManager->create('F3\Party\Domain\Model\Party');

		/*$account->setAccountIdentifier($username);
		$account->setCredentialsSource($credentials);
		$account->setAuthenticationProviderName('DefaultProvider');
		$account->setRoles($roles);
		$account->setParty($party);

		$this->accountRepository->add($account);*/
	}
	
	/**
	 * Authentication function
	 *
	 * @return void
	 */
	public function authenticateAction() {
		try {
			$this->authenticationManager->authenticate();
			$this->redirect('index', 'Standard');
		} catch(\F3\FLOW3\Security\Exception\AuthenticationRequiredException $exception) {
			$this->flashMessageContainer->add('Authentication failed');
			#$this->redirect('form', 'Login');
			die($exception);
		}
	}
	
}

?>