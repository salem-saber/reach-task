<?php

namespace App\ReachTask\Base;

class Service
{

    private Repository $repository;
    private $errors = [];

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param mixed $errors
     */
    public function setErrors(mixed $errors): void
    {
        if(is_array($errors))
            $this->errors = array_merge($this->errors,$errors);
        else
            $this->errors[] = $errors;
    }

    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    /**
     * @return Repository
     */
    public function getRepository(): Repository
    {
        return $this->repository;
    }

    /**
     * @param Repository $repository
     */
    public function setRepository(Repository $repository): void
    {
        $this->repository = $repository;
    }


}
