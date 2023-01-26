<?php

/**
 * Telegram Bot API 5.0
 */

declare(strict_types=1);

namespace FSA\Telegram\Entity;

abstract class AbstractEntity {

    public array $unsupported=[];

    public function __construct(object $entity) {
        $r = new \ReflectionClass(static::class);
        foreach ((array)$entity as $key=> $value) {
            if (!$r->hasProperty($key)) {
                $this->unsupported[$key]=$value;
                continue;
            }
            $prop = $r->getProperty($key);
            $type = $prop->getType();
            $class_name=$type->getName();
            switch ($class_name) {
                case 'int':
                    $this->$key=intval($value);
                    break;
                case 'float':
                    $this->$key=floatval($value);
                    break;
                case 'bool':
                    $this->$key=boolval($value);
                    break;
                case 'string':
                    $this->$key=$value;
                    break;
                case 'array':
                    $this->$key=$this->parseArray($key, $value);
                    break;
                default:
                    $this->$key = new $class_name($value);
            }
        }
    }

    protected function parseArray($key, $value) {
        return $value;
    }

}
