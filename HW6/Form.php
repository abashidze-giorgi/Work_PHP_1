<?php

class Form {

    private function getAttributesString($attributes) {
        $attributesString = '';
        foreach ($attributes as $key => $value) {
            $attributesString .= "$key=\"$value\" ";
        }
        return trim($attributesString);
    }

    public function input($attributes) {
        $attributesString = $this->getAttributesString($attributes);
        return "<input $attributesString>";
    }

    public function submit($attributes) {
        $attributes['type'] = 'submit';
        $attributesString = $this->getAttributesString($attributes);
        return "<input $attributesString>";
    }

    public function password($attributes) {
        $attributes['type'] = 'password';
        $attributesString = $this->getAttributesString($attributes);
        return "<input $attributesString>";
    }

    public function textarea($attributes) {
        $attributesString = $this->getAttributesString($attributes);
        $value = isset($attributes['value']) ? $attributes['value'] : '';
        return "<textarea $attributesString>$value</textarea>";
    }

    public function open($attributes) {
        $attributesString = $this->getAttributesString($attributes);
        return "<form $attributesString>";
    }

    public function close() {
        return "</form>";
    }
}
