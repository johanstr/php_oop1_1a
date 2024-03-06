<?php
@include_once('Tcell.php');

class Trow
{
   private array $content = [];

   public function __construct(array $rij)
   {
      foreach($rij as $index => $value) {
         $this->content[] = new Tcell($value);
      }
   }

   public function draw()
   {
      echo '<tr>';

      // De draw method van iedere Cell (TD) uitvoeren
      foreach($this->content as $cell) {
         $cell->draw();
      }

      echo '</tr>';
   }
}