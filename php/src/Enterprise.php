<?php

class Enterprise
{
    private $name;
    private $address;
    private $workers = array();


    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getWorkers(): array
    {
        return $this->workers;
    }

    public function setWorkers(array $workers): void
    {
        $this->workers = $workers;
    }

    public function addWorker(Worker $t) : void {
        $this->workers[] = $t;
    }

    public function listWorkersHtml() : string {
        $message = "";
        foreach ($this->workers as $worker){
            $message .= Worker::toHtml($worker) . "<br><br>";
        }
        return $message;
    }

    public function getCosteNominas() : float {
        return array_reduce($this->workers,"suma");
    }
}