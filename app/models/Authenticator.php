<?php

use Nette\Security as NS;


/**
 * Users authenticator.
 *
 * @author    
 * @package    
 */
class Authenticator extends Nette\Object implements NS\IAuthenticator
{
	/** @var Nette\Database\Table\Selection */
	private $users;



	public function __construct(Nette\Database\Table\Selection $users)
	{
		$this->users = $users;
	}



	/**
	 * Performs an authentication
	 * @param  array
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		list($username, $password) = $credentials;
		// Zde dplnit prihlasovani na nas system
		// Facebook se prihlasuje Modrym tlacitkem jako je ted
		// Interni lokola login from
		// 
		// Vytvorit prihlasovaci prezentery (SignPresenter)  (nejspise se prepise do nette komponenty?)
		//  fcb login button, foursquare login button, lokola login
        //  neres formatovani nabus html    
		// mozna prihlaseni:
        //  Interni lokola
        //    - stare ucty a ucty zberacu (email : heslo)
        //  Prihlaseni pres facebook
        //    - dostaneme tokeny uzivatelu MUSI BYT ULOZENO
        //    - Pokud dany uzivatel (musi mit jedinecny identifikator) neexistuje => vyvtorit
        //  Prihlaseni pres foursquare
        //    - viz nahore
        //  Podivat se co dostaneme z NS/Identity
        //  Zjisti hashovaci funkci stare lokoly (zjisti pouzitelnost => identifikator hashovaci funkce
        //
		if (!$row) {
			throw new NS\AuthenticationException("User '$username' not found.", self::IDENTITY_NOT_FOUND);
		}

		if ($row->password !== $this->calculateHash($password)) {
			throw new NS\AuthenticationException("Invalid password.", self::INVALID_CREDENTIAL);
		}

		unset($row->password);
		return new NS\Identity($row->id, $row->role, $row->toArray());
	}



	/**
	 * Computes salted password hash.
	 * @param  string
	 * @return string
	 */
	public function calculateHash($password)
	{
		return md5($password . str_repeat('*enter any random salt here*', 10));
	}

}
