<?php
// // Start or resume the session
session_start();

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Check if session variable is not set
// if (!isset($_SESSION['user'])) {
//   // Redirect to the login page
//   header("Location: login.html");
//   exit(); // Ensure that script execution stops after redirection
// }



$servername = "localhost";
$username = "root";
$password = "";
$database = "rinda_ams";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


$api_key = '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';
$school_name = 'Rinda Academy';
$school_address = '9022 Suspendisse Rd. High Wycombe 9022 Suspendisse Rd. High Wycombe';
$school_email = 'gha@stradafrica.com.ng';
$_SESSION['user'] = '1';

// SSS 3

// Agricultural Science
// Air Conditioning And Refrigeration
// Animal Husbandary
// Arabic
// Auto body repair And Spray painting
// Auto Electrical Works
// Auto Mechanical Works
// Auto Mechanics
// Automobile Parts Merchandising
// Autopart Merchandizing
// Basic Electricity
// Basic Electronics
// Biology
// Block laying, Brick laying & Concrete Works
// Book Keeping
// Building Construction
// Carpentary And Joinery
// Catering and Craft Practice
// Chemistry
// Christian Religious Studies
// Civic Education (Senior)
// Clothing & Textiles
// Commerce
// Computer & IT
// Cosmetology
// Data Processing
// Dyeing And Bleaching
// Economics
// Electrical Installation And Maintenance Work
// English Language
// Financial Accounting
// Fisheries
// Foods & Nutrition
// French Language
// Furniture Making
// Further Mathematics
// Garment Making
// General Mathematics
// Geography
// Government
// GSM Maintenance And Repairs
// Health Education
// History
// Home Management
// Igbo Language
// Insurance
// Islamic Studies
// Keyboarding
// Leather Goods
// Literature-in-English
// Machine Woodworking
// Marketing
// Metal Work
// Mining
// Music
// Office Practice
// Painting And Decoration
// Photography
// Physical Education
// Physics
// Plumbing And Pipe Fitting
// Printing Craft Practice
// Radio Television and Electrical Work
// Radio Television And Repairs
// Salesmanship 
// Store Keeping
// Store Management
// Technical Drawings
// Textile trade
// Tie And Dye Craft
// Tourism
// Upholstery
// Visual Art
// Welding & Fabrication
// Wood-Work
// Yoruba Language











// SSS 2

// Agricultural Science
// Air Conditioning And Refrigeration
// Animal Husbandary
// Arabic
// Auto body repair And Spray painting
// Auto Electrical Works
// Auto Mechanical Works
// Auto Mechanics
// Automobile Parts Merchandising
// Autopart Merchandizing
// Basic Electricity
// Basic Electronics
// Biology
// Block laying, Brick laying & Concrete Works
// Book Keeping
// Building Construction
// Carpentary And Joinery
// Catering and Craft Practice
// Chemistry
// Christian Religious Studies
// Civic Education (Senior)
// Clothing & Textiles
// Commerce
// Computer & IT
// Cosmetology
// Data Processing
// Dyeing And Bleaching
// Economics
// Electrical Installation And Maintenance Work
// English Language
// Financial Accounting
// Fisheries
// Foods & Nutrition
// French Language
// Furniture Making
// Further Mathematics
// Garment Making
// General Mathematics
// Geography
// Government
// GSM Maintenance And Repairs
// Health Education
// History
// Home Management
// Igbo Language
// Insurance
// Islamic Studies
// Keyboarding
// Leather Goods
// Literature-in-English
// Machine Woodworking
// Marketing
// Metal Work
// Mining
// Music
// Office Practice
// Painting And Decoration
// Photography
// Physical Education
// Physics
// Plumbing And Pipe Fitting
// Printing Craft Practice
// Radio Television and Electrical Work
// Radio Television And Repairs
// Salesmanship 
// Store Keeping
// Store Management
// Technical Drawings
// Textile trade
// Tie And Dye Craft
// Tourism
// Upholstery
// Visual Art
// Welding & Fabrication
// Wood-Work
// Yoruba Language













// SSS 1

// Agricultural Science
// Air Conditioning And Refrigeration
// Animal Husbandary
// Arabic
// Auto body repair And Spray painting
// Auto Electrical Works
// Auto Mechanical Works
// Auto Mechanics
// Automobile Parts Merchandising
// Autopart Merchandizing
// Basic Electricity
// Basic Electronics
// Biology
// Block laying, Brick laying & Concrete Works
// Book Keeping
// Building Construction
// Carpentary And Joinery
// Catering and Craft Practice
// Chemistry
// Christian Religious Studies
// Civic Education (Senior)
// Clothing & Textiles
// Commerce
// Computer & IT
// Cosmetology
// Data Processing
// Dyeing And Bleaching
// Economics
// Electrical Installation And Maintenance Work
// English Language
// Financial Accounting
// Fisheries
// Foods & Nutrition
// French Language
// Furniture Making
// Further Mathematics
// Garment Making
// General Mathematics
// Geography
// Government
// GSM Maintenance And Repairs
// Health Education
// History
// Home Management
// Igbo Language
// Insurance
// Islamic Studies
// Keyboarding
// Leather Goods
// Literature-in-English
// Machine Woodworking
// Marketing
// Metal Work
// Mining
// Music
// Office Practice
// Painting And Decoration
// Photography
// Physical Education
// Physics
// Plumbing And Pipe Fitting
// Printing Craft Practice
// Radio Television and Electrical Work
// Radio Television And Repairs
// Salesmanship 
// Store Keeping
// Store Management
// Technical Drawings
// Textile trade
// Tie And Dye Craft
// Tourism
// Upholstery
// Visual Art
// Welding & Fabrication
// Wood-Work
// Yoruba Language











// jss 3

// Agricultural Science
// Air Conditioning And Refrigeration
// Animal Husbandary
// Arabic
// Auto body repair And Spray painting
// Auto Electrical Works
// Auto Mechanical Works
// Auto Mechanics
// Automobile Parts Merchandising
// Autopart Merchandizing
// Basic Electricity
// Basic Electronics
// Biology
// Block laying, Brick laying & Concrete Works
// Book Keeping
// Building Construction
// Carpentary And Joinery
// Catering and Craft Practice
// Chemistry
// Christian Religious Studies
// Civic Education (Senior)
// Clothing & Textiles
// Commerce
// Computer & IT
// Cosmetology
// Data Processing
// Dyeing And Bleaching
// Economics
// Electrical Installation And Maintenance Work
// English Language
// Financial Accounting
// Fisheries
// Foods & Nutrition
// French Language
// Furniture Making
// Further Mathematics
// Garment Making
// General Mathematics
// Geography
// Government
// GSM Maintenance And Repairs
// Health Education
// History
// Home Management
// Igbo Language
// Insurance
// Islamic Studies
// Keyboarding
// Leather Goods
// Literature-in-English
// Machine Woodworking
// Marketing
// Metal Work
// Mining
// Music
// Office Practice
// Painting And Decoration
// Photography
// Physical Education
// Physics
// Plumbing And Pipe Fitting
// Printing Craft Practice
// Radio Television and Electrical Work
// Radio Television And Repairs
// Salesmanship 
// Store Keeping
// Store Management
// Technical Drawings
// Textile trade
// Tie And Dye Craft
// Tourism
// Upholstery
// Visual Art
// Welding & Fabrication
// Wood-Work
// Yoruba Language








// jss2
// Agricultural Science
// Air Conditioning And Refrigeration
// Animal Husbandary
// Arabic
// Auto body repair And Spray painting
// Auto Electrical Works
// Auto Mechanical Works
// Auto Mechanics
// Automobile Parts Merchandising
// Autopart Merchandizing
// Basic Electricity
// Basic Electronics
// Biology
// Block laying, Brick laying & Concrete Works
// Book Keeping
// Building Construction
// Carpentary And Joinery
// Catering and Craft Practice
// Chemistry
// Christian Religious Studies
// Civic Education (Senior)
// Clothing & Textiles
// Commerce
// Computer & IT
// Cosmetology
// Data Processing
// Dyeing And Bleaching
// Economics
// Electrical Installation And Maintenance Work
// English Language
// Financial Accounting
// Fisheries
// Foods & Nutrition
// French Language
// Furniture Making
// Further Mathematics
// Garment Making
// General Mathematics
// Geography
// Government
// GSM Maintenance And Repairs
// Health Education
// History
// Home Management
// Igbo Language
// Insurance
// Islamic Studies
// Keyboarding
// Leather Goods
// Literature-in-English
// Machine Woodworking
// Marketing
// Metal Work
// Mining
// Music
// Office Practice
// Painting And Decoration
// Photography
// Physical Education
// Physics
// Plumbing And Pipe Fitting
// Printing Craft Practice
// Radio Television and Electrical Work
// Radio Television And Repairs
// Salesmanship 
// Store Keeping
// Store Management
// Technical Drawings
// Textile trade
// Tie And Dye Craft
// Tourism
// Upholstery
// Visual Art
// Welding & Fabrication
// Wood-Work
// Yoruba Language



// jss 1
// Agricultural Science
// Air Conditioning And Refrigeration
// Animal Husbandary
// Arabic
// Auto body repair And Spray painting
// Auto Electrical Works
// Auto Mechanical Works
// Auto Mechanics
// Automobile Parts Merchandising
// Autopart Merchandizing
// Basic Electricity
// Basic Electronics
// Biology
// Block laying, Brick laying & Concrete Works
// Book Keeping
// Building Construction
// Carpentary And Joinery
// Catering and Craft Practice
// Chemistry
// Christian Religious Studies
// Civic Education (Senior)
// Clothing & Textiles 
// Commerce
// Computer & IT
// Cosmetology
// Data Processing
// Dyeing And Bleaching
// Economics
// Electrical Installation And Maintenance Work
// English Language
// Financial Accounting
// Fisheries
// Foods & Nutrition
// French Language
// Furniture Making
// Further Mathematics
// Garment Making
// General Mathematics
// Geography
// Government
// GSM Maintenance And Repairs
// Health Education
// History
// Home Management
// Igbo Language
// Insurance
// Islamic Studies
// Keyboarding
// Leather Goods
// Literature-in-English
// Machine Woodworking
// Marketing
// Metal Work
// Mining
// Music
// Office Practice
// Painting And Decoration
// Photography
// Physical Education
// Physics
// Plumbing And Pipe Fitting
// Printing Craft Practice
// Radio Television and Electrical Work
// Radio Television And Repairs
// Salesmanship 
// Store Keeping
// Store Management
// Technical Drawings
// Textile trade
// Tie And Dye Craft
// Tourism
// Upholstery
// Visual Art
// Welding & Fabrication
// Wood-Work
// Yoruba Language