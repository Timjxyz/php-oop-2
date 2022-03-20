<?php

trait ProductFeature {

    public $name;
    public $numberProduct;
    public $description;

    public function getFullFeature() {
        return $this->name . ' ' .  $this->numberProdutc . ', ' . $this->description;
    }

}