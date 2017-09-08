-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 07:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `SNO` int(100) NOT NULL,
  `CATEGORY` varchar(100) NOT NULL,
  `SUBCATEGORY` varchar(100) NOT NULL,
  `DESCP` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`SNO`, `CATEGORY`, `SUBCATEGORY`, `DESCP`) VALUES
(1, 'AI Research Projects', 'Automated Planning & Control', 'Automated Planning and Control study the computational process of generating a plan, a course of action for an agent to execute towards achieving its goal or objective. Historically, planning and control communities have respectively focused on discrete and continuous state/action spaces, though this difference is reducing slowly. The planning group at the University of Washington has been active in the development of planning algorithms and representations since 1990. This historical website lists the earlier projects, publications, and download links. '),
(2, 'AI Research Projects', 'Robotics', 'Human-robot interactionRobotics researchers at UW CSE are engaged in ground-breaking work in mechanism design, sensors, computer vision, robot learning, Bayesian state estimation, control theory, numerical optimization, biomechanics, neural control of movement, computational neuroscience, brain-machine interfaces, natural language instruction, and physics-based animation. We are currently working to define large-scale joint initiatives that will enable us to leverage our multi-disciplinary expertise to attack the most challenging problems in field.\r\n'),
(3, 'AI Research Projects', 'Brain-Computer Interfaces & Computational Neuroscience', 'In 2006, our group became one of the first to demonstrate the control of a humanoid robot using a non-invasive brain computer interface (BCI). The system consists of a robot, an electrode cap for sensing brainwaves, and a graphical user interface for controlling the robot remotely. Our original research demonstrated that the BCI can be used to command a HOAP-2 humanoid robot to select and fetch desired objects from remote locations. We have more recently proposed a framework for adaptive hierarchical brain-computer interfacing that allows the user to teach a robot new behaviors on-the-fly. '),
(4, 'AI Research Projects', 'Machine Learning', 'UW is one of the world''s top centers of research in machine learning. We are active in most major areas of ML and in a variety of applications like natural language processing, vision, computational biology, the Web, and social networks. Check out the links on the left to find out who''s who and what''s happening in ML at UW.   '),
(5, 'AI Research Projects', 'Natural Language Processing', 'Studies a range of core NLP problems (such as parsing, information extraction, and machine translation) as well as emerging challenges (such as modeling and processing social media text, analyzing linguistic style, and jointly modeling language and vision).'),
(6, 'AI Research Projects', 'Computational Biology', 'Developing machine learning algorithms that will enable the use of an individual’s comprehensive biological information to predict or diagnose diseases, and to find or develop the best therapy for that individual.The aim of our research is to resolve this challenge by developing machine learning algorithms that jointly model sophisticated interactions among many variables such as genetic variation, genes, pathways and disease, and robustly learn from vast amounts of data in order to better understand and treat disease. An approach that can robustly infer the pathways that can define disease processes will dramatically improve our understanding of diseases and advance personalized medicine in its treatment. We aim to realize this goal by using modern, advanced machine learning techniques.'),
(7, 'COMPUTER SIMULATION', 'Web cache simulation', 'A popular idea in Internet research is a caching web server, a program that will preload a cache with web pages that have been accessed in the recent past. This way, when you wish to access the page you do so directly from you machine and do not need to go across the network. Build a simulation of this to see if it improves (1) the users perceived performance and (2) the network performance.'),
(8, 'COMPUTER SIMULATION', 'Stock price / performance system', 'Quite a bit of time and effort is spent estimating whether the price of a stock will go up or down, and when it will change from going up to going down, or vice versa. The are a number of resources on the net with historical stock price information. Use some data as input to a simulation model to predict the future price of a stock.'),
(9, 'COMPUTER SIMULATION', 'Ambulance simulation system', 'A continuing debate is where to keep emergency vehicles such as ambulances. Build a simulation system and test whether it is best to keep ambulances (1) at hospitals, (2) fire stations, (3) close to the interstate.\r\n'),
(10, 'COMPUTER SIMULATION', 'A tax simulation system', ' Another continuing debate is whether to increase taxes. By increasing taxes we mean increasing the tax rate. The question is whether this will raise revenue or decrease revenue (the actual number of tax dollars collected). There are a number of possibilities (1) increasing business income tax vs. businesses moving, (2) increasing personal income tax vs. people moving, (3) creating an internet sales tax. In each of these cases your model probably needs to consider the proportion of local to national businesses and the proportion of people willing to move locally or move nationally for a job.\r\n'),
(11, 'COMPUTER SIMULATION', 'Airline system simulation', 'Build yourself a small airline, run simulations to minimize the cost of operations and to maximize revenue. To maximize revenue you want to fill as many seats on an airplane as possible. To minimize expenses airplanes should fly to the service center(s) loaded with passengers.'),
(12, 'COMPUTER SIMULATION', 'Simulate a busy restaurant''s seating policy', 'Assume that the restaurant does not take reservations (although adding reservations to the simulation might be interesting). When customers arrive, they check in at the main podium and give their name, number of people in the party, and smoking preference. Some will go to the bar and may or may not choose to eat there instead of waiting for a table. Others will simply sit in benches, waiting for their party to be called. When a party is seated, they should have some random eating time (or you might want to simulate the eating process in more detail -- ordering, salad, entree, dessert, etc.) before leaving. Tables and seats in the bar would be resources here. What if a party of 20 shows up? Can some tables (resources) be pushed together to accommodate large parties?'),
(13, 'DATABASE SYSTEM', 'INVENTORY CONTROL MANAGEMENT DATABASE PROJECT', 'Design goals: maintain a proper variety of required items, increase inventory turnover, reduce and maintain optimize inventory and safety stock levels, obtain low raw material prices, reduce storage cost, reduce insurance cost, reduce taxes'),
(14, 'DATABASE SYSTEM', 'STUDENT RECORD KEEPING SYSTEM DATABASE PROJECT', 'Design goals: a student file that contains the information about student, a stream file, a marks file, a fee file, concession/scholarship etc. You can check simple version of this project  Student Database Management System in C++'),
(15, 'DATABASE SYSTEM', 'ONLINE RETAIL APPLICATION DATABASE PROJECT', 'A customer can register to purchase an item. The customer will provide bank account number and bank name (can have multiple account number). After registration, each customer will have a unique customerid, userid and password. A customer can purchase one or more item in different quantities. The items can of different classes based on their prices. Based on the quantity, the price of the item and discount (if any) on the purchased items, the bill will be generated. A bank account is required to settle the bill. The items can be ordered to one or more suppliers'),
(16, 'DATABASE SYSTEM', 'COLLEGE DATABASE DATABASE PROJECT', 'A college contains many departments. Each department can offer any number of courses. Many instructors can work in a department, but an instructor can work only in one department. For each department, there is a head, and an instructor can be head of only one department. Each instructor can take any number of courses, and a course can be taken by only one instructor. A student can enroll for any number of courses and each course can have any number of students.'),
(17, 'DATABASE SYSTEM', 'RAILWAY SYSTEM DATABASE PROJECT', 'A railway system, which needs to model the following:\r\n\r\n\r\n Stations\r\n Tracks, connecting stations. You can assume for simplicity that only one track exists between any two stations. All the tracks put together to form a graph.\r\n Trains, with an ID and a name\r\n Train schedules recording what time a train passes through each station on its route. \r\nYou can assume for simplicity that each train reaches its destination on the same day and that every train runs every day. Also for simplicity, assume that for each train, for each station on its route,  you store\r\n\r\n\r\n Time in, \r\n Timeout (same as time in if it does not stop)\r\n A sequence number so the stations in the route of a train can be ordered by sequence number.\r\n Passenger booking consisting of train, date, from-station, to station, coach, seat and passenger name.\r\n'),
(18, 'DATABASE SYSTEM', 'HOSPITAL MANAGEMENT SYSTEM DATABASE PROJECT', 'A patient will have unique Patient ID.  Full description about the patient about personal detail and phone number, and then Disease and what treatment is going on. The doctor will handle patients, One doctor can Treat more than 1 patient. Also, each doctor will have unique ID. Doctor and Patients will be related. Patients can be admitted to hospital. So different room numbers will be there, also rooms for Operation Theaters and ICU.  There are some nurses, and ward boys for the maintenance of hospital and for patient take care.  Based upon the number of days and treatment bill will be generated.\r\n'),
(19, 'Embedded Systems', 'Password Based Door Lock System using 8051 Microcontroller', 'This system demonstrates a password based door lock system wherein once the correct code or password is entered, the door is opened and the concerned person is allowed access to the secured area. After some time, the door would be closed. Read this post completely to get more information.'),
(20, 'Embedded Systems', 'Human Detection Robot', 'Here is an IR Sensor based human detection robot designed using 8051 microcontroller. It is mainly used to save the people in accidents and explosions, to find the enemies, etc.\r\n'),
(21, 'Embedded Systems', 'GSM Controlled Robot using Microcontroller', 'This is an SMS controlled robot designed using 8051 Microcontroller and is used to control the robot directions like forward, backward, left and right by sending SMS from the mobile.'),
(22, 'Embedded Systems', 'Password based Circuit Breaker', 'This is an SMS controlled robot designed using 8051 Microcontroller and is used to control the robot directions like forward, backward, left and right by sending SMS from the mobile.'),
(23, 'Embedded Systems', 'Fingerprint based Biometric Attendance System', 'This biometric attendance system circuit is designed using AVR Microcontroller. It helps to take the attendance in educational institutions, industries, etc.\r\n'),
(24, 'Embedded Systems', 'Digital Temperature Sensor', 'The main principle of this circuit is to display the digital temperature value. These are mainly used in environmental applications.'),
(25, 'Networking Projects', 'Network Desktop Manager Java Project', 'Network is to connect two or more computers together with the ability to communicate with each other. Networking is to link two or more computing devices together for the purpose of sharing data. It provides design, programming, development and operational support for LANs, WANs and other networks.'),
(26, 'Networking Projects', 'Computer Network Project', 'The purpose of this Computer Network-Project is to implement a simplified web system. The system consists of three programs, the DNS server program, the Web server program, and the client program. The client program consists of two parts, a browser simulator and a client program for system testing.'),
(27, 'Networking Projects', 'IP Recovery Using Multiple Routing Configurations Networking Project Report', 'Introduction to IP Recovery Using Multiple Routing Configurations Networking Project: With the invention of internet the communication system is being developed to a great extent. Presently slow junction of routing protocols for a network infrastructure is a great problem faced by numerous people, so to recuperate the failures of IP networks.'),
(28, 'Networking Projects', 'Network Administration Tool Final Year Project Report\r\n', 'Introduction to Network Administration Tool Project: Administrators have the most important tasks, and this is why to make their jobs easy, network administrative tool has been introduced, which is a software package. It is with the help of this tool, the administrator will be able to gain a full control of the software.'),
(29, 'Networking Projects', 'CSE Project for B.tech on Network Administrator Tool with Project Report\r\n', 'Introduction to Network Administrator Tool with Project: The network administrator tool has been developed in order to provide remote service to all the clients of the administrator that belong to the same network. This tool has the ability to act as a network administrator to all the clients and can provide services remotely like remote log'),
(30, 'Networking Projects', 'CSE Mini Networking Project on Prevention of Congestion Collapse\r\n', 'Introduction to Networking Project on Prevention of Congestion Collapse: One of the most important things that is to be kept in mind while dealing with the virtual world is that, every service, protocol and algorithm that is introduced in the internet must essentially scale well. This is usually termed as a scalability argument.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`SNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `SNO` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
