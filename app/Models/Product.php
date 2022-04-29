<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Product extends Model
    {
        protected $table = 'products';

        protected $fillable = ['name', 'price', 'image_front', 'image_back', 'new', 'user_id'];
    
        public function user() {
            return $this->belongsTo(User::class);
        }
        
        public static function validate(array $data) {
            $errors = [];
            if (! $data['name']) {
                $errors['name'] = 'Name is required.';
            }

            if (strlen($data['price']) < 2 || strlen($data['price']) >= 3) {
                $errors['price'] = 'Price from 10 to less than 100.';
            }
            
            return $errors;
        }

        public static function validateCreate(array $data) {
            $errors = [];

            $targetDir = "uploads/";
            $targetFile1 = $targetDir . basename($_FILES["image_front"]['name']);
            $targetFile2 = $targetDir . basename($_FILES["image_back"]["name"]);

            $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($targetFile2, PATHINFO_EXTENSION));
            $extensions = array("jpeg", "jpg", "png", "gif");

            // Allow certain file formats
            if (! in_array($imageFileType1, $extensions) || ! in_array($imageFileType2, $extensions)) {
                $errors['image_front'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
                $errors['image_back'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
            } 

            // Check if file already exists
            if (file_exists($targetFile1) || file_exists($targetFile2)) {
                $errors['image_front'] = 'Sorry, file already exists.' ;
                $errors['image_back'] = 'Sorry, file already exists.' ;
            } 
    
            return $errors;
        }

        public static function validateUpdate(array $data) {
            $errors = [];

            $targetDir = "uploads/";
            $targetFile1 = $targetDir . basename($_FILES["image_front"]['name']);
            $targetFile2 = $targetDir . basename($_FILES["image_back"]["name"]);

            $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($targetFile2, PATHINFO_EXTENSION));
            $extensions = array("jpeg", "jpg", "png", "gif");

            if (! in_array($imageFileType1, $extensions) || ! in_array($imageFileType2, $extensions)) {
                $errors['image_front'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
                $errors['image_back'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
            } 
            
            if(empty($_FILES['image_front']['name']) && (empty($_FILES['image_back']['name']))){
                $errors = [];
            } 
            
            return $errors;
        }
    }
