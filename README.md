# Boiler-Plates-Codeigniter-3.x-Login
Boiler Plate for Login System in Codeigniter 3.x 
=================================================

Create a database of any name in your MySQL using phpmyadmin or terminal
Create table users 


Table structure for table `users`

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `status` enum('pending','approved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

Insert Sample Data in it

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `status`) VALUES
(1, 'john', '56f5950b728849d0b97c1bccf1691c090ab6734c', 'John Vick', 'approved');

# Step - 1

Clone the zip file in your machine. Extract the files and place the boilerplate folder in your localhost root

# Step - 2

Go to application->config->database.php
Change the database name and user credentials as per your local machine

# Step - 3
Browse via http://localhost/Boiler-Plates-Codeigniter-3.x-Login/Login

if you want the login controller to load automatically, set it as default_controller in routes

For Testing

Username: john
Password: john

========================================

# Security

For security I am using Codeigniter's Security Class. 
