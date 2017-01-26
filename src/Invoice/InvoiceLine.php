<?php

namespace MMI\Invoice;

class InvoiceLine
{
    private $amount;
    private $description;
    private $vat;

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    public function calculateTotal()
    {
        $amount = $this->amount;
        return $amount + $this->vat * $amount;
    }
}
