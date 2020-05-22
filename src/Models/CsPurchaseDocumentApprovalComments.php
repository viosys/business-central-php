<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPurchaseDocumentApprovalComments
 *
 * @property int $entryNo
 * @property string $userID
 * @property string $userName
 * @property string $dateAndTime
 * @property string $comment
 *
 */
class CsPurchaseDocumentApprovalComments extends Entity
{
    protected static $schema_type = 'CS_PurchaseDocumentApprovalComments';

    protected $fillable = [
        'entryNo',
        'userID',
        'userName',
        'dateAndTime',
        'comment',
    ];

    protected $guarded  = [

    ];
}