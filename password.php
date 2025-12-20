<?php
/**	op-unit-form-testcase:/password.php
 *
 * @created    2025-12-20
 * @license    Apache-2.0
 * @package    op-unit-form
 * @subpackage testcase
 * @copyright  (C) 2025 Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP\UNIT\FORM;

//	...
$form = [
	'name'  => 'password',
	'input' => [],
];

//	nickname
$input = [
	'name'    => 'nickname',
	'type'    => 'text',
	'cookie'  =>  true,
	'session' =>  true,
];
$form['input'][] = $input;

//	password
$input = [
	'name'    => 'password',
	'type'    => 'password',
	'cookie'  =>  true,
	'session' =>  false,
];
$form['input'][] = $input;

//	...
OP()->Unit()->Form()->Config($form);
OP()->Unit()->Form()->Display();
