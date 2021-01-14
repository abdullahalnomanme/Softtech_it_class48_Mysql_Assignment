-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 06:24 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registerlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pagetitle` varchar(255) NOT NULL,
  `pagecontent` text NOT NULL,
  `url` text NOT NULL,
  `pageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagetitle`, `pagecontent`, `url`, `pageid`) VALUES
(43, 'Home', '<p>This template uses a H1 tags for the titles of each page, (or sub titles if you prefer) and paragraphs to separate the content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est mi, consequat eu viverra vel, mattis quis risus. Sed iaculis nunc a enim malesuada vel ornare ante euismod. Donec euismod, enim malesuada gravida sollicitudin, mauris ante commodo massa, a egestas leo erat at lorem. Aenean justo sapien, porta tempor placerat in, iaculis id leo. Quisque non erat ut nibh semper feugiat hendrerit sed neque. Vestibulum eget lectus a erat accumsan ornare non sed nulla. Vestibulum vitae turpis vitae dolor hendrerit pretium quis in odio. Praesent scelerisque, purus ut venenatis elementum, nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est mi, consequat eu viverra vel, mattis quis risus. Sed iaculis nunc a enim malesuada vel ornare ante euismod. Donec euismod, enim malesuada gravida sollicitudin, mauris ante commodo massa, a egestas leo erat at lorem. Aenean justo sapien, porta tempor placerat in, iaculis id leo. Quisque non erat ut nibh semper feugiat hendrerit sed neque. Vestibulum eget lectus a erat accumsan ornare non sed nulla. Vestibulum vitae turpis vitae dolor hendrerit pretium quis in odio. Praesent scelerisque, purus ut venenatis elementum, nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh.</p>', '?page=5427', 5427),
(44, 'About', '<p><strong>This template </strong>uses a H1 tags for the titles of each page, (or sub titles if you prefer) and paragraphs to separate the content. Loremipsum dolor sit amet, consecteturadipiscingelit. Maecenasest mi, consequateuviverravel, mattisquisrisus. Sediaculisnunc a enimmalesuadavelornare ante euismod. Doneceuismod, enimmalesuadagravidasollicitudin, mauris ante commodomassa, a egestasleoerat at lorem. Aeneanjustosapien, portatemporplacerat in, iaculis id leo. Quisque non eratutnibhsemperfeugiathendreritsedneque. Vestibulumegetlectus a erataccumsanornare non sednulla. Vestibulum vitae turpis vitae dolor hendreritpretiumquis in odio. Praesentscelerisque, purusutvenenatis</p>\r\n<p><strong>elementum,</strong> nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est mi,</p>\r\n<p><strong>consequat eu</strong> viverra vel, mattis quis risus. Sed iaculis nunc a enim malesuada vel ornare ante euismod. Donec euismod, enim malesuada gravida sollicitudin, mauris ante commodo massa, a egestas leo erat at lorem. Aenean justo sapien, porta tempor placerat in, iaculis id leo. Quisque non erat ut nibh semper feugiat hendrerit sed neque. Vestibulum eget lectus a erat accumsan ornare non sed nulla. Vestibulum vitae turpis vitae dolor hendrerit pretium quis in odio. Praesent scelerisque, purus ut venenatis elementum, nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh.</p>', '?page=4897', 4897),
(45, 'Services', '<p>This template uses a H1 tags for the titles of each page, (or sub titles if you prefer) and paragraphs to separate the content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est mi, consequat eu viverra vel, mattis quis risus. Sed iaculis nunc a enim malesuada vel ornare ante euismod. Donec euismod, enim malesuada gravida sollicitudin, mauris ante commodo massa, a egestas leo erat at lorem. Aenean justo sapien, porta tempor placerat in, iaculis id leo. Quisque non erat ut nibh semper feugiat hendrerit sed neque. Vestibulum eget lectus a erat accumsan ornare non sed nulla. Vestibulum vitae turpis vitae dolor hendrerit pretium quis in odio. Praesent scelerisque, purus ut venenatis elementum, nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est mi, consequat eu viverra vel, mattis quis risus. Sed iaculis nunc a enim malesuada vel ornare ante euismod. Donec euismod, enim malesuada gravida sollicitudin, mauris ante commodo massa, a egestas leo erat at lorem. Aenean justo sapien, porta tempor placerat in, iaculis id leo. Quisque non erat ut nibh semper feugiat hendrerit sed neque. Vestibulum eget lectus a erat accumsan ornare non sed nulla. Vestibulum vitae turpis vitae dolor hendrerit pretium quis in odio. Praesent scelerisque, purus ut venenatis elementum, nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh.</p>', '?page=7710', 7710),
(46, 'Products', '<p>This template uses a H1 tags for the titles of each page, (or sub titles if you prefer) and paragraphs to separate the content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est mi, consequat eu viverra vel, mattis quis risus. Sed iaculis nunc a enim malesuada vel ornare ante euismod. Donec euismod, enim malesuada gravida sollicitudin, mauris ante commodo massa, a egestas leo erat at lorem. Aenean justo sapien, porta tempor placerat in, iaculis id leo. Quisque non erat ut nibh semper feugiat hendrerit sed neque. Vestibulum eget lectus a erat accumsan ornare non sed nulla. Vestibulum vitae turpis vitae dolor hendrerit pretium quis in odio. Praesent scelerisque, purus ut venenatis elementum, nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est mi, consequat eu viverra vel, mattis quis risus. Sed iaculis nunc a enim malesuada vel ornare ante euismod. Donec euismod, enim malesuada gravida sollicitudin, mauris ante commodo massa, a egestas leo erat at lorem. Aenean justo sapien, porta tempor placerat in, iaculis id leo. Quisque non erat ut nibh semper feugiat hendrerit sed neque. Vestibulum eget lectus a erat accumsan ornare non sed nulla. Vestibulum vitae turpis vitae dolor hendrerit pretium quis in odio. Praesent scelerisque, purus ut venenatis elementum, nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh.</p>', '?page=2814', 2814),
(47, 'Contact', '<p>This template uses a H1 tags for the titles of each page, (or sub titles if you prefer) and paragraphs to separate the content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est mi, consequat eu viverra vel, mattis quis risus. Sed iaculis nunc a enim malesuada vel ornare ante euismod. Donec euismod, enim malesuada gravida sollicitudin, mauris ante commodo massa, a egestas leo erat at lorem. Aenean justo sapien, porta tempor placerat in, iaculis id leo. Quisque non erat ut nibh semper feugiat hendrerit sed neque. Vestibulum eget lectus a erat accumsan ornare non sed nulla. Vestibulum vitae turpis vitae dolor hendrerit pretium quis in odio. Praesent scelerisque, purus ut venenatis elementum, nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est mi, consequat eu viverra vel, mattis quis risus. Sed iaculis nunc a enim malesuada vel ornare ante euismod. Donec euismod, enim malesuada gravida sollicitudin, mauris ante commodo massa, a egestas leo erat at lorem. Aenean justo sapien, porta tempor placerat in, iaculis id leo. Quisque non erat ut nibh semper feugiat hendrerit sed neque. Vestibulum eget lectus a erat accumsan ornare non sed nulla. Vestibulum vitae turpis vitae dolor hendrerit pretium quis in odio. Praesent scelerisque, purus ut venenatis elementum, nisl felis ultrices ante, vitae rhoncus lacus massa ut enim. In sed mi arcu. Quisque ultricies pellentesque velit, feugiat viverra est pharetra ac. Quisque id risus eget mi gravida vehicula eget in neque. Integer consectetur, mauris a venenatis dictum, nibh urna tincidunt purus, eu rhoncus ligula erat ac eros. Integer vehicula, arcu a adipiscing sollicitudin, neque erat mollis risus, eget porttitor magna ligula ac justo. Nullam lobortis tortor vitae erat commodo sodales eget non velit. Duis erat tellus, cursus eu egestas id, auctor sit amet lectus. Suspendisse pellentesque ante a leo dignissim at dignissim nibh consectetur. Vestibulum feugiat mattis velit eu luctus. Aliquam nulla leo, ullamcorper feugiat posuere vitae, fringilla eu nibh.</p>', '?page=7451', 7451);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(26, 'Abdullah', 'Al Noman', 'abd01nomans@gamil.com', '55b505c6c8656e7c4524a41fe44a9c5d'),
(27, 'cox', 'bazar', 'abd@bdb.com', '30d036361d0789f44ca7d7c1513b7ceb'),
(28, 'noman', 'ami', 'noman@noman.com', '7a65bf143031a9e35bf5aca7ae24c01f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
