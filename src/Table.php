<?php
@include_once('Trow.php');

class Table 
{
   private array $content = [];  // Verzameling van Rijen (TR)

   public function __construct(array $data)
   {
      foreach($data as $rij) {
         $this->content[] = new Trow($rij);
      }
   }

   public function draw(): void
   {
      echo '<table border="1">';
      // De draw method aanroepen van alle children in content
      foreach($this->content as $object) {
         $object->draw();
      }

      echo '</table>';
   }
}