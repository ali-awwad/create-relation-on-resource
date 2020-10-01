<?php

namespace AliAwwad\CreateRelationOnResource;

// use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\BelongsTo;

class BelongsToWithCreate extends BelongsTo
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'BelongsToWithCreate';

    public function __construct($name, $attribute = null, $resource = null) {
        parent::__construct($name, $attribute, $resource);

        $this->quickCreate();
    }

    private function quickCreate($fillValues = [])
    {
        $this->withMeta(['quickCreate' => true, 'fillValues' => $fillValues]);

        return $this;
    }
}
