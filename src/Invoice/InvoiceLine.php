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

    /**
     * 20% / 5% ...
     * @param int $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat/100 + 1;
    }

    public function calculateTotal()
    {
        $amount = $this->amount;
        return $amount + $this->vat * $amount;
    }
}
