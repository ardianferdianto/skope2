CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

CREATE TABLE `ebooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` int(11) DEFAULT NULL,
  `matapelajaran` int(11) DEFAULT NULL,
  `author` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `produksi` varchar(200) DEFAULT NULL,
  `sutradara` varchar(200) DEFAULT NULL,
  `jumlahhalaman` int(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) DEFAULT NULL,
  `file` varchar(100) NOT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;



CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` int(11) DEFAULT NULL,
  `matapelajaran` int(11) DEFAULT NULL,
  `author` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `produksi` varchar(200) DEFAULT NULL,
  `sutradara` varchar(200) DEFAULT NULL,
  `jumlahhalaman` int(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) NOT NULL,
  `file` varchar(100) NOT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;


