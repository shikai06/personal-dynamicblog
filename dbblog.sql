-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2016 at 11:14 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbblog`
--
CREATE DATABASE IF NOT EXISTS `dbblog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbblog`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutbl`
--

CREATE TABLE IF NOT EXISTS `aboutbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Paragraph` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aboutbl`
--

INSERT INTO `aboutbl` (`ID`, `Title`, `Paragraph`) VALUES
(1, 'Mini-Biography', '<p>I am j<span style="color: rgb(0, 0, 0); font-family: Verdana, Arial; font-size: 11px;">ust a typical Anime &amp; KPOP otaku who is devoted to ikemen and bishies</span>, this things are my main source of happiness. Even though people around me doesn&#39;t like this kind of things that wouldn&#39;t stop me from taking interest on it. I don&rsquo;t want to compare it to a drug but once I started, I couldn&rsquo;t stop. This two are very addicting since they both have unique concepts in their own little way.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `ID_blogs` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `ID_category` int(11) NOT NULL,
  `DatePost` date NOT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Firstline` varchar(2000) NOT NULL,
  `Secondline` varchar(5000) NOT NULL,
  `ImageA` varchar(100) DEFAULT NULL,
  `ImageB` varchar(100) DEFAULT NULL,
  `ImageC` varchar(100) DEFAULT NULL,
  `ImageD` varchar(100) DEFAULT NULL,
  `ImageE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_blogs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID_blogs`, `Title`, `ID_category`, `DatePost`, `Image`, `Firstline`, `Secondline`, `ImageA`, `ImageB`, `ImageC`, `ImageD`, `ImageE`) VALUES
(12, 'Snack as a stress reliever', 4, '2015-12-23', 'capture-20160110-194400.jpg', 'After a looooooooooong week from working on our projects all we need is a snack to relieve our stress mind.', '<p><span style="line-height: 1.6em;">Even though our projects aren&#39;t finished yet, we will have a free day starting tomorrow because Christmas is near which means <strong>PARTY PARTY</strong> and <strong>LOTS OF FREE FOOD</strong>.</span></p>\r\n\r\n<p>So we decided just a second after going out of the school gate that we should go to the boulevard and have snacks. It&#39;s been a while since we&#39;ve gone out together, I guess you could say we&#39;re busy with &quot;STUDIES&quot;.</p>\r\n', '250117_910332519061855_3135231374926867303_n.jpg', '12391820_910332452395195_3903042575405368672_n.jpg', '10456467_910332392395201_2803803933912233782_n.jpg', '', ''),
(14, 'Skip Beat!', 6, '2016-01-04', 'cover.jpg', 'Kyouko Mogami lived solely for her childhood friend Shoutaro "Shou" Fuwa. She follows Shou to Tokyo. When his dream is realized, Kyouko overhears that he was using her as a maid. Shocked and enraged, Kyouko swears to take revenge by outdoing him in show business.', '<p>Skip beat! was the&nbsp;first ever manga i&#39;ve read, before I was only focus on <strong>ANIME&nbsp;</strong>which is shown on Animax a lot. It started when I watched the Anime adaption of this manga, I was still in my 6th grade then.</p>\r\n\r\n<p>The anime only had 25 episodes and because of this I started to read the manga until now. The latest release chapter today is chapter 231 and there are still coming and i&#39;ve been waiting for the updates <strong>LIKE PLEASE UPDATE ONE ALREADY!!</strong>. Even though it&#39;s like 231 chapters now the&nbsp;romance or relationship thingy isn&#39;t building up yet and there isn&#39;t any sign of when it&#39;s going to happen&nbsp;either. I mean how many chapters do i have to wait to see Kyouko be with someone. -_-&nbsp;</p>\r\n', '', '', '', '', ''),
(15, 'Lunch!', 4, '2015-12-28', '', 'We planned to eat our lunch here someday and we did it before but we were not complete.', '<p>This time the four of us went together to eat lunch as planned. It was hahahah....ahm...expensive...but thankfully we got extra money with us.</p>\r\n\r\n<p>It was fun having our drink instead in the pitcher it was in that tower thingy. Since we rarely eat in this kind of place guess this was our try.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1426433_912963505465423_3054685967151502472_n.jpg', '1977452_912963795465394_3979185102498207736_n.jpg', '10178115_912963758798731_1409049783195619075_n.jpg', '', ''),
(16, 'Noblesse', 6, '2016-01-07', 'noblesse-3473415.jpg', 'He awakens. For 820 years he has slumbered with no knowledge of man kinds advancements and scientific achievements. The land which he once knew has become an unfamiliar place with new technologies, attitudes, and lifestyles. ', '<p>This is a <strong>manhwa</strong>&nbsp;a Korean comic it&#39;s the same as &quot;manga&quot; in Japan. This manhwa has been in the popular page on the manga site and it caught my attention.</p>\r\n\r\n<p>This manhwa was different from the other manhwa i&#39;ve read before and i&#39;ve got a bit of the same feeling of this manhwa from the manga like Naruto, Bleach, One Piece and other popular manga.</p>\r\n\r\n<p>I really like the story of this manhwa and i&#39;ve been fangirling over the characters <span style="line-height: 20.8px;">and their special abilities,</span>&nbsp;especially the main character <span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; text-align: justify;"><em><b>Cadis Etrama Di Raizel</b>&nbsp;</em>his called&nbsp;<strong>Rai</strong></span>&nbsp;for short. He is a noble from Lukedonia who holds the special title of True Noblesse.&nbsp;This is still ongoing and i&#39;m waiting for more updates and what&#39;s going to happen.</p>\r\n', '16108646.jpg', 'Noblesse.full.1408472.jpg', '', '', ''),
(17, 'Tori Kelly - Hollow', 7, '2016-01-04', '', '', '<p>I don&#39;t wanna be the last man standing<br />\r\nI don&#39;t wanna be the lonely one<br />\r\nPicking petals when the party&#39;s over<br />\r\nNo, it&#39;s not any fun</p>\r\n\r\n<p>Cause I&#39;m fragile<br />\r\nAnd you know this</p>\r\n\r\n<p>So hold me<br />\r\nWrap me in love, fill up my cup<br />\r\nEmpty and only your love can fill up my cup<br />\r\nCause I&#39;m hollow<br />\r\nYeah, I&#39;m hollow, oh oh oh<br />\r\nCause I&#39;m hollow<br />\r\nYeah, I&#39;m hollow, oh oh oh</p>\r\n\r\n<p>I don&#39;t wanna be the first one folding<br />\r\nI don&#39;t wanna be the joker heart<br />\r\nTell me, darling, will you understand me?<br />\r\nAnd not show me your cards?</p>\r\n\r\n<p>Cause I&#39;m paper-thin<br />\r\nAnd you, you make me home again</p>\r\n\r\n<p>So hold me<br />\r\nWrap me in love, fill up my cup<br />\r\nEmpty and only your love can fill up my cup<br />\r\nCause I&#39;m hollow<br />\r\nYeah, I&#39;m hollow, oh oh oh<br />\r\nCause I&#39;m hollow<br />\r\nYeah, I&#39;m hollow, oh oh oh</p>\r\n\r\n<p>I confess (yeah), my weakness<br />\r\nTil you pick up the parts that are broken<br />\r\nPour out your perfection on me now</p>\r\n\r\n<p>And hold me<br />\r\nWrap me in love, fill up my cup<br />\r\nEmpty, cause only your love can fill up my cup<br />\r\nSo hold me<br />\r\nWrap me in love, fill up my cup<br />\r\nEmpty and only your love can fill up my cup<br />\r\nCause I&#39;m hollow<br />\r\nYeah, I&#39;m hollow, oh oh oh<br />\r\nCause I&#39;m hollow<br />\r\nYeah, I&#39;m hollow, oh oh oh<br />\r\nCause I&#39;m hollow (yeah)<br />\r\nYeah, I&#39;m hollow, oh oh oh (oh yeah)<br />\r\nCause I&#39;m hollow (I&#39;m hollow)<br />\r\nYeah, I&#39;m hollow, oh oh ooooooh</p>\r\n', '', '', '', '', ''),
(19, 'Tablo x Taeyang - Eyes, Nose, Lips', 7, '2016-01-04', '', 'Tablos rap english cover of Eyes, Nose, Lips by Taeyang. His rhyming lyrics never fails to amazed me.', '<p style="line-height: 20.8px;">you left me paralyzed, no cure, no rehab for me<br />\r\nfunny that you got the nerve to keep asking me<br />\r\nhow i&rsquo;ve been<br />\r\nyou&rsquo;re the victor in this pageantry<br />\r\nbut the only trophy you deserve, catastrophe<br />\r\ni&rsquo;d rather we be dead to each other<br />\r\nno eulogies said for each other<br />\r\nno &ldquo;rest in peace&rdquo;s<br />\r\nthe memories got my chest in pieces</p>\r\n\r\n<p style="line-height: 20.8px;">i&rsquo;m praying that your eyes are the first to go<br />\r\nthe way they looked when you smiled<br />\r\nthe way they opened and closed<br />\r\nand your nose, every single breath against my neck<br />\r\nand then your lips, every empty promise made and said<br />\r\nplease fade, fade to black<br />\r\nplease fade, fade to black<br />\r\nbut the nightmares come back</p>\r\n\r\n<p style="line-height: 20.8px;">because your eyes, nose, lips<br />\r\nevery look and every breath<br />\r\nevery kiss still got me dying<br />\r\nuh, still got me crying</p>\r\n\r\n<p style="line-height: 20.8px;">because your eyes, nose, lips<br />\r\nevery look and every breath<br />\r\nevery kiss still got me dying<br />\r\nuh, still got me crying</p>\r\n\r\n<p style="line-height: 20.8px;">forget a promenade, let&rsquo;s juggernaut,<br />\r\ndown memory lane, leave no thought alive<br />\r\nto the slaughter house, i&rsquo;m taking my pain<br />\r\ntime to sever my brain from my heart and soul<br />\r\nmy knees are burning hot, but God is cold</p>\r\n\r\n<p style="line-height: 20.8px;">I&rsquo;ve been told, one day you&rsquo;ll know<br />\r\ntoo much of heaven&rsquo;s a sin<br />\r\nafter the show, it&rsquo;s only hell that it brings<br />\r\nso take it slow and let time heal everything<br />\r\nthey say that time flies, but you keep breaking its wings<br />\r\nyou&rsquo;ll never fade, fade to black<br />\r\nplease fade, fade to black<br />\r\nbut the nightmares come back</p>\r\n\r\n<p style="line-height: 20.8px;">because your eyes, nose, lips<br />\r\nevery look and every breath<br />\r\nevery kiss still got me dying<br />\r\nuh, still got me crying</p>\r\n\r\n<p style="line-height: 20.8px;">because your eyes, nose, lips<br />\r\nevery look and every breath<br />\r\nevery kiss still got me dying<br />\r\nuh, still got me crying<br />\r\nyou wish me well<br />\r\nyou wish me well<br />\r\ni wish you hell</p>\r\n\r\n<p style="line-height: 20.8px;">i never want to look into your eyes again<br />\r\nno, i never want to hear you breathe again<br />\r\nlet me go, let me go<br />\r\nbaby, tell me that it&rsquo;s the end</p>\r\n\r\n<p style="line-height: 20.8px;">&nbsp;because your eyes, nose, lips<br />\r\nevery look and every breath<br />\r\nevery kiss still got me dying<br />\r\nuh, still got me crying<br />\r\nthe tears drive me out of my mind</p>\r\n\r\n<p style="line-height: 20.8px;">because your eyes, nose, lips<br />\r\nevery look and every breath<br />\r\nyour &nbsp;kiss still got me dying<br />\r\nuh, still got me crying<br />\r\ncrying, crying<br />\r\nfade out</p>\r\n', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID_category` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_category`, `Name`) VALUES
(4, 'Food'),
(6, 'Manga'),
(7, 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'jink', 'po');

-- --------------------------------------------------------

--
-- Table structure for table `quotestbl`
--

CREATE TABLE IF NOT EXISTS `quotestbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Quotes` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quotestbl`
--

INSERT INTO `quotestbl` (`ID`, `Quotes`) VALUES
(1, '<p>Happiness is not achieved by the conscious pursuit of happiness; it is generally by the product of other activities. -<strong>Aldous Huxley</strong></p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
