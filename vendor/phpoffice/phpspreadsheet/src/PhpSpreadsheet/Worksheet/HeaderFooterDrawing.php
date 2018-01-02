<?php

namespace PhpOffice\PhpSpreadsheet\Worksheet;

use PhpOffice\PhpSpreadsheet\Exception as PhpSpreadsheetException;

class HeaderFooterDrawing extends Drawing
{
    /**
     * Path.
     *
     * @var string
     */
    private $path;

    /**
     * Name.
     *
     * @var string
     */
    protected $name;

    /**
     * Offset X.
     *
     * @var int
     */
    protected $offsetX;

    /**
     * Offset Y.
     *
     * @var int
     */
    protected $offsetY;

    /**
     * Width.
     *
     * @var int
     */
    protected $width;

    /**
     * Height.
     *
     * @var int
     */
    protected $height;

    /**
     * Proportional resize.
     *
     * @var bool
     */
    protected $resizeProportional;

    /**
     * Create a new HeaderFooterDrawing.
     */
    public function __construct()
    {
        // Initialise values
        $this->path = '';
        $this->name = '';
        $this->offsetX = 0;
        $this->offsetY = 0;
        $this->width = 0;
        $this->height = 0;
        $this->resizeProportional = true;
    }

    /**
     * Get Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name.
     *
     * @param string $pValue
     *
     * @return HeaderFooterDrawing
     */
    public function setName($pValue)
    {
        $this->name = $pValue;

        return $this;
    }

    /**
     * Get OffsetX.
     *
     * @return int
     */
    public function getOffsetX()
    {
        return $this->offsetX;
    }

    /**
     * Set OffsetX.
     *
     * @param int $pValue
     *
     * @return HeaderFooterDrawing
     */
    public function setOffsetX($pValue)
    {
        $this->offsetX = $pValue;

        return $this;
    }

    /**
     * Get OffsetY.
     *
     * @return int
     */
    public function getOffsetY()
    {
        return $this->offsetY;
    }

    /**
     * Set OffsetY.
     *
     * @param int $pValue
     *
     * @return HeaderFooterDrawing
     */
    public function setOffsetY($pValue)
    {
        $this->offsetY = $pValue;

        return $this;
    }

    /**
     * Get Width.
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set Width.
     *
     * @param int $pValue
     *
     * @return HeaderFooterDrawing
     */
    public function setWidth($pValue)
    {
        // Resize proportional?
        if ($this->resizeProportional && $pValue != 0) {
            $ratio = $this->width / $this->height;
            $this->height = round($ratio * $pValue);
        }

        // Set width
        $this->width = $pValue;

        return $this;
    }

    /**
     * Get Height.
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set Height.
     *
     * @param int $pValue
     *
     * @return HeaderFooterDrawing
     */
    public function setHeight($pValue)
    {
        // Resize proportional?
        if ($this->resizeProportional && $pValue != 0) {
            $ratio = $this->width / $this->height;
            $this->width = round($ratio * $pValue);
        }

        // Set height
        $this->height = $pValue;

        return $this;
    }

    /**
     * Set width and height with proportional resize
     * Example:
     * <code>
     * $objDrawing->setResizeProportional(true);
     * $objDrawing->setWidthAndHeight(160,120);
     * </code>.
     *
     * @author Vincent@luo MSN:kele_100@hotmail.com
     *
     * @param int $width
     * @param int $height
     *
     * @return HeaderFooterDrawing
     */
    public function setWidthAndHeight($width, $height)
    {
        $xratio = $width / $this->width;
        $yratio = $height / $this->height;
        if ($this->resizeProportional && !($width == 0 || $height == 0)) {
            if (($xratio * $this->height) < $height) {
                $this->height = ceil($xratio * $this->height);
                $this->width = $width;
            } else {
                $this->width = ceil($yratio * $this->width);
                $this->height = $height;
            }
        }

        return $this;
    }

    /**
     * Get ResizeProportional.
     *
     * @return bool
     */
    public function getResizeProportional()
    {
        return $this->resizeProportional;
    }

    /**
     * Set ResizeProportional.
     *
     * @param bool $pValue
     *
     * @return HeaderFooterDrawing
     */
    public function setResizeProportional($pValue)
    {
        $this->resizeProportional = $pValue;

        return $this;
    }

    /**
     * Get Filename.
     *
     * @return string
     */
    public function getFilename()
    {
        return basename($this->path);
    }

    /**
     * Get Extension.
     *
     * @return string
     */
    public function getExtension()
    {
        $parts = explode('.', basename($this->path));

        return end($parts);
    }

    /**
     * Get Path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set Path.
     *
     * @param string $pValue File path
     * @param bool $pVerifyFile Verify file
     *
     * @throws PhpSpreadsheetException
     *
     * @return HeaderFooterDrawing
     */
    public function setPath($pValue, $pVerifyFile = true)
    {
        if ($pVerifyFile) {
            if (file_exists($pValue)) {
                $this->path = $pValue;

                if ($this->width == 0 && $this->height == 0) {
                    // Get width/height
                    list($this->width, $this->height) = getimagesize($pValue);
                }
            } else {
                throw new PhpSpreadsheetException("File $pValue not found!");
            }
        } else {
            $this->path = $pValue;
        }

        return $this;
    }

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        return md5(
            $this->path .
            $this->name .
            $this->offsetX .
            $this->offsetY .
            $this->width .
            $this->height .
            __CLASS__
        );
    }

    /**
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        $vars = get_object_vars($this);
        foreach ($vars as $key => $value) {
            if (is_object($value)) {
                $this->$key = clone $value;
            } else {
                $this->$key = $value;
            }
        }
    }
}
