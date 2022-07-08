<?php
namespace WhiteRoom\NewsExtend\Domain\Model;

/***
 *
 * This file is part of the "Additional fields for news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Georg Ringer, ringer.it
 *
 ***/

use TYPO3\CMS\Extbase\Annotation as Extbase;

/**
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News
{
    /**
     * @var bool
     */
    protected $ishighlighted;
    
    /**
     * imageW2
     *
     * @var bool
     */
    protected $imageW2 = false;

    /**
     * imageH2
     *
     * @var bool
     */
    protected $imageH2 = false;

    /**
     * subheader
     *
     * @var string
     */
    protected $subheader = '';
    
    /**
     * @var \DateTime
     */
    protected $completion;

    /**
     * Get highlight flag
     *
     * @return bool
     */
    public function getIshighlighted()
    {
        return $this->ishighlighted;
    }

    /**
     * Set highlight flag
     *
     * @param bool $ishighlighted flag
     */
    public function setIshighlighted($ishighlighted)
    {
        $this->ishighlighted = $ishighlighted;
    }
    
    /**
     * Returns the imageW2
     *
     * @return bool $imageW2
     */
    public function getImageW2()
    {
        return $this->imageW2;
    }

    /**
     * Sets the imageW2
     *
     * @param bool $imageW2
     * @return void
     */
    public function setImageW2($imageW2)
    {
        $this->imageW2 = $imageW2;
    }

    /**
     * Returns the imageH2
     *
     * @return bool $imageH2
     */
    public function getImageH2()
    {
        return $this->imageH2;
    }

    /**
     * Sets the imageH2
     *
     * @param bool $imageH2
     * @return void
     */
    public function setImageH2($imageH2)
    {
        $this->imageH2 = $imageH2;
    }

    /**
     * Returns the subheader
     *
     * @return string $subheader
     */
    public function getSubheader()
    {
        return $this->subheader;
    }

    /**
     * Sets the subheader
     *
     * @param string $subheader
     * @return void
     */
    public function setSubheader($subheader)
    {
        $this->subheader = $subheader;
    }
    
    /**
     * Get completion date
     *
     * @return \DateTime
     */
    public function getCompletion()
    {
        return $this->completion;
    }

    /**
     * Set completion date
     *
     * @param \DateTime $completion completion date
     */
    public function setCompletion($completion)
    {
        $this->completion = $completion;
    }

    /**
     * Get year of completion date
     *
     * @return int
     */
    public function getYearOfCompletion()
    {
        if ($this->getCompletion()) {
            return $this->getCompletion()->format('Y');
        }
    }

    /**
     * Get Month or completion date
     *
     * @return int
     */
    public function getMonthOfCompletion()
    {
        if ($this->getCompletion()) {
            return $this->getCompletion()->format('m');
        }
    }

    /**
     * Get day of completion date
     *
     * @return int
     */
    public function getDayOfCompletion()
    {
        if ($this->completion) {
            return (int)$this->completion->format('d');
        }
    }
    
    
    

}
