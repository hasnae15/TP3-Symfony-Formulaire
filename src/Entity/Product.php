<?php
namespace App\Entity;

class Product
{
    private ?int $id = null;
    private string $name = 'Premium Wireless Headphones';
    private float $price = 129.99;
    private string $description = 'Experience superior sound quality with our premium wireless headphones. Features active noise cancellation, 30-hour battery life, and premium comfort padding.';
    private string $brand = 'AudioTech';
    private string $color = 'Matte Black';
    private string $connectivity = 'Bluetooth 5.0';
    private string $batteryLife = '30 hours';
    private string $imageUrl = 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg';

    // Getters
    public function getId(): ?int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getPrice(): float { return $this->price; }
    public function getDescription(): string { return $this->description; }
    public function getBrand(): string { return $this->brand; }
    public function getColor(): string { return $this->color; }
    public function getConnectivity(): string { return $this->connectivity; }
    public function getBatteryLife(): string { return $this->batteryLife; }
    public function getImageUrl(): string { return $this->imageUrl; }

    // Setters
    public function setName(string $name): self { $this->name = $name; return $this; }
    public function setPrice(float $price): self { $this->price = $price; return $this; }
    public function setDescription(string $description): self { $this->description = $description; return $this; }
    public function setBrand(string $brand): self { $this->brand = $brand; return $this; }
    public function setColor(string $color): self { $this->color = $color; return $this; }
    public function setConnectivity(string $connectivity): self { $this->connectivity = $connectivity; return $this; }
    public function setBatteryLife(string $batteryLife): self { $this->batteryLife = $batteryLife; return $this; }
    public function setImageUrl(string $imageUrl): self { $this->imageUrl = $imageUrl; return $this; }
}
