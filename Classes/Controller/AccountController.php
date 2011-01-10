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
 * User controller for the ArticleWorkflow package 
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class AccountController extends \F3\ArticleWorkflow\Controller\AbstractBaseController {

	/**
	 * @inject
	 * @var \F3\FLOW3\Security\AccountRepository
	 */
	protected $securityAccountRepository;

	/**
	 * @inject
	 * @var \F3\ArticleWorkflow\Domain\Repository\AccountRepository
	 */
	protected $accountRepository;

	/**
	 * @inject
	 * @var \F3\FLOW3\Security\Authentication\AuthenticationManagerInterface
	 */
	protected $authenticationManager;

	/**
	 * @inject
	 * @var \F3\FLOW3\Security\Context
	 */
	protected $securityContext;

	/**
	 * New action
	 *
	 * @return void
	 */
	public function newAction(\F3\ArticleWorkflow\Domain\Model\Account $newAccount = NULL) {
		if($newAccount != NULL) {
			$credentials = md5(md5($newAccount->getCredentialsSource()) . $salt) . ',' . $salt;
			$newAccount->setCredentialsSource((string) $credentialsSource);
			$newAccount->setAuthenticationProviderName('DefaultProvider');
			#$this->accountRepository->add($newAccount);
			\F3\var_dump($newAccount);
		}
	}


	/**
	 * Create action
	 *
	 * @param \F3\ArticleWorkflow\Domain\Model\Account
	 * @return void
	 */
	public function createAction(\F3\ArticleWorkflow\Domain\Model\Account $newAccount) {
		$salt = 'joh316';
		$credentials = md5(md5($newAccount->getCredentialsSource()) . $salt) . ',' . $salt;
		$newAccount->setCredentialsSource((string) $credentialsSource);
		$newAccount->setAuthenticationProviderName('DefaultProvider');
		#$this->accountRepository->add($newAccount);
		\F3\var_dump($newAccount);
	}

	/**
	 * Logout
	 *
	 * @return void
	 */
	public function logoutAction() {
		$this->authenticationManager->logout();
		$this->redirect('form', 'login');
	}

	/**
	 * Create user account
	 *
	 * @param string $identifier
	 * @param string $password
	 * @param string $role
	 *
	 * @return void
	 * @author Soren Malling <mail@typo3tech.net>
	 */
	public function createUserAccount(string $identifier, string $password, string $role) {
		#$account = $this->accountFactory->createAccountWithPassword($identifier, $password, array($role));
		#$this->accountRepository->add($account);
	}
}

?>