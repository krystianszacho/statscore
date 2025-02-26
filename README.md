# Gilded Rose Refactoring (DDD/TDD/PSR)

## Project Description

This project is a refactoring of the Gilded Rose class in PHP following **Domain-Driven Design (DDD)**, **Test-Driven Development (TDD)**, and **PSR-4** standards. The code has been structured into appropriate classes, and business logic has been extracted into separate strategies.

## Installation

1. **Clone the repository**
   ```sh
   git clone https://github.com/krystianszacho/statscore.git
   cd statscore2
   ```
2. **Install dependencies**
   ```sh
   composer install
   ```
3. **Run tests**
   ```sh
   ./vendor/bin/phpunit
   ```

## Key Files Description

- `Item.php` – Represents the item entity.
- `GildedRose.php` – Service responsible for updating item quality.
- `Strategy/` – Contains different strategies for updating item quality.
- `QualityStrategyFactory.php` – Factory selecting the appropriate strategy for an item.
- `GildedRoseTest.php` – Unit tests using `PHPUnit`.

## Standards

The code adheres to:

- **PSR-4** (autoloader, namespaces)
- **TDD** (unit tests before implementation)
- **DDD** (separating business logic into specific strategies)

## Author

Krystian Szachogłuchowicz / contact@krystian.site

