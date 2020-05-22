<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ExcelTemplateIncomeStatement
 *
 * @property int $lineNumber
 * @property string $display
 * @property float $netChange
 * @property string $lineType
 * @property int $indentation
 * @property string $dateFilter
 *
 */
class ExcelTemplateIncomeStatement extends Entity
{
    protected static $schema_type = 'ExcelTemplateIncomeStatement';

    protected $fillable = [
        'lineNumber',
        'display',
        'netChange',
        'lineType',
        'indentation',
        'dateFilter',
    ];

    protected $guarded  = [

    ];
}