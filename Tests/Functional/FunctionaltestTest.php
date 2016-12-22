<?php
namespace CITEQ\FunctionaltestTest\Tests\Functional;

class FunctionaltestTest extends \TYPO3\CMS\Core\Tests\FunctionalTestCase {

	protected $coreExtensionsToLoad = array('cms');

	/**
	 * @test
	 */
	public function checkIfFunctionalTestsWorkBasically(){
		$this->assertTrue(TRUE);
	}
}