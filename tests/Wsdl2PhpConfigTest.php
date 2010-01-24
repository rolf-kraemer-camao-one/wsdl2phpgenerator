<?php
require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__).'/../Wsdl2PhpConfig.php';

/**
 * Test class for Wsdl2PhpConfig.
 * Generated by PHPUnit on 2009-11-26 at 08:22:42.
 */
class Wsdl2PhpConfigTest extends PHPUnit_Framework_TestCase
{
  /**
   * @var Wsdl2PhpConfig
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Wsdl2PhpConfig('inputFile.xml', '/tmp/output', false, true, true, true, 'myNamespace', array('SOAP_SINGLE_ELEMENT_ARRAYS'), 'WSDL_CACHE_BOTH', 'SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP', 'test,test2, test3', 'prefix', 'suffix');
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
  }

  /**
   * 
   */
  public function testGetNamespaceName()
  {
    $this->assertEquals('myNamespace', $this->object->getNamespaceName());
  }
  

  /**
   * 
   */
  public function testGetOneFile()
  {
    $this->assertTrue($this->object->getOneFile());
  }

  /**
   * 
   */
  public function testGetClassExists()
  {
    $this->assertTrue($this->object->getClassExists());
  }

  /**
   * 
   */
  public function testGetOutputDir()
  {
    $this->assertNotEquals('/tmp/output', $this->object->getOutputDir());
    $this->assertEquals('/tmp/output/', $this->object->getOutputDir());
  }

  /**
   * 
   */
  public function testGetInputFile()
  {
    $this->assertEquals('inputFile.xml', $this->object->getInputFile());
  }

  /**
   * 
   */
  public function testGetOptionFeatures()
  {
    $options = $this->object->getOptionFeatures();

    $this->assertContains('SOAP_SINGLE_ELEMENT_ARRAYS', $options);
    $this->assertNotContains('', $options);
    $this->assertNotContains('test', $options);
    $this->assertNotContains('SOAP_WAIT_ONE_WAY_CALLS', $options);
  }

  /**
   * 
   */
  public function testGetWsdlCache()
  {
    $this->assertNotEquals('', $this->object->getWsdlCache());
    $this->assertEquals('WSDL_CACHE_BOTH', $this->object->getWsdlCache());
  }

  /**
   * 
   */
  public function testGetCompression()
  {
    $this->assertEquals('SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP', $this->object->getCompression());
  }

  /**
   * 
   */
  public function testGetClassNames()
  {
    $this->assertNotEquals('', $this->object->getClassNames());
    $this->assertEquals('test,test2, test3', $this->object->getClassNames());
  }

  /**
   * 
   */
  public function testGetClassNamesArray()
  {
    $this->assertContains('test', $this->object->getClassNamesArray());
    $this->assertContains('test2', $this->object->getClassNamesArray());
    $this->assertContains('test3', $this->object->getClassNamesArray());

    $this->object = new Wsdl2PhpConfig('', '');
    $this->assertEquals(0, count($this->object->getClassNamesArray()));

    $this->object = new Wsdl2PhpConfig('inputFile.xml', '/tmp/output', false, true, true, true, 'myNamespace', array('SOAP_SINGLE_ELEMENT_ARRAYS'), 'WSDL_CACHE_BOTH', 'SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP', 'test');
    $this->assertContains('test', $this->object->getClassNamesArray());
  }

  public function testGetNoTypeConstructor()
  {
    $this->assertTrue($this->object->getNoTypeConstructor());
  }

  public function testGetVerbose()
  {
    $this->assertFalse($this->object->getVerbose());
  }

  public function testGetPrefix()
  {
    $this->assertEquals('prefix', $this->object->getPrefix());
  }

  public function testGetSuffix()
  {
    $this->assertEquals('suffix', $this->object->getSuffix());
  }
}
?>