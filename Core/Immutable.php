<?php

namespace Core;

class Immutable
{
    protected array $parts = [];
    protected array $readOnly = [];

    public function __construct()
    {
        return $this;
    }

    /**
     * put function
     *
     * @param string $part
     * @param mixed $value
     * @param bool $readOnly
     * @return void
     */
    public function put(string $part, $value, bool $readOnly = false): self
    {
        if (isset($this->parts[$part])) {
            $clone = $this->clone();
            $clone->parts[$part] = $value;
            return $clone;
        }

        if ($readOnly) {
            $this->readOnly[] = $part;
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
        if (\in_array($part, $this->readOnly, \true)) {
            return $this->readOnly($part, $default);
        }

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
        $clone = $this->clone();

        return $clone->parts[$part] ?? $default ?? null;
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
