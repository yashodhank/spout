<?php

namespace Box\Spout\Writer;

/**
 * Class Sheet
 * Represents a worksheet within a XLSX file
 *
 * @package Box\Spout\Writer
 */
class Sheet
{
    const DEFAULT_SHEET_NAME_PREFIX = 'Sheet';

    /** @var int Number of the sheet, based on order of creation (zero-based) */
    protected $sheetNumber;

    /** @var string Name of the sheet */
    protected $name;

    /**
     * @param $sheetNumber Number of the sheet, based on order of creation (zero-based)
     */
    function __construct($sheetNumber)
    {
        $this->sheetNumber = $sheetNumber;
        $this->name = self::DEFAULT_SHEET_NAME_PREFIX . ($sheetNumber + 1);
    }

    /**
     * @return int Number of the sheet, based on order of creation (zero-based)
     */
    public function getNumber()
    {
        return $this->sheetNumber;
    }

    /**
     * @return string Name of the sheet
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name Name of the sheet
     * @return \Box\Spout\Writer\Sheet
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
