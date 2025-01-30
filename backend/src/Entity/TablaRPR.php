<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "tablaRPR")]
class TablaRPR
{
 #[ORM\Id]
 #[ORM\GeneratedValue]
 #[ORM\Column(type: "integer")]
 private int $id;
 #[ORM\Column(type: "string", length: 255)]
 private string $fraseRPR;
 public function getId(): int
 {
 return $this->id;
 }
 public function getfraseRPR(): string
 {
 return $this->fraseRPR;
 }
 public function setfraseRPR(string $fraseRPR): self
 {
 $this->fraseRPR = $fraseRPR;
 return $this;
 }
}