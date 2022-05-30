<?php
namespace GeorgRinger\NewsExtend\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Georg Ringer 
 */
class NewsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \GeorgRinger\NewsExtend\Domain\Model\News
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new \GeorgRinger\NewsExtend\Domain\Model\News();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getImageW2ReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getImageW2()
        );

    }

    /**
     * @test
     */
    public function setImageW2ForBoolSetsImageW2()
    {
        $this->subject->setImageW2(true);

        self::assertAttributeEquals(
            true,
            'imageW2',
            $this->subject
        );

    }

/**
     * @test
     */
    public function getImageH2ReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getImageH2()
        );

    }

    /**
     * @test
     */
    public function setImageH2ForBoolSetsImageH2()
    {
        $this->subject->setImageH2(true);

        self::assertAttributeEquals(
            true,
            'imageH2',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSubheaderReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubheader()
        );

    }

    /**
     * @test
     */
    public function setSubheaderForStringSetsSubheader()
    {
        $this->subject->setSubheader('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subheader',
            $this->subject
        );

    }

}
