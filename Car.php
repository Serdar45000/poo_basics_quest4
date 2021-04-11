<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
      parent::__construct($color, $nbSeats);
      $this->energy = $energy;
    }
    
        public function getParkBrake(): bool 
        {
            return $this->hasParkBrake;
        }
        public function setParkBrake(bool $hasParkBrake): void 
        {
            $this->hasParkBrake = $hasParkBrake;
        }
        
        public function start(): string
        {
            try
            {
                if ($this->hasParkBrake == true) 
                {
                    throw new Exception("le frein à main est actif ! ");
                }
            } 
            catch(Exception $e)
            {
                echo "Message d'exception : " . $e->getMessage() ;
                $this->setParkBrake(false);
            }
            finally
            {
                return "Ma voiture roule comme un donut !";
            }
        }
    

}

