<?php


namespace PurewaterEs\ScoutElastic\Builders;

use Hyperf\Database\Model\Model;

class SearchBuilder extends FilterBuilder
{
    /**
     * The rules array.
     *
     * @var array
     */
    public $rules = [];

    /**
     * SearchBuilder constructor.
     *
     * @param  Model  $model
     * @param  string  $query
     * @param  callable|null  $callback
     * @param  bool  $softDelete
     * @return void
     */
    public function __construct(Model $model, $query, $callback = null, $softDelete = false)
    {
        parent::__construct($model, $callback, $softDelete);

        $this->query = $query;
    }

    /**
     * Add a rule.
     *
     * @param  string|callable  $rule Search rule class name or function
     * @return $this
     */
    public function rule($rule)
    {
        $this->rules[] = $rule;

        return $this;
    }
}