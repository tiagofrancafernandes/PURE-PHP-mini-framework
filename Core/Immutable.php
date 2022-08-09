<?php

namespace Core;

class Immutable
{
    protected array $parts = [];

    public function __construct()
    {
        return $this;
    }

    /**
     * put function
     *
     * @param string $part
     * @param mixed $value
     * @return void
     */
    public function put(string $part, $value): self
    {
        if (isset($this->parts[$part])) {
            $clone = $this->clone();
            $clone->parts[$part] = $value;
            return $clone;
        }

        $this->parts[$part] = $value;

        return $this;
    }

    /**
     * get function
     *
     * @param string $part
     * @param mixed $default
     * @return void
     */
    public function get(string $part, $default = null)
    {
        return $this->parts[$part] ?? $default ?? null;
    }

    /**
     * readOnly function
     *
     * @param string $part
     * @param mixed $default
     * @return void
     */
    public function readOnly(string $part, $default = null)
    {
        $clone = clone $this->parts[$part] ?? $default ?? null;

        return $clone;
    }

    /**
     * ro function
     *
     * @param string $part
     * @param mixed $default
     * @return void
     */
    public function ro(string $part, $default = null)
    {
        return $this->readOnly($part, $default);
    }

    /**
     * clone function
     *
     * @return self
     */
    public function clone(): self
    {
        return clone $this;
    }
}
