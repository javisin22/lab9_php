
<?php
class Book {
    // Properties with appropriate visibility and data types
    public string $title;
    public string $author;
    public int $rating;
    public float $price;
    public int $quantity;

    // Constructor method
    public function __construct(string $title, string $author, int $rating, float $price, int $quantity) {
        $this->title = $title;
        $this->author = $author;
        $this->rating = $rating;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function checkInStock() {
        $inStock = '';

        if ($this->quantity == 0) {
            $inStock = 'Out of Stock';
        } else {
            $inStock = 'In Stock';
        }

        return $inStock;
    }
    
    public function buy(){
        $this->quantity = $this->quantity - 1;
        
        return $this->quantity;
    }

    // Method to display five stars with the appropriate amount of stars filled in based on the rating
    public function showRatingStars() {
        // Variable to store the HTML markup
        $starsHTML = '';
        
        // Keep track of the remaining rating
        $remainingRating = $this->rating;
        
        // Loop 5 times to create 5 stars
        for ($i = 0; $i < 5; $i++) {
            if ($remainingRating > 0) {
                // Add a filled star
                $starsHTML .= '<span class="fa fa-star checked"></span>';
                // Reduce the remaining rating
                $remainingRating--;
            } else {
                // Add an unfilled star
                $starsHTML .= '<span class="fa fa-star"></span>';
            }
        }
        
        return $starsHTML;
    }
}

// Create instances of the Book class with the specified values
$hungerGames = new Book(
    'The Hunger Games',
    'Suzanne Collins',
    5,
    14.99,
    1
);

$catchingFire = new Book(
    'Catching Fire',
    'Suzanne Collins',
    4,
    13.99,
    3
);

$mockingjay = new Book(
    'Mockingjay',
    'Suzanne Collins',
    3,
    10.99,
    5
);
?>

