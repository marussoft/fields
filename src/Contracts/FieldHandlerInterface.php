<?php

declare(strict_types=1);

namespace Marussia\Fields\Contracts;

use Marussia\Fields\Entities\Field;
use Marussia\Fields\FieldData;

interface FieldHandlerInterface
{
    public function getStorageValueType() : string;

    public function getStorageValueSize() : int;

    public function fill(FieldData $fieldData) : Field;
    
    public function getInput(FieldData $fieldData) : Field;
    
    public function editFilled(FieldData $fieldData) : Field;
}