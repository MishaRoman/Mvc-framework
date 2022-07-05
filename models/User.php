<?php 

namespace app\models;

use app\core\Model;

class User extends Model
{
	public string $firstname = '';
	public string $lastname = '';
	public string $email = '';
	public string $password = '';
	public string $confirmPassword = '';

	public function register()
	{
		echo 'New user';
	}

	public function rules(): array
	{
		return [
			'firstname' => [self::RULE_REQUIRED],
			'lastname' => [self::RULE_REQUIRED],
			'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
			'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 6], [self::RULE_MAX, 'max' => 24]],
			'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
		];
	}
}